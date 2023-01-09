<?php
    $conn = mysqli_connect("", "root", "", "de22");
    if(!$conn)
    {
        die("lỗi kết nối".mysqli_connect_error());
    }

    $usename = $_POST["usename"];
    $password = $_POST["password"];
    $email = $_POST["email"]; 

    $sql = "INSERT into user(usename, password, email) VALUES ('$usename', '$password', '$email')";
    mysqli_query($conn, $sql);
    header('location: signup.php');
?>