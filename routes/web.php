<?php


$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('portfolio', [
    'as' => 'portfolio',
    'uses' => 'PortfolioController@index',
]);


$router->get('portfolio/{template}', [
    'as' => 'portfolioItem', 'uses' => 'PortfolioController@project'
]);


$router->get('order', ['as' => 'order', function () use ($router) {
    return view('order');
}]);
