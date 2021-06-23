<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Navbar Example</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" type="text/css" href="css/Style.Css">
   </head>
   <body>
       <?php
       session_start();
       
       ?>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
         <!-- Brand -->
         <a class="navbar-brand" href="#">Home</a>
 
         <!-- Links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="pages/giohang.php">My Cart</a>
               
            </li>
            <li class="nav-item">
               <a class="nav-link" href="pages/profile.php">Profile</a>
            <li class="nav-item">               
               <a class="nav-link" href="pages/register.php">Register</a>
            <li class="nav-item">
               <a class="nav-link" href="pages/login.php">login</a>
            <li class="nav-item">
               <a class="nav-link" href="index.php?action=logout">Logout <?php
               if(isset($_SESSION['dangnhap'])){
                   echo $_SESSION['dangnhap'];
               }
               ?></a>
               <li class="nav-item">
                  <a class="nav-link" href="pages/Contact.php">Contact Us</a>
            </li>
            <?php
            if(isset($_GET['action'])&& $_GET['action']=="logout"){
                unset($_SESSION['dangnhap']);
                header("location: pages/login.php");
            }
            ?>
         </ul>
      </nav>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </body>
</html>
<body>
<?php
    include("config/config.php");
    $sql="SELECT* FROM table_product Limit 20";
    $query_sanpham=mysqli_query($mysqli,$sql);
    

?>
    <section>
<?php
    while($rows_product=mysqli_fetch_array($query_sanpham)){
?>
        <article>
            <h1> <?php echo $rows_product['product_name'] ?> </h1>
            <p> <?php echo $rows_product['product_information'] ?> </p>
            <img src="images/<?php echo $rows_product['product_image'] ?>" width="50%" >
            <div class="price"> <?php echo $rows_product['product_price'].'vnd' ?> </div>
            <form action="pages/controler.php?idproduct=<?php echo $rows_product['product_id'] ?>" method="POST">
            <input type="submit" name="controler" value="Add to Cart" >
            </form>
        </article>
<?php
    }
?>
    </section>
<div class="footer-dark">
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 item">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Web design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Hosting</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <h3>About</h3>
                <ul>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-6 item text">
                <h3>Company Name</h3>
                <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
            </div>
            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
        </div>
        <p class="copyright">Company Name © 2018</p>
    </div>
</footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
