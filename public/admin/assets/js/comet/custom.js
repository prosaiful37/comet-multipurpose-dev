(function($){

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



            /**
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) =>{
                if (willDelete) {
                  swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                  });
                  return true;
                }else {
                  swal("Your imaginary data is safe!");
                  return false;
                }

              });

              */
        });








})(jQuery);
