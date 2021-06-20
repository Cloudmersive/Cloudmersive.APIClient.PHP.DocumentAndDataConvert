# Swagger\Client\EditHtmlApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editHtmlHtmlAppendHeaderTag**](EditHtmlApi.md#editHtmlHtmlAppendHeaderTag) | **POST** /convert/edit/html/head/append/tag | Append an HTML tag to the HEAD section of an HTML Document
[**editHtmlHtmlAppendHeading**](EditHtmlApi.md#editHtmlHtmlAppendHeading) | **POST** /convert/edit/html/append/heading | Append a Heading to an HTML Document
[**editHtmlHtmlAppendImageFromUrl**](EditHtmlApi.md#editHtmlHtmlAppendImageFromUrl) | **POST** /convert/edit/html/append/image/from-url | Append an Image to an HTML Document from a URL
[**editHtmlHtmlAppendImageInline**](EditHtmlApi.md#editHtmlHtmlAppendImageInline) | **POST** /convert/edit/html/append/image/inline | Append a Base64 Inline Image to an HTML Document
[**editHtmlHtmlAppendParagraph**](EditHtmlApi.md#editHtmlHtmlAppendParagraph) | **POST** /convert/edit/html/append/paragraph | Append a Paragraph to an HTML Document
[**editHtmlHtmlCreateBlankDocument**](EditHtmlApi.md#editHtmlHtmlCreateBlankDocument) | **POST** /convert/edit/html/create/blank | Create a Blank HTML Document
[**editHtmlHtmlGetLanguage**](EditHtmlApi.md#editHtmlHtmlGetLanguage) | **POST** /convert/edit/html/head/get/language | Gets the language for the HTML document
[**editHtmlHtmlGetLinks**](EditHtmlApi.md#editHtmlHtmlGetLinks) | **POST** /convert/edit/html/extract/links | Extract resolved link URLs from HTML File
[**editHtmlHtmlGetRelCanonical**](EditHtmlApi.md#editHtmlHtmlGetRelCanonical) | **POST** /convert/edit/html/head/get/rel-canonical-url | Gets the rel canonical URL for the HTML document
[**editHtmlHtmlGetSitemap**](EditHtmlApi.md#editHtmlHtmlGetSitemap) | **POST** /convert/edit/html/head/get/sitemap-url | Gets the sitemap URL for the HTML document
[**editHtmlHtmlSetLanguage**](EditHtmlApi.md#editHtmlHtmlSetLanguage) | **POST** /convert/edit/html/head/set/language | Sets the language for the HTML document
[**editHtmlHtmlSetRelCanonical**](EditHtmlApi.md#editHtmlHtmlSetRelCanonical) | **POST** /convert/edit/html/head/set/rel-canonical-url | Sets the rel canonical URL for the HTML document
[**editHtmlHtmlSetSitemapUrl**](EditHtmlApi.md#editHtmlHtmlSetSitemapUrl) | **POST** /convert/edit/html/head/set/sitemap-url | Sets the sitemap URL for the HTML document


# **editHtmlHtmlAppendHeaderTag**
> string editHtmlHtmlAppendHeaderTag($html_tag, $input_file, $input_file_url)

Append an HTML tag to the HEAD section of an HTML Document

Appends an HTML tag to the HEAD section of an HTML document.

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
$html_tag = "html_tag_example"; // string | The HTML tag to append.
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.

try {
    $result = $apiInstance->editHtmlHtmlAppendHeaderTag($html_tag, $input_file, $input_file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlAppendHeaderTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **html_tag** | **string**| The HTML tag to append. |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

# **editHtmlHtmlGetLanguage**
> \Swagger\Client\Model\HtmlGetLanguageResult editHtmlHtmlGetLanguage($input_file, $input_file_url)

Gets the language for the HTML document

Retrieves the language code (e.g. \"en\" or \"de\") of an HTML document.

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

try {
    $result = $apiInstance->editHtmlHtmlGetLanguage($input_file, $input_file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlGetLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]

### Return type

[**\Swagger\Client\Model\HtmlGetLanguageResult**](../Model/HtmlGetLanguageResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlGetLinks**
> \Swagger\Client\Model\HtmlGetLinksResponse editHtmlHtmlGetLinks($input_file, $input_file_url, $base_url)

Extract resolved link URLs from HTML File

Extracts the resolved link URLs, fully-qualified if possible, from an input HTML file.

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
$base_url = "base_url_example"; // string | Optional: Base URL of the page, such as https://mydomain.com

try {
    $result = $apiInstance->editHtmlHtmlGetLinks($input_file, $input_file_url, $base_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlGetLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]
 **base_url** | **string**| Optional: Base URL of the page, such as https://mydomain.com | [optional]

### Return type

[**\Swagger\Client\Model\HtmlGetLinksResponse**](../Model/HtmlGetLinksResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlGetRelCanonical**
> \Swagger\Client\Model\HtmlGetRelCanonicalUrlResult editHtmlHtmlGetRelCanonical($input_file, $input_file_url)

Gets the rel canonical URL for the HTML document

Gets the rel canonical URL of an HTML document.

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

try {
    $result = $apiInstance->editHtmlHtmlGetRelCanonical($input_file, $input_file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlGetRelCanonical: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]

### Return type

[**\Swagger\Client\Model\HtmlGetRelCanonicalUrlResult**](../Model/HtmlGetRelCanonicalUrlResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlGetSitemap**
> \Swagger\Client\Model\HtmlGetSitemapUrlResult editHtmlHtmlGetSitemap($input_file, $input_file_url)

Gets the sitemap URL for the HTML document

Gets the sitemap link URL of an HTML document.

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

try {
    $result = $apiInstance->editHtmlHtmlGetSitemap($input_file, $input_file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlGetSitemap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]

### Return type

[**\Swagger\Client\Model\HtmlGetSitemapUrlResult**](../Model/HtmlGetSitemapUrlResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlSetLanguage**
> string editHtmlHtmlSetLanguage($language_code, $input_file, $input_file_url)

Sets the language for the HTML document

Sets the language code of an HTML document.

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
$language_code = "language_code_example"; // string | The HTML langauge code to set.
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.

try {
    $result = $apiInstance->editHtmlHtmlSetLanguage($language_code, $input_file, $input_file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlSetLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language_code** | **string**| The HTML langauge code to set. |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlSetRelCanonical**
> string editHtmlHtmlSetRelCanonical($canonical_url, $input_file, $input_file_url)

Sets the rel canonical URL for the HTML document

Sets the rel canonical URL of an HTML document.  This is useful for telling search engines and other indexers which pages are duplicates of eachother; any pages with the rel=canonical tag will be treated as duplicates of the canonical URL.

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
$canonical_url = "canonical_url_example"; // string | The HTML canonical URL to set.
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.

try {
    $result = $apiInstance->editHtmlHtmlSetRelCanonical($canonical_url, $input_file, $input_file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlSetRelCanonical: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **canonical_url** | **string**| The HTML canonical URL to set. |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editHtmlHtmlSetSitemapUrl**
> string editHtmlHtmlSetSitemapUrl($sitemap_url, $input_file, $input_file_url)

Sets the sitemap URL for the HTML document

Sets the sitemap URL of an HTML document.

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
$sitemap_url = "sitemap_url_example"; // string | The HTML sitemap URL to set.
$input_file = "/path/to/file.txt"; // \SplFileObject | Optional: Input file to perform the operation on.
$input_file_url = "input_file_url_example"; // string | Optional: URL of a file to operate on as input.

try {
    $result = $apiInstance->editHtmlHtmlSetSitemapUrl($sitemap_url, $input_file, $input_file_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditHtmlApi->editHtmlHtmlSetSitemapUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sitemap_url** | **string**| The HTML sitemap URL to set. |
 **input_file** | **\SplFileObject**| Optional: Input file to perform the operation on. | [optional]
 **input_file_url** | **string**| Optional: URL of a file to operate on as input. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

