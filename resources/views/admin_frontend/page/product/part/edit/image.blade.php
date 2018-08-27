<div class="row">
	<div class="col-md-12">
		<div class="card">
      <div class="card-header d-flex align-items-center">
        <h4>Image</h4>
      </div>
      <div class="card-body">
      	<div class="form-group row">
          <div class="col-md-12">
          	<div class="imageLoader">       		
          	</div>
           	<a href="javascript:" data-toggle="modal" data-target="#imageModal" class="btn btn-primary btn-sm addImageBtn {{ $product->hasMedia('imagethumbnail') ? 'd-none' : '' }}">Add Image</a>
           	<div class="addImageContainer {{ $product->hasMedia('imagethumbnail') ? '' : 'd-none' }}">
           		<a class="close removeImageBtn" data-url="{{ route('admin.product.deleteImage', ['id' => $product->id]) }}">
          			<i class="fa fa-close"></i>
          		</a>
          		<img src="{{ $product->hasMedia('imagethumbnail') ? asset($product->firstMedia('imagethumbnail')->getDiskPath()) : '' }}" alt="{{ $product->hasMedia('imagethumbnail') ? asset($product->firstMedia('imagethumbnail')->filename) : '' }}" title="{{ $product->hasMedia('imagethumbnail') ? asset($product->firstMedia('imagethumbnail')->filename) : '' }}" class="img-fluid thumbnail rounded mx-auto d-block" style="max-width: 200px; max-height: 100px;" data-image="{{ $product->hasMedia('image') ? asset($product->firstMedia('image')) : '' }}" data-imagethumbnail = "{{ $product->hasMedia('imagethumbnail') ? asset($product->firstMedia('imagethumbnail')) : '' }}">
             	</div>
            </div>
          </div>
        </div>
    </div>
	</div>
</div>