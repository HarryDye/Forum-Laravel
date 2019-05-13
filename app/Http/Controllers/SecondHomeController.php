<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondHomeController extends Controller
{
    public function index()
    {
        return view('/');
    }
}