<?php 

require "./vendor/autoload.php";

use \Pecee\SimpleRouter\SimpleRouter as Route;
use Pecee\Http\Response;
use Pecee\Http\Request;

Route::get('/organica22', function() {
    include_once "main.php";
});

Route::get('/organica22/products/{criteria?}/{value?}/{critvalue?}', function() {
    include_once "category.php";
})->setMatch('/\/organica22\/([\w]+)\/([\w]+)\/([\w&]+)/');

Route::get('/organica22/product/{productId?}', function() {
    include_once "product.php";
});

Route::get('/organica22/faq', function() {
    include_once "faq.php";
});

Route::get('/organica22/story', function() {
    include_once "story.php";
});

Route::get('/organica22/not-found', function() {
    include_once "404.php";
});

function response(): Response
{
    return Route::response();
}

Route::error(function(Request $request, \Exception $exception) {

switch($exception->getCode()) {
    // Page not found
    case 404:
        response()->redirect('/organica22/not-found');
    // Forbidden
    case 403:
        response()->redirect('/forbidden');
}

});

Route::start();

?>