# Swagger\Client\GetAnOfferApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferByIdentifier**](GetAnOfferApi.md#getOfferByIdentifier) | **GET** /{version}/offers/offer/{identifier}/ | Get an offer by an Identifier


# **getOfferByIdentifier**
> \Swagger\Client\Model\Offer getOfferByIdentifier($version, $identifier)

Get an offer by an Identifier

Retrieve information about an individual offer by providing an identifier for the offer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GetAnOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$identifier = "identifier_example"; // string | Either Takealot's Offer ID, the GTIN or your SKU for the offer. Prepend with ID, GTIN, or SKU. e.g. ID234, GTIN3223, SKUDF22. Defaults to Offer ID.

try {
    $result = $apiInstance->getOfferByIdentifier($version, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetAnOfferApi->getOfferByIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **identifier** | **string**| Either Takealot&#39;s Offer ID, the GTIN or your SKU for the offer. Prepend with ID, GTIN, or SKU. e.g. ID234, GTIN3223, SKUDF22. Defaults to Offer ID. |

### Return type

[**\Swagger\Client\Model\Offer**](../Model/Offer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

