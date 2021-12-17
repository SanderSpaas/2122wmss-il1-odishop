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


//alle data uit database gaan halen
    $productsfetch = $connection->prepare('SELECT * FROM products ORDER BY Title ASC');
    // $productsfetch->bindValue("id", $id);
    $productsfetch = $productsfetch->executeQuery();
    $products = $productsfetch->fetchAllAssociative();


// No action to handle: show our page itself

$variables = [
    'products' => $products,
];

$template = $twig->load('index.twig');
echo $template->render($variables);
