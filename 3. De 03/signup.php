<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
<script type="text/javascript">
    function checkemail() {
        // kiểm tra định dang email
        var key= document.getElementById("email").value;
        var email =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!email.test(key))
        {
            alert('Hay nhap dia chi email hop le: Example@gmail.com');
            email.focus;
            return false;
        }
        // kiểm tra nhập đủ thông tin chưa?
        var x= document.getElementsByClassName("input");
        for(let i=0;i<x.length;i++)
        {
            if(x[i].value==""){
                alert("bạn phải nhập đầy đủ thông số");
                return false;
            }
        }
        // kiểm tra mật khẩu nhập lại
        var pass= document.getElementById("pass").value;
        var passag=document.getElementById("passag").value;
        if(pass!=passag){
            alert("Mật khẩu nhập lại không trùng khớp");
            return false;
        }

    }
</script>
<?php
$conn= mysqli_connect("localhost","root","milanozhuy123","de03");
if(!$conn){
    die("lỗi kết nối".mysqli_connect_error());
}

if(isset($_POST["btn-submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordagain = $_POST["password-again"];

    if ($name != "" && $email != "" && $username != "" && $password != "" && $passwordagain != ""
        && $password == $passwordagain) {
        $sql = "insert into user(username,password,email,name) value ('$username', '$password', '$email', '$name')";
        mysqli_query($conn, $sql);
    }else{
        echo "Không thành công";
    }
}
?>

<form id="khung-ngoai" action="" method="post" >
    <div id="tieu-de-4">
        <h2>Create your account</h2>
    </div>
    <hr id="line">
    <div id="content">
        <div class="form-group">
            <label class="label">Name:</label>
            <input class="input" type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label class="label">Email:</label>
            <input class="input" type="text" name="email" id="email">
        </div>
        <div class="form-group">
            <label class="label">Username:</label>
            <input class="input" type="text" name="username">
        </div>
        <div class="form-group">
            <label class="label">Password:</label>
            <input class="input" type="password" name="password" id="pass">
        </div>
        <div class="form-group">
            <label class="label">Password Again:</label>
            <input class="input" type="password" name="password-again" id="passag">
        </div>
        <div class="footer-content">
            <button onclick="checkemail()" id="btn-submit" type="submit" name="btn-submit">Create Account</button>
        </div>
    </div>
</form>

</body>
</html>