$(document).ready(function (){
   
    $(document).on('click','.delete_products_btn', function(e){
         e.preventDefault();

         var id = $(this).val();
        //  alert(id);

         swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                    'product_id':id,
                    'delete_products_btn': true
                },
                success: function(response){
                  if(response == 200)
                  {
                    swal("Success!", "Product deleted successfully!", "success");
                    $("#products_table").load(location.href + "#products_table");
                  }
                  else if(response == 500)
                  {
                    swal("Error!", "Something went wrong!", "error");
                  }
                }
              });
            }
          });
    });

    $(document).on('click','.delete_category_btn', function(e){
      e.preventDefault();

      var id = $(this).val();
     //  alert(id);

      swal({
         title: "Are you sure?",
         text: "Once deleted, you will not be able to recover!",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
           $.ajax({
             method: "POST",
             url: "code.php",
             data: {
                 'category_id':id,
                 'delete_category_btn': true
             },
             success: function(response){
               if(response == 200)
               {
                 swal("Success!", "Category deleted successfully!", "success");
                 $("#category_table").load(location.href + "#category_table");
               }
               else if(response == 500)
               {
                 swal("Error!", "Something went wrong!", "error");
               }
             }
           });
         }
       });
 });

});

//increment-decrement

     $('.increment-btn').click(function (e){
        e.preventDefault();
           
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value = perseInt(qty, 10);
        value = isNaN(value)? 0 : value;
        if(value < 10){
          value++;
          $(this).closest('.product_data').find('.input-qty').val(value);
        
        }
     });
