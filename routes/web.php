<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});



Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Sendy Prayogo',
        'kelas'=> 'TSM-00',
        'nim' => '0123456789',
    ]);
});

Route::get('/about/{id}/detail', function($id){
    return view('pages.detail', [
        'nomer'=>$id
    ]);
});

Route::view('/contact', 'pages.contact');