<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopProductDetailPageController extends Controller
{
    public function index()
    {
    	return view('shop_frontend.page.detailpage.index');
    }
}
