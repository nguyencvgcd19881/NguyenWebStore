<?php
    session_start();
    include("../config/config.php");
// kiem tra nguoi dung co nhap du thong tin hay nhan submit chua 
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["confirm_password"] != ''&& $_POST["first_name"] != ''&& $_POST["last_name"] != '')
    {
        //thực hiện xử lý khi người dùng ấn submit và điền đầy đủ thông tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["confirm_password"];
        $fname= $_POST["first_name"];
        $lname= $_POST["last_name"];
        if( $password != $repassword){
            $_SESSION["thongbao"]="Re-entered password is incorrect!";
            header("location: register.php");
            die();
        }
        $sql = "SELECT * FROM tbl_admin Where email = '$username'";
        $result = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($result) >0 ){
            $_SESSION["thongbao"] = "Username already exists!";
            header("location:register.php");
            die();
        }
        $sql = "INSERT INTO tbl_admin (email, password,fname,lname) VALUES ('$username','$password','$fname','$lname')";
        mysqli_query($mysqli,$sql);
        $_SESSION["thongbao"] = "Register successful";
        header("location:login.php");
    }
    else{
        $_SESSION["thongbao"] = "Please enter your complete information!";
        header("location:register.php");
    }
    if(isset($_POST["reset"]))
    header("location: register.php");
?>