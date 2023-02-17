<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class CredencialController extends BaseController
{
    public function index()
    {
        return view("Admin/table");
    }

    public function login()
    {
        echo "login";
        //return view("Admin/login");
    }

    public function new(){

    }
}
