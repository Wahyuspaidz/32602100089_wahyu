<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index()
    {
        return view('helloworld');
    }
    public function layout()
    {
        return view('Layout');
    }
}