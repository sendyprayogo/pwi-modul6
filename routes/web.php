<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});



Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'sendy prayogo',
        'umur'=> '29',
        'nim' => '008',
    ]);
});

Route::get('/about/{id}/detail', function($id){
    return view('pages.detail', [
        'nomer'=>$id
    ]);
});

Route::view('/contact', 'pages.contact');