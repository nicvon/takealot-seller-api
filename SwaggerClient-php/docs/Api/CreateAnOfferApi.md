# Swagger\Client\CreateAnOfferApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOfferByIdentifier**](CreateAnOfferApi.md#createOfferByIdentifier) | **POST** /{version}/offers/offer/{identifier}/ | Create an offer by providing the variant&#39;s GTIN


# **createOfferByIdentifier**
> \Swagger\Client\Model\OfferUpdateSuccessResponse createOfferByIdentifier($version, $identifier, $offer)

Create an offer by providing the variant's GTIN

Create an offer by providing the variant's GTIN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreateAnOfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$identifier = "identifier_example"; // string | The GTIN for the variant to create an offer against. It is not required to prepend GTIN.
$offer = new \Swagger\Client\Model\OfferSingleCreateUpdate(); // \Swagger\Client\Model\OfferSingleCreateUpdate | 

try {
    $result = $apiInstance->createOfferByIdentifier($version, $identifier, $offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateAnOfferApi->createOfferByIdentifier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **identifier** | **string**| The GTIN for the variant to create an offer against. It is not required to prepend GTIN. |
 **offer** | [**\Swagger\Client\Model\OfferSingleCreateUpdate**](../Model/OfferSingleCreateUpdate.md)|  |

### Return type

[**\Swagger\Client\Model\OfferUpdateSuccessResponse**](../Model/OfferUpdateSuccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

