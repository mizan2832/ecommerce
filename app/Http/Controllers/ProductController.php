<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('back.pages.product.index');
    }

    public function create(){
        return view('back.pages.product.create');
    }
}
