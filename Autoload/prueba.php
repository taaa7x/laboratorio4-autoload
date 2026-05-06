<?php 
use App\User;
use Database\ProductModel;
require "vendor/autoload.php";

$user = new User; 
echo $user->getName();

$product = new ProductModel;
echo $product->getId();
?>