<?php

use App\Http\Controllers\belajar_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/home', function () {
    $mantanapip=array('Seti Azzura','Rusdi','Narji');
    return view('home', [
        "nama"=>"apip",
        "kelas"=>"XI RPL 2",
        "alamat"=>"kampung dalam",
        "mantanapip"=>$mantanapip
    ]);
})->name('member');

Route::get('/try', [belajar_controller::class, 'index'])->name('latihan');

Route::get('/biodata', 
[belajar_controller::class, 'biodata'])->name('biodata');

Route::get('/sbadmin', function(){
    return view('index'); 
})->name('dashboard');