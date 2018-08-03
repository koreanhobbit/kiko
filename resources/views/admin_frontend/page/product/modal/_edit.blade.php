<div class="modal" id="imageModal">
  <div class="modal-dialog modal-full">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mt-3">
          <form action="{{ route('admin.product.uploadImage', ['id' => $product->id]) }}" class="dropzone" id="addNewImageDz" method="post">
            {{ csrf_field() }}
            <div class="fallback">
              <input type="file" name="image">
            </div>
            <div class="dz-message">
              <h3 class="text-center">
                Drop your images inside the box or click to add images 
              </h3>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>