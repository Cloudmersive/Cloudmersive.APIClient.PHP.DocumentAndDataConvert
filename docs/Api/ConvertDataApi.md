# Swagger\Client\ConvertDataApi

All URIs are relative to *https://api.cloudmersive.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertDataCsvToJson**](ConvertDataApi.md#convertDataCsvToJson) | **POST** /convert/csv/to/json | Convert CSV to JSON conversion
[**convertDataCsvToXml**](ConvertDataApi.md#convertDataCsvToXml) | **POST** /convert/csv/to/xml | Convert CSV to XML conversion
[**convertDataJsonStringToXml**](ConvertDataApi.md#convertDataJsonStringToXml) | **POST** /convert/json-string/to/xml | Convert JSON String to XML conversion
[**convertDataJsonToXml**](ConvertDataApi.md#convertDataJsonToXml) | **POST** /convert/json/to/xml | Convert JSON Object to XML conversion
[**convertDataXlsToJson**](ConvertDataApi.md#convertDataXlsToJson) | **POST** /convert/xls/to/json | Convert Excel (97-2003) XLS to JSON conversion
[**convertDataXlsxToJson**](ConvertDataApi.md#convertDataXlsxToJson) | **POST** /convert/xlsx/to/json | Convert Excel XLSX to JSON conversion
[**convertDataXlsxToXml**](ConvertDataApi.md#convertDataXlsxToXml) | **POST** /convert/xlsx/to/xml | Convert Excel XLSX to XML conversion
[**convertDataXmlEditAddAttributeWithXPath**](ConvertDataApi.md#convertDataXmlEditAddAttributeWithXPath) | **POST** /convert/xml/edit/xpath/add-attribute | Adds an attribute to all XML nodes matching XPath expression
[**convertDataXmlEditAddChildWithXPath**](ConvertDataApi.md#convertDataXmlEditAddChildWithXPath) | **POST** /convert/xml/edit/xpath/add-child | Adds an XML node as a child to XML nodes matching XPath expression
[**convertDataXmlEditRemoveAllChildNodesWithXPath**](ConvertDataApi.md#convertDataXmlEditRemoveAllChildNodesWithXPath) | **POST** /convert/xml/edit/xpath/remove-all-children | Removes, deletes all children of nodes matching XPath expression, but does not remove the nodes
[**convertDataXmlEditReplaceWithXPath**](ConvertDataApi.md#convertDataXmlEditReplaceWithXPath) | **POST** /convert/xml/edit/xpath/replace | Replaces XML nodes matching XPath expression with new node
[**convertDataXmlEditSetValueWithXPath**](ConvertDataApi.md#convertDataXmlEditSetValueWithXPath) | **POST** /convert/xml/edit/xpath/set-value | Sets the value contents of XML nodes matching XPath expression
[**convertDataXmlFilterWithXPath**](ConvertDataApi.md#convertDataXmlFilterWithXPath) | **POST** /convert/xml/select/xpath | Filter, select XML nodes using XPath expression, get results
[**convertDataXmlQueryWithXQuery**](ConvertDataApi.md#convertDataXmlQueryWithXQuery) | **POST** /convert/xml/query/xquery | Query an XML file using XQuery query, get results
[**convertDataXmlQueryWithXQueryMulti**](ConvertDataApi.md#convertDataXmlQueryWithXQueryMulti) | **POST** /convert/xml/query/xquery/multi | Query multiple XML files using XQuery query, get results
[**convertDataXmlRemoveWithXPath**](ConvertDataApi.md#convertDataXmlRemoveWithXPath) | **POST** /convert/xml/edit/xpath/remove | Remove, delete XML nodes and items matching XPath expression
[**convertDataXmlToJson**](ConvertDataApi.md#convertDataXmlToJson) | **POST** /convert/xml/to/json | Convert XML to JSON conversion
[**convertDataXmlTransformWithXsltToXml**](ConvertDataApi.md#convertDataXmlTransformWithXsltToXml) | **POST** /convert/xml/transform/xslt/to/xml | Transform XML document file with XSLT into a new XML document


# **convertDataCsvToJson**
> object convertDataCsvToJson($input_file, $column_names_from_first_row)

Convert CSV to JSON conversion

Convert a CSV file to a JSON object array

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$column_names_from_first_row = true; // bool | Optional; If true, the first row will be used as the labels for the columns; if false, columns will be named Column0, Column1, etc.  Default is true.  Set to false if you are not using column headings, or have an irregular column structure.

try {
    $result = $apiInstance->convertDataCsvToJson($input_file, $column_names_from_first_row);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataCsvToJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **column_names_from_first_row** | **bool**| Optional; If true, the first row will be used as the labels for the columns; if false, columns will be named Column0, Column1, etc.  Default is true.  Set to false if you are not using column headings, or have an irregular column structure. | [optional]

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataCsvToXml**
> string convertDataCsvToXml($input_file, $column_names_from_first_row)

Convert CSV to XML conversion

Convert a CSV file to a XML file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$column_names_from_first_row = true; // bool | Optional; If true, the first row will be used as the labels for the columns; if false, columns will be named Column0, Column1, etc.  Default is true.  Set to false if you are not using column headings, or have an irregular column structure.

try {
    $result = $apiInstance->convertDataCsvToXml($input_file, $column_names_from_first_row);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataCsvToXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |
 **column_names_from_first_row** | **bool**| Optional; If true, the first row will be used as the labels for the columns; if false, columns will be named Column0, Column1, etc.  Default is true.  Set to false if you are not using column headings, or have an irregular column structure. | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataJsonStringToXml**
> object convertDataJsonStringToXml($json_string)

Convert JSON String to XML conversion

Convert a JSON object into XML

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$json_string = "json_string_example"; // string | Input JSON String to convert to XML

try {
    $result = $apiInstance->convertDataJsonStringToXml($json_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataJsonStringToXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **json_string** | **string**| Input JSON String to convert to XML |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataJsonToXml**
> string convertDataJsonToXml($json_object)

Convert JSON Object to XML conversion

Convert a JSON object into XML

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$json_object = new \stdClass; // object | Input JSON Object to convert to XML

try {
    $result = $apiInstance->convertDataJsonToXml($json_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataJsonToXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **json_object** | **object**| Input JSON Object to convert to XML |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXlsToJson**
> object convertDataXlsToJson($input_file)

Convert Excel (97-2003) XLS to JSON conversion

Convert an Excel (97-2003) XLS file to a JSON object array

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->convertDataXlsToJson($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXlsToJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXlsxToJson**
> string convertDataXlsxToJson($input_file)

Convert Excel XLSX to JSON conversion

Convert an Excel XLSX file to a JSON object array

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->convertDataXlsxToJson($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXlsxToJson: ', $e->getMessage(), PHP_EOL;
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

# **convertDataXlsxToXml**
> string convertDataXlsxToXml($input_file)

Convert Excel XLSX to XML conversion

Convert an Excel XLSX file to a XML file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->convertDataXlsxToXml($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXlsxToXml: ', $e->getMessage(), PHP_EOL;
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

# **convertDataXmlEditAddAttributeWithXPath**
> \Swagger\Client\Model\XmlAddAttributeWithXPathResult convertDataXmlEditAddAttributeWithXPath($input_file, $x_path_expression, $xml_attribute_name, $xml_attribute_value)

Adds an attribute to all XML nodes matching XPath expression

Return the reuslts of editing an XML document by adding an attribute to all of the nodes that match an input XPath expression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input XML file to perform the operation on.
$x_path_expression = "x_path_expression_example"; // string | Valid XML XPath query expression
$xml_attribute_name = "xml_attribute_name_example"; // string | Name of the XML attribute to add
$xml_attribute_value = "xml_attribute_value_example"; // string | Value of the XML attribute to add

try {
    $result = $apiInstance->convertDataXmlEditAddAttributeWithXPath($input_file, $x_path_expression, $xml_attribute_name, $xml_attribute_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlEditAddAttributeWithXPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input XML file to perform the operation on. |
 **x_path_expression** | **string**| Valid XML XPath query expression |
 **xml_attribute_name** | **string**| Name of the XML attribute to add |
 **xml_attribute_value** | **string**| Value of the XML attribute to add |

### Return type

[**\Swagger\Client\Model\XmlAddAttributeWithXPathResult**](../Model/XmlAddAttributeWithXPathResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlEditAddChildWithXPath**
> \Swagger\Client\Model\XmlAddChildWithXPathResult convertDataXmlEditAddChildWithXPath($input_file, $x_path_expression, $xml_node_to_add)

Adds an XML node as a child to XML nodes matching XPath expression

Return the reuslts of editing an XML document by adding an XML node as a child to all of the nodes that match an input XPath expression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input XML file to perform the operation on.
$x_path_expression = "x_path_expression_example"; // string | Valid XML XPath query expression
$xml_node_to_add = "xml_node_to_add_example"; // string | XML Node to add as a child

try {
    $result = $apiInstance->convertDataXmlEditAddChildWithXPath($input_file, $x_path_expression, $xml_node_to_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlEditAddChildWithXPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input XML file to perform the operation on. |
 **x_path_expression** | **string**| Valid XML XPath query expression |
 **xml_node_to_add** | **string**| XML Node to add as a child |

### Return type

[**\Swagger\Client\Model\XmlAddChildWithXPathResult**](../Model/XmlAddChildWithXPathResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlEditRemoveAllChildNodesWithXPath**
> \Swagger\Client\Model\XmlRemoveAllChildrenWithXPathResult convertDataXmlEditRemoveAllChildNodesWithXPath($input_file, $x_path_expression)

Removes, deletes all children of nodes matching XPath expression, but does not remove the nodes

Return the reuslts of editing an XML document by removing all child nodes of the nodes that match an input XPath expression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input XML file to perform the operation on.
$x_path_expression = "x_path_expression_example"; // string | Valid XML XPath query expression

try {
    $result = $apiInstance->convertDataXmlEditRemoveAllChildNodesWithXPath($input_file, $x_path_expression);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlEditRemoveAllChildNodesWithXPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input XML file to perform the operation on. |
 **x_path_expression** | **string**| Valid XML XPath query expression |

### Return type

[**\Swagger\Client\Model\XmlRemoveAllChildrenWithXPathResult**](../Model/XmlRemoveAllChildrenWithXPathResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlEditReplaceWithXPath**
> \Swagger\Client\Model\XmlReplaceWithXPathResult convertDataXmlEditReplaceWithXPath($input_file, $x_path_expression, $xml_node_replacement)

Replaces XML nodes matching XPath expression with new node

Return the reuslts of editing an XML document by replacing all of the nodes that match an input XPath expression with a new XML node expression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input XML file to perform the operation on.
$x_path_expression = "x_path_expression_example"; // string | Valid XML XPath query expression
$xml_node_replacement = "xml_node_replacement_example"; // string | XML Node replacement content

try {
    $result = $apiInstance->convertDataXmlEditReplaceWithXPath($input_file, $x_path_expression, $xml_node_replacement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlEditReplaceWithXPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input XML file to perform the operation on. |
 **x_path_expression** | **string**| Valid XML XPath query expression |
 **xml_node_replacement** | **string**| XML Node replacement content |

### Return type

[**\Swagger\Client\Model\XmlReplaceWithXPathResult**](../Model/XmlReplaceWithXPathResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlEditSetValueWithXPath**
> \Swagger\Client\Model\XmlSetValueWithXPathResult convertDataXmlEditSetValueWithXPath($input_file, $x_path_expression, $xml_value)

Sets the value contents of XML nodes matching XPath expression

Return the reuslts of editing an XML document by setting the contents of all of the nodes that match an input XPath expression.  Supports elements and attributes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input XML file to perform the operation on.
$x_path_expression = "x_path_expression_example"; // string | Valid XML XPath query expression
$xml_value = "xml_value_example"; // string | XML Value to set into the matching XML nodes

try {
    $result = $apiInstance->convertDataXmlEditSetValueWithXPath($input_file, $x_path_expression, $xml_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlEditSetValueWithXPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input XML file to perform the operation on. |
 **x_path_expression** | **string**| Valid XML XPath query expression |
 **xml_value** | **string**| XML Value to set into the matching XML nodes |

### Return type

[**\Swagger\Client\Model\XmlSetValueWithXPathResult**](../Model/XmlSetValueWithXPathResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlFilterWithXPath**
> \Swagger\Client\Model\XmlFilterWithXPathResult convertDataXmlFilterWithXPath($x_path_expression, $input_file)

Filter, select XML nodes using XPath expression, get results

Return the reuslts of filtering, selecting an XML document with an XPath expression

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_path_expression = "x_path_expression_example"; // string | Valid XML XPath query expression
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->convertDataXmlFilterWithXPath($x_path_expression, $input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlFilterWithXPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_path_expression** | **string**| Valid XML XPath query expression |
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\XmlFilterWithXPathResult**](../Model/XmlFilterWithXPathResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlQueryWithXQuery**
> \Swagger\Client\Model\XmlQueryWithXQueryResult convertDataXmlQueryWithXQuery($input_file, $x_query)

Query an XML file using XQuery query, get results

Return the reuslts of querying a single XML document with an XQuery expression.  Supports XQuery 3.1 and earlier.  This API is optimized for a single XML document as input.  Provided XML document is automatically loaded as the default context; to access elements in the document, simply refer to them without a document reference, such as bookstore/book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input XML file to perform the operation on.
$x_query = "x_query_example"; // string | Valid XML XQuery 3.1 or earlier query expression; multi-line expressions are supported

try {
    $result = $apiInstance->convertDataXmlQueryWithXQuery($input_file, $x_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlQueryWithXQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input XML file to perform the operation on. |
 **x_query** | **string**| Valid XML XQuery 3.1 or earlier query expression; multi-line expressions are supported |

### Return type

[**\Swagger\Client\Model\XmlQueryWithXQueryResult**](../Model/XmlQueryWithXQueryResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlQueryWithXQueryMulti**
> \Swagger\Client\Model\XmlQueryWithXQueryMultiResult convertDataXmlQueryWithXQueryMulti($input_file1, $x_query, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10)

Query multiple XML files using XQuery query, get results

Return the reuslts of querying an XML document with an XQuery expression.  Supports XQuery 3.1 and earlier.  This API is optimized for multiple XML documents as input.  You can refer to the contents of a given document by name, for example doc(\"books.xml\") or doc(\"restaurants.xml\") if you included two input files named books.xml and restaurants.xml.  If input files contain no file name, they will default to file names input1.xml, input2.xml and so on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input XML file to perform the operation on.
$x_query = "x_query_example"; // string | Valid XML XQuery 3.1 or earlier query expression; multi-line expressions are supported
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input XML file to perform the operation on.
$input_file3 = "/path/to/file.txt"; // \SplFileObject | Third input XML file to perform the operation on.
$input_file4 = "/path/to/file.txt"; // \SplFileObject | Fourth input XML file to perform the operation on.
$input_file5 = "/path/to/file.txt"; // \SplFileObject | Fifth input XML file to perform the operation on.
$input_file6 = "/path/to/file.txt"; // \SplFileObject | Sixth input XML file to perform the operation on.
$input_file7 = "/path/to/file.txt"; // \SplFileObject | Seventh input XML file to perform the operation on.
$input_file8 = "/path/to/file.txt"; // \SplFileObject | Eighth input XML file to perform the operation on.
$input_file9 = "/path/to/file.txt"; // \SplFileObject | Ninth input XML file to perform the operation on.
$input_file10 = "/path/to/file.txt"; // \SplFileObject | Tenth input XML file to perform the operation on.

try {
    $result = $apiInstance->convertDataXmlQueryWithXQueryMulti($input_file1, $x_query, $input_file2, $input_file3, $input_file4, $input_file5, $input_file6, $input_file7, $input_file8, $input_file9, $input_file10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlQueryWithXQueryMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file1** | **\SplFileObject**| First input XML file to perform the operation on. |
 **x_query** | **string**| Valid XML XQuery 3.1 or earlier query expression; multi-line expressions are supported |
 **input_file2** | **\SplFileObject**| Second input XML file to perform the operation on. | [optional]
 **input_file3** | **\SplFileObject**| Third input XML file to perform the operation on. | [optional]
 **input_file4** | **\SplFileObject**| Fourth input XML file to perform the operation on. | [optional]
 **input_file5** | **\SplFileObject**| Fifth input XML file to perform the operation on. | [optional]
 **input_file6** | **\SplFileObject**| Sixth input XML file to perform the operation on. | [optional]
 **input_file7** | **\SplFileObject**| Seventh input XML file to perform the operation on. | [optional]
 **input_file8** | **\SplFileObject**| Eighth input XML file to perform the operation on. | [optional]
 **input_file9** | **\SplFileObject**| Ninth input XML file to perform the operation on. | [optional]
 **input_file10** | **\SplFileObject**| Tenth input XML file to perform the operation on. | [optional]

### Return type

[**\Swagger\Client\Model\XmlQueryWithXQueryMultiResult**](../Model/XmlQueryWithXQueryMultiResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlRemoveWithXPath**
> \Swagger\Client\Model\XmlRemoveWithXPathResult convertDataXmlRemoveWithXPath($x_path_expression, $input_file)

Remove, delete XML nodes and items matching XPath expression

Return the reuslts of editing an XML document by removing all of the nodes that match an input XPath expression

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_path_expression = "x_path_expression_example"; // string | Valid XML XPath query expression
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->convertDataXmlRemoveWithXPath($x_path_expression, $input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlRemoveWithXPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_path_expression** | **string**| Valid XML XPath query expression |
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

[**\Swagger\Client\Model\XmlRemoveWithXPathResult**](../Model/XmlRemoveWithXPathResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlToJson**
> object convertDataXmlToJson($input_file)

Convert XML to JSON conversion

Convert an XML string or file into JSON

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.

try {
    $result = $apiInstance->convertDataXmlToJson($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlToJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on. |

### Return type

**object**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertDataXmlTransformWithXsltToXml**
> string convertDataXmlTransformWithXsltToXml($input_file, $transform_file)

Transform XML document file with XSLT into a new XML document

Convert an XML string or file into JSON

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ConvertDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input XML file to perform the operation on.
$transform_file = "/path/to/file.txt"; // \SplFileObject | Input XSLT file to use to transform the input XML file.

try {
    $result = $apiInstance->convertDataXmlTransformWithXsltToXml($input_file, $transform_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConvertDataApi->convertDataXmlTransformWithXsltToXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input XML file to perform the operation on. |
 **transform_file** | **\SplFileObject**| Input XSLT file to use to transform the input XML file. |

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

