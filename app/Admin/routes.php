<?php

use Illuminate\Routing\Router;

Route::group(
    [
        'prefix' => 'admin',
        // 'middleware' => SC_ADMIN_MIDDLEWARE,
    ], 
    function (Router $router) {
    foreach (glob(__DIR__ . '/Routes/*.php') as $filename) {
        require_once $filename;
    }
    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('deny', 'HomeController@deny')->name('admin.deny');

});
