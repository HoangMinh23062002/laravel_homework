<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        Session::put('name', 'Minh');
        return view('index');
    }
}
