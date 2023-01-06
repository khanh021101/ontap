<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style8.css">
</head>
<body>

<div id="khung-ngoai8">
    <div id="tieu-de8">
        <h3><b>SẢN PHẨM NỔI BẬT</b></h3>
    </div>
    <?php
    $conn=mysqli_connect("localhost","root","milanozhuy123","de7");
    if(!$conn){
        die(mysqli_connect_error());
    }
    $sql="Select * from product";
    $result=mysqli_query($conn,$sql);
    foreach ($result as $item)
    {
        echo '
            <div class="san-pham8">
                <img class="anh8" src="'.$item['image'].'">
                <p class="ten-sp">'.$item['name'].'</p>
                <p class="gia-sp">Gía: '.$item['gia'].'</p>
            </div>
        ';
    }
    ?>

</div>
</body>
</html>