<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {
        return view('porto.menus');
    }
}

