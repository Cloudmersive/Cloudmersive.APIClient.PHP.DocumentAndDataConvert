# Swagger\Client\ConvertWebApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertWebHtmlToDocx**](ConvertWebApi.md#convertWebHtmlToDocx) | **POST** /convert/html/to/docx | HTML to DOCX
[**convertWebHtmlToPdf**](ConvertWebApi.md#convertWebHtmlToPdf) | **POST** /convert/web/html/to/pdf | Convert HTML string to PDF
[**convertWebMdToHtml**](ConvertWebApi.md#convertWebMdToHtml) | **POST** /convert/web/md/to/html | Convert Markdown to HTML
[**convertWebUrlToPdf**](ConvertWebApi.md#convertWebUrlToPdf) | **POST** /convert/web/url/to/pdf | Convert a URL to PDF
[**convertWebUrlToScreenshot**](ConvertWebApi.md#convertWebUrlToScreenshot) | **POST** /convert/web/url/to/screenshot | Take screenshot of URL


# **convertWebHtmlToDocx**
> string convertWebHtmlToDocx($input_request)

HTML to DOCX

Convert HTML to Office Word Document (DOCX) format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_request = new \Swagger\Client\Model\HtmlToOfficeRequest(); // \Swagger\Client\Model\HtmlToOfficeRequest | 

try {
    $result = $apiInstance->convertWebHtmlToDocx($input_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertWebApi->convertWebHtmlToDocx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_request** | [**\Swagger\Client\Model\HtmlToOfficeRequest**](../Model/HtmlToOfficeRequest.md)|  |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertWebHtmlToPdf**
> object convertWebHtmlToPdf($input)

Convert HTML string to PDF

Fully renders a website and returns a PDF of the HTML.  Javascript, HTML5, CSS and other advanced features are all supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\HtmlToPdfRequest(); // \Swagger\Client\Model\HtmlToPdfRequest | HTML to PDF request parameters

try {
    $result = $apiInstance->convertWebHtmlToPdf($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertWebApi->convertWebHtmlToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\HtmlToPdfRequest**](../Model/HtmlToPdfRequest.md)| HTML to PDF request parameters |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertWebMdToHtml**
> \Swagger\Client\Model\HtmlMdResult convertWebMdToHtml($input_file)

Convert Markdown to HTML

Convert a markdown file (.md) to HTML

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->convertWebMdToHtml($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertWebApi->convertWebMdToHtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\HtmlMdResult**](../Model/HtmlMdResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertWebUrlToPdf**
> string convertWebUrlToPdf($input)

Convert a URL to PDF

Fully renders a website and returns a PDF of the full page.  Javascript, HTML5, CSS and other advanced features are all supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\ScreenshotRequest(); // \Swagger\Client\Model\ScreenshotRequest | URL to PDF request parameters

try {
    $result = $apiInstance->convertWebUrlToPdf($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertWebApi->convertWebUrlToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ScreenshotRequest**](../Model/ScreenshotRequest.md)| URL to PDF request parameters |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertWebUrlToScreenshot**
> string convertWebUrlToScreenshot($input)

Take screenshot of URL

Fully renders a website and returns a PNG screenshot of the full page image.  Javascript, HTML5, CSS and other advanced features are all supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertWebApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input = new \Swagger\Client\Model\ScreenshotRequest(); // \Swagger\Client\Model\ScreenshotRequest | Screenshot request parameters

try {
    $result = $apiInstance->convertWebUrlToScreenshot($input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertWebApi->convertWebUrlToScreenshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\Swagger\Client\Model\ScreenshotRequest**](../Model/ScreenshotRequest.md)| Screenshot request parameters |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

