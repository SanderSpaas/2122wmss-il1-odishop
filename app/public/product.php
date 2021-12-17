<?php

require_once ('../vendor/autoload.php');
require_once ('../config/database.php');
require_once ('../src/Services/DatabaseConnector.php');

// @TODO Fetch database connection
$connection = \Services\DatabaseConnector::getConnection();
// @TODO Bootstrap Twig 
$loader = new \Twig\Loader\FileSystemLoader(__DIR__ . '/../resources/templates');
$twig = new Twig\Environment($loader, [
    'cache' => __DIR__ . '/../storage/cache',
    'auto_reload' => true
]);


$id = isset($_GET['id']) ? (int) $_GET['id'] : ''; // The id of the product passed by the URL
//alle data uit database gaan halen
if ($id) {
    $productfetch = $connection->prepare('SELECT * FROM products left join colors on products.color_id = colors.id where products.id=:id ;');
    $productfetch->bindValue("id", $id);
    $productfetch = $productfetch->executeQuery();
    $products = $productfetch->fetchAllAssociative();
}
if(empty($products)){
    header('Location: index.php');
    exit();
}
print_r($products);

// No action to handle: show our page itself
$variables = [
    'products' => $products,
];

$template = $twig->load('product.twig');
echo $template->render($variables);
