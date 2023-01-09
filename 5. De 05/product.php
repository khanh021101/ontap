<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
<div class="khung-ngoai-6">
    <div class="tieu-de6">
        <h2>THẾ GIỚI LAP TOP</h2>
    </div>
    <?php
    $conn= mysqli_connect("localhost","root","","de5");
   $sql= " select * from product";
    $result=mysqli_query($conn,$sql);
    foreach($result as $item)
    {
        echo '
        <div class="sann-pham6">
        <p class="ten-sp">'.$item['name'].'</p>
        <img class="new" src="image/new.gif">
        <img class="anh-sp" src="'.$item['image'].'">
        <p class="gia">Giá: '.$item['gia'].'</p>
        <a href="#" class="mh-online">Mua hàng online</a>
        </div>
    ';
    }
    ?>


</div>
</body>
</html>