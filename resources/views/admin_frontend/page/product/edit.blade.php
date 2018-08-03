@extends('admin_frontend.layout.frame')

@section('style')
	{{-- dropzone css --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.css">
@endsection

@section('breadcrumb')
	@include('admin_frontend.page.product.part.breadcrumb')
@endsection

@section('fullside')
	<section class="productCreate">
		<div class="container-fluid">
			<header>
				<h1 class="h3 display">
					Product
				</h1>
			</header>
			<form class="form-horizontal">
				<div class="row">
					<div class="col-md-9">
						<div class="card">
			                <div class="card-header d-flex align-items-center">
			                  <h4>Please fill all the requirements</h4>
			                </div>
			                <div class="card-body">
			                  	{{-- name of the product --}}
			                    <div class="form-group row">
			                      <label class="col-sm-2 form-control-label {{ $errors->has('name') ? 'text-danger' : '?' }}">Name</label>
			                      <div class="col-sm-10">
			                        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '?' }}" id="name" name="name" value="{{ empty($product->name) ? old('name') : $product->name }}" required>
			                        <div class="form-text">
			                        	<span>
			                        		<small>
			                        			meta-data: 
			                        			{{ !empty($product->name) ? $product->slug : '' }}
			                        		</small>
			                        	</span>
			                        	
			                        </div>
			                        @if($errors->has('name'))
				                        <span class="text-small text-danger help-block-none"> 
				                        	{{ $errors->first('name') }}		
				                        </span>
				                    @endif
			                      </div>
			                    </div>
			                    
			                    {{-- product description --}}
			                    <div class="form-group row">
			                      <label class="col-sm-2 form-control-label {{ $errors->has('description') ? 'text-danger' : '?' }}">Description</label>
			                      <div class="col-sm-10">
			                        <textarea>
										
									</textarea>
			                        @if($errors->has('description'))
										<span class="text-small text-danger help-block-none"> 
				                        	{{ $errors->first('description') }}		
				                        </span>
			                        @endif
			                      </div>
			                    </div>

			                    {{-- product code --}}
			                    <div class="form-group row">
			                      <label class="col-sm-2 form-control-label {{ $errors->has('product_code') ? 'text-danger' : '?' }}">Product Code</label>
			                      <div class="col-sm-10">
			                        <input type="text" class="form-control {{ $errors->has('slug') ? 'text-danger' : '?' }}" id="slug" name="slug" required>
			                        @if($errors->has('slug'))
										<span class="text-small text-danger help-block-none"> 
				                        	{{ $errors->first('slug') }}		
				                        </span>
			                        @endif
			                      </div>
			                    </div>

			                    {{-- sku code --}}
			                    <div class="form-group row">
			                      <label class="col-sm-2 form-control-label {{ $errors->has('sku') ? 'text-danger' : '?' }}">SKU</label>
			                      <div class="col-sm-10">
			                        <input type="text" class="form-control {{ $errors->has('sku') ? 'text-danger' : '?' }}" id="sku" name="sku" required>
			                        @if($errors->has('sku'))
										<span class="text-small text-danger help-block-none"> 
				                        	{{ $errors->first('sku') }}		
				                        </span>
			                        @endif
			                      </div>
			                    </div>

			                    {{-- color --}}
			                    <div class="form-group row">
			                      <label class="col-sm-2 form-control-label {{ $errors->has('color') ? 'text-danger' : '?' }}">Color</label>
			                      <div class="col-sm-10">
			                        <input type="text" class="form-control {{ $errors->has('color') ? 'text-danger' : '?' }}" id="color" name="color" required>
			                        @if($errors->has('color'))
										<span class="text-small text-danger help-block-none"> 
				                        	{{ $errors->first('color') }}		
				                        </span>
			                        @endif
			                      </div>
			                    </div>

			                    {{-- brand --}}
			                    <div class="form-group row">
			                      <label class="col-sm-2 form-control-label {{ $errors->has('brand') ? 'text-danger' : '?' }}">Brand</label>
			                      <div class="col-sm-10">
			                        <input type="text" class="form-control {{ $errors->has('brand') ? 'text-danger' : '?' }}" id="brand" name="brand" required>
			                        @if($errors->has('brand'))
										<span class="text-small text-danger help-block-none"> 
				                        	{{ $errors->first('brand') }}		
				                        </span>
			                        @endif
			                      </div>
			                    </div>
			                </div>
			            </div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
					                <div class="card-header d-flex align-items-center">
					                  <h4>Save</h4>
					                </div>
					                <div class="card-body">
					                	<div class="form-group row">
					                      <div class="col-md-12">
					                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
					                      </div>
					                    </div>
					                </div>
					            </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
					                <div class="card-header d-flex align-items-center">
					                  <h4>Category</h4>
					                </div>
					                <div class="card-body">
					                	<div class="form-group row">
					                      <div class="col-md-12">
					                      	<select name="" id="" class="form-control">
					                      		<option value="">Choose One</option>
					                      		@foreach(app('rinvex.categories.category')->whereIsRoot()->get() as $root)
													<option value="{{ $root->id }}">{{ $root->name }}</option>
					                      		@endforeach
					                      	</select>
					                      </div>
					                    </div>
					                    <div class="form-group row">
					                      <div class="col-sm-12">
					                      	@foreach(app('rinvex.categories.category')->descendantsOf(1)->toTree(1) as $cat)
					                        	<div class="form-check has-success">
												  <label class="form-check-label">
												    {{ ucfirst($cat->name) }}
												  </label>
												  @foreach($cat->children as $child)
													<div class="form-check">
													  <label class="form-check-label">
													    <input class="form-check-input" type="radio" name="exampleRadios" id="{{ $child->slug }}" value="{{ $child->id }}" checked>
													    {{ $child->name }}
													  </label>
													</div>
												  @endforeach
												</div>
					                         @endforeach
					                      </div>
					                    </div>
					                </div>
					            </div>
							</div>
						</div>
						<div class="imagePanel">
							@include('admin_frontend.page.product.part.edit.image')	
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
					                <div class="card-header d-flex align-items-center">
					                  <h4>Gallery</h4>
					                </div>
					                <div class="card-body">
					                	<div class="form-group row">
					                      <div class="col-md-12">
					                       
					                      </div>
					                    </div>
					                </div>
					            </div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection

@include('admin_frontend.page.product.modal._edit')

@section('script')
	@include('admin_frontend.page.product.script._edit')
@endsection