<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CredencialController extends BaseController
{
    public function index()
    {
        $session = session();
        
        return view("Admin/table");
    }

    public function login()
    {
    
        return view("Admin/login");
    }

    public function loginValidation()
    {
        echo "validacion de login";
        $session  = session();

        $session->set("userName", "Marcos");

        return redirect()->to("admin/credencial");
    }

    public function new(){

    }
}
