<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function mp()
    {
        return view('pages.mousepad');
    }
    public function gg()
    {
        return view('pages.gaminggear');
    }
    public function da()
    {
        return view('pages.decoraccessories');
    }
    public function smw()
    {
        return view('pages.speakermicrowebcam');
    }
    public function gc()
    {
        return view('pages.gamingchair');
    }
    public function gt()
    {
        return view('pages.gamingtable');
    }
    public function ssu()
    {
        return view('pages.signalsplitterusb');
    }
    public function rc()
    {
        return view('pages.radiatorscooling');
    }
    public function pa()
    {
        return view('pages.phoneaccessories');
    }
}
