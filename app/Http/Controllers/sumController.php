<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sumController extends Controller
{
    public function GetValue()
    {
        return view('Sum');
    }
    public function Result(Request $req)
    {
        $sumab = $req->number1 + $req->number2;
        return view('Sum',compact('sumab'));
    }
}