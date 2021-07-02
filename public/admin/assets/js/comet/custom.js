(function($){

    $(document).ready(function(){

                //load ck editor
                CKEDITOR.replace('post_editor');

                //select2
                $('.post_tag_select').select2();


                //logout feauters
                $(document).on('click','#logout_btn', function(e){
                    e.preventDefault();
                    $('#logout_form').submit();
                });


                //category status
                $(document).on('click', 'input.cat_check', function(){
                    let checked = $(this).attr('checked');
                    let status_id = $(this).attr('status_id');

                    if(checked == 'checked'){
                       $.ajax({
                        url: 'Category/status-inactive/' + status_id,
                        success: function(data){
                            swal('Status inactive successful');
                        }
                       });
                    }else{
                        $.ajax({
                            url: 'Category/status-active/' + status_id,
                            success: function(data){
                                swal('Status active successful');
                            }
                        });
                    }

                });



                //delete btn fixed
                $('.delete-btn').click(function(){




                    let conf = confirm('Are you sure ?');
                    if(conf == true){
                        return true;
                    }else{
                        return false;
                    }



                });

                //category edit
                $('.edit_cat').click(function(e){
                  e.preventDefault();

                  let id = $(this).attr('edit_id');

                  $.ajax({
                      url : 'Category/' +id+ '/edit',
                      success : function(data){
                        $('#edit_category_modal form input[name="name"]').val(data.name);
                        $('#edit_category_modal form input[name="edit_id"]').val(data.id);
                        $('#edit_category_modal').modal('show');
                      }
                  });

                });

                //post load img
                $('#post_image_select').change(function(e){
                    let img_url = URL.createObjectURL(e.target.files[0]);
                    $('.post_img_load').attr('src', img_url);
                });


                //post gallery load
                $('#post_image_select_g').change(function(e){

                    let img_gal =  '';
                    for(let i = 0; i < e.target.files.length ; i++){
                        let file_url = URL.createObjectURL(e.target.files[i]);
                        img_gal += '<img class="shadow" src="'+file_url+'">';
                    }

                    $('.post-gallery-img').html(img_gal);





                });


                //select post format
                $('#post_format').change(function(){

                    let format = $(this).val();

                    if(format == 'Image'){
                        $('.post-image').show();
                    }else{
                        $('.post-image').hide();
                    }
                    if(format == 'Gallery'){
                        $('.post-gallery').show();
                    }else{
                        $('.post-gallery').hide();
                    }
                    if(format == 'Video'){
                        $('.post-video').show();
                    }else{
                        $('.post-video').hide();
                    }
                    if(format == 'Audio'){
                        $('.post-audio').show();
                    }else{
                        $('.post-audio').hide();
                    }


                });

                //




    });
})(jQuery);
