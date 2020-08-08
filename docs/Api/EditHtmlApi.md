# Swagger\Client\EditHtmlApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editHtmlHtmlAppendHeading**](EditHtmlApi.md#editHtmlHtmlAppendHeading) | **POST** /convert/edit/html/append/heading | Append a Heading to an HTML Document
[**editHtmlHtmlAppendImageFromUrl**](EditHtmlApi.md#editHtmlHtmlAppendImageFromUrl) | **POST** /convert/edit/html/append/image/from-url | Append an Image to an HTML Document from a URL
[**editHtmlHtmlAppendImageInline**](EditHtmlApi.md#editHtmlHtmlAppendImageInline) | **POST** /convert/edit/html/append/image/inline | Append a Base64 Inline Image to an HTML Document
[**editHtmlHtmlAppendParagraph**](EditHtmlApi.md#editHtmlHtmlAppendParagraph) | **POST** /convert/edit/html/append/paragraph | Append a Paragraph to an HTML Document
[**editHtmlHtmlCreateBlankDocument**](EditHtmlApi.md#editHtmlHtmlCreateBlankDocument) | **POST** /convert/edit/html/create/blank | Create a Blank HTML Document


# **editHtmlHtmlAppendHeading**
> string editHtmlHtmlAppendHeading($heading_text, $input_file, $input_file_url, $heading_size, $css_style)

Append a Heading to an HTML Document

Appends a heading to the end of an HTML document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditHtmlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$heading_text = "heading_text_example"; // string | The text content to be used in the header.
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.
$heading_size = 56; // int | Optional: The heading size number. Default is 1. Accepts values between 1 and 6.
$css_style = "css_style_example"; // string | Optional: The CSS style for the heading.

try {
    $result = $apiInstance->editHtmlHtmlAppendHeading($heading_text, $input_file, $input_file_url, $heading_size, $css_style);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlAppendHeading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **heading_text** | **string**| The text content to be used in the header. |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]
 **heading_size** | **int**| Optional: The heading size number. Default is 1. Accepts values between 1 and 6. | [optional]
 **css_style** | **string**| Optional: The CSS style for the heading. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlAppendImageFromUrl**
> string editHtmlHtmlAppendImageFromUrl($image_url, $input_file, $input_file_url, $css_style)

Append an Image to an HTML Document from a URL

Appends an image to the end of an HTML document using a URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditHtmlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_url = "image_url_example"; // string | The URL for the image.
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.
$css_style = "css_style_example"; // string | Optional: CSS style for the image.

try {
    $result = $apiInstance->editHtmlHtmlAppendImageFromUrl($image_url, $input_file, $input_file_url, $css_style);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlAppendImageFromUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_url** | **string**| The URL for the image. |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]
 **css_style** | **string**| Optional: CSS style for the image. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlAppendImageInline**
> string editHtmlHtmlAppendImageInline($input_file, $input_file_url, $image_file, $image_url, $css_style, $image_extension)

Append a Base64 Inline Image to an HTML Document

Appends a base64 inline image to the end of an HTML document from an input file or URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditHtmlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.
$image_file = "/path/to/file.txt"; // \SplFileObject | Optional: Image file to be appended as base64 inline image.
$image_url = "image_url_example"; // string | Optional: Image URL to be appended as base64 inline image.
$css_style = "css_style_example"; // string | Optional: CSS style for the image.
$image_extension = "image_extension_example"; // string | Optional: The extension (JPG, PNG, GIF, etc.) of the image file. Recommended if uploading an imageFile directly, instead of using imageUrl. If no extension can be determined, will default to JPG.

try {
    $result = $apiInstance->editHtmlHtmlAppendImageInline($input_file, $input_file_url, $image_file, $image_url, $css_style, $image_extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlAppendImageInline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]
 **image_file** | **\SplFileObject**| Optional: Image file to be appended as base64 inline image. | [optional]
 **image_url** | **string**| Optional: Image URL to be appended as base64 inline image. | [optional]
 **css_style** | **string**| Optional: CSS style for the image. | [optional]
 **image_extension** | **string**| Optional: The extension (JPG, PNG, GIF, etc.) of the image file. Recommended if uploading an imageFile directly, instead of using imageUrl. If no extension can be determined, will default to JPG. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlAppendParagraph**
> string editHtmlHtmlAppendParagraph($paragraph_text, $input_file, $input_file_url, $css_style)

Append a Paragraph to an HTML Document

Appends a paragraph to the end of an HTML document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditHtmlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paragraph_text = "paragraph_text_example"; // string | The text content to be used in the paragraph.
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.
$css_style = "css_style_example"; // string | Optional: The CSS style for the paragraph.

try {
    $result = $apiInstance->editHtmlHtmlAppendParagraph($paragraph_text, $input_file, $input_file_url, $css_style);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlAppendParagraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paragraph_text** | **string**| The text content to be used in the paragraph. |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]
 **css_style** | **string**| Optional: The CSS style for the paragraph. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlCreateBlankDocument**
> string editHtmlHtmlCreateBlankDocument($title, $css_url, $css_inline, $javascript_url, $javascript_inline)

Create a Blank HTML Document

Returns a blank HTML Document format file.  The file is blank, with no contents by default.  Use the optional input parameters to add various starting elements.  Use additional editing commands such as Append Header, Append Paragraph or Append Image from URL to populate the document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditHtmlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$title = "title_example"; // string | Optional: The title of the HTML document
$css_url = "css_url_example"; // string | Optional: A CSS style URL to be added to the document.
$css_inline = "css_inline_example"; // string | Optional: An inline CSS style to be added to the document.
$javascript_url = "javascript_url_example"; // string | Optional: Javascript URL to be added to the document.
$javascript_inline = "javascript_inline_example"; // string | Optional: Inline Javascript to be added to the document.

try {
    $result = $apiInstance->editHtmlHtmlCreateBlankDocument($title, $css_url, $css_inline, $javascript_url, $javascript_inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlCreateBlankDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| Optional: The title of the HTML document | [optional]
 **css_url** | **string**| Optional: A CSS style URL to be added to the document. | [optional]
 **css_inline** | **string**| Optional: An inline CSS style to be added to the document. | [optional]
 **javascript_url** | **string**| Optional: Javascript URL to be added to the document. | [optional]
 **javascript_inline** | **string**| Optional: Inline Javascript to be added to the document. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

