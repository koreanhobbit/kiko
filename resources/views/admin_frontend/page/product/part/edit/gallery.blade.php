<div class="row">
	<div class="col-md-12">
		<div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Gallery</h4>
            </div>
            <div class="card-body">
            	<div class="form-group row">
                  <div class="col-md-12">
                  	<div class="galleryLoader">       		
          			</div>
          			
					<a href="javascript:" data-toggle="modal" data-target="#galleryModal" class="btn btn-primary btn-sm addImageBtn {{ $product->hasMedia('gallerythumbnail') ? 'd-none' : '' }}">Add Gallery</a>

                  </div>
                </div>
            </div>
        </div>
	</div>
</div>