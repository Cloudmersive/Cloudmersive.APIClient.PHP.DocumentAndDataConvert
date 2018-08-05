# Swagger\Client\ConvertTemplateApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertTemplateApplyHtmlTemplate**](ConvertTemplateApi.md#convertTemplateApplyHtmlTemplate) | **POST** /convert/template/html/apply | Apply HTML template


# **convertTemplateApplyHtmlTemplate**
> \Swagger\Client\Model\HtmlTemplateApplicationResponse convertTemplateApplyHtmlTemplate($value)

Apply HTML template

Apply operations to fill in an HTML template, generating a final HTML result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$value = new \Swagger\Client\Model\HtmlTemplateApplicationRequest(); // \Swagger\Client\Model\HtmlTemplateApplicationRequest | Operations to apply to template

try {
    $result = $apiInstance->convertTemplateApplyHtmlTemplate($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertTemplateApi->convertTemplateApplyHtmlTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | [**\Swagger\Client\Model\HtmlTemplateApplicationRequest**](../Model/HtmlTemplateApplicationRequest.md)| Operations to apply to template |

### Return type

[**\Swagger\Client\Model\HtmlTemplateApplicationResponse**](../Model/HtmlTemplateApplicationResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

