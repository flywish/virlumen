<?php

$api = app('Dingo\Api\Routing\Router');

$api->version(['v1', 'v2'], ['namespace' => 'App\Http\Controllers\Api'], function ($router) {
    $router->group(['prefix' => 'example'], function ($router) {
        $router->get('test', 'V1\ExampleController@test');

        $router->get('response', 'V1\ExampleController@response');
        $router->get('throttle', 'V1\ExampleController@throttle');
    });
});

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    $api->group(['middleware' => 'auth', 'prefix' => 'auth'], function ($api) {
        $api->post('login', 'AuthController@login');
        $api->post('logout', 'AuthController@logout');
        $api->post('refresh', 'AuthController@refresh');
        $api->post('me', 'AuthController@me');
    });
});
