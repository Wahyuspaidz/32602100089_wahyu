<?php

namespace App\Controllers;

class Tugas extends BaseController
{
    public function index()
    {
        return view('tugas/beranda');
    }

    public function tentang()
    {
        return view('tugas/about');
    }

    public function experience()
    {
       
        return view('tugas/experience');
       
    }
}