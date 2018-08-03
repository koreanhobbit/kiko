<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopContactPageController extends Controller
{
    public function index()
    {
    	return view('shop_frontend.page.contactpage.index');
    }
}
