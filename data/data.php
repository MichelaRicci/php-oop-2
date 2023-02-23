<?php

require_once __DIR__ . '/../models/Products.php';
require_once __DIR__ . '/../models/Categories.php';
require_once __DIR__ . '/../models/Food.php';



$dog = new Category('cani');
$cat = new Category('gatti');

$secco = new Product('Alimento secco', 'https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/7/x07613034147509_c1n1_44172084.jpg.pagespeed.ic.xQGaAY0Vvm.webp', 'Purina One', '5eur', 'Alimento secco per cani, gusto manzo', $dog, '10kg');
$umido = new Product('Alimento umido', 'https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/7/07613035470217_c1n1_one_dog_with_chicken_carrots_and_green_beans_in_gravy_beef_potatoes_and_peas_in_gravy_4x100g_1_44036792.jpg', 'Purina One', '5eur', 'Alimento umido per cani, gusto manzo', $dog, '10kg');


$food =[$secco, $umido]

?>