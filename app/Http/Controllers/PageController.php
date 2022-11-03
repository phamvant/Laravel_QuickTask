<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        // $input = fopen("/home/sonle/Laravel_Quicktask/product.txt", "r");
        // $var = 1;
        // // Display a line of the file until the end 
        // while(!feof($input)) {
      
        //     $product = Product::create([
        //         'images' => $var,
        //     ]);
        //     $var = $var + 1;
        // }

        return view('welcome');
    }
    public function h()
    {
        $products = Product::all();
        // dd(compact('products'));
        foreach($products as $product){
            print_r($product->Images);
        }
        return view('pages.home', compact('products'));
    }
    public function m()
    {
        return view('pages.mouse');
    }
    public function k()
    {
        return view('pages.keyboard');
    }
    public function f()
    {
        return view('pages.figure');
    }
    public function s()
    {
        return view('pages.speaker');
    }
    public function c()
    {
        return view('pages.clock');
    }
    public function da()
    {
        return view('pages.decoraccessories');
    }
   
}
