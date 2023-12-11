# Swagger\Client\SplitDocumentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**splitDocumentBatchJobCreate**](SplitDocumentApi.md#splitDocumentBatchJobCreate) | **POST** /convert/split/batch-job/create | Split a single Document into Separate Documents by Page as a Batch Job
[**splitDocumentDocx**](SplitDocumentApi.md#splitDocumentDocx) | **POST** /convert/split/docx | Split a single Word Document DOCX into Separate Documents by Page
[**splitDocumentGetAsyncJobStatus**](SplitDocumentApi.md#splitDocumentGetAsyncJobStatus) | **GET** /convert/split/batch-job/status | Get the status and result of a Split Document Batch Job
[**splitDocumentPdfByPage**](SplitDocumentApi.md#splitDocumentPdfByPage) | **POST** /convert/split/pdf | Split a PDF file into separate PDF files, one per page
[**splitDocumentPptx**](SplitDocumentApi.md#splitDocumentPptx) | **POST** /convert/split/pptx | Split a single PowerPoint Presentation PPTX into Separate Slides
[**splitDocumentPptxAdvanced**](SplitDocumentApi.md#splitDocumentPptxAdvanced) | **POST** /convert/split/pptx/advanced | Split a single PowerPoint Presentation PPTX into Separate Presentations
[**splitDocumentTxtByLine**](SplitDocumentApi.md#splitDocumentTxtByLine) | **POST** /convert/split/txt/by-line | Split a single Text file (txt) into lines
[**splitDocumentTxtByString**](SplitDocumentApi.md#splitDocumentTxtByString) | **POST** /convert/split/txt/by-string | Split a single Text file (txt) by a string delimiter
[**splitDocumentXlsx**](SplitDocumentApi.md#splitDocumentXlsx) | **POST** /convert/split/xlsx | Split a single Excel XLSX into Separate Worksheets


# **splitDocumentBatchJobCreate**
> \Swagger\Client\Model\SplitBatchJobCreateResult splitDocumentBatchJobCreate($input_file, $return_document_contents)

Split a single Document into Separate Documents by Page as a Batch Job

Split a Document (PPTX supported), comprised of multiple pages into separate files, with each containing exactly one page.  This API is designed for large jobs that could take a long time to create and so runs as a batch job that returns a Job ID that you can use with the GetAsyncJobStatus API to check on the status of the Job and ultimately get the output result.  This API automatically detects the document type and then performs the split by using the document type-specific API needed to perform the split.  This API is only available for Cloudmersive Managed Instance and Private Cloud deployments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$return_document_contents = true; // bool | Set to true to return the contents of each presentation directly, set to false to only return URLs to each resulting presentation.  Default is true.

try {
    $result = $apiInstance->splitDocumentBatchJobCreate($input_file, $return_document_contents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentBatchJobCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **return_document_contents** | **bool**| Set to true to return the contents of each presentation directly, set to false to only return URLs to each resulting presentation.  Default is true. | [optional]

### Return type

[**\Swagger\Client\Model\SplitBatchJobCreateResult**](../Model/SplitBatchJobCreateResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentDocx**
> \Swagger\Client\Model\SplitDocxDocumentResult splitDocumentDocx($input_file, $return_document_contents)

Split a single Word Document DOCX into Separate Documents by Page

Split a Word DOCX Document, comprised of multiple pages into separate Word DOCX document files, with each containing exactly one page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$return_document_contents = true; // bool | Set to true to return the contents of each Worksheet directly, set to false to only return URLs to each resulting document.  Default is true.

try {
    $result = $apiInstance->splitDocumentDocx($input_file, $return_document_contents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentDocx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **return_document_contents** | **bool**| Set to true to return the contents of each Worksheet directly, set to false to only return URLs to each resulting document.  Default is true. | [optional]

### Return type

[**\Swagger\Client\Model\SplitDocxDocumentResult**](../Model/SplitDocxDocumentResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentGetAsyncJobStatus**
> \Swagger\Client\Model\JobStatusResult splitDocumentGetAsyncJobStatus($async_job_id)

Get the status and result of a Split Document Batch Job

Returns the result of the Async Job - possible states can be STARTED or COMPLETED.  This API is only available for Cloudmersive Managed Instance and Private Cloud deployments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$async_job_id = "async_job_id_example"; // string | 

try {
    $result = $apiInstance->splitDocumentGetAsyncJobStatus($async_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentGetAsyncJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_job_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\JobStatusResult**](../Model/JobStatusResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentPdfByPage**
> \Swagger\Client\Model\SplitPdfResult splitDocumentPdfByPage($input_file, $return_document_contents)

Split a PDF file into separate PDF files, one per page

Split an input PDF file into separate pages, comprised of one PDF file per page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$return_document_contents = true; // bool | Set to true to directly return all of the document contents in the DocumentContents field; set to false to return contents as temporary URLs (more efficient for large operations).  Default is false.

try {
    $result = $apiInstance->splitDocumentPdfByPage($input_file, $return_document_contents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentPdfByPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **return_document_contents** | **bool**| Set to true to directly return all of the document contents in the DocumentContents field; set to false to return contents as temporary URLs (more efficient for large operations).  Default is false. | [optional]

### Return type

[**\Swagger\Client\Model\SplitPdfResult**](../Model/SplitPdfResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentPptx**
> \Swagger\Client\Model\SplitPptxPresentationResult splitDocumentPptx($input_file, $return_document_contents)

Split a single PowerPoint Presentation PPTX into Separate Slides

Split an PowerPoint PPTX Presentation, comprised of multiple slides into separate PowerPoint PPTX presentation files, with each containing exactly one slide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$return_document_contents = true; // bool | Set to true to return the contents of each presentation directly, set to false to only return URLs to each resulting presentation.  Default is true.

try {
    $result = $apiInstance->splitDocumentPptx($input_file, $return_document_contents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentPptx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **return_document_contents** | **bool**| Set to true to return the contents of each presentation directly, set to false to only return URLs to each resulting presentation.  Default is true. | [optional]

### Return type

[**\Swagger\Client\Model\SplitPptxPresentationResult**](../Model/SplitPptxPresentationResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentPptxAdvanced**
> \Swagger\Client\Model\PptxSplitAdvancedResponse splitDocumentPptxAdvanced($request)

Split a single PowerPoint Presentation PPTX into Separate Presentations

Split a PowerPoint PPTX Presentation, comprised of multiple slides into separate PowerPoint PPTX presentations of customizeable size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\PptxSplitAdvancedRequest(); // \Swagger\Client\Model\PptxSplitAdvancedRequest | 

try {
    $result = $apiInstance->splitDocumentPptxAdvanced($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentPptxAdvanced: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PptxSplitAdvancedRequest**](../Model/PptxSplitAdvancedRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PptxSplitAdvancedResponse**](../Model/PptxSplitAdvancedResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentTxtByLine**
> \Swagger\Client\Model\SplitTextDocumentByLinesResult splitDocumentTxtByLine($input_file)

Split a single Text file (txt) into lines

Split a Text (txt) Document by line, returning each line separately in order.  Supports multiple types of newlines.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->splitDocumentTxtByLine($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentTxtByLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\SplitTextDocumentByLinesResult**](../Model/SplitTextDocumentByLinesResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentTxtByString**
> \Swagger\Client\Model\SplitTextDocumentByStringResult splitDocumentTxtByString($input_file, $split_delimiter, $skip_empty_elements)

Split a single Text file (txt) by a string delimiter

Split a Text (txt) Document by a string delimiter, returning each component of the string as an array of strings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$split_delimiter = "split_delimiter_example"; // string | Required; String to split up the input file on
$skip_empty_elements = true; // bool | Optional; If true, empty elements will be skipped in the output

try {
    $result = $apiInstance->splitDocumentTxtByString($input_file, $split_delimiter, $skip_empty_elements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentTxtByString: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **split_delimiter** | **string**| Required; String to split up the input file on |
 **skip_empty_elements** | **bool**| Optional; If true, empty elements will be skipped in the output | [optional]

### Return type

[**\Swagger\Client\Model\SplitTextDocumentByStringResult**](../Model/SplitTextDocumentByStringResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitDocumentXlsx**
> \Swagger\Client\Model\SplitXlsxWorksheetResult splitDocumentXlsx($input_file, $return_document_contents)

Split a single Excel XLSX into Separate Worksheets

Split an Excel XLSX Spreadsheet, comprised of multiple Worksheets (or Tabs) into separate Excel XLSX spreadsheet files, with each containing exactly one Worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\SplitDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$return_document_contents = true; // bool | Set to true to return the contents of each Worksheet directly, set to false to only return URLs to each resulting worksheet.  Default is true.

try {
    $result = $apiInstance->splitDocumentXlsx($input_file, $return_document_contents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitDocumentApi->splitDocumentXlsx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **return_document_contents** | **bool**| Set to true to return the contents of each Worksheet directly, set to false to only return URLs to each resulting worksheet.  Default is true. | [optional]

### Return type

[**\Swagger\Client\Model\SplitXlsxWorksheetResult**](../Model/SplitXlsxWorksheetResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

