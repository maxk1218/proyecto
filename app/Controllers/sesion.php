<?php

namespace App\Controllers;

class sesion extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function principal1()
    {
        return view('principal');
    }
}