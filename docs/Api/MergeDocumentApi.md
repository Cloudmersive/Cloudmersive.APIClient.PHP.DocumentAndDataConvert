# Swagger\Client\MergeDocumentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mergeDocumentDocx**](MergeDocumentApi.md#mergeDocumentDocx) | **POST** /convert/merge/docx | Merge Multple Word DOCX Together
[**mergeDocumentPdf**](MergeDocumentApi.md#mergeDocumentPdf) | **POST** /convert/merge/pdf | Merge Multple PDF Files Together
[**mergeDocumentPptx**](MergeDocumentApi.md#mergeDocumentPptx) | **POST** /convert/merge/pptx | Merge Multple PowerPoint PPTX Together
[**mergeDocumentXlsx**](MergeDocumentApi.md#mergeDocumentXlsx) | **POST** /convert/merge/xlsx | Merge Multple Excel XLSX Together


# **mergeDocumentDocx**
> string mergeDocumentDocx($input_file1, $input_file2)

Merge Multple Word DOCX Together

Combine multiple Office Word Documents (docx) into one single Office Word document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MergeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input file to perform the operation on.
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on (more than 2 can be supplied).

try {
    $result = $apiInstance->mergeDocumentDocx($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentDocx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on (more than 2 can be supplied). |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPdf**
> string mergeDocumentPdf($input_file1, $input_file2)

Merge Multple PDF Files Together

Combine multiple PDF files (pdf) into a single PDF document, preserving the order of the input documents in the combined document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MergeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input file to perform the operation on.
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on (more than 2 can be supplied).

try {
    $result = $apiInstance->mergeDocumentPdf($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on (more than 2 can be supplied). |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPptx**
> string mergeDocumentPptx($input_file1, $input_file2)

Merge Multple PowerPoint PPTX Together

Combine multiple Office PowerPoint presentations (pptx) into one single Office PowerPoint presentation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MergeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input file to perform the operation on.
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on (more than 2 can be supplied).

try {
    $result = $apiInstance->mergeDocumentPptx($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPptx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on (more than 2 can be supplied). |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentXlsx**
> string mergeDocumentXlsx($input_file1, $input_file2)

Merge Multple Excel XLSX Together

Combine multiple Office Excel spreadsheets (xlsx) into a single Office Excel spreadsheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MergeDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input file to perform the operation on.
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on (more than 2 can be supplied).

try {
    $result = $apiInstance->mergeDocumentXlsx($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentXlsx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on (more than 2 can be supplied). |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

