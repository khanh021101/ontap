<?php
//kết nối
$conn= mysqli_connect("localhost","root","milanozhuy123","de2");
if(!$conn){
    die(mysqli_connect_error());
}
    $name = $_POST["name"];
    $surname= $_POST["surname"];
    $email = $_POST["email"];
    $message= $_POST["message"];

    if ($message != "" && $surname != "" && $name != "" && $email != "") {
            $sql = "INSERT INTO contact(name,surname,email,message) VALUES ('$name','$surname','$email','$message')";
            mysqli_query($conn,$sql);
}
    header('location:contact.php');

?>