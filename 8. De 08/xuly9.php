<?php
$conn=mysqli_connect("localhost","root","milanozhuy123","de8");
if(!$conn){
    die(mysqli_connect_error());
}
//if(isset($_POST["btn-create"])){
    $username=$_POST['username'];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
//}
if($username!=""&&$name!=""&&$email!=""&&$password!="") {
    $sql = "insert into user(username,name,email,password) value (N'$username',N'$name','$email','$password')";
    var_dump($sql);
    mysqli_query($conn, $sql);
    echo "Thêm thành công";
}else{
    echo "ko thành công";
}

?>