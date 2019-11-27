# Swagger\Client\EditPdfApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editPdfEncrypt**](EditPdfApi.md#editPdfEncrypt) | **POST** /convert/edit/pdf/encrypt | Encrypt and password-protect a PDF
[**editPdfGetFormFields**](EditPdfApi.md#editPdfGetFormFields) | **POST** /convert/edit/pdf/form/get-fields | Gets PDF Form fields and values
[**editPdfGetMetadata**](EditPdfApi.md#editPdfGetMetadata) | **POST** /convert/edit/pdf/get-metadata | Get PDF document metadata
[**editPdfRasterize**](EditPdfApi.md#editPdfRasterize) | **POST** /convert/edit/pdf/rasterize | Rasterize a PDF to an image-based PDF
[**editPdfSetFormFields**](EditPdfApi.md#editPdfSetFormFields) | **POST** /convert/edit/pdf/form/set-fields | Sets ands fills PDF Form field values
[**editPdfSetMetadata**](EditPdfApi.md#editPdfSetMetadata) | **POST** /convert/edit/pdf/set-metadata | Sets PDF document metadata
[**editPdfSetPermissions**](EditPdfApi.md#editPdfSetPermissions) | **POST** /convert/edit/pdf/encrypt/set-permissions | Encrypt, password-protect and set restricted permissions on a PDF
[**editPdfWatermarkText**](EditPdfApi.md#editPdfWatermarkText) | **POST** /convert/edit/pdf/watermark/text | Add a text watermark to a PDF


# **editPdfEncrypt**
> string editPdfEncrypt($input_file, $user_password, $owner_password)

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

try {
    $result = $apiInstance->editPdfEncrypt($input_file, $user_password, $owner_password);
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

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

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

# **editPdfRasterize**
> string editPdfRasterize($input_file)

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

try {
    $result = $apiInstance->editPdfRasterize($input_file);
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
> object editPdfSetMetadata($request)

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

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editPdfSetPermissions**
> string editPdfSetPermissions($owner_password, $input_file, $user_password, $allow_printing, $allow_document_assembly, $allow_content_extraction, $allow_form_filling, $allow_editing, $allow_annotations, $allow_degraded_printing)

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
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$user_password = "user_password_example"; // string | Password of a user (reader) of the PDF file (optional)
$allow_printing = true; // bool | Set to false to disable printing through DRM.  Default is true.
$allow_document_assembly = true; // bool | Set to false to disable document assembly through DRM.  Default is true.
$allow_content_extraction = true; // bool | Set to false to disable copying/extracting content out of the PDF through DRM.  Default is true.
$allow_form_filling = true; // bool | Set to false to disable filling out form fields in the PDF through DRM.  Default is true.
$allow_editing = true; // bool | Set to false to disable editing in the PDF through DRM (making the PDF read-only).  Default is true.
$allow_annotations = true; // bool | Set to false to disable annotations and editing of annotations in the PDF through DRM.  Default is true.
$allow_degraded_printing = true; // bool | Set to false to disable degraded printing of the PDF through DRM.  Default is true.

try {
    $result = $apiInstance->editPdfSetPermissions($owner_password, $input_file, $user_password, $allow_printing, $allow_document_assembly, $allow_content_extraction, $allow_form_filling, $allow_editing, $allow_annotations, $allow_degraded_printing);
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
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **user_password** | **string**| Password of a user (reader) of the PDF file (optional) | [optional]
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

