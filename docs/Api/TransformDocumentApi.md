# Swagger\Client\TransformDocumentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transformDocumentDocxReplace**](TransformDocumentApi.md#transformDocumentDocxReplace) | **POST** /convert/transform/docx/replace-all | Replace string in Word DOCX document
[**transformDocumentPptxReplace**](TransformDocumentApi.md#transformDocumentPptxReplace) | **POST** /convert/transform/pptx/replace-all | Replace string in PowerPoint PPTX presentation


# **transformDocumentDocxReplace**
> string transformDocumentDocxReplace($match_string, $replace_string, $input_file, $input_file_url, $match_case)

Replace string in Word DOCX document

Replace all instances of a string in an Office Word Document (docx)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransformDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_string = "match_string_example"; // string | String to search for and match against, to be replaced
$replace_string = "replace_string_example"; // string | String to replace the matched values with
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API (part of EditDocumentApi) to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public).
$match_case = true; // bool | Optional: True if the case should be matched, false for case insensitive match. Default is false.

try {
    $result = $apiInstance->transformDocumentDocxReplace($match_string, $replace_string, $input_file, $input_file_url, $match_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformDocumentApi->transformDocumentDocxReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_string** | **string**| String to search for and match against, to be replaced |
 **replace_string** | **string**| String to replace the matched values with |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API (part of EditDocumentApi) to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public). | [optional]
 **match_case** | **bool**| Optional: True if the case should be matched, false for case insensitive match. Default is false. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transformDocumentPptxReplace**
> string transformDocumentPptxReplace($match_string, $replace_string, $input_file, $input_file_url, $match_case)

Replace string in PowerPoint PPTX presentation

Replace all instances of a string in an Office PowerPoint Document (pptx)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\TransformDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_string = "match_string_example"; // string | String to search for and match against, to be replaced
$replace_string = "replace_string_example"; // string | String to replace the matched values with
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API (part of EditDocumentApi) to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public).
$match_case = true; // bool | Optional: True if the case should be matched, false for case insensitive match. Default is false.

try {
    $result = $apiInstance->transformDocumentPptxReplace($match_string, $replace_string, $input_file, $input_file_url, $match_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformDocumentApi->transformDocumentPptxReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_string** | **string**| String to search for and match against, to be replaced |
 **replace_string** | **string**| String to replace the matched values with |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API (part of EditDocumentApi) to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public). | [optional]
 **match_case** | **bool**| Optional: True if the case should be matched, false for case insensitive match. Default is false. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

