<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Inicio extends BaseController
{
    public function index()
    {
        //awa de owo
        
    }
    public function principal()
    {
        $this->_loadDefaultView([],'Principal');
    }
}
