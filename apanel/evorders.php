

<div id="live_data"></div>

<script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
          debugger
           $.ajax({  
                url:"php/product/selectoreders.php",  
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
 
 });
 </script>  