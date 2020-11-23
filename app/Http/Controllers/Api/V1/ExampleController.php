<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiBaseController;
use App\Models\User;

class ExampleController extends ApiBaseController{

    public function test(){
        $data  = ['errcode' => 1, 'errmsg' => 'right'];
        return $this->response->array($data);
    }


    public function response(){
        return $this->response->error('MP',500);
    }
}
