<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\localcontroller;
use App\Http\Controllers\belajar_controller;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/home', function () {
    $mantanapip=array('Seti Azzura','Rusdi','Narji');
    return view('home', [
        "nama"=>"apip",
        "kelas"=>"XI RPL 2",
        "alamat"=>"kampung dalam",
        "mantanapip"=>$mantanapip,
        "menu"=>"mantan"
    ]);
})->name('mantan');

Route::get('/try', [belajar_controller::class, 'index'])->name('latihan');

Route::get('/biodata', 
[belajar_controller::class, 'biodata'])->name('biodata');

Route::get('/sbadmin', function () {
    return view('index',[
        "menu"=>'dashboard'
    ]);
})->name('dashboard');

Route::get('/local', [localcontroller::class, 'index'])->name('local.index');

Route::get('/local/create', [localcontroller::class, 'create'])->name('local.create');

Route::post('/local', [localcontroller::class, 'store'])->name('local.store');

Route::get('/local/edit/{id}', [localcontroller::class, 'edit'])->name('local.edit');

Route::delete('/local/delete/{id}', [localcontroller::class, 'destroy'])->name('local.hapus');

Route::put('/local/update', [localcontroller::class, 'update'])->name('local.update');