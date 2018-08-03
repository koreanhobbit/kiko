<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopMainPageController extends Controller
{
    public function index()
    {
    	$featuredProducts = \App\Product::orderBy('id', 'desc')->take(8)->get();

    	$sliders = \App\ShopSlider::inRandomOrder()->withMedia()->get();
    	return view('shop_frontend.page.mainpage.index', compact('sliders', 'featuredProducts'));
    }
}
