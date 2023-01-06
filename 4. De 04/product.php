<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Style3.css" type="text/css">
</head>
<body>
<?php
    $conn=mysqli_connect("localhost","root","milanozhuy123","de4");
    if(!$conn){
        die("lỗi kết nối".mysqli_connect_error());
    }
    $sql="Select * from product";
    $result= mysqli_query($conn,$sql);
?>
    <div class="khung-ngoai-sp">
        <div class="tieu-de">
            <h2>SẢN PHẨM NỔI BẬT *</h2>
        </div>
        <?php
            foreach($result as $item)
            {
                echo '
                    <div class="san-pham">
                        <img class="image" src="'.$item['image'].'">
                        <div class="noi-dung-san-pham">
                            <p>'. $item['name'] .'</p>
                            <p>* Bảo hành: '.$item['baohanh'].'</p>
                            <p>* Trạng thái: '.$item['trangthai'].'</p>
                        </div>
                        <div class="clear"></div>
                        <div class="footer-sp">
                            <button name="btn-gia" class="btn-gia">Giá: '.$item['gia'].'</button>
                            <button name="btn-chitiet" class="btn-chitiet">Chi tiết</button>
                        </div>
                    </div>
                    ';
            }
        ?>
    </div>
</body>
</html>