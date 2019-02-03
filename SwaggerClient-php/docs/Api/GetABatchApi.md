# Swagger\Client\GetABatchApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBatch**](GetABatchApi.md#getBatch) | **GET** /{version}/offers/batch/{batch_id}/ | Get batch information


# **getBatch**
> \Swagger\Client\Model\OfferBatch getBatch($version, $batch_id)

Get batch information

Query the current status of a batch, and view results or validation errors if they are available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GetABatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$batch_id = "batch_id_example"; // string | The ID of the batch you have submitted, provided to you by Takealot

try {
    $result = $apiInstance->getBatch($version, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetABatchApi->getBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **batch_id** | **string**| The ID of the batch you have submitted, provided to you by Takealot |

### Return type

[**\Swagger\Client\Model\OfferBatch**](../Model/OfferBatch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

