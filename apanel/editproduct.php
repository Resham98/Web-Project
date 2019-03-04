<?php
  include("load.php");
  
       $id = $_GET["id"];
     
     $selectsql = "SELECT * FROM products where id=$id";      
                            $products="";
                            $i=0;
                            

                            if($sresult=mysqli_query($con,$selectsql)){
                                while($products=mysqli_fetch_row($sresult)){
                                $type=$products[5];
                                $name=$products[3];
                                $price=$products[4];
                                $qty=$products[6];
                                $image=$products[2];
                                $size=$products[7];
                                
                                    
                                }
                            }
      
    
   
?>


<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    
    $product_name = $_POST['product_name'];
    $product_type = $_POST['product_type'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];
    $product_size=$_POST['product_size'];    


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

  	





    
    
    $uid = uniqid();
    if($target_file!='')
    {
        $sql = "update products set type='$product_type',name='$product_name',price='$product_price',qty='$product_qty',size='$product_size',image='$target_file'where id=$id";
    }


    elseif($target_file=='')
    {
        $sql = "update products set `type`='$product_type',`name`='$product_name',`price`='$product_price',`qty`='$product_qty',`size`='$product_size' where id=$id";
    }
    
  if(mysqli_query($con,$sql))
  {
      echo "Product Has Been Updated Successfully";
  }
  else{
      echo "Error" ;
  }
 
}
?>



            <form action="#" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                <div class="form-group">
                 <center><button type="button" class="btn btn-primary" onclick="location.href='admin.php?url=Edit/View Product'" style="margin-top:1%">Back</button></center>
                 </div>
        
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Product Type</label>
                    <div class="col-sm-7">
                          <select class="form-control" id="category" name="product_type">
                              <option><?php echo $type; ?></option>
    <option>Shoe</option>
    <option>Watch</option>
    
  </select>

                


                        
                    </div>
                </div>
                
                
                
                <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Name</label>
                    <div class="col-sm-7">
                        <input type="text" value="<?php echo $name; ?>" id="heading1" name="product_name" placeholder="Product Name" class="form-control" autofocus required>
                
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Price</label>
                    <div class="col-sm-7">
                        <input type="Number" value="<?php echo $price; ?>" id="price" name="product_price" placeholder="Product Price" class="form-control">
                
                    </div>
                </div>
                
                   <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Quantity</label>
                    <div class="col-sm-7">
                        <input type="Number" value="<?php echo $qty; ?>" id="qty" name="product_qty" placeholder="Product Quantity" class="form-control">
                
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="heading1" class="col-sm-3 control-label">Product Size</label>
                    <div class="col-sm-7">
                        <input type="Number" value="<?php echo $size; ?>" id="size" name="product_size" placeholder="Product Size" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="updateon" class="col-sm-3 control-label">Upload Product Image</label>
                    <div class="col-sm-7">
                         <input type="file"  name="fileToUpload" id="fileToUpload">
                    <?php echo $image; ?>
                    </div>
                </div>
                
                            
                
              
                 <div class="form-group">
                     
                        
                            <center>  
                 <input class="btn btn-primary" type="submit" value="Update Product">
                 </center>
                 </div>
        

            </form> <!-- /form -->
