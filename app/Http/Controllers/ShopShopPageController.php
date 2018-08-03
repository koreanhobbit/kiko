<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopShopPageController extends Controller
{
    public function index()
    {
    	return view('shop_frontend.page.shoppage.index');
    }
}
