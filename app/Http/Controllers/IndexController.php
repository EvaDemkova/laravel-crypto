<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //prepare somthing for the react app

        
        return view('index/index');
    }
}
