<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.2/ckeditor.js"></script>
<script src="moment.js"></script>



<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    include("load.php");
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_size = $_POST['product_size'];
    $product_qty = $_POST['product_qty'];
    $product_type = $_POST['product_type'];
    
    

  	//$img = $_FILES['img']['name'];
 $target_dir = "productimages/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }
     else {
        $target_file="";
    }
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

  	



$date = date("Y-m-d h:i:s");



    
    
    $uid = uniqid();
    

    
    $sql = "insert into products (uid,image,name,price,type,qty,size) values('$uid','$target_file','$product_name','$product_price','$product_type',$product_qty,$product_size)";
  if(  mysqli_query($con,$sql))
  {
      echo "Product Has Been Uploaded Successfully";
  }
  else{
      echo 'error';
  }
 


  
    

    
    
    

}
?>



            <form action="admin.php?url=Add Product" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Product Category</label>
                    <div class="col-sm-7">
                          <select class="form-control" id="category" name="product_type">
    <option>Shoe</option>
    <option>Watch</option>
  </select>

                


                        
                    </div>
                </div>
                
                
                
                <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Name</label>
                    <div class="col-sm-7">
                        <input type="text" id="heading1" name="product_name" placeholder="Product Name" class="form-control" autofocus required>
                
                    </div>
                </div>
                <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Size</label>
                    <div class="col-sm-7">
                        <input type="text" id="heading1" name="product_size" placeholder="Product Size" class="form-control" autofocus required>
                
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Price</label>
                    <div class="col-sm-7">
                        <input type="Number" id="price" name="product_price" placeholder="Product Price" class="form-control">
                
                    </div>
                </div>
                
                
                       <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Quantity</label>
                    <div class="col-sm-7">
                        <input type="Number" id="qty" name="product_qty" placeholder="Product Quantity" class="form-control">
                
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="updateon" class="col-sm-3 control-label">Upload Product Image</label>
                    <div class="col-sm-7">
                         <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
                
                            
                
              
                 <div class="form-group">
                     
                        
                            <center>  
                 <input class="btn btn-primary" type="submit" value="Add Product">
                 </center>
                 </div>
        

            </form> <!-- /form -->
