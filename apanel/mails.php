

<div id="live_data"></div>

<script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
          debugger
           $.ajax({  
                url:"php/mails/selectmails.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data); 
                               jq('#example').DataTable( {
                                       "order": [[ 1, "desc" ]], //or asc 
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
    

//alert(data); 
                }  
           });  
      }  
      fetch_data();  
    //   function edit_data(id, text, column_name)  
    //   {  

    //       $.ajax({  
    //             url:"php/product/updateProduct.php",  
    //             method:"GET",  
    //             data:{id:id, text:text, column_name:column_name},  
    //             dataType:"text",  
    //             success:function(data){  
    //                 //show_alert('DATA UPDATED SUCCESS','DATABASE UPDATED','success');
    //                  //alert("respons"+data);  
    //             },  
    //             error:function(){
    //                 //show_alert('ERROR WHILE UPDATING DATA','DATABASE ERROR','warning');
    //                 alert("error while updating data");
    //             }
    //       });  
    //   }  
        

      $(document).on('blur', '.title', function(){  
           var id = $(this).data("id1");  
           var value = $(this).text();  
           edit_data(id,value, "title");  
      });
      
   
      $(document).on('blur', '.image', function(){  
           var id = $(this).data("id2");  
           var value = $(this).text();  
           edit_data(id,value, "`image.`");  
      });

      $(document).on('blur', '.content', function(){  
           var id = $(this).data("id3");  
           var value = $(this).text();  
           edit_data(id,value, "`content`");  
      });
      

      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id5");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"php/product/deletevideos.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert('RECORD SUCCESSFULLY DELETE','DATABASE UPDATE','success');
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>  