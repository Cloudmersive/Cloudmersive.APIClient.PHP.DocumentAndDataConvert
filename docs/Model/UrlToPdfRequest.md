# UrlToPdfRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL address of the website to screenshot.  HTTP and HTTPS are both supported, as are custom ports. | [optional] 
**extra_loading_wait** | **int** | Optional: Additional number of milliseconds to wait once the web page has finished loading before taking the screenshot.  Can be helpful for highly asynchronous websites.  Provide a value of 0 for the default of 5000 milliseconds (5 seconds) | [optional] 
**include_background_graphics** | **bool** | Optional: Set to true to include background graphics in the PDF, or false to not include.  Default is true. | [optional] 
**scale_factor** | **int** | Optional: Set to 100 to scale at 100%, set to 50% to scale down to 50% scale, set to 200% to scale up to 200% scale, etc.  Default is 100% | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


