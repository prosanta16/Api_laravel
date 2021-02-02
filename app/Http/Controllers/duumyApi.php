<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class duumyApi extends Controller
{
    function getData(){
        return ['name'=>'pp','email'=>'pp@gmail.com','pass'=>'tanu123'];
    }
}
