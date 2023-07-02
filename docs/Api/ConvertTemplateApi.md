# Swagger\Client\ConvertTemplateApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertTemplateApplyDocxTemplate**](ConvertTemplateApi.md#convertTemplateApplyDocxTemplate) | **POST** /convert/template/docx/apply | Apply Word DOCX template
[**convertTemplateApplyHtmlTemplate**](ConvertTemplateApi.md#convertTemplateApplyHtmlTemplate) | **POST** /convert/template/html/apply | Apply HTML template


# **convertTemplateApplyDocxTemplate**
> string convertTemplateApplyDocxTemplate($input_file, $template_definition)

Apply Word DOCX template

Apply operations to fill in a Word DOCX template by replacing target template/placeholder strings in the DOCX with values, generating a final Word DOCX result.  For example, you could create a Word Document invoice containing strings such as \"{FirstName}\" and \"{LastName}\" and then replace these values with \"John\" and \"Smith\".

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
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$template_definition = new \stdClass; // object | Template definition for the document, including what values to replace

try {
    $result = $apiInstance->convertTemplateApplyDocxTemplate($input_file, $template_definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertTemplateApi->convertTemplateApplyDocxTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **template_definition** | [**object**](../Model/.md)| Template definition for the document, including what values to replace | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

