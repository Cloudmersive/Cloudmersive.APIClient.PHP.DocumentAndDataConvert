# DocxInsertImageRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input_document_file_bytes** | **string** | Optional: Bytes of the input file to operate on | [optional] 
**input_document_file_url** | **string** | Optional: URL of a file to operate on as input.  This can be a public URL, or you can also use the begin-editing API to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public). | [optional] 
**input_image_file_bytes** | **string** | Optional: Bytes of the input image file to operate on; if you supply this value do not supply InputImageFileUrl or ImageToAdd. | [optional] 
**input_image_file_url** | **string** | Optional: URL of an image file to operate on as input; if you supply this value do not supply InputImageFileBytes or ImageToAdd.  This can be a public URL, or you can also use the begin-editing API to upload a document and pass in the secure URL result from that operation as the URL here (this URL is not public). | [optional] 
**image_to_add** | [**\Swagger\Client\Model\DocxImage**](DocxImage.md) | Optional: Image to add; if you supply in this object, do not supply InputImageFileBytes or InputImageFileUrl. | [optional] 
**insert_placement** | **string** | Optional; default is DocumentEnd.  Placement Type of the insert; possible values are: DocumentStart (very beginning of the document), DocumentEnd (very end of the document), BeforeExistingObject (right before an existing object - fill in the InsertPath field using the Path value from an existing object), AfterExistingObject (right after an existing object - fill in the InsertPath field using the Path value from an existing object) | [optional] 
**insert_path** | **string** | Optional; location within the document to insert the object; fill in the InsertPath field using the Path value from an existing object.  Used with InsertPlacement of BeforeExistingObject or AfterExistingObject | [optional] 
**width_in_emus** | **int** | Optional: The width of the image in EMUs | [optional] 
**height_in_emus** | **int** | Optional: The height of the image in EMUs | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


