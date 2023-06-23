<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestAPIController extends Controller
{
    public function firstAPI()
    {
       // return "Response from controller";
        return [["name"=>'John',"email"=>'john@gmail.com'],["name"=>'David',"email"=>'david@gmail.com']];

    }
}
