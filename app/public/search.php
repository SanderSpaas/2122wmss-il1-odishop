<?php

require_once('../vendor/autoload.php');
require_once('../config/database.php');
require_once('../src/Services/DatabaseConnector.php');

// @TODO Fetch database connection
$connection = \Services\DatabaseConnector::getConnection();
// @TODO Bootstrap Twig 
$loader = new \Twig\Loader\FileSystemLoader(__DIR__ . '/../resources/templates');
$twig = new Twig\Environment($loader, [
    'cache' => __DIR__ . '/../storage/cache',
    'auto_reload' => true
]);

//de data
$term = isset($_POST['term']) ? $_POST['term'] : '';
$minprice = isset($_POST['minprice']) ? $_POST['minprice'] : '';
$maxprice = isset($_POST['maxprice']) ? $_POST['maxprice'] : '';
$color_id = isset($_POST['color_id']) ? $_POST['color_id'] : '';
$formErrors = []; // The encountered form errors
$products = [];
$kleurencheck = [];

//alle data uit database gaan halen
$idfetch = $connection->prepare('SELECT id FROM colors');
$idfetch = $idfetch->executeQuery();
$kleurencheck = $idfetch->fetchAllAssociative();

//alle kleuren uit database gaan halen
$kleurfetch = $connection->prepare('SELECT * FROM colors;');
$kleurfetch = $kleurfetch->executeQuery();
$kleuren = $kleurfetch->fetchAllAssociative();

// Handle action 'add' (user pressed add button)
if (isset($_POST['moduleAction']) && ($_POST['moduleAction'] === 'Zoeken')) {
    if (in_array(trim($color_id), $kleurencheck)) {
        array_push($formErrors, "Onbekende kleur-id");
    }
    if ($minprice > $maxprice) {
        array_push($formErrors, "Maximumprijs is kleiner dan minimumprijs");
    }
    if (empty($term)) {
        array_push($formErrors, "Lege zoekterm");
    }
    if (empty($formErrors)) {
        if ($color_id == 0) {
            //in de database gaan zoeken
            $productfetch = $connection->prepare('SELECT * From products');
            $productfetch = $productfetch->executeQuery();
            $products = $productfetch->fetchAllAssociative();
        }else{
            //in de database gaan zoeken
            // $productfetch = $connection->prepare('SELECT * BETWEEN :min AND :max FROM products WHERE title LIKE :%term%');
            // $productfetch->bindValue($minprice, $maxprice, $term);
            // $productfetch = $productfetch->executeQuery();
            // $products = $productfetch->fetchAllAssociative();
        }
    }
}

print_r($kleuren);
print_r($color_id);
print_r($minprice);
print_r($maxprice);
print_r($kleurencheck);


// No action to handle: show our page itself
$variables = [
    'kleuren' => $kleuren,
    'term' => $term,
    'minprice' => $minprice,
    'maxprice' => $maxprice,
    'formErrors' => $formErrors,
    'products' => $products,
    'color_id' => $color_id,
];

$template = $twig->load('search.twig');
echo $template->render($variables);
