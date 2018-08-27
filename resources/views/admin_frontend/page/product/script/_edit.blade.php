{{-- tinymce javascript --}}
<script src="{{ asset('admin_frontend/js/tinymce/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('admin_frontend/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset("https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js") }}"></script>

<script>
    Dropzone.autoDiscover = false;
</script>

<script>
	$(document).ready(function() {   
        //set dropzone for uploading new image into database (featured image)
        //initiate dropzone
        $('form#addNewImageDz').dropzone({
            paramName: "image",
            acceptedFiles: 'image/*',
            maxFilesize:3,
            parallelUploads: 1,  
            autoProcessQueue: true,
            init: function() {
                thisDropzone = this;
                this.on("error", function (file, responseText) {
                    $.each(responseText, function (index, value) {
                        $('.dz-error-message').text(value);
                    });
                });
            },
            sending: function(file, response) {
                if(!$('.imageLoader').hasClass('loader'))
                {
                    $('.imageLoader').addClass('loader');
                }
            },  
            
            success: function(file,response) {
                if($('#imageModal').hasClass('show')) {
                    $('#imageModal').modal('hide');    
                }

                $('.imageLoader').removeClass('loader');
                
                $('.imagePanel').html(response);
                
                clickRemoveImage();

                thisDropzone.removeAllFiles();

            },
            error: function(data) {
                var errors = data.responseJSON.errors;
                console.log(errors[data]);
            }
        });

        //remove image button
        clickRemoveImage();
        function clickRemoveImage() { 
            $('.removeImageBtn').click(function() {

                var url = $(this).data('url');

                $.ajax({
                    url: url,
                    type: 'post',
                    data: {
                        '_token' : $('input[name=_token]').val(),
                        'title' : 'deleteimage',
                        'image' : $('.addImageContainer img').data('image'),
                        'imagethumbnail': $('.addImageContainer img').data('imagethumbnail'),
                    },
                    beforeSend: function() {
                        $('.addImageContainer').fadeOut();
                        $('.imageLoader').addClass('loader');
                        
                    },
                    success: function(data) {
                        $('.imagePanel').html(data);
                    },
                    error: function(data) {
                        var errors = data.responseJSON.errors;
                        console.log(errors);
                    }
                });
            });
        }


        //set dropzone for uploading new gallery into database (gallery)
        //initiate dropzone
        $('form#addNewGalleryDz').dropzone({
            paramName: "image",
            acceptedFiles: 'image/*',
            maxFilesize:3,
            parallelUploads: 20,  
            autoProcessQueue: true,
            init: function() {
                thisDropzone = this;
                this.on("error", function (file, responseText) {
                    $.each(responseText, function (index, value) {
                        $('.dz-error-message').text(value);
                    });
                });
            },
            sending: function(file, response) {
                if(!$('.galleryLoader').hasClass('loader'))
                {
                    $('.galleryLoader').addClass('loader');
                }
            },  
            
            success: function(file,response) {
                if($('#galleryModal').hasClass('show')) {
                    $('#galleryModal').modal('hide');    
                }

                $('.galleryLoader').removeClass('loader');
                
                $('.galleryPanel').html(response);
                
                clickRemoveImage();

                thisDropzone.removeAllFiles();

            },
            
            error: function(data) {
                var errors = data.responseJSON.errors;
                console.log(errors[data]);
            }
        });


		// initiate tinymce
        tinymce.init({ 
            selector:'textarea',
            plugins: 'autosave image link lists preview',
            branding: false,
            min_height: 300,
            menubar:true,
            relative_urls : false,
            remove_script_host : false,
            custom_ui_selector: '.imageReferencesBtn',
            mobile: {
                theme: 'mobile',
                plugins: [ 'autosave', 'image', 'link', 'lists', 'preview' ],
                menubar: false
                },
        });


        
	});
</script>