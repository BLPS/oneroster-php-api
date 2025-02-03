# OneRoster PHP API

A PHP client library for interacting with the OneRoster API. This library simplifies authentication and API calls, making it easy to integrate OneRoster-compliant systems.

OneRoster PHP API is a significantly modified version of [Sky API OneRoster](https://github.com/groton-school/sky-api.oneroster), originally developed by Groton School. 

## Features

- OAuth1 authentication with client credentials.
- Easy-to-use interface for interacting with OneRoster endpoints.
- Supports fetching organizations and other OneRoster entities.
- Supports OneRoster version 1.1

## Installation

To install the package, use Composer:

```sh
composer require pavlokrostylovblps/oneroster-php-api
```

## Usage

### Initialize the Client

```php
require 'vendor/autoload.php';

use Kroscom\OneRosterAPI\Client\OneRosterClient;
use Kroscom\OneRosterAPI\OneRosterAPI;

$clientId = 'your-client-id';
$clientSecret = 'your-client-secret';
$baseUrl = 'https://example.com';

$client = new OneRosterClient($clientId, $clientSecret, $baseUrl);
$api = new OneRosterAPI($client);
```

### Fetch Organizations

#### Get a list of organizations

```php
$orgs = $api->orgs->get();
print_r($orgs);
```

#### Get a single organization

```php
$org = $api->orgs->getOne('10');
print_r($org);
```

## Requirements

- PHP 8.2 or later
- Composer

## Changes

This version of OneRoster PHP API includes significant modifications and improvements, including:

- **Refactored Codebase** – Improved structure and readability for better maintainability.
- **Enhanced API Support** – Improved handling of OneRoster-compliant requests and responses.
- **ClassLink Support** – Added the ability to work with the ClassLink OneRoster API.

## License

This project is licensed under the [GNU GPL-3.0](https://www.gnu.org/licenses/gpl-3.0.html).  
It is based on [Sky API OneRoster](https://github.com/groton-school/sky-api.oneroster), which is also licensed under GPL-3.0.

## Contributing

Pull requests are welcome! If you find an issue, please open an issue on GitHub.

## Contact

For any questions or support, please create an issue in the repository.

## Acknowledgment

Special thanks to Groton School for their original work on [Sky API OneRoster](https://github.com/groton-school/sky-api.oneroster).  

