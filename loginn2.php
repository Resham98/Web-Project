
  <?php
 
session_start();

?>


<html>
<head>
    <title>
        He The Men's Store
    </title>
    
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link rel="text/ stylesheet" href="css/loginn2.css">
    <link rel="icon" href="img/icon1.jpg" type="image/icon" sizes="20x20">
<style>
h2{
    color:white;
}
body{
    background-image:url('img/bg.jpg');
}
  .form {
    background: transparent;
}
.form input {
    
    margin: 14px 0px 12px;
    
}
.form button{
    
    background:#fda30e;
    border-radius:25px;
    margin-top:12px;
}
.form .message{
    margin:15px 0 0;
    color:white;
    font-size: 12px;
}
.form .message a{
    color:#fda30e;
    text-decoration: none;

}
.form button:hover,.form button:active{
    background:gray;
}
</style>
</head>
<body>
    
 
    
    <div class="login-page">
        <div class="form">
            <h2>Login & Register</h2>
            <form  action="register.php" method="post" class="register-form">
                <input type="text" name="username" placeholder="User name"/>
                <input type="password" name="password" placeholder="password"/>
                <input type="text" name="emailid" placeholder="email id"/>
                <button type="submit">Create</button>
                <p class="message">Already Registered? <a href="#">Login</a></p>
            </form>
            
            <form action="login.php" class="login-form" method="post">
                    <input type="text" name="username" placeholder="Username"/>
                    <input type="password"  name="password" placeholder="password"/>
                    <button type="submit">Login</button>
                    <p class="message">Not Registered? <a href="#">Register</a></p>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' rel="text/javascript">
                    </script>
                    <script>
                    $('.message a').click(function(){
                        $('form').animate({height:"toggle", opacity:"toggle"},"slow");
                    });
                    </script>
                    
            </form>
            <p class="message">Start Shopping <a href="index.php">Go Back!!</a></p>
        </div>
    </div>
</body>
</html>