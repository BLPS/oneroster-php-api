<?php

namespace Kroscom\OneRosterAPI\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

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
     * @return mixed
     * @throws GuzzleException
     * @throws \Exception
     */
    public function get(string $endpoint, array $params = []): mixed
    {
        $url = $this->baseUrl . $this->getOneRosterPath() . '/' . ltrim($endpoint, '/');

        // Add OAuth1 headers
        $headers = $this->getOAuthHeaders('GET', $url);

        // Make the request
        $response = $this->client->get($url, [
            'headers' => $headers,
            'query' => $params,
        ]);

        return json_decode($response->getBody(), true);
    }

    /**
     * @param string $endpoint
     * @param array $data
     * @return mixed
     * @throws GuzzleException
     * @throws \Exception
     */
    public function post(string $endpoint, array $data = []): mixed
    {
        $url = $this->baseUrl . $this->getOneRosterPath() . '/' . ltrim($endpoint, '/');

        // Add OAuth1 headers
        $headers = $this->getOAuthHeaders('POST', $url);

        // Make the request
        $response = $this->client->post($url, [
            'headers' => $headers,
            'json' => $data,
        ]);

        return json_decode($response->getBody(), true);
    }

    /**
     * @param string $method
     * @param string $url
     * @return string[]
     */
    private function getOAuthHeaders(string $method, string $url): array
    {
        $timestamp = strval(time());
        $nonce = $this->generateNonce(strlen($timestamp));

        $oauthHeaders = [
            'oauth_consumer_key' => $this->clientKey,
            'oauth_nonce' => $nonce,
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => $timestamp,
            'oauth_version' => '1.0',
        ];


        // Generate the signature
        $baseString = $this->buildBaseString($method, $url, $oauthHeaders);
        $signatureKey = rawurlencode($this->clientSecret) . '&';
        $oauthHeaders['oauth_signature'] = base64_encode(hash_hmac('sha1', $baseString, $signatureKey, true));

        // Build the Authorization header
        $authHeader = 'OAuth ';
        $values = [];
        foreach ($oauthHeaders as $key => $value) {
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        }
        $authHeader .= implode(', ', $values);

        return [
            'Authorization' => $authHeader,
        ];
    }


    private function buildBaseString(string $method, string $url, array $params): string
    {
        $parts = [
            strtoupper($method),
            rawurlencode($url),
            rawurlencode(http_build_query($params, '', '&', PHP_QUERY_RFC3986)),
        ];

        return implode('&', $parts);
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
