<?php
      if(isset($_POST['loginbut'])){
         include("../config/config.php");
         $mail=$_POST['email'];
         $password=$_POST['psw'];
         session_start();
         $sql="SELECT*FROM tbl_admin WHERE email='".$mail."' AND password='".$password."' LIMIT 1";
         $row=mysqli_query($mysqli,$sql);
         $count=mysqli_fetch_array($row);
         if($count>0){
         $_SESSION['thongbao']= 'Đăng nhập thành công';
         $_SESSION['dangnhap']=$mail;
         $_SESSION['id_user']=$count['id_admin'];
         header("location: ../index.php");
      }
      else{
         $_SESSION['thongbao']= 'Login unsuccessful';
      }
      }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Form Example</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container-fluid mt-3">
         <h2>Login</h2>
      <div class="session">
      <?php
             if(isset($_SESSION['thongbao'])){
               echo $_SESSION['thongbao'];
               unset($_SESSION['thongbao']);}
      ?>
      </div>
         <form action="" method="POST">
            <!-- Vertical -->
            <div class="form-group">
               <label for="myEmail">Email</label>
               <input type="text" id = "myEmail" class="form-control" placeholder="Email" name="email">
               <label for="myPassword">Password</label>
               <input type="password" id="myPassword" class="form-control" placeholder="Password" name="psw">
            <div></div>
               <button type="submit" class="btn btn-primary" name="loginbut">Submit</button>
               <a>Don't have an account?</a>
               <a href="Register.php">Sign up</a>
            </div>
            </div>
         </form>
          
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>
<style>
   .session{
      color: red;
   }
</style>