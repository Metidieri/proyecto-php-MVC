<?php
require('controller/productController.php');
$cont=new ProductController();
$cont->getAllProducts();
?>