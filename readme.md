## Diplomasafe DOMPDF previewer

### Installtaion with Homestead
- Checkout the repository
- Configure the Homestead site. For example: ```diplomasafe-previewer.test```
- SSH into the VM and run ```composer install```
- Create new template blade file in resources. For example: ```preview-pdf-test.blade.php```
- css, fonts and images should be in public folder inside the template folder```preview-pdf-test```
- To test the result open ```http://diplomasafe-previewer.test/preview/preview-pdf-test```

### TODO:
- Add page and orientation params to preview url