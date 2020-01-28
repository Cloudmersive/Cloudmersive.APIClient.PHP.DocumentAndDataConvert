# Swagger\Client\EditTextApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editTextBase64Decode**](EditTextApi.md#editTextBase64Decode) | **POST** /convert/edit/text/encoding/base64/decode | Base 64 decode, convert base 64 string to binary content
[**editTextBase64Detect**](EditTextApi.md#editTextBase64Detect) | **POST** /convert/edit/text/encoding/base64/detect | Detect, check if text string is base 64 encoded
[**editTextBase64Encode**](EditTextApi.md#editTextBase64Encode) | **POST** /convert/edit/text/encoding/base64/encode | Base 64 encode, convert binary or file data to a text string
[**editTextChangeLineEndings**](EditTextApi.md#editTextChangeLineEndings) | **POST** /convert/edit/text/line-endings/change | Set, change line endings of a text file
[**editTextDetectLineEndings**](EditTextApi.md#editTextDetectLineEndings) | **POST** /convert/edit/text/line-endings/detect | Detect line endings of a text file
[**editTextFindRegex**](EditTextApi.md#editTextFindRegex) | **POST** /convert/edit/text/find/regex | Find a regular expression regex in text input
[**editTextFindSimple**](EditTextApi.md#editTextFindSimple) | **POST** /convert/edit/text/find/string | Find a string in text input
[**editTextRemoveAllWhitespace**](EditTextApi.md#editTextRemoveAllWhitespace) | **POST** /convert/edit/text/remove/whitespace/all | Remove whitespace from text string
[**editTextRemoveHtml**](EditTextApi.md#editTextRemoveHtml) | **POST** /convert/edit/text/remove/html | Remove HTML from text string
[**editTextReplaceRegex**](EditTextApi.md#editTextReplaceRegex) | **POST** /convert/edit/text/replace/regex | Replace a string in text with a regex regular expression string
[**editTextReplaceSimple**](EditTextApi.md#editTextReplaceSimple) | **POST** /convert/edit/text/replace/string | Replace a string in text with another string value
[**editTextTextEncodingDetect**](EditTextApi.md#editTextTextEncodingDetect) | **POST** /convert/edit/text/encoding/detect | Detect text encoding of file
[**editTextTrimWhitespace**](EditTextApi.md#editTextTrimWhitespace) | **POST** /convert/edit/text/remove/whitespace/trim | Trim leading and trailing whitespace from text string


# **editTextBase64Decode**
> \Swagger\Client\Model\Base64DecodeResponse editTextBase64Decode($request)

Base 64 decode, convert base 64 string to binary content

Decodes / converts base 64 UTF-8 text string to binary content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\Base64DecodeRequest(); // \Swagger\Client\Model\Base64DecodeRequest | Input request

try {
    $result = $apiInstance->editTextBase64Decode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextBase64Decode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\Base64DecodeRequest**](../Model/Base64DecodeRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\Base64DecodeResponse**](../Model/Base64DecodeResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextBase64Detect**
> \Swagger\Client\Model\Base64DetectResponse editTextBase64Detect($request)

Detect, check if text string is base 64 encoded

Checks, detects if input string is base 64 encoded

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\Base64DetectRequest(); // \Swagger\Client\Model\Base64DetectRequest | Input request

try {
    $result = $apiInstance->editTextBase64Detect($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextBase64Detect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\Base64DetectRequest**](../Model/Base64DetectRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\Base64DetectResponse**](../Model/Base64DetectResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextBase64Encode**
> \Swagger\Client\Model\Base64EncodeResponse editTextBase64Encode($request)

Base 64 encode, convert binary or file data to a text string

Encodes / converts binary or file data to a text string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\Base64EncodeRequest(); // \Swagger\Client\Model\Base64EncodeRequest | Input request

try {
    $result = $apiInstance->editTextBase64Encode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextBase64Encode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\Base64EncodeRequest**](../Model/Base64EncodeRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\Base64EncodeResponse**](../Model/Base64EncodeResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextChangeLineEndings**
> \Swagger\Client\Model\ChangeLineEndingResponse editTextChangeLineEndings($line_ending_type, $input_file)

Set, change line endings of a text file

Sets the line ending type of a text file; set to Windows, Unix or Mac.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_ending_type = "line_ending_type_example"; // string | Required; 'Windows' will use carriage return and line feed, 'Unix' will use newline, and 'Mac' will use carriage return
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editTextChangeLineEndings($line_ending_type, $input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextChangeLineEndings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_ending_type** | **string**| Required; &#39;Windows&#39; will use carriage return and line feed, &#39;Unix&#39; will use newline, and &#39;Mac&#39; will use carriage return |
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\ChangeLineEndingResponse**](../Model/ChangeLineEndingResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextDetectLineEndings**
> \Swagger\Client\Model\DetectLineEndingsResponse editTextDetectLineEndings($input_file)

Detect line endings of a text file

Detect line ending type (Windows, Unix or Mac) of an input file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editTextDetectLineEndings($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextDetectLineEndings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\DetectLineEndingsResponse**](../Model/DetectLineEndingsResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextFindRegex**
> \Swagger\Client\Model\FindStringRegexResponse editTextFindRegex($request)

Find a regular expression regex in text input

Find all occurrences of the input regular expression in the input content, and returns the matches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\FindStringRegexRequest(); // \Swagger\Client\Model\FindStringRegexRequest | Input request

try {
    $result = $apiInstance->editTextFindRegex($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextFindRegex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FindStringRegexRequest**](../Model/FindStringRegexRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\FindStringRegexResponse**](../Model/FindStringRegexResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextFindSimple**
> \Swagger\Client\Model\FindStringSimpleResponse editTextFindSimple($request)

Find a string in text input

Finds all occurrences of the input string in the input content, and returns the matches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\FindStringSimpleRequest(); // \Swagger\Client\Model\FindStringSimpleRequest | Input request

try {
    $result = $apiInstance->editTextFindSimple($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextFindSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\FindStringSimpleRequest**](../Model/FindStringSimpleRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\FindStringSimpleResponse**](../Model/FindStringSimpleResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextRemoveAllWhitespace**
> \Swagger\Client\Model\RemoveWhitespaceFromTextResponse editTextRemoveAllWhitespace($request)

Remove whitespace from text string

Removes all whitespace from text, leaving behind only non-whitespace characters.  Whitespace includes newlines, spaces and other whitespace characters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RemoveWhitespaceFromTextRequest(); // \Swagger\Client\Model\RemoveWhitespaceFromTextRequest | Input request

try {
    $result = $apiInstance->editTextRemoveAllWhitespace($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextRemoveAllWhitespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RemoveWhitespaceFromTextRequest**](../Model/RemoveWhitespaceFromTextRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\RemoveWhitespaceFromTextResponse**](../Model/RemoveWhitespaceFromTextResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextRemoveHtml**
> \Swagger\Client\Model\RemoveHtmlFromTextResponse editTextRemoveHtml($request)

Remove HTML from text string

Removes HTML from text, leaving behind only text.  Formatted text will become plain text.  Important for protecting against HTML and Cross-Site-Scripting attacks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RemoveHtmlFromTextRequest(); // \Swagger\Client\Model\RemoveHtmlFromTextRequest | Input request

try {
    $result = $apiInstance->editTextRemoveHtml($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextRemoveHtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RemoveHtmlFromTextRequest**](../Model/RemoveHtmlFromTextRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\RemoveHtmlFromTextResponse**](../Model/RemoveHtmlFromTextResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextReplaceRegex**
> \Swagger\Client\Model\ReplaceStringRegexResponse editTextReplaceRegex($request)

Replace a string in text with a regex regular expression string

Replaces all occurrences of the input regular expression regex string in the input content, and returns the result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ReplaceStringRegexRequest(); // \Swagger\Client\Model\ReplaceStringRegexRequest | Input request

try {
    $result = $apiInstance->editTextReplaceRegex($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextReplaceRegex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ReplaceStringRegexRequest**](../Model/ReplaceStringRegexRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\ReplaceStringRegexResponse**](../Model/ReplaceStringRegexResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextReplaceSimple**
> \Swagger\Client\Model\ReplaceStringSimpleResponse editTextReplaceSimple($request)

Replace a string in text with another string value

Replaces all occurrences of the input string in the input content, and returns the result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ReplaceStringSimpleRequest(); // \Swagger\Client\Model\ReplaceStringSimpleRequest | Input request

try {
    $result = $apiInstance->editTextReplaceSimple($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextReplaceSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ReplaceStringSimpleRequest**](../Model/ReplaceStringSimpleRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\ReplaceStringSimpleResponse**](../Model/ReplaceStringSimpleResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextTextEncodingDetect**
> \Swagger\Client\Model\TextEncodingDetectResponse editTextTextEncodingDetect($input_file)

Detect text encoding of file

Checks text encoding of file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->editTextTextEncodingDetect($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextTextEncodingDetect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\TextEncodingDetectResponse**](../Model/TextEncodingDetectResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editTextTrimWhitespace**
> \Swagger\Client\Model\RemoveWhitespaceFromTextResponse editTextTrimWhitespace($request)

Trim leading and trailing whitespace from text string

Trim leading and trailing whitespace from text, leaving behind a trimmed string.  Whitespace includes newlines, spaces and other whitespace characters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EditTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\RemoveWhitespaceFromTextRequest(); // \Swagger\Client\Model\RemoveWhitespaceFromTextRequest | Input request

try {
    $result = $apiInstance->editTextTrimWhitespace($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditTextApi->editTextTrimWhitespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RemoveWhitespaceFromTextRequest**](../Model/RemoveWhitespaceFromTextRequest.md)| Input request |

### Return type

[**\Swagger\Client\Model\RemoveWhitespaceFromTextResponse**](../Model/RemoveWhitespaceFromTextResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

