#Remove-Item –path ./ –recurse
& java -jar swagger-codegen-cli.jar generate -i https://api.cloudmersive.com/swagger/api/barcode -l php -c packageconfig.json
#(Get-Content ./client/package.json).replace('v1', '1.0.1') | Set-Content ./client/package.json
Copy-Item ./barcode_api_client/* -Destination . -Recurse -Force
Remove-Item –path ./barcode_api_client –recurse