<?php
header("location: index.php?quanly=sanphamnoibat");
if(isset($_GET['quanly']) && $_GET['quanly']=="sanphamnoibat"){
?>
<?php
    $sql_productall="SELECT*FROM tbl_sanpham LIMIT 20";
    $query_productall=mysqli_query($mysqli,$sql_productall);
    
?>
<p>Product category: </p>
                <ul class=product_list>
                    <?php
                    while($row_productall=mysqli_fetch_array($query_productall)){
                    ?>
                    <li>
                        <img src="admincp/modules/quanlisanpham/tailen/<?php echo $row_productall['hinhanh'] ?>">
                        <a href="#">   
                            <p class="product_name"><?php echo $row_productall['tensp'] ?></p>
                            <p class="product_cost">Cost: <?php echo $row_productall['giasp'].'$'?></p>
                            <form action="pages/giohang/themgiohang.php?idproduct=<?php echo $row_productall['id_sanpham'] ?>" method="POST">
                                 <input type="submit" name="themgiohang" value="Add to Cart">   
                            </form>
                            <form action="pages/sanpham/sanpham.php?idproduct=<?php echo $row_productall['id_sanpham'] ?>" method="POST">
                                <input type="submit" name="viewmorebut" value="View More">
                            </form>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>



<?php }