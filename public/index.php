<?php
require '../vendor/autoload.php';
$products = [
    'product1' => 'product-image.png',
    'product2' => 'product-image.png',
    'product3' => 'product-image.png',
    'product4' => 'product-image.png',
    'product5' => 'product-image.png',
];
$loader = new Twig\Loader\FileSystemLoader('../src/view');
$twig = new Twig\Environment($loader);

echo $twig->render('base.html.twig', ['products'=>$products]);
?>


