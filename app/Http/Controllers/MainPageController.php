<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
    	$siteMediaSocials = \App\SiteMediaSocial::orderBy('id', 'asc')->get();

    	$deliveryProviders = \App\DeliveryProvider::orderBy('id', 'asc')->get();

    	$logoBrands = \App\LogoBrand::withMedia('image')->get();
    	
    	return view('frontend.mainpage.index', compact('siteMediaSocials', 'deliveryProviders', 'logoBrands'));
    }
}
