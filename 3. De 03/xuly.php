<?php
$conn= mysqli_connect("localhost","root","milanozhuy123","de03");

if(!$conn){
    die("lỗi kết nối".mysqli_connect_error());
}
//$sql="select * from user";
//$result=mysqli_query($conn,$sql);

$name=$_POST["name"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$passwordagain=$_POST["password-again"];

if($name!="" &&$email!="" &&$username!="" &&$password!="" &&$passwordagain!=""
    &&$password==$passwordagain){
                $sql= "insert into user(
            username,password,email,name
            ) value ('$username', '$password', '$email', '$name')";
                mysqli_query($conn,$sql);
            }
header("location:signup.php");

 ?>