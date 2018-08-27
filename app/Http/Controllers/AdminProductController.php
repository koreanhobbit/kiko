<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use MediaUploader;

class AdminProductController extends Controller
{
    public function index()
    {
    	$breadcrumbsName = 'productlist';
    	$products = \App\Product::orderBy('id', 'desc')->paginate(15);
    	return view('admin_frontend.page.product.list', compact('products', 'breadcrumbsName'));
    }

    public function uploadImage(Request $request, $id)
    {
        //validator
        $validator = Validator::make($request->all(), [
            'image' => 'file|image',
        ]);

        //if validation for image failed
        if($validator->fails()) 
        {
            return response(['message' => $validator->errors()], 433);
        }

        //save the image
        $image = $request->file('image');

        $folder = 'uploads/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';

        $uniqid = uniqid();

        $mainImageName = $uniqid . '.' . $image->getClientOriginalExtension();

        $thumbImageName = $uniqid . '_thumb.' . $image->getClientOriginalExtension();

        if(!file_exists(public_path($folder))) 
        {
            mkdir(public_path($folder), 0755, true);
        } 

        $mainImage = Image::make($image)
            ->resize('1080', null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })

            ->save(public_path($folder) . $mainImageName);


        $media = MediaUploader::fromSource($image)
            ->toDestination('public', $folder)
            ->useFilename($uniqid)
            ->upload();

        $thumbImage = Image::make($image)
            ->resize('300', null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })

            ->save(public_path($folder) . $thumbImageName);

        $thumbMedia = MediaUploader::fromSource($image)
            ->toDestination('public', $folder)
            ->useFilename($uniqid . '_thumb')
            ->upload();

        $product = \App\Product::withMedia()->find($id);

        //attach image and thumbnail
        $product->attachMedia($media, 'image');
        $product->attachMedia($thumbMedia, 'imagethumbnail');

        return view('admin_frontend.page.product.part.edit.image', compact('product'))->render();
    }

    public function deleteImage(Request $request, $id)
    {
        if($request->ajax() && $request->title = 'deleteimage')
        {
            $product = \App\Product::find($id);

            $product->getMedia('image')->first()->delete();
            $product->getMedia('imagethumbnail')->first()->delete();
        }

        $product = \App\Product::find($id);
        return view('admin_frontend.page.product.part.edit.image', compact('product'))->render();
    }

    public function uploadGallery(Request $request, $id)
    {
        //validator
        $validator = Validator::make($request->all(), [
            'image' => 'file|image',
        ]);

        //if validation for image failed
        if($validator->fails()) 
        {
            return response(['message' => $validator->errors()], 433);
        }

        //save the image
        $image = $request->file('image');

        $folder = 'uploads/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';

        $uniqid = uniqid();

        $mainImageName = $uniqid . '.' . $image->getClientOriginalExtension();

        $thumbImageName = $uniqid . '_thumb.' . $image->getClientOriginalExtension();

        if(!file_exists(public_path($folder))) 
        {
            mkdir(public_path($folder), 0755, true);
        } 

        $mainImage = Image::make($image)
            ->resize('1080', null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })

            ->save(public_path($folder) . $mainImageName);


        $media = MediaUploader::fromSource($image)
            ->toDestination('public', $folder)
            ->useFilename($uniqid)
            ->upload();

        $thumbImage = Image::make($image)
            ->resize('300', null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })

            ->save(public_path($folder) . $thumbImageName);

        $thumbMedia = MediaUploader::fromSource($image)
            ->toDestination('public', $folder)
            ->useFilename($uniqid . '_thumb')
            ->upload();

        $product = \App\Product::withMedia()->find($id);

        //attach image and thumbnail
        $product->syncMedia($media,'gallery');
        $product->syncMedia($thumbMedia, 'gallerythumbnail');

        return view('admin_frontend.page.product.part.edit.gallery', compact('product'))->render();
    }

    public function deleteGallery(Request $request, $id)
    {
        // if($request->ajax() && $request->title = 'deleteimage')
        // {
        //     $product = \App\Product::find($id);

        //     $product->getMedia('image')->first()->delete();
        //     $product->getMedia('imagethumbnail')->first()->delete();
        // }

        // $product = \App\Product::find($id);
        return view('admin_frontend.page.product.part.edit.image', compact('product'))->render();
    }

    public function create(Request $request)
    {
        //make the product 
        $product = new \App\Product; 
        $product->save();

        $product->name = 'Product ' . $product->id;
        $product->save();

        return redirect()->route('admin.product.edit', ['id' => $product->id]);
    }

    public function edit(Request $request, $id)
    {
        //ajax call for reload image after upload list for image
        if ($request->ajax() && $request->title == 'reloadImageContainer') {
            
            $product = \App\Product::withMedia(['image', 'imagethumbnail'])->find($id);
            return view('admin_frontend.page.product.part.edit.image', compact('product'))->render();
        }

        $product = \App\Product::find($id);

        $brands = \App\LogoBrand::withMedia('image')->get();

        $breadcrumbsName = 'productcreate';

        return view('admin_frontend.page.product.edit', compact('breadcrumbsName', 'product', 'brands'));
    }

    public function update(Request $request, $id)
    {
        $product = App\Product::find($id);

        //validator
        $validator = Validator::make($request->all(), [
            'image' => 'file|image',
        ]);

        //if validation for image failed
        if($validator->fails()) 
        {
            return response(['message' => $validator->errors()], 433);
        }

        //save the image
        $image = $request->file('image');

        $folder = 'uploads/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';

        $uniqid = uniqid();

        $mainImageName = $uniqid . '.' . $image->getClientOriginalExtension();

        $thumbImageName = $uniqid . '_thumb.' . $image->getClientOriginalExtension();

        if(!file_exists(public_path($folder))) 
        {
            mkdir(public_path($folder), 0755, true);
        } 

        $mainImage = Image::make($image)
            ->resize('1080', null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })

            ->save(public_path($folder) . $mainImageName);


        $media = MediaUploader::fromSource($image)
            ->toDestination('public', $folder)
            ->useFilename($uniqid)
            ->upload();

        $thumbImage = Image::make($image)
            ->resize('300', null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })

            ->save(public_path($folder) . $thumbImageName);

        $thumbMedia = MediaUploader::fromSource($image)
            ->toDestination('public', $folder)
            ->useFilename($uniqid . '_thumb')
            ->upload();

        //attach image and thumbnail
        $product->syncMedia($media, 'image');
        $product->syncMedia($thumbMedia, 'imagethumbnail');

        return redirect()->route('admin.product.index');
    }
}
