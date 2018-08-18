# Swagger\Client\CompareDocumentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**compareDocumentDocx**](CompareDocumentApi.md#compareDocumentDocx) | **POST** /convert/compare/docx | Compare Two Word DOCX


# **compareDocumentDocx**
> string compareDocumentDocx($input_file1, $input_file2)

Compare Two Word DOCX

Compare two Office Word Documents (docx) files and highlight the differences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompareDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input file to perform the operation on.
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on (more than 2 can be supplied).

try {
    $result = $apiInstance->compareDocumentDocx($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompareDocumentApi->compareDocumentDocx: ', $e->getMessage(), PHP_EOL;
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

