# Swagger\Client\GetOffersCountApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOffersCount**](GetOffersCountApi.md#getOffersCount) | **GET** /{version}/offers/count | Get all offers


# **getOffersCount**
> \Swagger\Client\Model\InlineResponse200 getOffersCount($version, $item_statuses)

Get all offers

Retrieve the total number of your offers on the Takealot platform (optionally filtered by item status)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GetOffersCountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$item_statuses = array("item_statuses_example"); // string[] | A list of item statuses to filter by e.g. ?item_statuses=Active&item_statuses=Archived

try {
    $result = $apiInstance->getOffersCount($version, $item_statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetOffersCountApi->getOffersCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **item_statuses** | [**string[]**](../Model/string.md)| A list of item statuses to filter by e.g. ?item_statuses&#x3D;Active&amp;item_statuses&#x3D;Archived | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

