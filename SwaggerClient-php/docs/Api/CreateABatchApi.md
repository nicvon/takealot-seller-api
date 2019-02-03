# Swagger\Client\CreateABatchApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBatch**](CreateABatchApi.md#createBatch) | **POST** /{version}/offers/batch | Create a batch


# **createBatch**
> \Swagger\Client\Model\OfferBatch createBatch($version, $offers)

Create a batch

Create or update multiple offers by submitting a batch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreateABatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$offers = array(new \Swagger\Client\Model\OfferBatchCreateUpdate()); // \Swagger\Client\Model\OfferBatchCreateUpdate[] | 

try {
    $result = $apiInstance->createBatch($version, $offers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateABatchApi->createBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **offers** | [**\Swagger\Client\Model\OfferBatchCreateUpdate[]**](../Model/OfferBatchCreateUpdate.md)|  |

### Return type

[**\Swagger\Client\Model\OfferBatch**](../Model/OfferBatch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

