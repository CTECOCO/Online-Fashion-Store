<html>
<head>
<title></title>
<style>
.product-right{
    box-shadow: 0px 1px 50px 0px;  background: #f2f2f2; width: 900px; height: auto;  padding: 20px 50px 20px 50px; margin-left: 20%; margin-top:50px;  
}
.specs-special ul li{ font-weight:1; padding-bottom: 10px; width: 380px; border-bottom: 1px solid rgb(213, 205, 205)
}
.product-specs{
    display: flex;
}
.product-spect-img button{width: 350px; height: 55px; font-size: 0.9em; color: aliceblue; padding: 11px 0px 7px; margin: 10px 0 0 0; background: #6cb715; background: linear-gradient(to bottom,#6cb715 0%,#4c8e00 100%); border-radius: 6px ;  cursor: pointer;  border: none;
}
.product-spect-img img{margin-left: 50px;}

</style>
</head>
<body>
<?php
	$sql_chitiet = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
        // bien giamgia
        $giagiam=$row_chitiet['giasp']*10/100;
    ?>         
           
    <div class="product-right">
        <div class="product-specs">
        <div class="product-spect-img">
            <img src="admin/modules/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh']?>"/>
                <!-- <a data-padding="0px" data-width="600px" class="ajax-modal product-specs-button" href="/Ajax/fullspecs/67"><span class="icon-config"></span> <strong>Cấu hình chi tiết</strong></a> -->
               
               <form action="pages/main/xulyaddcart.php?id_sanpham=<?php echo $row_chitiet['id_sanpham']?>"  method="POST">
               <h3> <?php echo $row_chitiet['tensp']?></h3>
               <!-- gia ban -->
               <strong style="font-size: 20px;margin-left: 10px;">Giá:</strong>
               <strong style="font-size: 20px;margin-left: 10px;color:red;"><?php echo number_format($row_chitiet['giasp']-$giagiam,0,',','.').'₫' ?></strong>
               <?php 
                if($row_chitiet['giasp']>15000000){
                   ?>   
                     <strike><?php echo number_format($row_chitiet['giasp'],0,',','.').'₫' ?></strike>
                        <?php
                          }
                         ?>          
                 <!-- hang ton -->
                    <ul>
                         <li>Sản phẩm còn lại: <?php echo $row_chitiet['soluongton']?></li>
                  </ul>

               <!-- button -->
               <button type="submit" name="themgiohang"><strong>THÊM VÀO GIỎ HÀNG</strong>
                    <br> <span>(Vui lòng kiểm tra sản phẩm ở giỏ hàng) </span>
                </button>
            </div>
        </form>

        <div class="specs-special">
        <h3>Thông số kỹ thuật </h3>
                <ul>
                    <li>
                        <strong>Loại bếp: </strong>
                        <!-- <span>Bếp từ đôi, Bếp âm cần lắp CB</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Tổng công suất:</strong>
                        <!-- <span>4000W</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Điện áp:</strong>
                        <!-- <span>220V/50 Hz</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Kích thước vùng nấu:</strong>
                        <!-- <span>2Ø20 cm</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Kiểu lắp đặt:</strong>
                        <!-- <span>Lắp âm và lắp dương</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Bảng điều khiển:</strong>
                        <!-- <span>Cảm ứng/span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Chất liệu mặt bếp:</strong>
                        <!-- <span>Mặt kính Crystal - Trung Quốc</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Thương hiệu mâm nấu:</strong>
                        <!-- <span>Hãng không công bố</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Thương hiệu của:</strong>
                        <!-- <span>Việt Nam</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Sản xuất tại:</strong>
                        <!-- <span>Trung Quốc</span> -->
                    </li>
                </ul>
                <ul>
                    <li>
                        <strong>Năm ra mắt:</strong>
                        <!-- <span>2021</span> -->
                    </li>
                </ul>
                
        </div>
        
    </div>
    
    
    
</div>
</div>
</div>
<?php
    }
    ?>
</body>
</html>