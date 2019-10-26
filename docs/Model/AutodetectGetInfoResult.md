# AutodetectGetInfoResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**successful** | **bool** | True if the operation was successful, false otherwise | [optional] 
**detected_file_extension** | **string** | Detected file extension of the file format, with a leading period | [optional] 
**detected_mime_type** | **string** | MIME type of this file extension | [optional] 
**page_count** | **int** | Number of pages in a page-based document; for presentations, this is the number of slides and for a spreadsheet this is the number of worksheets.  Contains 0 when the page count cannot be determined, or if the concept of page count does not apply (e.g. for an image) | [optional] 
**author** | **string** | User name of the creator/author of the document, if available, null if not available | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The timestamp that the document was last modified, if available, null if not available | [optional] 
**alternate_file_type_candidates** | [**\Swagger\Client\Model\AlternateFileFormatCandidate[]**](AlternateFileFormatCandidate.md) | Alternate file type options and their probability | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


