<?php
include "config.php";

$query = "SELECT cashier.name, product.name, category.name, product.price 
FROM cashier, product, category 
WHERE product.id_cashier=cashier.id and product.id_category=category.id";
