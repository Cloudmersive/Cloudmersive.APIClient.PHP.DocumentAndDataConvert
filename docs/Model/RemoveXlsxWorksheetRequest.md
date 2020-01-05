# RemoveXlsxWorksheetRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input_file_bytes** | **string** | Optional: Bytes of the input file to operate on | [optional] 
**input_file_url** | **string** | Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public). | [optional] 
**worksheet_to_remove** | [**\Swagger\Client\Model\XlsxWorksheet**](XlsxWorksheet.md) | Required; Worksheet (tab) within the spreadsheet to delete; leave blank to default to the first worksheet.  Use the Get Worksheets API to enumerate available worksheets in a spreadsheet. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


