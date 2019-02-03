# Swagger\Client\ApiStatusApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**status**](ApiStatusApi.md#status) | **GET** /{version}/status | A simple status call to check the API&#39;s status


# **status**
> \Swagger\Client\Model\StandardResponse status($version)

A simple status call to check the API's status

Get API status

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API |

### Return type

[**\Swagger\Client\Model\StandardResponse**](../Model/StandardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

