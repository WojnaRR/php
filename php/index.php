<?php

require_once 'Product.php';
require_once 'VirtualProduct.php';
require_once 'AbstractProduct.php';



$prod1 = new VirtualProduct;
//$prod1 ->setID("1");
//$prod1 ->setName("butnike");
//$prod1 ->setPrice(34.2);
//$prod1 ->productCurrency = "zł";
//$prod1 ->setPhoto(1);
//$prod1 ->setDescription("fajny but nike");
//$prod1 ->setfile(10);
//$prod1 ->setSize(38);
//$prod1 -> setFile(2);

//$prod2 = new Product();

$prod1 -> id = 1;
$prod1 -> name = "butnike";
$prod1 -> price = 12.1;
$prod1 -> photo = 1;
$prod1 -> description = "fajny but nike";
$prod1 -> file = 1;
$prod1 -> size = 1;
$prod1 -> setPhoto(1);




//var_dump($prod1);

//echo ($prod1);

echo $prod1;