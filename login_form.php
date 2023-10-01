<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['usermail'] = $email;
      header('location:index.php');
   }else{
      $error[] = 'incorrect password or email.';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
      

.container{
  min-height: 100vh;
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding-bottom: 80px;
}

.container .content{
  width: 700px;
}

.container .content h3{
  text-transform: uppercase;
  font-size: 5vw;
}

.container .content p{
  font-size: 20px;
  padding:10px 0;
}

.container .content p span{
  color:crimson;
}

.container .content .logout{
  display: inline-block;
  padding:10px 35px;
  font-size: 20px;
  margin-top: 10px;
  background-color: #000;
  color:#fff;
}

.container .content .logout:hover{
  background-color: crimson;
}

.form-container{
  min-height: 100vh;
  background-color: #eee;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding-bottom: 80px;
  
  
}

.form-container form{
  width: 500px;
  background-color: #fff;
  border:3px solid pink;
  padding:20px;
  text-align: center;
  border-radius:6px;
}

.form-container form .title{
  font-size: 25px;
  text-transform: uppercase;
  margin-bottom: 10px;
}


.form-container form .box{
  width: 95%;
  padding:12px 14px;
  font-size: 20px;
  text-transform: none;
  border:1px solid pink;
  margin:10px 0;
  background:rgba(0, 0, 0, 0.01);
  outline:none;
  border-radius:6px;
}

.form-container form .form-btn{
  display: block;
  width: 100%;
  font-size: 20px;
  padding:10px;
  background-color: white;
  color:#000;
  cursor: pointer;
  margin:10px 0;
  border:1px solid pink;
  outline:none;
  border-radius:6px;
}
.form-container form .form-btn:hover{
  background-color: crimson;
}
.form-container form p{
  font-size: 20px;
  margin-top: 20px;
}

.form-container form p a{
   color:crimson;
}

.form-container form .error-msg{
  display: block;
  width: 100%;
  padding:10px 0;
  margin:10px 0;
  font-size: 20px;
  background-color: rgb(250, 1, 42);
  color:white;
  border:1px solid rgb(250, 1, 42);
}
    </style>
</head>
<body>
    
<div class="form-container">
    <form action="" method="post">
        <h3 class="title">login now</h3>
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <input type="email" name="usermail" placeholder="enter your email" class="box" required>
        <input type="password" name="password" placeholder="enter your password" class="box" required>
        <input type="submit" value="login now" class="form-btn" name="submit">
        <p>don't have an account? <a href="register_form.php">register now!</a></p>
    </form>

</div>

</body>
</html>