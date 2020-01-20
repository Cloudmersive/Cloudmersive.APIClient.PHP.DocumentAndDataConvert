# DocxInsertCommentOnParagraphRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input_file_bytes** | **string** | Optional: Bytes of the input file to operate on | [optional] 
**input_file_url** | **string** | Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public). | [optional] 
**paragraph_path** | **string** | Path to the paragraph to attach the comment to.  You can get the Path by retrieving all of the Paragraphs in document by calling Get Body and taking the Path property of the desired paragraph to add the comment to. | [optional] 
**comment_to_insert** | [**\Swagger\Client\Model\DocxComment**](DocxComment.md) | Comment to insert | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


