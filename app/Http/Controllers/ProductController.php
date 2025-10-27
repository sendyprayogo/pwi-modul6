<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){
        $data = [
            'sName' => 'Tulis Nama Kamu',
            'sAdress' => 'Jl. Terus Jadian Kagak',
            'sStatus' => 'Belum Pasti'
        ];
        return view('pages.product', $data);
    }

    public function addProduct(){
        return view('pages.addProduct');
    }
}
