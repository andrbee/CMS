<?php

require "../app/ShopProduct.php";

$product = new app\ShopProduct();
$product->producerMainName="Балашов";
$product->producerFirstName="Андрей";
echo $product->getProducer();



