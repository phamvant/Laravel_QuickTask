<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function h()
    {
        return view('pages.home');
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
