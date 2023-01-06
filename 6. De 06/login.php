<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style7.css" type="text/css">
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","milanozhuy123","de6");
if(!$conn){
    die("lỗi kết nối");
}
if(isset($_POST['btn-dangnhap'])){
    $username=$_POST["taikhoan"];
    $password=$_POST["matkhau"];
    var_dump($username);
    var_dump($password);
    $sql=" select * from user where username=N'$username' and password='$password' and status=N'kich-hoat'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_fetch_array($result)==0){
        echo "Nhập sai ";
    }
    else{
      echo "Đăng nhập thành công";
    }
}
?>
<form id="login" action="#" method="post">
    <div id="tieude">
        <h3>ĐĂNG NHẬP HỆ THỐNG</h3>
    </div>
    <img id="anh" src="user.png">
    <div id="content">
        <div class="form-group">
            <label class="label7">Tài khoản</label>
            <input class="input" type="text" name="taikhoan" id="taikhoan">
        </div>
        <div class="form-group">
            <label class="label7">Mật khẩu</label>
            <input class="input" type="password" name="matkhau" id="matkhau">
        </div>
        <div class="footer7">
            <button type="submit" id="btn-dangnhap" name="btn-dangnhap" onclick="ktra()">Đăng nhập</button>
            <button type="submit" id="btn-thoat" name="btn-thoat">Thoát</button>
        </div>
    </div>
</form>

<script>
    function ktra() {
        var x= document.getElementById("taikhoan").value;
        var y= document.getElementById("matkhau").value;
        if(x=="" || y==""){
            alert("Bạn chưa nhập đầy đủ thông tin");
            return false;
        }
    }
</script>
</body>
</html>