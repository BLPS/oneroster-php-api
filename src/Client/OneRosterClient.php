<?php

namespace Kroscom\OneRosterAPI\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class OneRosterClient
{
    private string $baseUrl;
    private Client $client;

    protected string $clientKey;
    protected string $clientSecret;

    protected string $version;

    private array $onerosterPaths = [
        '1' => '/learningdata/v1',
        '1.1' => '/ims/oneroster/v1p1',
        '1.2' => '/ims/oneroster/rostering/v1p2',
    ];

    /**
     * @return string
     * @throws \Exception
     */
    private function getOneRosterPath(): string
    {
        if(!isset($this->onerosterPaths[$this->version])) {
            throw new \Exception('Wrong OneRoster version');
        }
        return $this->onerosterPaths[$this->version];
    }

    /**
     * @param string $clientKey Client ID
     * @param string $clientSecret Client Secret
     * @param string $baseUrl Base URL
     * @param string|float|int $version OneRoster Version
     */
    public function __construct(string $clientKey, string $clientSecret, string $baseUrl, string|float|int $version = '1.1')
    {
        $this->baseUrl = rtrim($baseUrl, '/');

        $this->clientKey = $clientKey;
        $this->clientSecret = $clientSecret;
        $this->version = strval($version);

        // Initialize Guzzle HTTP client
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
    }

    /**
     * @param string $endpoint
     * @param array $params
     * @return ResponseInterface
     * @throws GuzzleException
     * @throws \Exception
     */
    public function get(string $endpoint, array $params = []): ResponseInterface
    {
        $url = $this->baseUrl . $this->getOneRosterPath() . '/' . ltrim($endpoint, '/');

        // Add query parameters
        if(isset($params['data'])) {
            if(!empty($params['data'])) {
                $urlParts = [];
                foreach($params['data'] as $key => $value) {
                    $urlParts[] = $key . '=' . $value;
                }
                $url .= '?' . implode('&', $urlParts);
            }
            unset($params['data']);
        }

        // Add OAuth1 headers
        $headers = $this->getOAuthHeader($url, true);

        // Make the request
        $response = $this->client->get($url, [
            'headers' => $headers/*,
            'query' => $params,*/
        ]);

        $contentType = $response->getHeader('Content-Type')[0] ?? null;
//        $count = $response->getHeader('x-count')[0] ?? null;
//        $total = $response->getHeader('x-total-count')[0] ?? 0;

        $statusCode = $response->getStatusCode();
        if($statusCode < 200 || $statusCode >= 300) {
            $message = 'Unknown error';
            if($contentType === 'application/json') {
                $response = json_decode($response->getBody());
                if(isset($response->message)) {
                    $message = $response->message;
                }
            }
            throw new \Exception('OneRoster API Error: ' . $message);
        }

        return $response;
    }

    /**
     * @param string $url
     * @param bool $split
     * @return string|array
     */
    private function getOAuthHeader(string $url, bool $split = false): string|array
    {
        $timestamp = strval(time());
        $nonce = $this->generateNonce(strlen($timestamp));

        // Assign the oauth params
        $oauth = [ 'oauth_consumer_key' => $this->clientKey,
            'oauth_signature_method' => 'HMAC-SHA256',
            'oauth_timestamp' => $timestamp,
            'oauth_nonce' => $nonce];

        // Split the url into the base url and the params
        $url_pieces = explode("?", $url);
        $params = $oauth;

        // Add the url params if they exist
        if (count($url_pieces) == 2) {
            $url_params = $this->paramsToArray($url_pieces[1]);
            $params = array_merge($params, $url_params);
        }

        // Generate the oauth signature
        $base_info = $this->buildBaseString($url_pieces[0], 'GET', $params);
        $composite_key = rawurlencode($this->clientSecret) . '&';
        $oauth_signature = base64_encode(hash_hmac('SHA256', $base_info, $composite_key, true));
        $oauth['oauth_signature'] = $oauth_signature;

        if($split === true) {
            return ['Authorization' => $this->buildAuthorizationHeader($oauth)];
        }

        // Create the oauth header
        return 'Authorization: '.$this->buildAuthorizationHeader($oauth);
    }

    /**
     * @param array $oauthinfo
     * @return string
     */
    private function buildAuthorizationHeader(array $oauthinfo): string
    {
        $r = 'OAuth ';
        $values = array();
        foreach ($oauthinfo as $key => $value)
            $values[] = "$key=\"" . rawurlencode($value) . "\"";

        $r .= implode(',', $values);
        return $r;
    }

    /**
     * @param $url_params
     * @return array
     */
    private function paramsToArray($url_params): array
    {
        $params = explode("&", $url_params);
        $result = [];
        foreach ($params as $value) {
            $value = rawurldecode($value);
            $split = explode("=", $value);
            if (count($split) == 2) {
                $result[$split[0]] = $split[1];
            } else {
                $result["filter"] = substr($value, 7);
            }

        }
        return $result;
    }

    /**
     * @param $baseURI
     * @param $method
     * @param $params
     * @return string
     */
    private function buildBaseString($baseURI, $method, $params): string
    {
        $r = array();
        ksort($params);
        foreach($params as $key=>$value){
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }

    /**
     * Generates the nonce
     *
     * @param int $length       Length of the nonce
     * @return string           Nonce
     */
    private function generateNonce(int $length): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
