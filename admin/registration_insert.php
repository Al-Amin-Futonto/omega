<?php
include 'include/connection.php';

$name       = $_POST['name'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$mobile     = $_POST['mobile'];
$role       = $_POST['role'];

$sql = "INSERT INTO admin_registration(name,email,password,mobile,role) VALUES ('$name','$email','$password','$mobile','$role')" ;

$result = $conn->query($sql);

if($result){
    echo "Data insert successful!";
    
}
else{
    echo "Data insert Fail!";
}




