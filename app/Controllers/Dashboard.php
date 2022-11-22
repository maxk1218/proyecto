<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use \CideIgniter\Exceptions\PageNotFoundException;

class Dashboard extends BaseController
{
    public function principal()
    {
        $this->_loadDefaultView([],'principal');
    }
  

    public function _loadDefaultView($data,$view)
    {
        echo view ("user/templates/templateprincipal");
       echo view("user/control/$view",$data);
       echo view ("user/templates/templateprincipal2");

       
    }
}