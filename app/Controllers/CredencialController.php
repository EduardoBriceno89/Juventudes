<?php

namespace App\Controllers;

class CredencialController extends BaseController
{
    public function index()
    {
        return view('view1');
    }

    public function new(){
        return view("view2");
    }
}
