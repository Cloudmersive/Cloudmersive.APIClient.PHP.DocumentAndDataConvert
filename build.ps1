﻿#Remove-Item –path ./ –recurse
& java -jar swagger-codegen-cli.jar generate -i https://api.cloudmersive.com/swagger/api/convert -l php -c packageconfig.json
#(Get-Content ./client/package.json).replace('v1', '1.0.1') | Set-Content ./client/package.json
Copy-Item ./cloudmersive_document_convert_api_client/* -Destination . -Recurse -Force
Remove-Item –path ./cloudmersive_document_convert_api_client –recurse
& php C:\ProgramData\ComposerSetup\bin\composer.phar install