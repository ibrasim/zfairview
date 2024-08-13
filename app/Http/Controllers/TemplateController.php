<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //

    public function index()
    {
        
        return view ('frontend.home');
    }

    public function index2()
    {
        
        return view ('frontend.viewdata-a');
    }
    public function index3()
    {
        
        return view ('frontend.viewcustomer');
    }
}
