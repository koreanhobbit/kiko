<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator;
use MediaUploader;
use Intervention\Image\ImageManagerStatic as Image;

class AdminMediaController extends Controller
{
    public function index()
    {
    	
    	return view('admin_frontend.page.media.list');
    }


    public function store(Request $request)
    {
    
    	

    	return response()->json(['data' => $media], 201);
    }
}
