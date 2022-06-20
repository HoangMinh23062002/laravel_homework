<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\sumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['prefix'=>'MyGroup'], function () 
// {
//     Route::get('User1',function(){
//         echo "User1";
//     });

//     Route::get('User2',function(){
//         echo "User2";
//     }); 

//     Route::get('User3',function(){
//         echo "User3";
//     });
// });

// Route::get('/test', [HomeController::class, 'fc']);
// Route::get('tinhtong',[sumController::class,function()
// {
//     return view('Sum');
// }
// ]);
// Route::get('/sum',[sumController::class,'GetValue']);

// Route::get('/get-result',[sumController::class,'Result']);

//  Route::get('/signup',[signupController::class, 'index']);
//  Route ::post('/signup',[signupController::class,'displayInfor']);


// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\MasterController;
use App\Http\Requests\Signup;
use App\Http\Controllers\createTable;

Route::get(
    '/',
    'App\Http\Controllers\UserController@getIndex'
);

Route::get('admin', function () {
    return view('addRoom');
});

Route::get('admin',[HomeController::class,'index']);
Route::post('admin',[HomeController::class,'addRoom']);


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('user', function () {
//         echo 'Users Management';
//     });
//     Route::get('product', function () {
//         echo 'Products Management';
//     });
// });

// Route::get(
//     '/sum',function () {
//         return view('sum');
//     }
// );

// Route::post('sum', 'App\Http\Controllers\UserController@sum');

// Route::get(
//     '/login ',function () {
//         return view('login');
//     }
// );

// Route::get('/signup',[Authentication::class,'signup']);
// Route::post('/signup',[Authentication::class,'displayInfor']);
// Route::get('/',[MasterController::class,'getIndex']);
// route::get('database', function()){
//     $chema::create('minhngu',function($table)(

//     ))
// }
Route::get('/',[createTable::class,'productTable']);