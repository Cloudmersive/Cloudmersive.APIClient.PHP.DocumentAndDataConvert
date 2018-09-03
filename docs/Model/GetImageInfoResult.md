# GetImageInfoResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**successful** | **bool** |  | [optional] 
**color_space** | **string** | Color space of the image | [optional] 
**color_type** | **string** | Color type of the image | [optional] 
**width** | **int** | Width in pixels of the image | [optional] 
**height** | **int** | Height in pixels of the image | [optional] 
**compression_level** | **int** | Compression level value from 0 (lowest quality) to 100 (highest quality) | [optional] 
**image_hash_signature** | **string** | SHA256 hash signature of the image | [optional] 
**has_transparency** | **bool** | True if the image contains transparency, otherwise false | [optional] 
**mime_type** | **string** | MIME type of the image format | [optional] 
**image_format** | **string** | Image format | [optional] 
**dpi_unit** | **string** | Units of the DPI measurement; can be either in Inches or Centimeters | [optional] 
**dpi** | **double** | DPI (pixels per unit, e.g. pixels per inch) of the image | [optional] 
**color_count** | **int** | Unique colors in the image | [optional] 
**bit_depth** | **int** | Bit depth of the image | [optional] 
**comment** | **string** | Comment string in the image | [optional] 
**exif_profile_name** | **string** | Name of the EXIF profile used | [optional] 
**exif_values** | [**\Swagger\Client\Model\ExifValue[]**](ExifValue.md) | EXIF tags and values embedded in the image | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


