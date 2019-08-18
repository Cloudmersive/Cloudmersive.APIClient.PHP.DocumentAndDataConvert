# cloudmersive_document_convert_api_client
Convert API lets you effortlessly convert file formats and types.

[Cloudmersive Document and Data Conversion API](https://www.cloudmersive.com/convert-api) provides advanced document conversion, editing and generation capabilities.

- API version: v1
- Package version: 1.5.2


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cloudmersive/cloudmersive_document_convert_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_document_convert_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_document_convert_api_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompareDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file1 = "/path/to/file.txt"; // \SplFileObject | First input file to perform the operation on.
$input_file2 = "/path/to/file.txt"; // \SplFileObject | Second input file to perform the operation on (more than 2 can be supplied).

try {
    $result = $apiInstance->compareDocumentDocx($input_file1, $input_file2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompareDocumentApi->compareDocumentDocx: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloudmersive.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompareDocumentApi* | [**compareDocumentDocx**](docs/Api/CompareDocumentApi.md#comparedocumentdocx) | **POST** /convert/compare/docx | Compare Two Word DOCX
*ConvertDataApi* | [**convertDataCsvToJson**](docs/Api/ConvertDataApi.md#convertdatacsvtojson) | **POST** /convert/csv/to/json | CSV to JSON conversion
*ConvertDataApi* | [**convertDataXlsToJson**](docs/Api/ConvertDataApi.md#convertdataxlstojson) | **POST** /convert/xls/to/json | Excel (97-2003) XLS to JSON conversion
*ConvertDataApi* | [**convertDataXlsxToJson**](docs/Api/ConvertDataApi.md#convertdataxlsxtojson) | **POST** /convert/xlsx/to/json | Excel XLSX to JSON conversion
*ConvertDataApi* | [**convertDataXmlToJson**](docs/Api/ConvertDataApi.md#convertdataxmltojson) | **POST** /convert/xml/to/json | XML to JSON conversion
*ConvertDocumentApi* | [**convertDocumentAutodetectGetInfo**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetectgetinfo) | **POST** /convert/autodetect/get-info | Get document type information
*ConvertDocumentApi* | [**convertDocumentAutodetectToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetecttopdf) | **POST** /convert/autodetect/to/pdf | Convert Document to PDF
*ConvertDocumentApi* | [**convertDocumentAutodetectToPngArray**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetecttopngarray) | **POST** /convert/autodetect/to/png | Convert Document to PNG array
*ConvertDocumentApi* | [**convertDocumentCsvToXlsx**](docs/Api/ConvertDocumentApi.md#convertdocumentcsvtoxlsx) | **POST** /convert/csv/to/xlsx | CSV to Excel XLSX
*ConvertDocumentApi* | [**convertDocumentDocToDocx**](docs/Api/ConvertDocumentApi.md#convertdocumentdoctodocx) | **POST** /convert/doc/to/docx | Word DOC (97-03) to DOCX
*ConvertDocumentApi* | [**convertDocumentDocToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentdoctopdf) | **POST** /convert/doc/to/pdf | Word DOC (97-03) to PDF
*ConvertDocumentApi* | [**convertDocumentDocxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentdocxtopdf) | **POST** /convert/docx/to/pdf | Word DOCX to PDF
*ConvertDocumentApi* | [**convertDocumentHtmlToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumenthtmltopdf) | **POST** /convert/html/to/pdf | HTML to PDF
*ConvertDocumentApi* | [**convertDocumentHtmlToPng**](docs/Api/ConvertDocumentApi.md#convertdocumenthtmltopng) | **POST** /convert/html/to/png | HTML to PNG array
*ConvertDocumentApi* | [**convertDocumentPdfToDocx**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftodocx) | **POST** /convert/pdf/to/docx | PDF to Word DOCX
*ConvertDocumentApi* | [**convertDocumentPdfToPngArray**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftopngarray) | **POST** /convert/pdf/to/png | PDF to PNG Array
*ConvertDocumentApi* | [**convertDocumentPdfToPptx**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftopptx) | **POST** /convert/pdf/to/pptx | PDF to PowerPoint PPTX
*ConvertDocumentApi* | [**convertDocumentPptToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentppttopdf) | **POST** /convert/ppt/to/pdf | PowerPoint PPT (97-03) to PDF
*ConvertDocumentApi* | [**convertDocumentPptToPptx**](docs/Api/ConvertDocumentApi.md#convertdocumentppttopptx) | **POST** /convert/ppt/to/pptx | PowerPoint PPT (97-03) to PPTX
*ConvertDocumentApi* | [**convertDocumentPptxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentpptxtopdf) | **POST** /convert/pptx/to/pdf | PowerPoint PPTX to PDF
*ConvertDocumentApi* | [**convertDocumentXlsToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentxlstopdf) | **POST** /convert/xls/to/pdf | Excel XLS (97-03) to PDF
*ConvertDocumentApi* | [**convertDocumentXlsToXlsx**](docs/Api/ConvertDocumentApi.md#convertdocumentxlstoxlsx) | **POST** /convert/xls/to/xlsx | Excel XLS (97-03) to XLSX
*ConvertDocumentApi* | [**convertDocumentXlsxToCsv**](docs/Api/ConvertDocumentApi.md#convertdocumentxlsxtocsv) | **POST** /convert/xlsx/to/csv | Excel XLSX to CSV
*ConvertDocumentApi* | [**convertDocumentXlsxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentxlsxtopdf) | **POST** /convert/xlsx/to/pdf | Excel XLSX to PDF
*ConvertImageApi* | [**convertImageGetImageInfo**](docs/Api/ConvertImageApi.md#convertimagegetimageinfo) | **POST** /convert/image/get-info | Get information about an image
*ConvertImageApi* | [**convertImageImageFormatConvert**](docs/Api/ConvertImageApi.md#convertimageimageformatconvert) | **POST** /convert/image/{format1}/to/{format2} | Image format conversion
*ConvertImageApi* | [**convertImageImageSetDPI**](docs/Api/ConvertImageApi.md#convertimageimagesetdpi) | **POST** /convert/image/set-dpi/{dpi} | Change image DPI
*ConvertImageApi* | [**convertImageMultipageImageFormatConvert**](docs/Api/ConvertImageApi.md#convertimagemultipageimageformatconvert) | **POST** /convert/image-multipage/{format1}/to/{format2} | Multi-page format conversion
*ConvertTemplateApi* | [**convertTemplateApplyHtmlTemplate**](docs/Api/ConvertTemplateApi.md#converttemplateapplyhtmltemplate) | **POST** /convert/template/html/apply | Apply HTML template
*ConvertWebApi* | [**convertWebHtmlToDocx**](docs/Api/ConvertWebApi.md#convertwebhtmltodocx) | **POST** /convert/html/to/docx | HTML to DOCX
*ConvertWebApi* | [**convertWebHtmlToPdf**](docs/Api/ConvertWebApi.md#convertwebhtmltopdf) | **POST** /convert/web/html/to/pdf | Convert HTML string to PDF
*ConvertWebApi* | [**convertWebMdToHtml**](docs/Api/ConvertWebApi.md#convertwebmdtohtml) | **POST** /convert/web/md/to/html | Convert Markdown to HTML
*ConvertWebApi* | [**convertWebUrlToPdf**](docs/Api/ConvertWebApi.md#convertweburltopdf) | **POST** /convert/web/url/to/pdf | Convert a URL to PDF
*ConvertWebApi* | [**convertWebUrlToScreenshot**](docs/Api/ConvertWebApi.md#convertweburltoscreenshot) | **POST** /convert/web/url/to/screenshot | Take screenshot of URL
*EditDocumentApi* | [**editDocumentBeginEditing**](docs/Api/EditDocumentApi.md#editdocumentbeginediting) | **POST** /convert/edit/begin-editing | Begin editing a document
*EditDocumentApi* | [**editDocumentDocxBody**](docs/Api/EditDocumentApi.md#editdocumentdocxbody) | **POST** /convert/edit/docx/get-body | Get body from a DOCX
*EditDocumentApi* | [**editDocumentDocxGetHeadersAndFooters**](docs/Api/EditDocumentApi.md#editdocumentdocxgetheadersandfooters) | **POST** /convert/edit/docx/get-headers-and-footers | Get content of a footer from a DOCX
*EditDocumentApi* | [**editDocumentDocxGetImages**](docs/Api/EditDocumentApi.md#editdocumentdocxgetimages) | **POST** /convert/edit/docx/get-images | Get images from a DOCX
*EditDocumentApi* | [**editDocumentDocxGetSections**](docs/Api/EditDocumentApi.md#editdocumentdocxgetsections) | **POST** /convert/edit/docx/get-sections | Get sections from a DOCX
*EditDocumentApi* | [**editDocumentDocxGetStyles**](docs/Api/EditDocumentApi.md#editdocumentdocxgetstyles) | **POST** /convert/edit/docx/get-styles | Get styles from a DOCX
*EditDocumentApi* | [**editDocumentDocxGetTables**](docs/Api/EditDocumentApi.md#editdocumentdocxgettables) | **POST** /convert/edit/docx/get-tables | Get tables in DOCX
*EditDocumentApi* | [**editDocumentDocxInsertImage**](docs/Api/EditDocumentApi.md#editdocumentdocxinsertimage) | **POST** /convert/edit/docx/insert-image | Insert image into a DOCX
*EditDocumentApi* | [**editDocumentDocxInsertParagraph**](docs/Api/EditDocumentApi.md#editdocumentdocxinsertparagraph) | **POST** /convert/edit/docx/insert-paragraph | Insert a new paragraph into a DOCX
*EditDocumentApi* | [**editDocumentDocxInsertTable**](docs/Api/EditDocumentApi.md#editdocumentdocxinserttable) | **POST** /convert/edit/docx/insert-table | Insert a new table into a DOCX
*EditDocumentApi* | [**editDocumentDocxRemoveHeadersAndFooters**](docs/Api/EditDocumentApi.md#editdocumentdocxremoveheadersandfooters) | **POST** /convert/edit/docx/remove-headers-and-footers | Remove headers and footers from DOCX
*EditDocumentApi* | [**editDocumentDocxRemoveObject**](docs/Api/EditDocumentApi.md#editdocumentdocxremoveobject) | **POST** /convert/edit/docx/remove-object | Delete any object in a DOCX
*EditDocumentApi* | [**editDocumentDocxReplace**](docs/Api/EditDocumentApi.md#editdocumentdocxreplace) | **POST** /convert/edit/docx/replace-all | Replace string in DOCX
*EditDocumentApi* | [**editDocumentDocxSetFooter**](docs/Api/EditDocumentApi.md#editdocumentdocxsetfooter) | **POST** /convert/edit/docx/set-footer | Set the footer in a DOCX
*EditDocumentApi* | [**editDocumentDocxSetHeader**](docs/Api/EditDocumentApi.md#editdocumentdocxsetheader) | **POST** /convert/edit/docx/set-header | Set the header in a DOCX
*EditDocumentApi* | [**editDocumentFinishEditing**](docs/Api/EditDocumentApi.md#editdocumentfinishediting) | **POST** /convert/edit/finish-editing | Download result from document editing
*EditDocumentApi* | [**editDocumentPptxReplace**](docs/Api/EditDocumentApi.md#editdocumentpptxreplace) | **POST** /convert/edit/pptx/replace-all | Replace string in PPTX
*EditDocumentApi* | [**editDocumentXlsxGetColumns**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetcolumns) | **POST** /convert/edit/xlsx/get-columns | Get rows and cells from a XLSX worksheet
*EditDocumentApi* | [**editDocumentXlsxGetImages**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetimages) | **POST** /convert/edit/xlsx/get-images | Get images from a XLSX worksheet
*EditDocumentApi* | [**editDocumentXlsxGetRowsAndCells**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetrowsandcells) | **POST** /convert/edit/xlsx/get-rows-and-cells | Get rows and cells from a XLSX worksheet
*EditDocumentApi* | [**editDocumentXlsxGetStyles**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetstyles) | **POST** /convert/edit/xlsx/get-styles | Get styles from a XLSX worksheet
*EditDocumentApi* | [**editDocumentXlsxGetWorksheets**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetworksheets) | **POST** /convert/edit/xlsx/get-worksheets | Get worksheets from a XLSX
*EditDocumentApi* | [**editDocumentXlsxInsertWorksheet**](docs/Api/EditDocumentApi.md#editdocumentxlsxinsertworksheet) | **POST** /convert/edit/xlsx/insert-worksheet | Insert a new worksheet into an XLSX spreadsheet
*MergeDocumentApi* | [**mergeDocumentDocx**](docs/Api/MergeDocumentApi.md#mergedocumentdocx) | **POST** /convert/merge/docx | Merge Multple Word DOCX Together
*MergeDocumentApi* | [**mergeDocumentPdf**](docs/Api/MergeDocumentApi.md#mergedocumentpdf) | **POST** /convert/merge/pdf | Merge Multple PDF Files Together
*MergeDocumentApi* | [**mergeDocumentPptx**](docs/Api/MergeDocumentApi.md#mergedocumentpptx) | **POST** /convert/merge/pptx | Merge Multple PowerPoint PPTX Together
*MergeDocumentApi* | [**mergeDocumentXlsx**](docs/Api/MergeDocumentApi.md#mergedocumentxlsx) | **POST** /convert/merge/xlsx | Merge Multple Excel XLSX Together
*ValidateDocumentApi* | [**validateDocumentDocxValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentdocxvalidation) | **POST** /convert/validate/docx | Validate a Word document (DOCX)
*ValidateDocumentApi* | [**validateDocumentPptxValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentpptxvalidation) | **POST** /convert/validate/pptx | Validate a PowerPoint presentation (PPTX)
*ValidateDocumentApi* | [**validateDocumentXlsxValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentxlsxvalidation) | **POST** /convert/validate/xlsx | Validate a Excel document (XLSX)
*ViewerToolsApi* | [**viewerToolsCreateSimple**](docs/Api/ViewerToolsApi.md#viewertoolscreatesimple) | **POST** /convert/viewer/create/web/simple | Create a web-based viewer


## Documentation For Models

 - [AlternateFileFormatCandidate](docs/Model/AlternateFileFormatCandidate.md)
 - [AutodetectGetInfoResult](docs/Model/AutodetectGetInfoResult.md)
 - [AutodetectToPngResult](docs/Model/AutodetectToPngResult.md)
 - [ConvertedPngPage](docs/Model/ConvertedPngPage.md)
 - [DocumentValidationError](docs/Model/DocumentValidationError.md)
 - [DocumentValidationResult](docs/Model/DocumentValidationResult.md)
 - [DocxBody](docs/Model/DocxBody.md)
 - [DocxCellStyle](docs/Model/DocxCellStyle.md)
 - [DocxFooter](docs/Model/DocxFooter.md)
 - [DocxHeader](docs/Model/DocxHeader.md)
 - [DocxImage](docs/Model/DocxImage.md)
 - [DocxInsertImageRequest](docs/Model/DocxInsertImageRequest.md)
 - [DocxInsertImageResponse](docs/Model/DocxInsertImageResponse.md)
 - [DocxParagraph](docs/Model/DocxParagraph.md)
 - [DocxRemoveObjectRequest](docs/Model/DocxRemoveObjectRequest.md)
 - [DocxRemoveObjectResponse](docs/Model/DocxRemoveObjectResponse.md)
 - [DocxRun](docs/Model/DocxRun.md)
 - [DocxSection](docs/Model/DocxSection.md)
 - [DocxSetFooterRequest](docs/Model/DocxSetFooterRequest.md)
 - [DocxSetFooterResponse](docs/Model/DocxSetFooterResponse.md)
 - [DocxSetHeaderRequest](docs/Model/DocxSetHeaderRequest.md)
 - [DocxSetHeaderResponse](docs/Model/DocxSetHeaderResponse.md)
 - [DocxStyle](docs/Model/DocxStyle.md)
 - [DocxTable](docs/Model/DocxTable.md)
 - [DocxTableCell](docs/Model/DocxTableCell.md)
 - [DocxTableRow](docs/Model/DocxTableRow.md)
 - [DocxText](docs/Model/DocxText.md)
 - [ExifValue](docs/Model/ExifValue.md)
 - [FinishEditingRequest](docs/Model/FinishEditingRequest.md)
 - [GetDocxBodyRequest](docs/Model/GetDocxBodyRequest.md)
 - [GetDocxBodyResponse](docs/Model/GetDocxBodyResponse.md)
 - [GetDocxHeadersAndFootersRequest](docs/Model/GetDocxHeadersAndFootersRequest.md)
 - [GetDocxHeadersAndFootersResponse](docs/Model/GetDocxHeadersAndFootersResponse.md)
 - [GetDocxImagesRequest](docs/Model/GetDocxImagesRequest.md)
 - [GetDocxImagesResponse](docs/Model/GetDocxImagesResponse.md)
 - [GetDocxSectionsRequest](docs/Model/GetDocxSectionsRequest.md)
 - [GetDocxSectionsResponse](docs/Model/GetDocxSectionsResponse.md)
 - [GetDocxStylesRequest](docs/Model/GetDocxStylesRequest.md)
 - [GetDocxStylesResponse](docs/Model/GetDocxStylesResponse.md)
 - [GetDocxTablesRequest](docs/Model/GetDocxTablesRequest.md)
 - [GetDocxTablesResponse](docs/Model/GetDocxTablesResponse.md)
 - [GetImageInfoResult](docs/Model/GetImageInfoResult.md)
 - [GetXlsxColumnsRequest](docs/Model/GetXlsxColumnsRequest.md)
 - [GetXlsxColumnsResponse](docs/Model/GetXlsxColumnsResponse.md)
 - [GetXlsxImagesRequest](docs/Model/GetXlsxImagesRequest.md)
 - [GetXlsxImagesResponse](docs/Model/GetXlsxImagesResponse.md)
 - [GetXlsxRowsAndCellsRequest](docs/Model/GetXlsxRowsAndCellsRequest.md)
 - [GetXlsxRowsAndCellsResponse](docs/Model/GetXlsxRowsAndCellsResponse.md)
 - [GetXlsxStylesRequest](docs/Model/GetXlsxStylesRequest.md)
 - [GetXlsxStylesResponse](docs/Model/GetXlsxStylesResponse.md)
 - [GetXlsxWorksheetsRequest](docs/Model/GetXlsxWorksheetsRequest.md)
 - [GetXlsxWorksheetsResponse](docs/Model/GetXlsxWorksheetsResponse.md)
 - [HtmlMdResult](docs/Model/HtmlMdResult.md)
 - [HtmlTemplateApplicationRequest](docs/Model/HtmlTemplateApplicationRequest.md)
 - [HtmlTemplateApplicationResponse](docs/Model/HtmlTemplateApplicationResponse.md)
 - [HtmlTemplateOperation](docs/Model/HtmlTemplateOperation.md)
 - [HtmlToOfficeRequest](docs/Model/HtmlToOfficeRequest.md)
 - [HtmlToPdfRequest](docs/Model/HtmlToPdfRequest.md)
 - [InsertDocxInsertParagraphRequest](docs/Model/InsertDocxInsertParagraphRequest.md)
 - [InsertDocxInsertParagraphResponse](docs/Model/InsertDocxInsertParagraphResponse.md)
 - [InsertDocxTablesRequest](docs/Model/InsertDocxTablesRequest.md)
 - [InsertDocxTablesResponse](docs/Model/InsertDocxTablesResponse.md)
 - [InsertXlsxWorksheetRequest](docs/Model/InsertXlsxWorksheetRequest.md)
 - [InsertXlsxWorksheetResponse](docs/Model/InsertXlsxWorksheetResponse.md)
 - [MultipageImageFormatConversionResult](docs/Model/MultipageImageFormatConversionResult.md)
 - [PageConversionResult](docs/Model/PageConversionResult.md)
 - [PdfToPngResult](docs/Model/PdfToPngResult.md)
 - [RemoveDocxHeadersAndFootersRequest](docs/Model/RemoveDocxHeadersAndFootersRequest.md)
 - [RemoveDocxHeadersAndFootersResponse](docs/Model/RemoveDocxHeadersAndFootersResponse.md)
 - [ReplaceStringRequest](docs/Model/ReplaceStringRequest.md)
 - [ScreenshotRequest](docs/Model/ScreenshotRequest.md)
 - [ViewerResponse](docs/Model/ViewerResponse.md)
 - [XlsxImage](docs/Model/XlsxImage.md)
 - [XlsxSpreadsheetCell](docs/Model/XlsxSpreadsheetCell.md)
 - [XlsxSpreadsheetColumn](docs/Model/XlsxSpreadsheetColumn.md)
 - [XlsxSpreadsheetRow](docs/Model/XlsxSpreadsheetRow.md)
 - [XlsxWorksheet](docs/Model/XlsxWorksheet.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




