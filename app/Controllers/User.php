<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use \CideIgniter\Exceptions\PageNotFoundException;

class User extends BaseController
{
    public function login()
    {
        $this->_loadDefaultView([],'login');
    }
    public function login_post()
    {
       
    }
    public function logout()
    {
       
    }
    public function _loadDefaultView($data,$view)
    {
        echo view ("user/templates/csstemplate");
       echo view("user/control/$view",$data);
       echo view ("user/templates/csstemplate2");

       
    }
}