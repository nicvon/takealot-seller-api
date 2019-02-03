# Swagger\Client\GetOffersApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOffers**](GetOffersApi.md#getOffers) | **GET** /{version}/offers | Get all offers


# **getOffers**
> \Swagger\Client\Model\Offers getOffers($version, $page_number, $page_size)

Get all offers

Retrieve information about your offers on the Takealot platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GetOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$page_number = 56; // int | The page number to retrieve (starting at 1)
$page_size = 56; // int | The number of offers per page. Limited to 100.

try {
    $result = $apiInstance->getOffers($version, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetOffersApi->getOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **page_number** | **int**| The page number to retrieve (starting at 1) | [optional]
 **page_size** | **int**| The number of offers per page. Limited to 100. | [optional]

### Return type

[**\Swagger\Client\Model\Offers**](../Model/Offers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

