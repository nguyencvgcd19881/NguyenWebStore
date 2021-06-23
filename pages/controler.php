<?php
    session_start();
    include('../config/config.php');
    //them so luong
    if(isset($_SESSION['cart']) && $_GET['cong']){
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('id'=>$cart_item['id'],'tensp'=>$cart_item['tensp'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
            }else{
                $product[]=array('id'=>$cart_item['id'],'tensp'=>$cart_item['tensp'],'soluong'=>$cart_item['soluong']+1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
            }
            $_SESSION['cart']=$product;
        }
        header("location:giohang.php");
    }
    //tru so luong
    if(isset($_SESSION['cart']) && $_GET['tru']){
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[]=array('id'=>$cart_item['id'],'tensp'=>$cart_item['tensp'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
            }elseif($cart_item['soluong']>1){
                $product[]=array('id'=>$cart_item['id'],'tensp'=>$cart_item['tensp'],'soluong'=>$cart_item['soluong']-1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
            }
            $_SESSION['cart']=$product;
        }
        header("location:giohang.php");
    }
    //xoasanpham
    if(isset($_SESSION['cart'])&& $_GET['xoa']){
        $id=$_GET['xoa'];
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id']!=$id){
                    $product[]=array('id'=>$cart_item['id'],'tensp'=>$cart_item['tensp'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                }
                $_SESSION['cart']=$product;
            }


        header("location:giohang.php");
    }
    //xoatatca
    if(isset($_GET['xoatatca'])&& $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header("location:giohang.php");
    }
    //them sanpham
    if(isset($_POST['controler'])){
        $id=$_GET['idproduct']; 
        $soluong=1;
        $sql="SELECT*FROM table_product WHERE product_id='".$id."' LIMIT 1 ";
        $query=mysqli_query($mysqli,$sql);
        $row=mysqli_fetch_array($query);
        if($row){
            $new_product=array(array('id'=>$id,'tensp'=>$row['product_name'],'soluong'=>$soluong,'giasp'=>$row['product_price'],'hinhanh'=>$row['product_image']));
            if(isset($_SESSION['cart'])){
                $found=false;
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['id']==$id){   
                        $product[]=array('id'=>$cart_item['id'],'tensp'=>$cart_item['tensp'],'soluong'=>$cart_item['soluong']+1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                        $found=true;
                    }else{
                        
                        $product[]=array('id'=>$cart_item['id'],'tensp'=>$cart_item['tensp'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
                    }
                }
                if($found==false){
                    $_SESSION['cart']=array_merge($product,$new_product);
                }else{
                    $_SESSION['cart']=$product;
                }
            }else{
                $_SESSION['cart']=$new_product;
            }

        }
        header('location:giohang.php');
    }
?>

<?php