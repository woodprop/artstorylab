<?php


$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('portfolio', [
    'as' => 'portfolio',
    'uses' => 'PortfolioController@index',
]);


$router->get('portfolio/{template}', [
    'as' => 'port', 'uses' => 'PortfolioController@project'
]);
