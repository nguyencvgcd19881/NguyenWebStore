<?php
 session_start();
 include("../config/config.php");
 if(isset($_SESSION['dangnhap'])){
     $sql="SELECT*FROM tbl_admin WHERE email='".$_SESSION['dangnhap']."' LIMIT 1 ";
     $sql_user=mysqli_query($mysqli,$sql);
     $row_user=mysqli_fetch_array($sql_user);
     
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User  </title>
    <style>
    td {
    width: 250px;
    padding: 10px;
    font-size: larger;
    font-family: arial;

}
table.Profiletable {
    margin: auto;
}
img {
    width: 80%;
    margin-left: 10%;
}
</style>
</head>
<body>
<h1>Profile of User:</h1>
<table class="Profiletable" border="1">
    
    <tr>
    <td>Avartar</td>
    <td><img src="<?php echo $row_user['avatar'] ?>" ></td>
    </tr>
    <tr>
    <td>User name</td>
    <td><?php echo $row_user['email'] ?></td>
    </tr>
    <tr>
    <td>Full name</td>
    <td><?php echo $row_user['fname'].' '.$row_user['lname'] ?></td>
    </tr>
    <tr>
    <td>Phone</td>
    <td><?php echo $row_user['phone'] ?></td>
    </tr>
</table>
   <a href="profile.php?action=update"> Update </a>
   

   <button><a href="../index.php">Home page</a></button>
   
   <?php
   if(isset($_GET['action']) && $_GET['action']=="update"){
       include("update_profile.php");
   }
   ?>
   
   
   <?php
   
    
    
   if(isset($_POST['updatebut'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $fullname=$_POST['fullname'];
    $avt=$_POST['avatar'];
        
        $sql_update="SELECT*FROM tbl_admin WHERE email='".$_SESSION['dangnhap']."' LIMIT 1";
        $query_update=mysqli_query($mysqli,$sql_update); 
        $row_update = mysqli_fetch_array($query_update);
        $sql_edit="UPDATE tbl_admin SET avatar='".$avt."', email='".$username."', phone='".$phone."', fname='".$fname."',lname='".$lname."'  WHERE id_admin='".$row_update['id_admin']."'";
    session_start();
        mysqli_query($mysqli,$sql_edit);
        $_SESSION['dangnhap']=$username;
        header('Location:profile.php');
   }
   ?>
</body>
</html>