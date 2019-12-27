# cloudmersive_document_convert_api_client
Convert API lets you effortlessly convert file formats and types.

[Cloudmersive Document and Data Conversion API](https://www.cloudmersive.com/convert-api) provides advanced document conversion, editing and generation capabilities.

- API version: v1
- Package version: 1.7.0


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
*ConvertDataApi* | [**convertDataCsvToJson**](docs/Api/ConvertDataApi.md#convertdatacsvtojson) | **POST** /convert/csv/to/json | Convert CSV to JSON conversion
*ConvertDataApi* | [**convertDataJsonToXml**](docs/Api/ConvertDataApi.md#convertdatajsontoxml) | **POST** /convert/json/to/xml | Convert JSON to XML conversion
*ConvertDataApi* | [**convertDataXlsToJson**](docs/Api/ConvertDataApi.md#convertdataxlstojson) | **POST** /convert/xls/to/json | Convert Excel (97-2003) XLS to JSON conversion
*ConvertDataApi* | [**convertDataXlsxToJson**](docs/Api/ConvertDataApi.md#convertdataxlsxtojson) | **POST** /convert/xlsx/to/json | Convert Excel XLSX to JSON conversion
*ConvertDataApi* | [**convertDataXmlEditAddAttributeWithXPath**](docs/Api/ConvertDataApi.md#convertdataxmleditaddattributewithxpath) | **POST** /convert/xml/edit/xpath/add-attribute | Adds an attribute to all XML nodes matching XPath expression
*ConvertDataApi* | [**convertDataXmlEditAddChildWithXPath**](docs/Api/ConvertDataApi.md#convertdataxmleditaddchildwithxpath) | **POST** /convert/xml/edit/xpath/add-child | Adds an XML node as a child to XML nodes matching XPath expression
*ConvertDataApi* | [**convertDataXmlEditRemoveAllChildNodesWithXPath**](docs/Api/ConvertDataApi.md#convertdataxmleditremoveallchildnodeswithxpath) | **POST** /convert/xml/edit/xpath/remove-all-children | Removes, deletes all children of nodes matching XPath expression, but does not remove the nodes
*ConvertDataApi* | [**convertDataXmlEditReplaceWithXPath**](docs/Api/ConvertDataApi.md#convertdataxmleditreplacewithxpath) | **POST** /convert/xml/edit/xpath/replace | Replaces XML nodes matching XPath expression with new node
*ConvertDataApi* | [**convertDataXmlEditSetValueWithXPath**](docs/Api/ConvertDataApi.md#convertdataxmleditsetvaluewithxpath) | **POST** /convert/xml/edit/xpath/set-value | Sets the value contents of XML nodes matching XPath expression
*ConvertDataApi* | [**convertDataXmlFilterWithXPath**](docs/Api/ConvertDataApi.md#convertdataxmlfilterwithxpath) | **POST** /convert/xml/select/xpath | Filter, select XML nodes using XPath expression, get results
*ConvertDataApi* | [**convertDataXmlQueryWithXQuery**](docs/Api/ConvertDataApi.md#convertdataxmlquerywithxquery) | **POST** /convert/xml/query/xquery | Query an XML file using XQuery query, get results
*ConvertDataApi* | [**convertDataXmlQueryWithXQueryMulti**](docs/Api/ConvertDataApi.md#convertdataxmlquerywithxquerymulti) | **POST** /convert/xml/query/xquery/multi | Query multiple XML files using XQuery query, get results
*ConvertDataApi* | [**convertDataXmlRemoveWithXPath**](docs/Api/ConvertDataApi.md#convertdataxmlremovewithxpath) | **POST** /convert/xml/edit/xpath/remove | Remove, delete XML nodes and items matching XPath expression
*ConvertDataApi* | [**convertDataXmlToJson**](docs/Api/ConvertDataApi.md#convertdataxmltojson) | **POST** /convert/xml/to/json | Convert XML to JSON conversion
*ConvertDataApi* | [**convertDataXmlTransformWithXsltToXml**](docs/Api/ConvertDataApi.md#convertdataxmltransformwithxslttoxml) | **POST** /convert/xml/transform/xslt/to/xml | Transform XML document file with XSLT into a new XML document
*ConvertDocumentApi* | [**convertDocumentAutodetectGetInfo**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetectgetinfo) | **POST** /convert/autodetect/get-info | Get document type information
*ConvertDocumentApi* | [**convertDocumentAutodetectToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetecttopdf) | **POST** /convert/autodetect/to/pdf | Convert Document to PDF
*ConvertDocumentApi* | [**convertDocumentAutodetectToPngArray**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetecttopngarray) | **POST** /convert/autodetect/to/png | Convert Document to PNG array
*ConvertDocumentApi* | [**convertDocumentAutodetectToTxt**](docs/Api/ConvertDocumentApi.md#convertdocumentautodetecttotxt) | **POST** /convert/autodetect/to/txt | Convert Document to Text (txt)
*ConvertDocumentApi* | [**convertDocumentCsvToXlsx**](docs/Api/ConvertDocumentApi.md#convertdocumentcsvtoxlsx) | **POST** /convert/csv/to/xlsx | Convert CSV to Excel XLSX Spreadsheet
*ConvertDocumentApi* | [**convertDocumentDocToDocx**](docs/Api/ConvertDocumentApi.md#convertdocumentdoctodocx) | **POST** /convert/doc/to/docx | Convert Word DOC (97-03) Document to DOCX
*ConvertDocumentApi* | [**convertDocumentDocToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentdoctopdf) | **POST** /convert/doc/to/pdf | Convert Word DOC (97-03) Document to PDF
*ConvertDocumentApi* | [**convertDocumentDocxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentdocxtopdf) | **POST** /convert/docx/to/pdf | Convert Word DOCX Document to PDF
*ConvertDocumentApi* | [**convertDocumentDocxToTxt**](docs/Api/ConvertDocumentApi.md#convertdocumentdocxtotxt) | **POST** /convert/docx/to/txt | Convert Word DOCX Document to Text (txt)
*ConvertDocumentApi* | [**convertDocumentHtmlToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumenthtmltopdf) | **POST** /convert/html/to/pdf | Convert HTML document file to PDF Document
*ConvertDocumentApi* | [**convertDocumentHtmlToPng**](docs/Api/ConvertDocumentApi.md#convertdocumenthtmltopng) | **POST** /convert/html/to/png | Convert HTML document file to PNG image array
*ConvertDocumentApi* | [**convertDocumentHtmlToTxt**](docs/Api/ConvertDocumentApi.md#convertdocumenthtmltotxt) | **POST** /convert/html/to/txt | HTML Document file to Text (txt)
*ConvertDocumentApi* | [**convertDocumentPdfToDocx**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftodocx) | **POST** /convert/pdf/to/docx | Convert PDF to Word DOCX Document
*ConvertDocumentApi* | [**convertDocumentPdfToDocxRasterize**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftodocxrasterize) | **POST** /convert/pdf/to/docx/rasterize | Convert PDF to Word DOCX Document based on rasterized version of the PDF
*ConvertDocumentApi* | [**convertDocumentPdfToPngArray**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftopngarray) | **POST** /convert/pdf/to/png | Convert PDF to PNG Image Array
*ConvertDocumentApi* | [**convertDocumentPdfToPngSingle**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftopngsingle) | **POST** /convert/pdf/to/png/merge-single | Convert PDF to Single PNG image
*ConvertDocumentApi* | [**convertDocumentPdfToPptx**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftopptx) | **POST** /convert/pdf/to/pptx | Convert PDF to PowerPoint PPTX Presentation
*ConvertDocumentApi* | [**convertDocumentPdfToTxt**](docs/Api/ConvertDocumentApi.md#convertdocumentpdftotxt) | **POST** /convert/pdf/to/txt | Convert PDF Document to Text (txt)
*ConvertDocumentApi* | [**convertDocumentPngArrayToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentpngarraytopdf) | **POST** /convert/png/to/pdf | Convert PNG Array to PDF
*ConvertDocumentApi* | [**convertDocumentPptToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentppttopdf) | **POST** /convert/ppt/to/pdf | Convert PowerPoint PPT (97-03) Presentation to PDF
*ConvertDocumentApi* | [**convertDocumentPptToPptx**](docs/Api/ConvertDocumentApi.md#convertdocumentppttopptx) | **POST** /convert/ppt/to/pptx | Convert PowerPoint PPT (97-03) Presentation to PPTX
*ConvertDocumentApi* | [**convertDocumentPptxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentpptxtopdf) | **POST** /convert/pptx/to/pdf | Convert PowerPoint PPTX Presentation to PDF
*ConvertDocumentApi* | [**convertDocumentPptxToTxt**](docs/Api/ConvertDocumentApi.md#convertdocumentpptxtotxt) | **POST** /convert/pptx/to/txt | Convert PowerPoint PPTX Presentation to Text (txt)
*ConvertDocumentApi* | [**convertDocumentXlsToCsv**](docs/Api/ConvertDocumentApi.md#convertdocumentxlstocsv) | **POST** /convert/xls/to/csv | Convert Excel XLS (97-03) Spreadsheet to CSV
*ConvertDocumentApi* | [**convertDocumentXlsToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentxlstopdf) | **POST** /convert/xls/to/pdf | Convert Excel XLS (97-03) Spreadsheet to PDF
*ConvertDocumentApi* | [**convertDocumentXlsToXlsx**](docs/Api/ConvertDocumentApi.md#convertdocumentxlstoxlsx) | **POST** /convert/xls/to/xlsx | Convert Excel XLS (97-03) Spreadsheet to XLSX
*ConvertDocumentApi* | [**convertDocumentXlsxToCsv**](docs/Api/ConvertDocumentApi.md#convertdocumentxlsxtocsv) | **POST** /convert/xlsx/to/csv | Convert Excel XLSX Spreadsheet to CSV
*ConvertDocumentApi* | [**convertDocumentXlsxToPdf**](docs/Api/ConvertDocumentApi.md#convertdocumentxlsxtopdf) | **POST** /convert/xlsx/to/pdf | Convert Excel XLSX Spreadsheet to PDF
*ConvertDocumentApi* | [**convertDocumentXlsxToTxt**](docs/Api/ConvertDocumentApi.md#convertdocumentxlsxtotxt) | **POST** /convert/xlsx/to/txt | Convert Excel XLSX Spreadsheet to Text (txt)
*ConvertImageApi* | [**convertImageGetImageInfo**](docs/Api/ConvertImageApi.md#convertimagegetimageinfo) | **POST** /convert/image/get-info | Get information about an image
*ConvertImageApi* | [**convertImageImageFormatConvert**](docs/Api/ConvertImageApi.md#convertimageimageformatconvert) | **POST** /convert/image/{format1}/to/{format2} | Image format conversion
*ConvertImageApi* | [**convertImageImageSetDPI**](docs/Api/ConvertImageApi.md#convertimageimagesetdpi) | **POST** /convert/image/set-dpi/{dpi} | Change image DPI
*ConvertImageApi* | [**convertImageMultipageImageFormatConvert**](docs/Api/ConvertImageApi.md#convertimagemultipageimageformatconvert) | **POST** /convert/image-multipage/{format1}/to/{format2} | Multi-page image format conversion
*ConvertTemplateApi* | [**convertTemplateApplyDocxTemplate**](docs/Api/ConvertTemplateApi.md#converttemplateapplydocxtemplate) | **POST** /convert/template/docx/apply | Apply Word DOCX template
*ConvertTemplateApi* | [**convertTemplateApplyHtmlTemplate**](docs/Api/ConvertTemplateApi.md#converttemplateapplyhtmltemplate) | **POST** /convert/template/html/apply | Apply HTML template
*ConvertWebApi* | [**convertWebHtmlToDocx**](docs/Api/ConvertWebApi.md#convertwebhtmltodocx) | **POST** /convert/html/to/docx | Convert HTML to Word DOCX Document
*ConvertWebApi* | [**convertWebHtmlToPdf**](docs/Api/ConvertWebApi.md#convertwebhtmltopdf) | **POST** /convert/web/html/to/pdf | Convert HTML string to PDF
*ConvertWebApi* | [**convertWebHtmlToPng**](docs/Api/ConvertWebApi.md#convertwebhtmltopng) | **POST** /convert/web/html/to/png | Convert HTML string to PNG screenshot
*ConvertWebApi* | [**convertWebHtmlToTxt**](docs/Api/ConvertWebApi.md#convertwebhtmltotxt) | **POST** /convert/web/url/to/txt | Convert website URL page to text (txt)
*ConvertWebApi* | [**convertWebHtmlToTxt_0**](docs/Api/ConvertWebApi.md#convertwebhtmltotxt_0) | **POST** /convert/web/html/to/txt | Convert HTML string to text (txt)
*ConvertWebApi* | [**convertWebMdToHtml**](docs/Api/ConvertWebApi.md#convertwebmdtohtml) | **POST** /convert/web/md/to/html | Convert Markdown to HTML
*ConvertWebApi* | [**convertWebUrlToPdf**](docs/Api/ConvertWebApi.md#convertweburltopdf) | **POST** /convert/web/url/to/pdf | Convert a URL to PDF
*ConvertWebApi* | [**convertWebUrlToScreenshot**](docs/Api/ConvertWebApi.md#convertweburltoscreenshot) | **POST** /convert/web/url/to/screenshot | Take screenshot of URL
*EditDocumentApi* | [**editDocumentBeginEditing**](docs/Api/EditDocumentApi.md#editdocumentbeginediting) | **POST** /convert/edit/begin-editing | Begin editing a document
*EditDocumentApi* | [**editDocumentDocxBody**](docs/Api/EditDocumentApi.md#editdocumentdocxbody) | **POST** /convert/edit/docx/get-body | Get body from a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxCreateBlankDocument**](docs/Api/EditDocumentApi.md#editdocumentdocxcreateblankdocument) | **POST** /convert/edit/docx/create/blank | Create a blank Word DOCX document
*EditDocumentApi* | [**editDocumentDocxDeletePages**](docs/Api/EditDocumentApi.md#editdocumentdocxdeletepages) | **POST** /convert/edit/docx/delete-pages | Delete, remove pages from a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxDeleteTableRow**](docs/Api/EditDocumentApi.md#editdocumentdocxdeletetablerow) | **POST** /convert/edit/docx/delete-table-row | Deletes a table row in an existing table in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxGetHeadersAndFooters**](docs/Api/EditDocumentApi.md#editdocumentdocxgetheadersandfooters) | **POST** /convert/edit/docx/get-headers-and-footers | Get content of a footer from a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxGetImages**](docs/Api/EditDocumentApi.md#editdocumentdocxgetimages) | **POST** /convert/edit/docx/get-images | Get images from a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxGetSections**](docs/Api/EditDocumentApi.md#editdocumentdocxgetsections) | **POST** /convert/edit/docx/get-sections | Get sections from a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxGetStyles**](docs/Api/EditDocumentApi.md#editdocumentdocxgetstyles) | **POST** /convert/edit/docx/get-styles | Get styles from a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxGetTableByIndex**](docs/Api/EditDocumentApi.md#editdocumentdocxgettablebyindex) | **POST** /convert/edit/docx/get-table/by-index | Get a specific table by index in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxGetTableRow**](docs/Api/EditDocumentApi.md#editdocumentdocxgettablerow) | **POST** /convert/edit/docx/get-table-row | Gets the contents of an existing table row in an existing table in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxGetTables**](docs/Api/EditDocumentApi.md#editdocumentdocxgettables) | **POST** /convert/edit/docx/get-tables | Get all tables in Word DOCX document
*EditDocumentApi* | [**editDocumentDocxInsertImage**](docs/Api/EditDocumentApi.md#editdocumentdocxinsertimage) | **POST** /convert/edit/docx/insert-image | Insert image into a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxInsertParagraph**](docs/Api/EditDocumentApi.md#editdocumentdocxinsertparagraph) | **POST** /convert/edit/docx/insert-paragraph | Insert a new paragraph into a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxInsertTable**](docs/Api/EditDocumentApi.md#editdocumentdocxinserttable) | **POST** /convert/edit/docx/insert-table | Insert a new table into a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxInsertTableRow**](docs/Api/EditDocumentApi.md#editdocumentdocxinserttablerow) | **POST** /convert/edit/docx/insert-table-row | Insert a new row into an existing table in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxPages**](docs/Api/EditDocumentApi.md#editdocumentdocxpages) | **POST** /convert/edit/docx/get-pages | Get pages and content from a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxRemoveHeadersAndFooters**](docs/Api/EditDocumentApi.md#editdocumentdocxremoveheadersandfooters) | **POST** /convert/edit/docx/remove-headers-and-footers | Remove headers and footers from Word DOCX document
*EditDocumentApi* | [**editDocumentDocxRemoveObject**](docs/Api/EditDocumentApi.md#editdocumentdocxremoveobject) | **POST** /convert/edit/docx/remove-object | Delete any object in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxReplace**](docs/Api/EditDocumentApi.md#editdocumentdocxreplace) | **POST** /convert/edit/docx/replace-all | Replace string in Word DOCX document
*EditDocumentApi* | [**editDocumentDocxSetFooter**](docs/Api/EditDocumentApi.md#editdocumentdocxsetfooter) | **POST** /convert/edit/docx/set-footer | Set the footer in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxSetFooterAddPageNumber**](docs/Api/EditDocumentApi.md#editdocumentdocxsetfooteraddpagenumber) | **POST** /convert/edit/docx/set-footer/add-page-number | Add page number to footer in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxSetHeader**](docs/Api/EditDocumentApi.md#editdocumentdocxsetheader) | **POST** /convert/edit/docx/set-header | Set the header in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxUpdateTableCell**](docs/Api/EditDocumentApi.md#editdocumentdocxupdatetablecell) | **POST** /convert/edit/docx/update-table-cell | Update, set contents of a table cell in an existing table in a Word DOCX document
*EditDocumentApi* | [**editDocumentDocxUpdateTableRow**](docs/Api/EditDocumentApi.md#editdocumentdocxupdatetablerow) | **POST** /convert/edit/docx/update-table-row | Update, set contents of a table row in an existing table in a Word DOCX document
*EditDocumentApi* | [**editDocumentFinishEditing**](docs/Api/EditDocumentApi.md#editdocumentfinishediting) | **POST** /convert/edit/finish-editing | Download result from document editing
*EditDocumentApi* | [**editDocumentPptxDeleteSlides**](docs/Api/EditDocumentApi.md#editdocumentpptxdeleteslides) | **POST** /convert/edit/pptx/delete-slides | Delete, remove slides from a PowerPoint PPTX presentation document
*EditDocumentApi* | [**editDocumentPptxReplace**](docs/Api/EditDocumentApi.md#editdocumentpptxreplace) | **POST** /convert/edit/pptx/replace-all | Replace string in PowerPoint PPTX presentation
*EditDocumentApi* | [**editDocumentXlsxCreateBlankSpreadsheet**](docs/Api/EditDocumentApi.md#editdocumentxlsxcreateblankspreadsheet) | **POST** /convert/edit/xlsx/create/blank | Create a blank Excel XLSX spreadsheet
*EditDocumentApi* | [**editDocumentXlsxGetCellByIndex**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetcellbyindex) | **POST** /convert/edit/xlsx/get-cell/by-index | Get cell from an Excel XLSX spreadsheet, worksheet by index
*EditDocumentApi* | [**editDocumentXlsxGetColumns**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetcolumns) | **POST** /convert/edit/xlsx/get-columns | Get rows and cells from a Excel XLSX spreadsheet, worksheet
*EditDocumentApi* | [**editDocumentXlsxGetImages**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetimages) | **POST** /convert/edit/xlsx/get-images | Get images from a Excel XLSX spreadsheet, worksheet
*EditDocumentApi* | [**editDocumentXlsxGetRowsAndCells**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetrowsandcells) | **POST** /convert/edit/xlsx/get-rows-and-cells | Get rows and cells from a Excel XLSX spreadsheet, worksheet
*EditDocumentApi* | [**editDocumentXlsxGetStyles**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetstyles) | **POST** /convert/edit/xlsx/get-styles | Get styles from a Excel XLSX spreadsheet, worksheet
*EditDocumentApi* | [**editDocumentXlsxGetWorksheets**](docs/Api/EditDocumentApi.md#editdocumentxlsxgetworksheets) | **POST** /convert/edit/xlsx/get-worksheets | Get worksheets from a Excel XLSX spreadsheet
*EditDocumentApi* | [**editDocumentXlsxInsertWorksheet**](docs/Api/EditDocumentApi.md#editdocumentxlsxinsertworksheet) | **POST** /convert/edit/xlsx/insert-worksheet | Insert a new worksheet into an Excel XLSX spreadsheet
*EditPdfApi* | [**editPdfAddAnnotations**](docs/Api/EditPdfApi.md#editpdfaddannotations) | **POST** /convert/edit/pdf/annotations/add-item | Add one or more PDF annotations, comments in the PDF document
*EditPdfApi* | [**editPdfDecrypt**](docs/Api/EditPdfApi.md#editpdfdecrypt) | **POST** /convert/edit/pdf/decrypt | Decrypt and password-protect a PDF
*EditPdfApi* | [**editPdfDeletePages**](docs/Api/EditPdfApi.md#editpdfdeletepages) | **POST** /convert/edit/pdf/pages/delete | Remove / delete pages from a PDF document
*EditPdfApi* | [**editPdfEncrypt**](docs/Api/EditPdfApi.md#editpdfencrypt) | **POST** /convert/edit/pdf/encrypt | Encrypt and password-protect a PDF
*EditPdfApi* | [**editPdfGetAnnotations**](docs/Api/EditPdfApi.md#editpdfgetannotations) | **POST** /convert/edit/pdf/annotations/list | Get PDF annotations, including comments in the document
*EditPdfApi* | [**editPdfGetFormFields**](docs/Api/EditPdfApi.md#editpdfgetformfields) | **POST** /convert/edit/pdf/form/get-fields | Gets PDF Form fields and values
*EditPdfApi* | [**editPdfGetMetadata**](docs/Api/EditPdfApi.md#editpdfgetmetadata) | **POST** /convert/edit/pdf/get-metadata | Get PDF document metadata
*EditPdfApi* | [**editPdfGetPdfTextByPages**](docs/Api/EditPdfApi.md#editpdfgetpdftextbypages) | **POST** /convert/edit/pdf/pages/get-text | Get text in a PDF document by page
*EditPdfApi* | [**editPdfInsertPages**](docs/Api/EditPdfApi.md#editpdfinsertpages) | **POST** /convert/edit/pdf/pages/insert | Insert / copy pages from one PDF document into another
*EditPdfApi* | [**editPdfRasterize**](docs/Api/EditPdfApi.md#editpdfrasterize) | **POST** /convert/edit/pdf/rasterize | Rasterize a PDF to an image-based PDF
*EditPdfApi* | [**editPdfRemoveAllAnnotations**](docs/Api/EditPdfApi.md#editpdfremoveallannotations) | **POST** /convert/edit/pdf/annotations/remove-all | Remove all PDF annotations, including comments in the document
*EditPdfApi* | [**editPdfRemoveAnnotationItem**](docs/Api/EditPdfApi.md#editpdfremoveannotationitem) | **POST** /convert/edit/pdf/annotations/remove-item | Remove a specific PDF annotation, comment in the document
*EditPdfApi* | [**editPdfRotateAllPages**](docs/Api/EditPdfApi.md#editpdfrotateallpages) | **POST** /convert/edit/pdf/pages/rotate/all | Rotate all pages in a PDF document
*EditPdfApi* | [**editPdfRotatePageRange**](docs/Api/EditPdfApi.md#editpdfrotatepagerange) | **POST** /convert/edit/pdf/pages/rotate/page-range | Rotate a range, subset of pages in a PDF document
*EditPdfApi* | [**editPdfSetFormFields**](docs/Api/EditPdfApi.md#editpdfsetformfields) | **POST** /convert/edit/pdf/form/set-fields | Sets ands fills PDF Form field values
*EditPdfApi* | [**editPdfSetMetadata**](docs/Api/EditPdfApi.md#editpdfsetmetadata) | **POST** /convert/edit/pdf/set-metadata | Sets PDF document metadata
*EditPdfApi* | [**editPdfSetPermissions**](docs/Api/EditPdfApi.md#editpdfsetpermissions) | **POST** /convert/edit/pdf/encrypt/set-permissions | Encrypt, password-protect and set restricted permissions on a PDF
*EditPdfApi* | [**editPdfWatermarkText**](docs/Api/EditPdfApi.md#editpdfwatermarktext) | **POST** /convert/edit/pdf/watermark/text | Add a text watermark to a PDF
*MergeDocumentApi* | [**mergeDocumentDocx**](docs/Api/MergeDocumentApi.md#mergedocumentdocx) | **POST** /convert/merge/docx | Merge Two Word DOCX Together
*MergeDocumentApi* | [**mergeDocumentDocxMulti**](docs/Api/MergeDocumentApi.md#mergedocumentdocxmulti) | **POST** /convert/merge/docx/multi | Merge Multple Word DOCX Together
*MergeDocumentApi* | [**mergeDocumentPdf**](docs/Api/MergeDocumentApi.md#mergedocumentpdf) | **POST** /convert/merge/pdf | Merge Two PDF Files Together
*MergeDocumentApi* | [**mergeDocumentPdfMulti**](docs/Api/MergeDocumentApi.md#mergedocumentpdfmulti) | **POST** /convert/merge/pdf/multi | Merge Multple PDF Files Together
*MergeDocumentApi* | [**mergeDocumentPng**](docs/Api/MergeDocumentApi.md#mergedocumentpng) | **POST** /convert/merge/png/vertical | Merge Multple PNG Files Together
*MergeDocumentApi* | [**mergeDocumentPptx**](docs/Api/MergeDocumentApi.md#mergedocumentpptx) | **POST** /convert/merge/pptx | Merge Two PowerPoint PPTX Together
*MergeDocumentApi* | [**mergeDocumentPptxMulti**](docs/Api/MergeDocumentApi.md#mergedocumentpptxmulti) | **POST** /convert/merge/pptx/multi | Merge Multple PowerPoint PPTX Together
*MergeDocumentApi* | [**mergeDocumentXlsx**](docs/Api/MergeDocumentApi.md#mergedocumentxlsx) | **POST** /convert/merge/xlsx | Merge Two Excel XLSX Together
*MergeDocumentApi* | [**mergeDocumentXlsxMulti**](docs/Api/MergeDocumentApi.md#mergedocumentxlsxmulti) | **POST** /convert/merge/xlsx/multi | Merge Multple Excel XLSX Together
*SplitDocumentApi* | [**splitDocumentPdfByPage**](docs/Api/SplitDocumentApi.md#splitdocumentpdfbypage) | **POST** /convert/split/pdf | Split a PDF file into separate PDF files, one per page
*SplitDocumentApi* | [**splitDocumentPptx**](docs/Api/SplitDocumentApi.md#splitdocumentpptx) | **POST** /convert/split/pptx | Split a single PowerPoint Presentation PPTX into Separate Slides
*SplitDocumentApi* | [**splitDocumentXlsx**](docs/Api/SplitDocumentApi.md#splitdocumentxlsx) | **POST** /convert/split/xlsx | Split a single Excel XLSX into Separate Worksheets
*ValidateDocumentApi* | [**validateDocumentAutodetectValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentautodetectvalidation) | **POST** /convert/validate/autodetect | Autodetect content type and validate
*ValidateDocumentApi* | [**validateDocumentDocxValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentdocxvalidation) | **POST** /convert/validate/docx | Validate a Word document (DOCX)
*ValidateDocumentApi* | [**validateDocumentExecutableValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentexecutablevalidation) | **POST** /convert/validate/executable | Validate if a file is executable
*ValidateDocumentApi* | [**validateDocumentJsonValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentjsonvalidation) | **POST** /convert/validate/json | Validate a JSON file
*ValidateDocumentApi* | [**validateDocumentPdfValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentpdfvalidation) | **POST** /convert/validate/pdf | Validate a PDF document file
*ValidateDocumentApi* | [**validateDocumentPptxValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentpptxvalidation) | **POST** /convert/validate/pptx | Validate a PowerPoint presentation (PPTX)
*ValidateDocumentApi* | [**validateDocumentXlsxValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentxlsxvalidation) | **POST** /convert/validate/xlsx | Validate a Excel document (XLSX)
*ValidateDocumentApi* | [**validateDocumentXmlValidation**](docs/Api/ValidateDocumentApi.md#validatedocumentxmlvalidation) | **POST** /convert/validate/xml | Validate an XML file
*ViewerToolsApi* | [**viewerToolsCreateSimple**](docs/Api/ViewerToolsApi.md#viewertoolscreatesimple) | **POST** /convert/viewer/create/web/simple | Create a web-based viewer


## Documentation For Models

 - [AddPdfAnnotationRequest](docs/Model/AddPdfAnnotationRequest.md)
 - [AlternateFileFormatCandidate](docs/Model/AlternateFileFormatCandidate.md)
 - [AutodetectDocumentValidationResult](docs/Model/AutodetectDocumentValidationResult.md)
 - [AutodetectGetInfoResult](docs/Model/AutodetectGetInfoResult.md)
 - [AutodetectToPngResult](docs/Model/AutodetectToPngResult.md)
 - [ConvertedPngPage](docs/Model/ConvertedPngPage.md)
 - [CreateBlankDocxRequest](docs/Model/CreateBlankDocxRequest.md)
 - [CreateBlankDocxResponse](docs/Model/CreateBlankDocxResponse.md)
 - [CreateBlankSpreadsheetRequest](docs/Model/CreateBlankSpreadsheetRequest.md)
 - [CreateBlankSpreadsheetResponse](docs/Model/CreateBlankSpreadsheetResponse.md)
 - [DeleteDocxTableRowRequest](docs/Model/DeleteDocxTableRowRequest.md)
 - [DeleteDocxTableRowResponse](docs/Model/DeleteDocxTableRowResponse.md)
 - [DocumentValidationError](docs/Model/DocumentValidationError.md)
 - [DocumentValidationResult](docs/Model/DocumentValidationResult.md)
 - [DocxBody](docs/Model/DocxBody.md)
 - [DocxCellStyle](docs/Model/DocxCellStyle.md)
 - [DocxFooter](docs/Model/DocxFooter.md)
 - [DocxHeader](docs/Model/DocxHeader.md)
 - [DocxImage](docs/Model/DocxImage.md)
 - [DocxInsertImageRequest](docs/Model/DocxInsertImageRequest.md)
 - [DocxInsertImageResponse](docs/Model/DocxInsertImageResponse.md)
 - [DocxPage](docs/Model/DocxPage.md)
 - [DocxParagraph](docs/Model/DocxParagraph.md)
 - [DocxRemoveObjectRequest](docs/Model/DocxRemoveObjectRequest.md)
 - [DocxRemoveObjectResponse](docs/Model/DocxRemoveObjectResponse.md)
 - [DocxRun](docs/Model/DocxRun.md)
 - [DocxSection](docs/Model/DocxSection.md)
 - [DocxSetFooterAddPageNumberRequest](docs/Model/DocxSetFooterAddPageNumberRequest.md)
 - [DocxSetFooterRequest](docs/Model/DocxSetFooterRequest.md)
 - [DocxSetFooterResponse](docs/Model/DocxSetFooterResponse.md)
 - [DocxSetHeaderRequest](docs/Model/DocxSetHeaderRequest.md)
 - [DocxSetHeaderResponse](docs/Model/DocxSetHeaderResponse.md)
 - [DocxStyle](docs/Model/DocxStyle.md)
 - [DocxTable](docs/Model/DocxTable.md)
 - [DocxTableCell](docs/Model/DocxTableCell.md)
 - [DocxTableRow](docs/Model/DocxTableRow.md)
 - [DocxTemplateApplicationRequest](docs/Model/DocxTemplateApplicationRequest.md)
 - [DocxTemplateOperation](docs/Model/DocxTemplateOperation.md)
 - [DocxText](docs/Model/DocxText.md)
 - [ExifValue](docs/Model/ExifValue.md)
 - [FinishEditingRequest](docs/Model/FinishEditingRequest.md)
 - [GetDocxBodyRequest](docs/Model/GetDocxBodyRequest.md)
 - [GetDocxBodyResponse](docs/Model/GetDocxBodyResponse.md)
 - [GetDocxHeadersAndFootersRequest](docs/Model/GetDocxHeadersAndFootersRequest.md)
 - [GetDocxHeadersAndFootersResponse](docs/Model/GetDocxHeadersAndFootersResponse.md)
 - [GetDocxImagesRequest](docs/Model/GetDocxImagesRequest.md)
 - [GetDocxImagesResponse](docs/Model/GetDocxImagesResponse.md)
 - [GetDocxPagesRequest](docs/Model/GetDocxPagesRequest.md)
 - [GetDocxPagesResponse](docs/Model/GetDocxPagesResponse.md)
 - [GetDocxSectionsRequest](docs/Model/GetDocxSectionsRequest.md)
 - [GetDocxSectionsResponse](docs/Model/GetDocxSectionsResponse.md)
 - [GetDocxStylesRequest](docs/Model/GetDocxStylesRequest.md)
 - [GetDocxStylesResponse](docs/Model/GetDocxStylesResponse.md)
 - [GetDocxTableByIndexRequest](docs/Model/GetDocxTableByIndexRequest.md)
 - [GetDocxTableByIndexResponse](docs/Model/GetDocxTableByIndexResponse.md)
 - [GetDocxTableRowRequest](docs/Model/GetDocxTableRowRequest.md)
 - [GetDocxTableRowResponse](docs/Model/GetDocxTableRowResponse.md)
 - [GetDocxTablesRequest](docs/Model/GetDocxTablesRequest.md)
 - [GetDocxTablesResponse](docs/Model/GetDocxTablesResponse.md)
 - [GetImageInfoResult](docs/Model/GetImageInfoResult.md)
 - [GetPdfAnnotationsResult](docs/Model/GetPdfAnnotationsResult.md)
 - [GetXlsxCellRequest](docs/Model/GetXlsxCellRequest.md)
 - [GetXlsxCellResponse](docs/Model/GetXlsxCellResponse.md)
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
 - [HtmlToPngRequest](docs/Model/HtmlToPngRequest.md)
 - [HtmlToTextRequest](docs/Model/HtmlToTextRequest.md)
 - [HtmlToTextResponse](docs/Model/HtmlToTextResponse.md)
 - [InsertDocxInsertParagraphRequest](docs/Model/InsertDocxInsertParagraphRequest.md)
 - [InsertDocxInsertParagraphResponse](docs/Model/InsertDocxInsertParagraphResponse.md)
 - [InsertDocxTableRowRequest](docs/Model/InsertDocxTableRowRequest.md)
 - [InsertDocxTableRowResponse](docs/Model/InsertDocxTableRowResponse.md)
 - [InsertDocxTablesRequest](docs/Model/InsertDocxTablesRequest.md)
 - [InsertDocxTablesResponse](docs/Model/InsertDocxTablesResponse.md)
 - [InsertXlsxWorksheetRequest](docs/Model/InsertXlsxWorksheetRequest.md)
 - [InsertXlsxWorksheetResponse](docs/Model/InsertXlsxWorksheetResponse.md)
 - [MultipageImageFormatConversionResult](docs/Model/MultipageImageFormatConversionResult.md)
 - [PageConversionResult](docs/Model/PageConversionResult.md)
 - [PdfAnnotation](docs/Model/PdfAnnotation.md)
 - [PdfDocument](docs/Model/PdfDocument.md)
 - [PdfFormField](docs/Model/PdfFormField.md)
 - [PdfFormFields](docs/Model/PdfFormFields.md)
 - [PdfMetadata](docs/Model/PdfMetadata.md)
 - [PdfPageText](docs/Model/PdfPageText.md)
 - [PdfTextByPageResult](docs/Model/PdfTextByPageResult.md)
 - [PdfToPngResult](docs/Model/PdfToPngResult.md)
 - [PresentationResult](docs/Model/PresentationResult.md)
 - [RemoveDocxHeadersAndFootersRequest](docs/Model/RemoveDocxHeadersAndFootersRequest.md)
 - [RemoveDocxHeadersAndFootersResponse](docs/Model/RemoveDocxHeadersAndFootersResponse.md)
 - [RemoveDocxPagesRequest](docs/Model/RemoveDocxPagesRequest.md)
 - [RemovePptxSlidesRequest](docs/Model/RemovePptxSlidesRequest.md)
 - [ReplaceStringRequest](docs/Model/ReplaceStringRequest.md)
 - [ScreenshotRequest](docs/Model/ScreenshotRequest.md)
 - [SetFormFieldValue](docs/Model/SetFormFieldValue.md)
 - [SetPdfFormFieldsRequest](docs/Model/SetPdfFormFieldsRequest.md)
 - [SetPdfMetadataRequest](docs/Model/SetPdfMetadataRequest.md)
 - [SplitPdfResult](docs/Model/SplitPdfResult.md)
 - [SplitPptxPresentationResult](docs/Model/SplitPptxPresentationResult.md)
 - [SplitXlsxWorksheetResult](docs/Model/SplitXlsxWorksheetResult.md)
 - [TextConversionResult](docs/Model/TextConversionResult.md)
 - [UpdateDocxTableCellRequest](docs/Model/UpdateDocxTableCellRequest.md)
 - [UpdateDocxTableCellResponse](docs/Model/UpdateDocxTableCellResponse.md)
 - [UpdateDocxTableRowRequest](docs/Model/UpdateDocxTableRowRequest.md)
 - [UpdateDocxTableRowResponse](docs/Model/UpdateDocxTableRowResponse.md)
 - [UrlToTextRequest](docs/Model/UrlToTextRequest.md)
 - [UrlToTextResponse](docs/Model/UrlToTextResponse.md)
 - [ViewerResponse](docs/Model/ViewerResponse.md)
 - [WorksheetResult](docs/Model/WorksheetResult.md)
 - [XlsxImage](docs/Model/XlsxImage.md)
 - [XlsxSpreadsheetCell](docs/Model/XlsxSpreadsheetCell.md)
 - [XlsxSpreadsheetColumn](docs/Model/XlsxSpreadsheetColumn.md)
 - [XlsxSpreadsheetRow](docs/Model/XlsxSpreadsheetRow.md)
 - [XlsxWorksheet](docs/Model/XlsxWorksheet.md)
 - [XmlAddAttributeWithXPathResult](docs/Model/XmlAddAttributeWithXPathResult.md)
 - [XmlAddChildWithXPathResult](docs/Model/XmlAddChildWithXPathResult.md)
 - [XmlFilterWithXPathResult](docs/Model/XmlFilterWithXPathResult.md)
 - [XmlQueryWithXQueryMultiResult](docs/Model/XmlQueryWithXQueryMultiResult.md)
 - [XmlQueryWithXQueryResult](docs/Model/XmlQueryWithXQueryResult.md)
 - [XmlRemoveAllChildrenWithXPathResult](docs/Model/XmlRemoveAllChildrenWithXPathResult.md)
 - [XmlRemoveWithXPathResult](docs/Model/XmlRemoveWithXPathResult.md)
 - [XmlReplaceWithXPathResult](docs/Model/XmlReplaceWithXPathResult.md)
 - [XmlSetValueWithXPathResult](docs/Model/XmlSetValueWithXPathResult.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




