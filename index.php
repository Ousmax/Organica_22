<?php 

require "./vendor/autoload.php";

use \Pecee\SimpleRouter\SimpleRouter as Route;
use Pecee\Http\Response;
use Pecee\Http\Request;

Route::get('/organica', function() {
    include_once "main.php";
});

Route::get('/organica/products/{criteria?}/{value?}/{critvalue?}', function() {
    include_once "category.php";
})->setMatch('/\/organica\/([\w]+)\/([\w]+)\/([\w&]+)/');

Route::get('/organica/product-page/{productId?}', function() {
    include_once "product.php";
});

Route::get('/organica/faqs', function() {
    include_once "faq.php";
});

Route::get('/organica/our-story', function() {
    include_once "story.php";
});

Route::get('/organica/not-found', function() {
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
        response()->redirect('/organica/not-found');
    // Forbidden
    case 403:
        response()->redirect('/forbidden');
}

});

Route::start();

?>