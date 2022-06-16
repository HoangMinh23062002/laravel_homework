<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\signupRequest;

use Illuminate\Http\Request;


class signupController extends Controller
{
    public function index()
{
    return view('signup');
}
public function displayInfor(signupRequest $Request){
  $user=[
    'name'=>$name=$Request->input("name"),
    'age'=>$age=$Request->input("age"),
    'date'=>$date=$Request->input("date"),
    'phone'=>$phone=$Request->input("phone"),
    'web'=>$web=$Request->input("web"),
    'address'=>$web=$Request->input('address')
  ];
  return view('signup')->with('user',$user);
}
}