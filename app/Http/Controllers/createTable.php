<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
class createTable extends Controller
{
    public function productTable()
    {
        Schema::create('minhngu', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('description');
            $table->string('quantity');
            $table->timestamps();
        });
        // Schema::create('minhngu', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('image');
        //     $table->string('description');
        //     $table->string('quantity');
        //     $table->timestamps();
        // });
        // echo("tạo thành công");
    }
    // public function newTable()
    // {
    //     Schema::create('minhngu', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->string('title');
    //         $table->string('image');
    //         $table->string('description');
    //         $table->string('quantity');
    //         $table->timestamps();
    //     });
    //     echo("tạo thành công");
    // }
}