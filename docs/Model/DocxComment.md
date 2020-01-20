# DocxComment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | Path to the comment in the document | [optional] 
**author** | **string** | Author name of the comment | [optional] 
**author_initials** | **string** | Initials of the author of the comment | [optional] 
**comment_text** | **string** | Text content of the comment | [optional] 
**comment_date** | [**\DateTime**](\DateTime.md) | Date timestamp of the comment | [optional] 
**is_top_level** | **bool** | True if the comment is at the top level, false if this comment is a child reply of another comment | [optional] 
**is_reply** | **bool** | True if this comment is a reply to another comment, false otherwise | [optional] 
**parent_comment_path** | **string** | Path to the parent of this comment, if this comment is a reply, otherwise this value will be null | [optional] 
**done** | **bool** | True if this comment is marked as Done in Word, otherwise it is false | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


