# Swagger\Client\ZipArchiveApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**zipArchiveZipCreate**](ZipArchiveApi.md#zipArchiveZipCreate) | **POST** /convert/archive/zip/create | Compress files to create a new zip archive
[**zipArchiveZipCreateAdvanced**](ZipArchiveApi.md#zipArchiveZipCreateAdvanced) | **POST** /convert/archive/zip/create/advanced | Compress files and folders to create a new zip archive with advanced options
[**zipArchiveZipDecrypt**](ZipArchiveApi.md#zipArchiveZipDecrypt) | **POST** /convert/archive/zip/decrypt | Decrypt and remove password protection on a zip file
[**zipArchiveZipEncryptAdvanced**](ZipArchiveApi.md#zipArchiveZipEncryptAdvanced) | **POST** /convert/archive/zip/encrypt/advanced | Encrypt and password protect a zip file
[**zipArchiveZipExtract**](ZipArchiveApi.md#zipArchiveZipExtract) | **POST** /convert/archive/zip/extract | Extract, decompress files and folders from a zip archive


# **zipArchiveZipCreate**
> string zipArchiveZipCreate($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

Compress files to create a new zip archive

Create a new zip archive by compressing input files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZipArchiveApi(
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
    $result = $apiInstance->zipArchiveZipCreate($input_file1, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipArchiveApi->zipArchiveZipCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input file to perform the operation on. |
 **input_file2** | **\SplFileObject**| Second input file to perform the operation on. | [optional]
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

# **zipArchiveZipCreateAdvanced**
> object zipArchiveZipCreateAdvanced($request)

Compress files and folders to create a new zip archive with advanced options

Create a new zip archive by compressing input files, folders and leverage advanced options to control the structure of the resulting zip archive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZipArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\CreateZipArchiveRequest(); // \Swagger\Client\Model\CreateZipArchiveRequest | Input request

try {
    $result = $apiInstance->zipArchiveZipCreateAdvanced($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipArchiveApi->zipArchiveZipCreateAdvanced: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CreateZipArchiveRequest**](../Model/CreateZipArchiveRequest.md)| Input request |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zipArchiveZipDecrypt**
> object zipArchiveZipDecrypt($input_file, $zip_password)

Decrypt and remove password protection on a zip file

Decrypts and removes password protection from an encrypted zip file with the specified password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZipArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$zip_password = "zip_password_example"; // string | Required; Password for the input archive

try {
    $result = $apiInstance->zipArchiveZipDecrypt($input_file, $zip_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipArchiveApi->zipArchiveZipDecrypt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **zip_password** | **string**| Required; Password for the input archive |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zipArchiveZipEncryptAdvanced**
> object zipArchiveZipEncryptAdvanced($encryption_request)

Encrypt and password protect a zip file

Encrypts and password protects an existing zip file with the specified password and encryption algorithm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZipArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encryption_request = new \Swagger\Client\Model\ZipEncryptionAdvancedRequest(); // \Swagger\Client\Model\ZipEncryptionAdvancedRequest | Encryption request

try {
    $result = $apiInstance->zipArchiveZipEncryptAdvanced($encryption_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipArchiveApi->zipArchiveZipEncryptAdvanced: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encryption_request** | [**\Swagger\Client\Model\ZipEncryptionAdvancedRequest**](../Model/ZipEncryptionAdvancedRequest.md)| Encryption request |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zipArchiveZipExtract**
> \Swagger\Client\Model\ZipExtractResponse zipArchiveZipExtract($input_file)

Extract, decompress files and folders from a zip archive

Extracts a zip archive by decompressing files, and folders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ZipArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->zipArchiveZipExtract($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipArchiveApi->zipArchiveZipExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\ZipExtractResponse**](../Model/ZipExtractResponse.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

