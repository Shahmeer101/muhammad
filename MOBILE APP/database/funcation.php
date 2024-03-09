<?php

require ('database/DBcontroller.php');

require ('database/product.php');

$db =new DBcontroller();

$product =new product($db);

print_r($product->getData());



// Inside your product.php file



// ... rest of your code ...