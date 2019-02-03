# Swagger\Client\CreateAStockAlertSettingApi

All URIs are relative to *https://seller-api.takealot.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStockAlertSetting**](CreateAStockAlertSettingApi.md#createStockAlertSetting) | **POST** /{version}/alert_setting/stock | Create stock alert settings for a seller


# **createStockAlertSetting**
> \Swagger\Client\Model\StandardResponse createStockAlertSetting($version, $alert_settings)

Create stock alert settings for a seller

Create stock alert settings for a seller

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CreateAStockAlertSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | The major version of the API, prepended with a v (e.g. v1)
$alert_settings = new \Swagger\Client\Model\StockAlertSetting(); // \Swagger\Client\Model\StockAlertSetting | 

try {
    $result = $apiInstance->createStockAlertSetting($version, $alert_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreateAStockAlertSettingApi->createStockAlertSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The major version of the API, prepended with a v (e.g. v1) |
 **alert_settings** | [**\Swagger\Client\Model\StockAlertSetting**](../Model/StockAlertSetting.md)|  |

### Return type

[**\Swagger\Client\Model\StandardResponse**](../Model/StandardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/pdf, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

