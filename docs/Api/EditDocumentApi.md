# Swagger\Client\EditDocumentApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editDocumentBeginEditing**](EditDocumentApi.md#editDocumentBeginEditing) | **POST** /convert/edit/begin-editing | Begin editing a document
[**editDocumentDocxBody**](EditDocumentApi.md#editDocumentDocxBody) | **POST** /convert/edit/docx/get-body | Get body from a DOCX
[**editDocumentDocxGetHeadersAndFooters**](EditDocumentApi.md#editDocumentDocxGetHeadersAndFooters) | **POST** /convert/edit/docx/get-headers-and-footers | Get content of a footer from a DOCX
[**editDocumentDocxGetImages**](EditDocumentApi.md#editDocumentDocxGetImages) | **POST** /convert/edit/docx/get-images | Get images from a DOCX
[**editDocumentDocxGetSections**](EditDocumentApi.md#editDocumentDocxGetSections) | **POST** /convert/edit/docx/get-sections | Get sections from a DOCX
[**editDocumentDocxGetStyles**](EditDocumentApi.md#editDocumentDocxGetStyles) | **POST** /convert/edit/docx/get-styles | Get styles from a DOCX
[**editDocumentDocxGetTables**](EditDocumentApi.md#editDocumentDocxGetTables) | **POST** /convert/edit/docx/get-tables | Get tables in DOCX
[**editDocumentDocxInsertImage**](EditDocumentApi.md#editDocumentDocxInsertImage) | **POST** /convert/edit/docx/insert-image | Insert image into a DOCX
[**editDocumentDocxInsertParagraph**](EditDocumentApi.md#editDocumentDocxInsertParagraph) | **POST** /convert/edit/docx/insert-paragraph | Insert a new paragraph into a DOCX
[**editDocumentDocxInsertTable**](EditDocumentApi.md#editDocumentDocxInsertTable) | **POST** /convert/edit/docx/insert-table | Insert a new table into a DOCX
[**editDocumentDocxRemoveHeadersAndFooters**](EditDocumentApi.md#editDocumentDocxRemoveHeadersAndFooters) | **POST** /convert/edit/docx/remove-headers-and-footers | Remove headers and footers from DOCX
[**editDocumentDocxRemoveObject**](EditDocumentApi.md#editDocumentDocxRemoveObject) | **POST** /convert/edit/docx/remove-object | Delete any object in a DOCX
[**editDocumentDocxReplace**](EditDocumentApi.md#editDocumentDocxReplace) | **POST** /convert/edit/docx/replace-all | Replace string in DOCX
[**editDocumentDocxSetFooter**](EditDocumentApi.md#editDocumentDocxSetFooter) | **POST** /convert/edit/docx/set-footer | Set the footer in a DOCX
[**editDocumentDocxSetFooterAddPageNumber**](EditDocumentApi.md#editDocumentDocxSetFooterAddPageNumber) | **POST** /convert/edit/docx/set-footer/add-page-number | Add page number to footer in a DOCX
[**editDocumentDocxSetHeader**](EditDocumentApi.md#editDocumentDocxSetHeader) | **POST** /convert/edit/docx/set-header | Set the header in a DOCX
[**editDocumentFinishEditing**](EditDocumentApi.md#editDocumentFinishEditing) | **POST** /convert/edit/finish-editing | Download result from document editing
[**editDocumentPptxReplace**](EditDocumentApi.md#editDocumentPptxReplace) | **POST** /convert/edit/pptx/replace-all | Replace string in PPTX
[**editDocumentXlsxGetColumns**](EditDocumentApi.md#editDocumentXlsxGetColumns) | **POST** /convert/edit/xlsx/get-columns | Get rows and cells from a XLSX worksheet
[**editDocumentXlsxGetImages**](EditDocumentApi.md#editDocumentXlsxGetImages) | **POST** /convert/edit/xlsx/get-images | Get images from a XLSX worksheet
[**editDocumentXlsxGetRowsAndCells**](EditDocumentApi.md#editDocumentXlsxGetRowsAndCells) | **POST** /convert/edit/xlsx/get-rows-and-cells | Get rows and cells from a XLSX worksheet
[**editDocumentXlsxGetStyles**](EditDocumentApi.md#editDocumentXlsxGetStyles) | **POST** /convert/edit/xlsx/get-styles | Get styles from a XLSX worksheet
[**editDocumentXlsxGetWorksheets**](EditDocumentApi.md#editDocumentXlsxGetWorksheets) | **POST** /convert/edit/xlsx/get-worksheets | Get worksheets from a XLSX
[**editDocumentXlsxInsertWorksheet**](EditDocumentApi.md#editDocumentXlsxInsertWorksheet) | **POST** /convert/edit/xlsx/insert-worksheet | Insert a new worksheet into an XLSX spreadsheet


# **editDocumentBeginEditing**
> string editDocumentBeginEditing($input_file)

Begin editing a document

Uploads a document to Cloudmersive to begin a series of one or more editing operations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editDocumentBeginEditing($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentBeginEditing: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxBody**
> \Swagger\Client\Model\GetDocxBodyResponse editDocumentDocxBody($req_config)

Get body from a DOCX

Returns the body defined in the Word Document (DOCX) format file; this is the main content part of a DOCX document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\GetDocxBodyRequest(); // \Swagger\Client\Model\GetDocxBodyRequest | 

try {
    $result = $apiInstance->editDocumentDocxBody($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxBody: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\GetDocxBodyRequest**](../Model/GetDocxBodyRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetDocxBodyResponse**](../Model/GetDocxBodyResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxGetHeadersAndFooters**
> \Swagger\Client\Model\GetDocxHeadersAndFootersResponse editDocumentDocxGetHeadersAndFooters($req_config)

Get content of a footer from a DOCX

Returns the footer content from a Word Document (DOCX) format file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\GetDocxHeadersAndFootersRequest(); // \Swagger\Client\Model\GetDocxHeadersAndFootersRequest | 

try {
    $result = $apiInstance->editDocumentDocxGetHeadersAndFooters($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxGetHeadersAndFooters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\GetDocxHeadersAndFootersRequest**](../Model/GetDocxHeadersAndFootersRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetDocxHeadersAndFootersResponse**](../Model/GetDocxHeadersAndFootersResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxGetImages**
> \Swagger\Client\Model\GetDocxImagesResponse editDocumentDocxGetImages($req_config)

Get images from a DOCX

Returns the images defined in the Word Document (DOCX) format file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\GetDocxImagesRequest(); // \Swagger\Client\Model\GetDocxImagesRequest | 

try {
    $result = $apiInstance->editDocumentDocxGetImages($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxGetImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\GetDocxImagesRequest**](../Model/GetDocxImagesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetDocxImagesResponse**](../Model/GetDocxImagesResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxGetSections**
> \Swagger\Client\Model\GetDocxSectionsResponse editDocumentDocxGetSections($req_config)

Get sections from a DOCX

Returns the sections defined in the Word Document (DOCX) format file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\GetDocxSectionsRequest(); // \Swagger\Client\Model\GetDocxSectionsRequest | 

try {
    $result = $apiInstance->editDocumentDocxGetSections($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxGetSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\GetDocxSectionsRequest**](../Model/GetDocxSectionsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetDocxSectionsResponse**](../Model/GetDocxSectionsResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxGetStyles**
> \Swagger\Client\Model\GetDocxStylesResponse editDocumentDocxGetStyles($req_config)

Get styles from a DOCX

Returns the styles defined in the Word Document (DOCX) format file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\GetDocxStylesRequest(); // \Swagger\Client\Model\GetDocxStylesRequest | 

try {
    $result = $apiInstance->editDocumentDocxGetStyles($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxGetStyles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\GetDocxStylesRequest**](../Model/GetDocxStylesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetDocxStylesResponse**](../Model/GetDocxStylesResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxGetTables**
> \Swagger\Client\Model\GetDocxTablesResponse editDocumentDocxGetTables($req_config)

Get tables in DOCX

Returns all the table objects in an Office Word Document (docx)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\GetDocxTablesRequest(); // \Swagger\Client\Model\GetDocxTablesRequest | 

try {
    $result = $apiInstance->editDocumentDocxGetTables($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxGetTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\GetDocxTablesRequest**](../Model/GetDocxTablesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetDocxTablesResponse**](../Model/GetDocxTablesResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxInsertImage**
> \Swagger\Client\Model\DocxInsertImageResponse editDocumentDocxInsertImage($req_config)

Insert image into a DOCX

Set the footer in a Word Document (DOCX)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\DocxInsertImageRequest(); // \Swagger\Client\Model\DocxInsertImageRequest | 

try {
    $result = $apiInstance->editDocumentDocxInsertImage($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxInsertImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\DocxInsertImageRequest**](../Model/DocxInsertImageRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DocxInsertImageResponse**](../Model/DocxInsertImageResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxInsertParagraph**
> \Swagger\Client\Model\InsertDocxInsertParagraphResponse editDocumentDocxInsertParagraph($req_config)

Insert a new paragraph into a DOCX

Adds a new paragraph into a DOCX and returns the result.  You can insert at the beginning/end of a document, or before/after an existing object using its Path (location within the document).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\InsertDocxInsertParagraphRequest(); // \Swagger\Client\Model\InsertDocxInsertParagraphRequest | 

try {
    $result = $apiInstance->editDocumentDocxInsertParagraph($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxInsertParagraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\InsertDocxInsertParagraphRequest**](../Model/InsertDocxInsertParagraphRequest.md)|  |

### Return type

[**\Swagger\Client\Model\InsertDocxInsertParagraphResponse**](../Model/InsertDocxInsertParagraphResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxInsertTable**
> \Swagger\Client\Model\InsertDocxTablesResponse editDocumentDocxInsertTable($req_config)

Insert a new table into a DOCX

Adds a new table into a DOCX and returns the result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\InsertDocxTablesRequest(); // \Swagger\Client\Model\InsertDocxTablesRequest | 

try {
    $result = $apiInstance->editDocumentDocxInsertTable($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxInsertTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\InsertDocxTablesRequest**](../Model/InsertDocxTablesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\InsertDocxTablesResponse**](../Model/InsertDocxTablesResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxRemoveHeadersAndFooters**
> \Swagger\Client\Model\RemoveDocxHeadersAndFootersResponse editDocumentDocxRemoveHeadersAndFooters($req_config)

Remove headers and footers from DOCX

Remove all headers, or footers, or both from a Word Document (DOCX)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\RemoveDocxHeadersAndFootersRequest(); // \Swagger\Client\Model\RemoveDocxHeadersAndFootersRequest | 

try {
    $result = $apiInstance->editDocumentDocxRemoveHeadersAndFooters($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxRemoveHeadersAndFooters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\RemoveDocxHeadersAndFootersRequest**](../Model/RemoveDocxHeadersAndFootersRequest.md)|  |

### Return type

[**\Swagger\Client\Model\RemoveDocxHeadersAndFootersResponse**](../Model/RemoveDocxHeadersAndFootersResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxRemoveObject**
> \Swagger\Client\Model\DocxRemoveObjectResponse editDocumentDocxRemoveObject($req_config)

Delete any object in a DOCX

Delete any object, such as a paragraph, table, image, etc. from a Word Document (DOCX).  Pass in the Path of the object you would like to delete.  You can call other functions such as Get-Tables, Get-Images, Get-Body, etc. to get the paths of the objects in the document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\DocxRemoveObjectRequest(); // \Swagger\Client\Model\DocxRemoveObjectRequest | 

try {
    $result = $apiInstance->editDocumentDocxRemoveObject($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxRemoveObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\DocxRemoveObjectRequest**](../Model/DocxRemoveObjectRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DocxRemoveObjectResponse**](../Model/DocxRemoveObjectResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxReplace**
> string editDocumentDocxReplace($req_config)

Replace string in DOCX

Replace all instances of a string in an Office Word Document (docx)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\ReplaceStringRequest(); // \Swagger\Client\Model\ReplaceStringRequest | 

try {
    $result = $apiInstance->editDocumentDocxReplace($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\ReplaceStringRequest**](../Model/ReplaceStringRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxSetFooter**
> \Swagger\Client\Model\DocxSetFooterResponse editDocumentDocxSetFooter($req_config)

Set the footer in a DOCX

Set the footer in a Word Document (DOCX)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\DocxSetFooterRequest(); // \Swagger\Client\Model\DocxSetFooterRequest | 

try {
    $result = $apiInstance->editDocumentDocxSetFooter($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxSetFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\DocxSetFooterRequest**](../Model/DocxSetFooterRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DocxSetFooterResponse**](../Model/DocxSetFooterResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxSetFooterAddPageNumber**
> \Swagger\Client\Model\DocxSetFooterResponse editDocumentDocxSetFooterAddPageNumber($req_config)

Add page number to footer in a DOCX

Set the footer in a Word Document (DOCX) to contain a page number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\DocxSetFooterAddPageNumberRequest(); // \Swagger\Client\Model\DocxSetFooterAddPageNumberRequest | 

try {
    $result = $apiInstance->editDocumentDocxSetFooterAddPageNumber($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxSetFooterAddPageNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\DocxSetFooterAddPageNumberRequest**](../Model/DocxSetFooterAddPageNumberRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DocxSetFooterResponse**](../Model/DocxSetFooterResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentDocxSetHeader**
> \Swagger\Client\Model\DocxSetHeaderResponse editDocumentDocxSetHeader($req_config)

Set the header in a DOCX

Set the header in a Word Document (DOCX)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\DocxSetHeaderRequest(); // \Swagger\Client\Model\DocxSetHeaderRequest | 

try {
    $result = $apiInstance->editDocumentDocxSetHeader($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentDocxSetHeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\DocxSetHeaderRequest**](../Model/DocxSetHeaderRequest.md)|  |

### Return type

[**\Swagger\Client\Model\DocxSetHeaderResponse**](../Model/DocxSetHeaderResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentFinishEditing**
> string editDocumentFinishEditing($req_config)

Download result from document editing

Once done editing a document, download the result.  Begin editing a document by calling begin-editing, then perform operations, then call finish-editing to get the result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\FinishEditingRequest(); // \Swagger\Client\Model\FinishEditingRequest | 

try {
    $result = $apiInstance->editDocumentFinishEditing($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentFinishEditing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\FinishEditingRequest**](../Model/FinishEditingRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentPptxReplace**
> string editDocumentPptxReplace($req_config)

Replace string in PPTX

Replace all instances of a string in an Office PowerPoint Document (pptx)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_config = new \Swagger\Client\Model\ReplaceStringRequest(); // \Swagger\Client\Model\ReplaceStringRequest | 

try {
    $result = $apiInstance->editDocumentPptxReplace($req_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentPptxReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_config** | [**\Swagger\Client\Model\ReplaceStringRequest**](../Model/ReplaceStringRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentXlsxGetColumns**
> \Swagger\Client\Model\GetXlsxColumnsResponse editDocumentXlsxGetColumns($input)

Get rows and cells from a XLSX worksheet

Returns the rows and cells defined in the Excel Spreadsheet worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\GetXlsxColumnsRequest(); // \Swagger\Client\Model\GetXlsxColumnsRequest | 

try {
    $result = $apiInstance->editDocumentXlsxGetColumns($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentXlsxGetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\GetXlsxColumnsRequest**](../Model/GetXlsxColumnsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetXlsxColumnsResponse**](../Model/GetXlsxColumnsResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentXlsxGetImages**
> \Swagger\Client\Model\GetXlsxImagesResponse editDocumentXlsxGetImages($input)

Get images from a XLSX worksheet

Returns the images defined in the Excel Spreadsheet worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\GetXlsxImagesRequest(); // \Swagger\Client\Model\GetXlsxImagesRequest | 

try {
    $result = $apiInstance->editDocumentXlsxGetImages($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentXlsxGetImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\GetXlsxImagesRequest**](../Model/GetXlsxImagesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetXlsxImagesResponse**](../Model/GetXlsxImagesResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentXlsxGetRowsAndCells**
> \Swagger\Client\Model\GetXlsxRowsAndCellsResponse editDocumentXlsxGetRowsAndCells($input)

Get rows and cells from a XLSX worksheet

Returns the rows and cells defined in the Excel Spreadsheet worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\GetXlsxRowsAndCellsRequest(); // \Swagger\Client\Model\GetXlsxRowsAndCellsRequest | 

try {
    $result = $apiInstance->editDocumentXlsxGetRowsAndCells($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentXlsxGetRowsAndCells: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\GetXlsxRowsAndCellsRequest**](../Model/GetXlsxRowsAndCellsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetXlsxRowsAndCellsResponse**](../Model/GetXlsxRowsAndCellsResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentXlsxGetStyles**
> \Swagger\Client\Model\GetXlsxStylesResponse editDocumentXlsxGetStyles($input)

Get styles from a XLSX worksheet

Returns the style defined in the Excel Spreadsheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\GetXlsxStylesRequest(); // \Swagger\Client\Model\GetXlsxStylesRequest | 

try {
    $result = $apiInstance->editDocumentXlsxGetStyles($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentXlsxGetStyles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\GetXlsxStylesRequest**](../Model/GetXlsxStylesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetXlsxStylesResponse**](../Model/GetXlsxStylesResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentXlsxGetWorksheets**
> \Swagger\Client\Model\GetXlsxWorksheetsResponse editDocumentXlsxGetWorksheets($input)

Get worksheets from a XLSX

Returns the worksheets (tabs) defined in the Excel Spreadsheet (XLSX) format file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\GetXlsxWorksheetsRequest(); // \Swagger\Client\Model\GetXlsxWorksheetsRequest | 

try {
    $result = $apiInstance->editDocumentXlsxGetWorksheets($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentXlsxGetWorksheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\GetXlsxWorksheetsRequest**](../Model/GetXlsxWorksheetsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\GetXlsxWorksheetsResponse**](../Model/GetXlsxWorksheetsResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDocumentXlsxInsertWorksheet**
> \Swagger\Client\Model\InsertXlsxWorksheetResponse editDocumentXlsxInsertWorksheet($input)

Insert a new worksheet into an XLSX spreadsheet

Inserts a new worksheet into an Excel Spreadsheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\InsertXlsxWorksheetRequest(); // \Swagger\Client\Model\InsertXlsxWorksheetRequest | 

try {
    $result = $apiInstance->editDocumentXlsxInsertWorksheet($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditDocumentApi->editDocumentXlsxInsertWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\InsertXlsxWorksheetRequest**](../Model/InsertXlsxWorksheetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\InsertXlsxWorksheetResponse**](../Model/InsertXlsxWorksheetResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

