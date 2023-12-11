# Swagger\Client\MergeDocumentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mergeDocumentBatchJobCreate**](MergeDocumentApi.md#mergeDocumentBatchJobCreate) | **POST** /convert/merge/batch-job/create | Merge an array of Documents into a Single Document by Page as a Batch Job
[**mergeDocumentDocx**](MergeDocumentApi.md#mergeDocumentDocx) | **POST** /convert/merge/docx | Merge Two Word DOCX Together
[**mergeDocumentDocxMulti**](MergeDocumentApi.md#mergeDocumentDocxMulti) | **POST** /convert/merge/docx/multi | Merge Multple Word DOCX Together
[**mergeDocumentDocxMultiArray**](MergeDocumentApi.md#mergeDocumentDocxMultiArray) | **POST** /convert/merge/docx/multi/array | Merge Multple Word DOCX Together from an array
[**mergeDocumentGetAsyncJobStatus**](MergeDocumentApi.md#mergeDocumentGetAsyncJobStatus) | **GET** /convert/merge/batch-job/status | Get the status and result of a Merge Document Batch Job
[**mergeDocumentHtml**](MergeDocumentApi.md#mergeDocumentHtml) | **POST** /convert/merge/html | Merge Two HTML (HTM) Files Together
[**mergeDocumentHtmlMulti**](MergeDocumentApi.md#mergeDocumentHtmlMulti) | **POST** /convert/merge/html/multi | Merge Multple HTML (HTM) Files Together
[**mergeDocumentHtmlMultiArray**](MergeDocumentApi.md#mergeDocumentHtmlMultiArray) | **POST** /convert/merge/html/multi/array | Merge Multple HTML (HTM) Files Together from an array
[**mergeDocumentPdf**](MergeDocumentApi.md#mergeDocumentPdf) | **POST** /convert/merge/pdf | Merge Two PDF Files Together
[**mergeDocumentPdfMulti**](MergeDocumentApi.md#mergeDocumentPdfMulti) | **POST** /convert/merge/pdf/multi | Merge Multple PDF Files Together
[**mergeDocumentPdfMultiArray**](MergeDocumentApi.md#mergeDocumentPdfMultiArray) | **POST** /convert/merge/pdf/multi/array | Merge Multple PDF Files Together from an array
[**mergeDocumentPng**](MergeDocumentApi.md#mergeDocumentPng) | **POST** /convert/merge/png/vertical | Merge Two PNG Files Together
[**mergeDocumentPngMulti**](MergeDocumentApi.md#mergeDocumentPngMulti) | **POST** /convert/merge/png/vertical/multi | Merge Multple PNG Files Together
[**mergeDocumentPngMultiArray**](MergeDocumentApi.md#mergeDocumentPngMultiArray) | **POST** /convert/merge/png/vertical/multi/array | Merge Multple PNG Files Together from an array
[**mergeDocumentPptx**](MergeDocumentApi.md#mergeDocumentPptx) | **POST** /convert/merge/pptx | Merge Two PowerPoint PPTX Together
[**mergeDocumentPptxMulti**](MergeDocumentApi.md#mergeDocumentPptxMulti) | **POST** /convert/merge/pptx/multi | Merge Multple PowerPoint PPTX Together
[**mergeDocumentPptxMultiArray**](MergeDocumentApi.md#mergeDocumentPptxMultiArray) | **POST** /convert/merge/pptx/multi/array | Merge Multple PowerPoint PPTX Together from an array
[**mergeDocumentTxt**](MergeDocumentApi.md#mergeDocumentTxt) | **POST** /convert/merge/txt | Merge Two Text (TXT) Files Together
[**mergeDocumentTxtMulti**](MergeDocumentApi.md#mergeDocumentTxtMulti) | **POST** /convert/merge/txt/multi | Merge Multple Text (TXT) Files Together
[**mergeDocumentXlsx**](MergeDocumentApi.md#mergeDocumentXlsx) | **POST** /convert/merge/xlsx | Merge Two Excel XLSX Together
[**mergeDocumentXlsxMulti**](MergeDocumentApi.md#mergeDocumentXlsxMulti) | **POST** /convert/merge/xlsx/multi | Merge Multple Excel XLSX Together
[**mergeDocumentXlsxMultiArray**](MergeDocumentApi.md#mergeDocumentXlsxMultiArray) | **POST** /convert/merge/xlsx/multi/array | Merge Multple Excel XLSX Together from an Array


# **mergeDocumentBatchJobCreate**
> \Swagger\Client\Model\MergeBatchJobCreateResult mergeDocumentBatchJobCreate($input)

Merge an array of Documents into a Single Document by Page as a Batch Job

Merge an array of Documents (PDF supported), into a single document.  This API is designed for large jobs that could take a long time to create and so runs as a batch job that returns a Job ID that you can use with the GetAsyncJobStatus API to check on the status of the Job and ultimately get the output result.  This API automatically detects the document type and then performs the split by using the document type-specific API needed to perform the split.  This API is only available for Cloudmersive Managed Instance and Private Cloud deployments.

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
$input = new \Swagger\Client\Model\DocumentArrayInput(); // \Swagger\Client\Model\DocumentArrayInput | 

try {
    $result = $apiInstance->mergeDocumentBatchJobCreate($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentBatchJobCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\DocumentArrayInput**](../Model/DocumentArrayInput.md)|  |

### Return type

[**\Swagger\Client\Model\MergeBatchJobCreateResult**](../Model/MergeBatchJobCreateResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentDocx**
> string mergeDocumentDocx($input_file1, $input_file2)

Merge Two Word DOCX Together

Combine two Office Word Documents (docx) into one single Office Word document

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

# **mergeDocumentDocxMulti**
> string mergeDocumentDocxMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

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
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input file to perform the operation on.

try {
    $result = $apiInstance->mergeDocumentDocxMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentDocxMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. |
 **input_file3** | **\SplFileObject**| Third input file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input file to perform the operation on. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentDocxMultiArray**
> object mergeDocumentDocxMultiArray($input)

Merge Multple Word DOCX Together from an array

Combine multiple Office Word Documents (docx), stored in an array, into one single Office Word document

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
$input = new \Swagger\Client\Model\DocumentArrayInput(); // \Swagger\Client\Model\DocumentArrayInput | Array of input files

try {
    $result = $apiInstance->mergeDocumentDocxMultiArray($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentDocxMultiArray: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\DocumentArrayInput**](../Model/DocumentArrayInput.md)| Array of input files |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentGetAsyncJobStatus**
> \Swagger\Client\Model\MergeJobStatusResult mergeDocumentGetAsyncJobStatus($async_job_id)

Get the status and result of a Merge Document Batch Job

Returns the result of the Async Job - possible states can be STARTED or COMPLETED.  This API is only available for Cloudmersive Managed Instance and Private Cloud deployments.

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
$async_job_id = "async_job_id_example"; // string | 

try {
    $result = $apiInstance->mergeDocumentGetAsyncJobStatus($async_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentGetAsyncJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_job_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MergeJobStatusResult**](../Model/MergeJobStatusResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentHtml**
> string mergeDocumentHtml($input_file1, $input_file2)

Merge Two HTML (HTM) Files Together

Combine two HTML (.HTM) files into a single text document, preserving the order of the input documents in the combined document by stacking them vertically.  The title will be taken from the first document.

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
    $result = $apiInstance->mergeDocumentHtml($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentHtml: ', $e->getMessage(), PHP_EOL;
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

# **mergeDocumentHtmlMulti**
> string mergeDocumentHtmlMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

Merge Multple HTML (HTM) Files Together

Combine multiple HTML (.HTM) files into a single text document, preserving the order of the input documents in the combined document by stacking them vertically.  The title will be taken from the first document.

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
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input file to perform the operation on.

try {
    $result = $apiInstance->mergeDocumentHtmlMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentHtmlMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. |
 **input_file3** | **\SplFileObject**| Third input file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input file to perform the operation on. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentHtmlMultiArray**
> object mergeDocumentHtmlMultiArray($input)

Merge Multple HTML (HTM) Files Together from an array

Combine multiple HTML (.HTM) files, from an array, into a single text document, preserving the order of the input documents in the combined document by stacking them vertically.  The title will be taken from the first document.

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
$input = new \Swagger\Client\Model\DocumentArrayInput(); // \Swagger\Client\Model\DocumentArrayInput | Array of input files

try {
    $result = $apiInstance->mergeDocumentHtmlMultiArray($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentHtmlMultiArray: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\DocumentArrayInput**](../Model/DocumentArrayInput.md)| Array of input files |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPdf**
> string mergeDocumentPdf($input_file1, $input_file2)

Merge Two PDF Files Together

Combine two PDF files (pdf) into a single PDF document, preserving the order of the input documents in the combined document

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

# **mergeDocumentPdfMulti**
> string mergeDocumentPdfMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

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
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input file to perform the operation on.

try {
    $result = $apiInstance->mergeDocumentPdfMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPdfMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. |
 **input_file3** | **\SplFileObject**| Third input file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input file to perform the operation on. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPdfMultiArray**
> object mergeDocumentPdfMultiArray($input)

Merge Multple PDF Files Together from an array

Combine multiple PDF files (pdf), as an array, into a single PDF document, preserving the order of the input documents in the combined document

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
$input = new \Swagger\Client\Model\DocumentArrayInput(); // \Swagger\Client\Model\DocumentArrayInput | Array of input files

try {
    $result = $apiInstance->mergeDocumentPdfMultiArray($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPdfMultiArray: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\DocumentArrayInput**](../Model/DocumentArrayInput.md)| Array of input files |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPng**
> string mergeDocumentPng($input_file1, $input_file2)

Merge Two PNG Files Together

Combine two PNG files into a single PNG document, preserving the order of the input documents in the combined document by stacking them vertically

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
    $result = $apiInstance->mergeDocumentPng($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPng: ', $e->getMessage(), PHP_EOL;
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

# **mergeDocumentPngMulti**
> string mergeDocumentPngMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

Merge Multple PNG Files Together

Combine multiple PNG files into a single PNG document, preserving the order of the input documents in the combined document by stacking them vertically

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
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input file to perform the operation on.

try {
    $result = $apiInstance->mergeDocumentPngMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPngMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. |
 **input_file3** | **\SplFileObject**| Third input file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input file to perform the operation on. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPngMultiArray**
> object mergeDocumentPngMultiArray($input)

Merge Multple PNG Files Together from an array

Combine multiple PNG files, from an array, into a single PNG document, preserving the order of the input documents in the combined document by stacking them vertically

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
$input = new \Swagger\Client\Model\DocumentArrayInput(); // \Swagger\Client\Model\DocumentArrayInput | Array of input files

try {
    $result = $apiInstance->mergeDocumentPngMultiArray($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPngMultiArray: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\DocumentArrayInput**](../Model/DocumentArrayInput.md)| Array of input files |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPptx**
> string mergeDocumentPptx($input_file1, $input_file2)

Merge Two PowerPoint PPTX Together

Combine two Office PowerPoint presentations (pptx) into one single Office PowerPoint presentation

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

# **mergeDocumentPptxMulti**
> string mergeDocumentPptxMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

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
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input file to perform the operation on.

try {
    $result = $apiInstance->mergeDocumentPptxMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPptxMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. |
 **input_file3** | **\SplFileObject**| Third input file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input file to perform the operation on. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentPptxMultiArray**
> object mergeDocumentPptxMultiArray($input)

Merge Multple PowerPoint PPTX Together from an array

Combine multiple Office PowerPoint presentations (pptx), from an array, into one single Office PowerPoint presentation

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
$input = new \Swagger\Client\Model\DocumentArrayInput(); // \Swagger\Client\Model\DocumentArrayInput | Array of input files

try {
    $result = $apiInstance->mergeDocumentPptxMultiArray($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentPptxMultiArray: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\DocumentArrayInput**](../Model/DocumentArrayInput.md)| Array of input files |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentTxt**
> object mergeDocumentTxt($input_file1, $input_file2)

Merge Two Text (TXT) Files Together

Combine two Text (.TXT) files into a single text document, preserving the order of the input documents in the combined document by stacking them vertically.

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
    $result = $apiInstance->mergeDocumentTxt($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentTxt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on (more than 2 can be supplied). |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentTxtMulti**
> string mergeDocumentTxtMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

Merge Multple Text (TXT) Files Together

Combine multiple Text (.TXT) files into a single text document, preserving the order of the input documents in the combined document by stacking them vertically.

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
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input file to perform the operation on.

try {
    $result = $apiInstance->mergeDocumentTxtMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentTxtMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. |
 **input_file3** | **\SplFileObject**| Third input file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input file to perform the operation on. | [optional]

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

Merge Two Excel XLSX Together

Combine two Office Excel spreadsheets (xlsx) into a single Office Excel spreadsheet

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

# **mergeDocumentXlsxMulti**
> string mergeDocumentXlsxMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

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
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input file to perform the operation on.

try {
    $result = $apiInstance->mergeDocumentXlsxMulti($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentXlsxMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. |
 **input_file3** | **\SplFileObject**| Third input file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input file to perform the operation on. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeDocumentXlsxMultiArray**
> object mergeDocumentXlsxMultiArray($input)

Merge Multple Excel XLSX Together from an Array

Combine multiple Office Excel spreadsheets (xlsx), as an array, into a single Office Excel spreadsheet

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
$input = new \Swagger\Client\Model\DocumentArrayInput(); // \Swagger\Client\Model\DocumentArrayInput | Array of input files

try {
    $result = $apiInstance->mergeDocumentXlsxMultiArray($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeDocumentApi->mergeDocumentXlsxMultiArray: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\DocumentArrayInput**](../Model/DocumentArrayInput.md)| Array of input files |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

