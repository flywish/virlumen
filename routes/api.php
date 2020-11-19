<?php

$api = app('Dingo\Api\Routing\Router');

$api->version(['v1','v2'], ['namespace' => 'App\Http\Controllers\Api'], function ($api) {
    $api->group(['prefix' => 'example'], function($api){
        $api->get('response', 'v1\ExampleController@responseExample');
    });
});


$api->version('v1', ['namespace' => 'App\Http\Controllers\Api'], function ($api) {
    $api->group(['prefix' => 'user'], function($api){
        $api->post('login','UserController@login');
        $api->post('logout', 'UserController@logout');
        $api->post('refresh', 'UserController@refresh');
        $api->post('me', 'UserController@me');
    });
});
