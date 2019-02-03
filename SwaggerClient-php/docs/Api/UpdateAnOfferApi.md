# Swagger\Client\UpdateAnOfferApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateOfferByIdentifier**](UpdateAnOfferApi.md#updateOfferByIdentifier) | **PATCH** /{version}/offers/offer/{identifier}/ | Update an offer using an Identifier


# **updateOfferByIdentifier**
> \Swagger\Client\Model\OfferUpdateSuccessResponse updateOfferByIdentifier($version, $identifier, $offer)

Update an offer using an Identifier

Update an offer by providing an identifier for the offer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UpdateAnOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$identifier = "identifier_example"; // string | Either Takealot's Offer ID, the GTIN or your SKU for the offer. Prepend with ID, GTIN, or SKU. e.g. ID234, GTIN3223, SKUDF22. Defaults to Offer ID.
$offer = new \Swagger\Client\Model\OfferSingleCreateUpdate(); // \Swagger\Client\Model\OfferSingleCreateUpdate | 

try {
    $result = $apiInstance->updateOfferByIdentifier($version, $identifier, $offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateAnOfferApi->updateOfferByIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **identifier** | **string**| Either Takealot&#39;s Offer ID, the GTIN or your SKU for the offer. Prepend with ID, GTIN, or SKU. e.g. ID234, GTIN3223, SKUDF22. Defaults to Offer ID. |
 **offer** | [**\Swagger\Client\Model\OfferSingleCreateUpdate**](../Model/OfferSingleCreateUpdate.md)|  |

### Return type

[**\Swagger\Client\Model\OfferUpdateSuccessResponse**](../Model/OfferUpdateSuccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

