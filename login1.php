
    <?php
 session_start();
 echo $_SESSION['user'];

 if (!empty($_SESSION['user'] )) {
     
    
          Redirect("http://hethemensstore.tk");

 }
 else
 {
  Redirect("loginn2.php");

     
 }
 ?>