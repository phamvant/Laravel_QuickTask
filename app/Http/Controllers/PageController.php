<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function h()
    {
        $products = Product::all();
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
    public function get_data()
    {
    $path = base_path().'/url.txt';
    $var = 1;
    $handle = fopen($path, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $var = $var + 1;
            $array = (string) $line;
            $array = preg_replace('/\s+/', ' ', trim($array));
            $content = file_get_contents($array);
            preg_match('#<title>(.*)</title>#', $content, $match);
            preg_match("'<meta property=\"og:image\" content=\"(.*?)\" />'si", $content, $match1);
            preg_match("'<span class=\"pd-price js-variantSelected-price\">(.*?)</span>'si", $content, $match2);
            $price = str_replace(' ', '', $match2[1]);
            $img = $match1[1];
            $name = $match[1];
            $user = Product::create([
            'productid' => $var,
            'images' => $img,
            'nameproduct' => $name,
            'price' => $price,
            'categoryid' => 1,
            'supplierid' => 1,
            'warehouseid' => 1,
        ]);
        }
        $var = 1;
        fclose($handle);
    }
    dd("OK");
    }
}
