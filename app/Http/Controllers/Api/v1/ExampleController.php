<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function responseExample(){
        return 123;
    }
}
