<?php
$conn=mysqli_connect("localhost","root","","de7");
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
       echo"Nhập sai ";
    }
    else{
        echo "Đăng nhập thành công";
    }
}
?>