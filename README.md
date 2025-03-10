
# Getting Started with API with Complex Header Parameters

## Introduction

Demonstrates the use of complex types, including maps, custom types, and oneOf types in headers.

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "abc/testpackage-sdk:1.2.2"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "abc/testpackage-sdk": "1.2.2"
}
```

You can also view the package at:
https://packagist.org/packages/abc/testpackage-sdk#1.2.2

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/ZahraN444/testpackage-php-sdk/tree/1.2.2/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |

The API client can be initialized as follows:

```php
$client = APIWithComplexHeaderParametersClientBuilder::init()->build();
```

## List of APIs

* [API](https://www.github.com/ZahraN444/testpackage-php-sdk/tree/1.2.2/doc/controllers/api.md)

## Additional Documentation

### Wrappers

* [ApiException](https://www.github.com/ZahraN444/testpackage-php-sdk/tree/1.2.2/doc/api-exception.md)
* [HttpRequest](https://www.github.com/ZahraN444/testpackage-php-sdk/tree/1.2.2/doc/http-request.md)
* [HttpResponse](https://www.github.com/ZahraN444/testpackage-php-sdk/tree/1.2.2/doc/http-response.md)

