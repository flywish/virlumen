<?php

$api = app('Dingo\Api\Routing\Router');

$api->version(['v1', 'v2'], ['namespace' => 'App\Http\Controllers\Api'], function ($api) {
    $api->group(['prefix' => 'example'], function ($api) {
        $api->post('success', 'V1\ExampleController@successExample');
        $api->post('error', 'V1\ExampleController@errorExample');
        $api->post('paginator', 'V1\ExampleController@paginatorExample');
        $api->group(['middleware' => 'api.throttle', 'limit' => 10, 'expires' => 1], function($api){
            $api->post('throttle', 'V1\ExampleController@throttleExample');
        });
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
