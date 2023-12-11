# Swagger\Client\EditPdfApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editPdfAddAnnotations**](EditPdfApi.md#editPdfAddAnnotations) | **POST** /convert/edit/pdf/annotations/add-item | Add one or more PDF annotations, comments in the PDF document
[**editPdfConvertToPdfA**](EditPdfApi.md#editPdfConvertToPdfA) | **POST** /convert/edit/pdf/optimize/pdf-a | Convert a PDF file to PDF/A
[**editPdfDecrypt**](EditPdfApi.md#editPdfDecrypt) | **POST** /convert/edit/pdf/decrypt | Decrypt and password-protect a PDF
[**editPdfDeletePages**](EditPdfApi.md#editPdfDeletePages) | **POST** /convert/edit/pdf/pages/delete | Remove, delete pages from a PDF document
[**editPdfDeletePagesBatchJob**](EditPdfApi.md#editPdfDeletePagesBatchJob) | **POST** /convert/edit/pdf/pages/delete/batch-job | Remove, delete pages from a PDF document as Batch Job
[**editPdfEncrypt**](EditPdfApi.md#editPdfEncrypt) | **POST** /convert/edit/pdf/encrypt | Encrypt and password-protect a PDF
[**editPdfGetAnnotations**](EditPdfApi.md#editPdfGetAnnotations) | **POST** /convert/edit/pdf/annotations/list | Get PDF annotations, including comments in the document
[**editPdfGetAsyncJobStatus**](EditPdfApi.md#editPdfGetAsyncJobStatus) | **GET** /convert/edit/pdf/batch-job/status | Get the status and result of a PDF Batch Job
[**editPdfGetFormFields**](EditPdfApi.md#editPdfGetFormFields) | **POST** /convert/edit/pdf/form/get-fields | Gets PDF Form fields and values
[**editPdfGetMetadata**](EditPdfApi.md#editPdfGetMetadata) | **POST** /convert/edit/pdf/get-metadata | Get PDF document metadata
[**editPdfGetPdfTextByPages**](EditPdfApi.md#editPdfGetPdfTextByPages) | **POST** /convert/edit/pdf/pages/get-text | Get text in a PDF document by page
[**editPdfInsertPages**](EditPdfApi.md#editPdfInsertPages) | **POST** /convert/edit/pdf/pages/insert | Insert, copy pages from one PDF document into another
[**editPdfInsertPagesBatchJob**](EditPdfApi.md#editPdfInsertPagesBatchJob) | **POST** /convert/edit/pdf/pages/insert/batch-job | Insert, copy pages from one PDF document into another as a batch job
[**editPdfLinearize**](EditPdfApi.md#editPdfLinearize) | **POST** /convert/edit/pdf/optimize/linearize | Linearize and optimize a PDF for streaming download
[**editPdfRasterize**](EditPdfApi.md#editPdfRasterize) | **POST** /convert/edit/pdf/rasterize | Rasterize a PDF to an image-based PDF
[**editPdfRasterizeBatchJob**](EditPdfApi.md#editPdfRasterizeBatchJob) | **POST** /convert/edit/pdf/rasterize/batch-job | Rasterize a PDF to an image-based PDF as Batch Job
[**editPdfReduceFileSize**](EditPdfApi.md#editPdfReduceFileSize) | **POST** /convert/edit/pdf/optimize/reduce-file-size | Reduce the file size and optimize a PDF
[**editPdfRemoveAllAnnotations**](EditPdfApi.md#editPdfRemoveAllAnnotations) | **POST** /convert/edit/pdf/annotations/remove-all | Remove all PDF annotations, including comments in the document
[**editPdfRemoveAnnotationItem**](EditPdfApi.md#editPdfRemoveAnnotationItem) | **POST** /convert/edit/pdf/annotations/remove-item | Remove a specific PDF annotation, comment in the document
[**editPdfResize**](EditPdfApi.md#editPdfResize) | **POST** /convert/edit/pdf/resize | Change PDF Document&#39;s Paper Size
[**editPdfRotateAllPages**](EditPdfApi.md#editPdfRotateAllPages) | **POST** /convert/edit/pdf/pages/rotate/all | Rotate all pages in a PDF document
[**editPdfRotatePageRange**](EditPdfApi.md#editPdfRotatePageRange) | **POST** /convert/edit/pdf/pages/rotate/page-range | Rotate a range, subset of pages in a PDF document
[**editPdfSetFormFields**](EditPdfApi.md#editPdfSetFormFields) | **POST** /convert/edit/pdf/form/set-fields | Sets ands fills PDF Form field values
[**editPdfSetMetadata**](EditPdfApi.md#editPdfSetMetadata) | **POST** /convert/edit/pdf/set-metadata | Sets PDF document metadata
[**editPdfSetPermissions**](EditPdfApi.md#editPdfSetPermissions) | **POST** /convert/edit/pdf/encrypt/set-permissions | Encrypt, password-protect and set restricted permissions on a PDF
[**editPdfWatermarkText**](EditPdfApi.md#editPdfWatermarkText) | **POST** /convert/edit/pdf/watermark/text | Add a text watermark to a PDF


# **editPdfAddAnnotations**
> string editPdfAddAnnotations($request)

Add one or more PDF annotations, comments in the PDF document

Adds one or more annotations, comments to a PDF document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AddPdfAnnotationRequest(); // \Swagger\Client\Model\AddPdfAnnotationRequest | 

try {
    $result = $apiInstance->editPdfAddAnnotations($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfAddAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AddPdfAnnotationRequest**](../Model/AddPdfAnnotationRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfConvertToPdfA**
> string editPdfConvertToPdfA($input_file, $conformance_level)

Convert a PDF file to PDF/A

Converts the input PDF file to a PDF/A-1b or PDF/A-2b standardized PDF.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$conformance_level = "conformance_level_example"; // string | Optional: Select the conformance level for PDF/A - specify '1b' for PDF/A-1b or specify '2b' for PDF/A-2b; default is PDF/A-1b

try {
    $result = $apiInstance->editPdfConvertToPdfA($input_file, $conformance_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfConvertToPdfA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **conformance_level** | **string**| Optional: Select the conformance level for PDF/A - specify &#39;1b&#39; for PDF/A-1b or specify &#39;2b&#39; for PDF/A-2b; default is PDF/A-1b | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfDecrypt**
> string editPdfDecrypt($password, $input_file)

Decrypt and password-protect a PDF

Decrypt a PDF document with a password.  Decrypted PDF will no longer require a password to open.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password = "password_example"; // string | Valid password for the PDF file
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editPdfDecrypt($password, $input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfDecrypt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password** | **string**| Valid password for the PDF file |
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfDeletePages**
> string editPdfDeletePages($input_file, $page_start, $page_end)

Remove, delete pages from a PDF document

Remove one or more pages from a PDF document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$page_start = 56; // int | Page number (1 based) to start deleting pages from (inclusive).
$page_end = 56; // int | Page number (1 based) to stop deleting pages from (inclusive).

try {
    $result = $apiInstance->editPdfDeletePages($input_file, $page_start, $page_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfDeletePages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **page_start** | **int**| Page number (1 based) to start deleting pages from (inclusive). |
 **page_end** | **int**| Page number (1 based) to stop deleting pages from (inclusive). |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfDeletePagesBatchJob**
> \Swagger\Client\Model\EditPdfBatchJobCreateResult editPdfDeletePagesBatchJob($input_file, $page_start, $page_end)

Remove, delete pages from a PDF document as Batch Job

Remove one or more pages from a PDF document.  Runs as a batch job async and returns a batch job ID that you can check the status of to get the result.  Requires Cloudmersive Private Cloud or Managed Instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$page_start = 56; // int | Page number (1 based) to start deleting pages from (inclusive).
$page_end = 56; // int | Page number (1 based) to stop deleting pages from (inclusive).

try {
    $result = $apiInstance->editPdfDeletePagesBatchJob($input_file, $page_start, $page_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfDeletePagesBatchJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **page_start** | **int**| Page number (1 based) to start deleting pages from (inclusive). |
 **page_end** | **int**| Page number (1 based) to stop deleting pages from (inclusive). |

### Return type

[**\Swagger\Client\Model\EditPdfBatchJobCreateResult**](../Model/EditPdfBatchJobCreateResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfEncrypt**
> string editPdfEncrypt($input_file, $user_password, $owner_password, $encryption_key_length)

Encrypt and password-protect a PDF

Encrypt a PDF document with a password.  Set an owner password to control owner (editor/creator) permissions, and set a user (reader) password to control the viewer of the PDF.  Set the password fields null to omit the given password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$user_password = "user_password_example"; // string | Password of a user (reader) of the PDF file
$owner_password = "owner_password_example"; // string | Password of a owner (creator/editor) of the PDF file
$encryption_key_length = "encryption_key_length_example"; // string | Possible values are \"128\" (128-bit RC4 encryption) and \"256\" (256-bit AES encryption).  Default is 256.

try {
    $result = $apiInstance->editPdfEncrypt($input_file, $user_password, $owner_password, $encryption_key_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfEncrypt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **user_password** | **string**| Password of a user (reader) of the PDF file | [optional]
 **owner_password** | **string**| Password of a owner (creator/editor) of the PDF file | [optional]
 **encryption_key_length** | **string**| Possible values are \&quot;128\&quot; (128-bit RC4 encryption) and \&quot;256\&quot; (256-bit AES encryption).  Default is 256. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfGetAnnotations**
> \Swagger\Client\Model\GetPdfAnnotationsResult editPdfGetAnnotations($input_file)

Get PDF annotations, including comments in the document

Enumerates the annotations, including comments and notes, in a PDF document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editPdfGetAnnotations($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfGetAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\GetPdfAnnotationsResult**](../Model/GetPdfAnnotationsResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfGetAsyncJobStatus**
> \Swagger\Client\Model\EditPdfJobStatusResult editPdfGetAsyncJobStatus($async_job_id)

Get the status and result of a PDF Batch Job

Returns the result of the Async Job - possible states can be STARTED or COMPLETED.  This API is only available for Cloudmersive Managed Instance and Private Cloud deployments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$async_job_id = "async_job_id_example"; // string | 

try {
    $result = $apiInstance->editPdfGetAsyncJobStatus($async_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfGetAsyncJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async_job_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EditPdfJobStatusResult**](../Model/EditPdfJobStatusResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfGetFormFields**
> \Swagger\Client\Model\PdfFormFields editPdfGetFormFields($input_file)

Gets PDF Form fields and values

Encrypt a PDF document with a password.  Set an owner password to control owner (editor/creator) permissions, and set a user (reader) password to control the viewer of the PDF.  Set the password fields null to omit the given password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editPdfGetFormFields($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfGetFormFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\PdfFormFields**](../Model/PdfFormFields.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfGetMetadata**
> \Swagger\Client\Model\PdfMetadata editPdfGetMetadata($input_file)

Get PDF document metadata

Returns the metadata from the PDF document, including Title, Author, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editPdfGetMetadata($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfGetMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\PdfMetadata**](../Model/PdfMetadata.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfGetPdfTextByPages**
> \Swagger\Client\Model\PdfTextByPageResult editPdfGetPdfTextByPages($input_file, $text_formatting_mode)

Get text in a PDF document by page

Gets the text in a PDF by page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$text_formatting_mode = "text_formatting_mode_example"; // string | Optional; specify how whitespace should be handled when converting the document to text.  Possible values are 'preserveWhitespace' which will attempt to preserve whitespace in the document and relative positioning of text within the document, and 'minimizeWhitespace' which will not insert additional spaces into the document in most cases.  Default is 'preserveWhitespace'.

try {
    $result = $apiInstance->editPdfGetPdfTextByPages($input_file, $text_formatting_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfGetPdfTextByPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **text_formatting_mode** | **string**| Optional; specify how whitespace should be handled when converting the document to text.  Possible values are &#39;preserveWhitespace&#39; which will attempt to preserve whitespace in the document and relative positioning of text within the document, and &#39;minimizeWhitespace&#39; which will not insert additional spaces into the document in most cases.  Default is &#39;preserveWhitespace&#39;. | [optional]

### Return type

[**\Swagger\Client\Model\PdfTextByPageResult**](../Model/PdfTextByPageResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfInsertPages**
> string editPdfInsertPages($source_file, $destination_file, $page_start_source, $page_end_source, $page_insert_before_desitnation)

Insert, copy pages from one PDF document into another

Copy one or more pages from one PDF document (source document) and insert them into a second PDF document (destination document).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Source PDF file to copy pages from.
$destination_file = "/path/to/file.txt"; // \SplFileObject | Destination PDF file to copy pages into.
$page_start_source = 56; // int | Page number (1 based) to start copying pages from (inclusive) in the Source file.
$page_end_source = 56; // int | Page number (1 based) to stop copying pages pages from (inclusive) in the Source file.
$page_insert_before_desitnation = 56; // int | Page number (1 based) to insert the pages before in the Destination file.

try {
    $result = $apiInstance->editPdfInsertPages($source_file, $destination_file, $page_start_source, $page_end_source, $page_insert_before_desitnation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfInsertPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject**| Source PDF file to copy pages from. |
 **destination_file** | **\SplFileObject**| Destination PDF file to copy pages into. |
 **page_start_source** | **int**| Page number (1 based) to start copying pages from (inclusive) in the Source file. |
 **page_end_source** | **int**| Page number (1 based) to stop copying pages pages from (inclusive) in the Source file. |
 **page_insert_before_desitnation** | **int**| Page number (1 based) to insert the pages before in the Destination file. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfInsertPagesBatchJob**
> \Swagger\Client\Model\EditPdfBatchJobCreateResult editPdfInsertPagesBatchJob($source_file, $destination_file, $page_start_source, $page_end_source, $page_insert_before_desitnation)

Insert, copy pages from one PDF document into another as a batch job

Copy one or more pages from one PDF document (source document) and insert them into a second PDF document (destination document).  Runs as a batch job async and returns a batch job ID that you can check the status of to get the result.  Requires Cloudmersive Private Cloud or Managed Instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_file = "/path/to/file.txt"; // \SplFileObject | Source PDF file to copy pages from.
$destination_file = "/path/to/file.txt"; // \SplFileObject | Destination PDF file to copy pages into.
$page_start_source = 56; // int | Page number (1 based) to start copying pages from (inclusive) in the Source file.
$page_end_source = 56; // int | Page number (1 based) to stop copying pages pages from (inclusive) in the Source file.
$page_insert_before_desitnation = 56; // int | Page number (1 based) to insert the pages before in the Destination file.

try {
    $result = $apiInstance->editPdfInsertPagesBatchJob($source_file, $destination_file, $page_start_source, $page_end_source, $page_insert_before_desitnation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfInsertPagesBatchJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_file** | **\SplFileObject**| Source PDF file to copy pages from. |
 **destination_file** | **\SplFileObject**| Destination PDF file to copy pages into. |
 **page_start_source** | **int**| Page number (1 based) to start copying pages from (inclusive) in the Source file. |
 **page_end_source** | **int**| Page number (1 based) to stop copying pages pages from (inclusive) in the Source file. |
 **page_insert_before_desitnation** | **int**| Page number (1 based) to insert the pages before in the Destination file. |

### Return type

[**\Swagger\Client\Model\EditPdfBatchJobCreateResult**](../Model/EditPdfBatchJobCreateResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfLinearize**
> string editPdfLinearize($input_file)

Linearize and optimize a PDF for streaming download

Linearizes the content of a PDF to optimize it for streaming download, particularly over web streaming.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editPdfLinearize($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfLinearize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfRasterize**
> string editPdfRasterize($input_file, $dpi)

Rasterize a PDF to an image-based PDF

Rasterize a PDF into an image-based PDF.  The output is a PDF where each page is comprised of a high-resolution image, with all text, figures and other components removed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$dpi = 56; // int | Optional; configures the pixel density in Dots per Inch (DPI) (default is 300).  This parameter can only be used with Cloudmersive Managed Instance and Private Cloud.

try {
    $result = $apiInstance->editPdfRasterize($input_file, $dpi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfRasterize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **dpi** | **int**| Optional; configures the pixel density in Dots per Inch (DPI) (default is 300).  This parameter can only be used with Cloudmersive Managed Instance and Private Cloud. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfRasterizeBatchJob**
> \Swagger\Client\Model\EditPdfBatchJobCreateResult editPdfRasterizeBatchJob($input_file)

Rasterize a PDF to an image-based PDF as Batch Job

Rasterize a PDF into an image-based PDF.  The output is a PDF where each page is comprised of a high-resolution image, with all text, figures and other components removed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editPdfRasterizeBatchJob($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfRasterizeBatchJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\EditPdfBatchJobCreateResult**](../Model/EditPdfBatchJobCreateResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfReduceFileSize**
> string editPdfReduceFileSize($input_file, $quality)

Reduce the file size and optimize a PDF

Reduces the file size and optimizes the content of a PDF to minimize its file size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$quality = 8.14; // float | Quality level for the images in the PDF, ranging from 0.0 (low quality) to 1.0 (high quality); default is 0.3

try {
    $result = $apiInstance->editPdfReduceFileSize($input_file, $quality);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfReduceFileSize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **quality** | **float**| Quality level for the images in the PDF, ranging from 0.0 (low quality) to 1.0 (high quality); default is 0.3 | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfRemoveAllAnnotations**
> string editPdfRemoveAllAnnotations($input_file)

Remove all PDF annotations, including comments in the document

Removes all of the annotations, including comments and notes, in a PDF document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editPdfRemoveAllAnnotations($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfRemoveAllAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfRemoveAnnotationItem**
> string editPdfRemoveAnnotationItem($input_file, $annotation_index)

Remove a specific PDF annotation, comment in the document

Removes a specific annotation in a PDF document, using the AnnotationIndex.  To enumerate AnnotationIndex for all of the annotations in the PDF document, use the /edit/pdf/annotations/list API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$annotation_index = 56; // int | The 0-based index of the annotation in the document

try {
    $result = $apiInstance->editPdfRemoveAnnotationItem($input_file, $annotation_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfRemoveAnnotationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **annotation_index** | **int**| The 0-based index of the annotation in the document |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfResize**
> string editPdfResize($input_file, $paper_size)

Change PDF Document's Paper Size

Resizes a PDF document's paper size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$paper_size = "paper_size_example"; // string | The desired paper size for the resized PDF document. Size ranges from A7 (smallest) to A0 (largest).

try {
    $result = $apiInstance->editPdfResize($input_file, $paper_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfResize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **paper_size** | **string**| The desired paper size for the resized PDF document. Size ranges from A7 (smallest) to A0 (largest). |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfRotateAllPages**
> string editPdfRotateAllPages($input_file, $rotation_angle)

Rotate all pages in a PDF document

Rotate all of the pages in a PDF document by a multiple of 90 degrees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$rotation_angle = 56; // int | The angle to rotate the page in degrees, must be a multiple of 90 degrees, e.g. 90, 180, 270, or -90, -180, -270, etc.

try {
    $result = $apiInstance->editPdfRotateAllPages($input_file, $rotation_angle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfRotateAllPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **rotation_angle** | **int**| The angle to rotate the page in degrees, must be a multiple of 90 degrees, e.g. 90, 180, 270, or -90, -180, -270, etc. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfRotatePageRange**
> string editPdfRotatePageRange($input_file, $rotation_angle, $page_start, $page_end)

Rotate a range, subset of pages in a PDF document

Rotate a range of specific pages in a PDF document by a multiple of 90 degrees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$rotation_angle = 56; // int | The angle to rotate the page in degrees, must be a multiple of 90 degrees, e.g. 90, 180, 270, or -90, -180, -270, etc.
$page_start = 56; // int | Page number (1 based) to start rotating pages from (inclusive).
$page_end = 56; // int | Page number (1 based) to stop rotating pages from (inclusive).

try {
    $result = $apiInstance->editPdfRotatePageRange($input_file, $rotation_angle, $page_start, $page_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfRotatePageRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **rotation_angle** | **int**| The angle to rotate the page in degrees, must be a multiple of 90 degrees, e.g. 90, 180, 270, or -90, -180, -270, etc. |
 **page_start** | **int**| Page number (1 based) to start rotating pages from (inclusive). |
 **page_end** | **int**| Page number (1 based) to stop rotating pages from (inclusive). |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfSetFormFields**
> string editPdfSetFormFields($field_values)

Sets ands fills PDF Form field values

Fill in the form fields in a PDF form with specific values.  Use form/get-fields to enumerate the available fields and their data types in an input form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_values = new \Swagger\Client\Model\SetPdfFormFieldsRequest(); // \Swagger\Client\Model\SetPdfFormFieldsRequest | 

try {
    $result = $apiInstance->editPdfSetFormFields($field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfSetFormFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_values** | [**\Swagger\Client\Model\SetPdfFormFieldsRequest**](../Model/SetPdfFormFieldsRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfSetMetadata**
> string editPdfSetMetadata($request)

Sets PDF document metadata

Sets (writes) metadata into the input PDF document, including Title, Author, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\SetPdfMetadataRequest(); // \Swagger\Client\Model\SetPdfMetadataRequest | 

try {
    $result = $apiInstance->editPdfSetMetadata($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfSetMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SetPdfMetadataRequest**](../Model/SetPdfMetadataRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfSetPermissions**
> string editPdfSetPermissions($owner_password, $user_password, $input_file, $encryption_key_length, $allow_printing, $allow_document_assembly, $allow_content_extraction, $allow_form_filling, $allow_editing, $allow_annotations, $allow_degraded_printing)

Encrypt, password-protect and set restricted permissions on a PDF

Encrypt a PDF document with a password, and set permissions on the PDF.  Set an owner password to control owner (editor/creator) permissions [required], and set a user (reader) password to control the viewer of the PDF [optional].  Set the reader password to null to omit the password.  Restrict or allow printing, copying content, document assembly, editing (read-only), form filling, modification of annotations, and degraded printing through document Digital Rights Management (DRM).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_password = "owner_password_example"; // string | Password of a owner (creator/editor) of the PDF file (required)
$user_password = "user_password_example"; // string | Password of a user (reader) of the PDF file (optional)
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$encryption_key_length = "encryption_key_length_example"; // string | Possible values are \"128\" (128-bit RC4 encryption) and \"256\" (256-bit AES encryption).  Default is 256.
$allow_printing = true; // bool | Set to false to disable printing through DRM.  Default is true.
$allow_document_assembly = true; // bool | Set to false to disable document assembly through DRM.  Default is true.
$allow_content_extraction = true; // bool | Set to false to disable copying/extracting content out of the PDF through DRM.  Default is true.
$allow_form_filling = true; // bool | Set to false to disable filling out form fields in the PDF through DRM.  Default is true.
$allow_editing = true; // bool | Set to false to disable editing in the PDF through DRM (making the PDF read-only).  Default is true.
$allow_annotations = true; // bool | Set to false to disable annotations and editing of annotations in the PDF through DRM.  Default is true.
$allow_degraded_printing = true; // bool | Set to false to disable degraded printing of the PDF through DRM.  Default is true.

try {
    $result = $apiInstance->editPdfSetPermissions($owner_password, $user_password, $input_file, $encryption_key_length, $allow_printing, $allow_document_assembly, $allow_content_extraction, $allow_form_filling, $allow_editing, $allow_annotations, $allow_degraded_printing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfSetPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner_password** | **string**| Password of a owner (creator/editor) of the PDF file (required) |
 **user_password** | **string**| Password of a user (reader) of the PDF file (optional) |
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **encryption_key_length** | **string**| Possible values are \&quot;128\&quot; (128-bit RC4 encryption) and \&quot;256\&quot; (256-bit AES encryption).  Default is 256. | [optional]
 **allow_printing** | **bool**| Set to false to disable printing through DRM.  Default is true. | [optional]
 **allow_document_assembly** | **bool**| Set to false to disable document assembly through DRM.  Default is true. | [optional]
 **allow_content_extraction** | **bool**| Set to false to disable copying/extracting content out of the PDF through DRM.  Default is true. | [optional]
 **allow_form_filling** | **bool**| Set to false to disable filling out form fields in the PDF through DRM.  Default is true. | [optional]
 **allow_editing** | **bool**| Set to false to disable editing in the PDF through DRM (making the PDF read-only).  Default is true. | [optional]
 **allow_annotations** | **bool**| Set to false to disable annotations and editing of annotations in the PDF through DRM.  Default is true. | [optional]
 **allow_degraded_printing** | **bool**| Set to false to disable degraded printing of the PDF through DRM.  Default is true. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfWatermarkText**
> string editPdfWatermarkText($watermark_text, $input_file, $font_name, $font_size, $font_color, $font_transparency)

Add a text watermark to a PDF

Adds a text watermark to a PDF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditPdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$watermark_text = "watermark_text_example"; // string | Watermark text to add to the PDF (required)
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$font_name = "font_name_example"; // string | Font Family Name for the watermark text; default is Times New Roman
$font_size = 8.14; // float | Font Size in points of the text; default is 150
$font_color = "font_color_example"; // string | Font color in hexadecimal or HTML color name; default is Red
$font_transparency = 8.14; // float | Font transparency between 0.0 (completely transparent) to 1.0 (fully opaque); default is 0.5

try {
    $result = $apiInstance->editPdfWatermarkText($watermark_text, $input_file, $font_name, $font_size, $font_color, $font_transparency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditPdfApi->editPdfWatermarkText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **watermark_text** | **string**| Watermark text to add to the PDF (required) |
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **font_name** | **string**| Font Family Name for the watermark text; default is Times New Roman | [optional]
 **font_size** | **float**| Font Size in points of the text; default is 150 | [optional]
 **font_color** | **string**| Font color in hexadecimal or HTML color name; default is Red | [optional]
 **font_transparency** | **float**| Font transparency between 0.0 (completely transparent) to 1.0 (fully opaque); default is 0.5 | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

