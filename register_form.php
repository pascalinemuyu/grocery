<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'password not mathched!';
      }else{
         $insert = "INSERT INTO user_form(email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    

.container{
  min-height: 100vh;
  background-color: #eee;
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
::placeholder{
  color:black;
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
  width: 90%;
  padding:12px 14px;
  font-size: 20px;
  text-transform: none;
  border:1px solid pink;
  margin:10px 0;
  outline:none;
  background:rgba(0, 0, 0, 0.01);
}


.form-container form .form-btn{
  display: block;
  width: 100%;
  font-size: 20px;
  padding:10px;
  background-color: rgb(250, 1, 42);
  color:white;
  cursor: pointer;
  margin:10px 0;
  border:1px solid pink;
  outline:none;
  border-radius:6px;
  transition:0.5s;
}
.form-container form .form-btn:hover{
 
  background-color: transparent;
  color:black;

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
  color:#fff;
  background-color: rgb(250, 1, 42);
  color:white;
  border:1px solid rgb(250, 1, 42);
}
  </style>
</head>
<body>
    
<div class="form-container">

   <form action="" method="post">
      <h3 class="title">register now</h3>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <input type="email" name="usermail" placeholder="enter your email" class="box" required>
      <input type="password" name="password" placeholder="enter your password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm your password" class="box" required>
      <input type="submit" value="register now" class="form-btn" name="submit">
      <p>already have an account? <a href="login_form.php">login now!</a></p>
   </form>

</div>

</body>
</html>