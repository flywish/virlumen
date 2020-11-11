<?php

$api = app('Dingo\Api\Routing\Router');

$api->version(['v1','v2'], ['namespace' => 'App\Http\Controllers\Api'], function ($api) {
    $api->group(['prefix' => 'example'], function($api){
        $api->get('response', 'v1\ExampleController@responseExample');
    });
});