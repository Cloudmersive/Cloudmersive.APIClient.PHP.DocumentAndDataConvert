# UpdateDocxTableCellRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input_file_bytes** | **string** | Optional: Bytes of the input file to operate on | [optional] 
**input_file_url** | **string** | Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public). | [optional] 
**cell_to_update** | [**\Swagger\Client\Model\DocxTableCell**](DocxTableCell.md) | Table cell contents you would like to update the cell with | [optional] 
**table_row_index** | **int** | 0-based index of the Table Row to update | [optional] 
**table_cell_index** | **int** | 0-based index of the Table Cell (within the row) to update | [optional] 
**existing_table_path** | **string** | Required; the path to the existing table to modify | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


