

<div id="live_data"></div>

<script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
          debugger
           $.ajax({  
                url:"php/product/selectProduct.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data); 
                     
                               jq('#example').DataTable( {
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
 
      function edit_data(id, text, column_name)  
      {  

          $.ajax({  
                url:"php/product/updateProduct.php",  
                method:"GET",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                  // alert('DATA UPDATED SUCCESS','DATABASE UPDATED','success');
                     //alert("respons"+data);  
                },  
                error:function(){
                  //  alert('ERROR WHILE UPDATING DATA','DATABASE ERROR','warning');
                  // alert("error while updating data");
                }
          });  
      }  
        

      $(document).on('blur', '.category', function(){  
           var id = $(this).data("id2");  
           var value = $(this).text();  
           edit_data(id,value, "title");  
      });
      
   
      $(document).on('blur', '.name', function(){  
           var id = $(this).data("id3");  
           var value = $(this).text();  
           edit_data(id,value, "name");  
      });

      $(document).on('blur', '.price', function(){  
           var id = $(this).data("id4");  
           var value = $(this).text();  
           edit_data(id,value, "price");  
      });
      $(document).on('blur', '.qty', function(){  
           var id = $(this).data("id5");  
           var value = $(this).text();  
           edit_data(id,value, "qty");  
      });
        $(document).on('blur', '.size', function(){  
           var id = $(this).data("id7");  
           var value = $(this).text();  
           edit_data(id,value, "size");  
      });
    
      $(document).on('blur', '.image', function(){  
           var id = $(this).data("id6");  
           var value = $(this).text();  
           edit_data(id,value, "image");  
      });
     
    
    
      

      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id8");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"php/product/deleteProduct.php",  
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
      
 
 function btnEdit(id){  
           var id=id; 
           location.href='admin.php?url=editproduct&id='+id;
    
      }
      function edit_data(id, text, column_name)  
      {  

          $.ajax({  
                url:"php/product/updateProduct.php",  
                method:"GET",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                  // alert('DATA UPDATED SUCCESS','DATABASE UPDATED','success');
                    // alert("respons"+data);  
                },  
                error:function(){
                  //  alert('ERROR WHILE UPDATING DATA','DATABASE ERROR','warning');
                  // alert("error while updating data");
                }
          });  
      }
      function btnhot(id, value){  
           var id=id; 
           var value=value;
           edit_data(id,value, "hotproducts");
          
      }
      
 </script>  