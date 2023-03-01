<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //return the data from model
    public function index(){
        return view('index',
        [
            'index' => Products::all()
        ]
    );
    }

    public function about(){
        return view('about',
        [
            'about' => Products::all()
        ]
    );
    }

    public function products(){
        return view('products',
        [   
            'products' => Products::all()
        ]
    );
    }

   

}