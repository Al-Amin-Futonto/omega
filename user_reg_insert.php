<?php
include 'include/connection.php';

$email      = $_POST['email'];
$password   = $_POST['password'];

$sql = "INSERT INTO user_registration(email,password) VALUES ('$email','$password')" ;

$result = $conn->query($sql);

if($result){
    echo "Data insert successful!";
    header('location:user_sign_in.php');
}
else{
    echo "Data insert Fail!";
}



