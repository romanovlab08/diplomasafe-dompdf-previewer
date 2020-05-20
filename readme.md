## Diplomasafe DOMPDF previewer

### Installtaion with Homestead
- Checkout the repository
- Configure the Homestead site. For example: ```diplomasafe-previewer.test```
- SSH into the VM and run ```composer install```
- Create new template blade file in resources. For example: ```example-diploma.blade.php```
- css, fonts and images should be in public folder inside the template folder```example-diploma```
- To test the result open ```http://diplomasafe-previewer.test/preview/example-diploma/[SIZE]/[ORIENTATION]```
- Size can be one of the following - https://github.com/dompdf/dompdf/blob/v0.8.2/src/Adapter/CPDF.php#L45
- Orientation - 'portrait' or 'landscape'
- Make sure you don't have @page with exact sizes in your css, if you do the SIZE and ORIENTATION params wont work