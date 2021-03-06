# SwaggerClient-php
The Takealot Seller API for Offers represents the initial phase of the Seller API. With this you will be able to manage your offers in an automated and scalable way. Please ensure you have read the documentation for the Seller API, found at https://sellerportal.takealot.com/api, for an introduction and important information before attempting to use this API. The below documentation describes each endpoint of the API.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ApiStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API

try {
    $result = $apiInstance->status($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiStatusApi->status: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://seller-api.takealot.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiStatusApi* | [**status**](docs/Api/ApiStatusApi.md#status) | **GET** /{version}/status | A simple status call to check the API&#39;s status
*CreateABatchApi* | [**createBatch**](docs/Api/CreateABatchApi.md#createbatch) | **POST** /{version}/offers/batch | Create a batch
*CreateAStockAlertSettingApi* | [**createStockAlertSetting**](docs/Api/CreateAStockAlertSettingApi.md#createstockalertsetting) | **POST** /{version}/alert_setting/stock | Create stock alert settings for a seller
*CreateAnOfferApi* | [**createOfferByIdentifier**](docs/Api/CreateAnOfferApi.md#createofferbyidentifier) | **POST** /{version}/offers/offer/{identifier}/ | Create an offer by providing the variant&#39;s GTIN
*GetABatchApi* | [**getBatch**](docs/Api/GetABatchApi.md#getbatch) | **GET** /{version}/offers/batch/{batch_id}/ | Get batch information
*GetAnOfferApi* | [**getOfferByIdentifier**](docs/Api/GetAnOfferApi.md#getofferbyidentifier) | **GET** /{version}/offers/offer/{identifier}/ | Get an offer by an Identifier
*GetOffersApi* | [**getOffers**](docs/Api/GetOffersApi.md#getoffers) | **GET** /{version}/offers | Get all offers
*GetOffersCountApi* | [**getOffersCount**](docs/Api/GetOffersCountApi.md#getofferscount) | **GET** /{version}/offers/count | Get all offers
*UpdateAnOfferApi* | [**updateOfferByIdentifier**](docs/Api/UpdateAnOfferApi.md#updateofferbyidentifier) | **PATCH** /{version}/offers/offer/{identifier}/ | Update an offer using an Identifier


## Documentation For Models

 - [Error](docs/Model/Error.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [Offer](docs/Model/Offer.md)
 - [OfferBatch](docs/Model/OfferBatch.md)
 - [OfferBatchCreateUpdate](docs/Model/OfferBatchCreateUpdate.md)
 - [OfferBatchOffer](docs/Model/OfferBatchOffer.md)
 - [OfferBatchResult](docs/Model/OfferBatchResult.md)
 - [OfferBatchStatus](docs/Model/OfferBatchStatus.md)
 - [OfferSingleCreateUpdate](docs/Model/OfferSingleCreateUpdate.md)
 - [OfferUpdateErrorResponse](docs/Model/OfferUpdateErrorResponse.md)
 - [OfferUpdateSuccessResponse](docs/Model/OfferUpdateSuccessResponse.md)
 - [OfferWarehouseStock](docs/Model/OfferWarehouseStock.md)
 - [OfferWarehouseStockWarehouse](docs/Model/OfferWarehouseStockWarehouse.md)
 - [Offers](docs/Model/Offers.md)
 - [StandardResponse](docs/Model/StandardResponse.md)
 - [StockAlertSetting](docs/Model/StockAlertSetting.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




