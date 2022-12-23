<?php
include 'include/connection.php';

$name       = $_POST['name'];
$email      = $_POST['email'];
$password   = $_POST['password'];

$sql = "INSERT INTO user_registration(name,email,password) VALUES ('$name','$email','$password')" ;

$result = $conn->query($sql);

if($result){
    echo "Data insert successful!";
    
}
else{
    echo "Data insert Fail!";
}




