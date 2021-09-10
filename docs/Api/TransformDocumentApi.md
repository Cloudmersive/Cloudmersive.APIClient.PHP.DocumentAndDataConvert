# Swagger\Client\TransformDocumentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transformDocumentDocxReplace**](TransformDocumentApi.md#transformDocumentDocxReplace) | **POST** /convert/transform/docx/replace-all | Replace string in Word DOCX document, return result
[**transformDocumentDocxReplaceEditSession**](TransformDocumentApi.md#transformDocumentDocxReplaceEditSession) | **POST** /convert/transform/docx/replace-all/edit-session | Replace string in Word DOCX document, return edit session
[**transformDocumentDocxTableFillIn**](TransformDocumentApi.md#transformDocumentDocxTableFillIn) | **POST** /convert/transform/docx/table/fill/data | Fill in data in a table in a Word DOCX document, return result
[**transformDocumentDocxTableFillInEditSession**](TransformDocumentApi.md#transformDocumentDocxTableFillInEditSession) | **POST** /convert/transform/docx/table/fill/data/edit-session | Fill in data in a table in a Word DOCX document, return edit session
[**transformDocumentDocxTableFillInMulti**](TransformDocumentApi.md#transformDocumentDocxTableFillInMulti) | **POST** /convert/transform/docx/table/fill/data/multi | Fill in data in multiple tables in a Word DOCX document, return result
[**transformDocumentPptxReplace**](TransformDocumentApi.md#transformDocumentPptxReplace) | **POST** /convert/transform/pptx/replace-all | Replace string in PowerPoint PPTX presentation, return result


# **transformDocumentDocxReplace**
> string transformDocumentDocxReplace($match_string, $replace_string, $input_file, $input_file_url, $match_case)

Replace string in Word DOCX document, return result

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

# **transformDocumentDocxReplaceEditSession**
> \Swagger\Client\Model\DocumentTransformEditSession transformDocumentDocxReplaceEditSession($match_string, $replace_string, $input_file, $input_file_url, $match_case)

Replace string in Word DOCX document, return edit session

Replace all instances of a string in an Office Word Document (docx).  Returns an edit session URL so that you can chain together multiple edit operations without having to send the entire document contents back and forth multiple times.  Call the Finish Editing API to retrieve the final document once editing is complete.

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
    $result = $apiInstance->transformDocumentDocxReplaceEditSession($match_string, $replace_string, $input_file, $input_file_url, $match_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformDocumentApi->transformDocumentDocxReplaceEditSession: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\DocumentTransformEditSession**](../Model/DocumentTransformEditSession.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transformDocumentDocxTableFillIn**
> string transformDocumentDocxTableFillIn($request)

Fill in data in a table in a Word DOCX document, return result

Replace placeholder rows ina  table in an Office Word Document (docx) using one or more templates

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
$request = new \Swagger\Client\Model\DocxTableTableFillRequest(); // \Swagger\Client\Model\DocxTableTableFillRequest | 

try {
    $result = $apiInstance->transformDocumentDocxTableFillIn($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformDocumentApi->transformDocumentDocxTableFillIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DocxTableTableFillRequest**](../Model/DocxTableTableFillRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transformDocumentDocxTableFillInEditSession**
> \Swagger\Client\Model\DocumentTransformEditSession transformDocumentDocxTableFillInEditSession($request)

Fill in data in a table in a Word DOCX document, return edit session

Replace placeholder rows ina  table in an Office Word Document (docx) using one or more templates.  Returns an edit session URL so that you can chain together multiple edit operations without having to send the entire document contents back and forth multiple times.  Call the Finish Editing API to retrieve the final document once editing is complete.

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
$request = new \Swagger\Client\Model\DocxTableTableFillRequest(); // \Swagger\Client\Model\DocxTableTableFillRequest | 

try {
    $result = $apiInstance->transformDocumentDocxTableFillInEditSession($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformDocumentApi->transformDocumentDocxTableFillInEditSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DocxTableTableFillRequest**](../Model/DocxTableTableFillRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DocumentTransformEditSession**](../Model/DocumentTransformEditSession.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transformDocumentDocxTableFillInMulti**
> string transformDocumentDocxTableFillInMulti($request)

Fill in data in multiple tables in a Word DOCX document, return result

Replace placeholder rows in multiple tables in an Office Word Document (docx) using one or more templates

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
$request = new \Swagger\Client\Model\DocxTableTableFillMultiRequest(); // \Swagger\Client\Model\DocxTableTableFillMultiRequest | 

try {
    $result = $apiInstance->transformDocumentDocxTableFillInMulti($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformDocumentApi->transformDocumentDocxTableFillInMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\DocxTableTableFillMultiRequest**](../Model/DocxTableTableFillMultiRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transformDocumentPptxReplace**
> string transformDocumentPptxReplace($match_string, $replace_string, $input_file, $input_file_url, $match_case)

Replace string in PowerPoint PPTX presentation, return result

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

