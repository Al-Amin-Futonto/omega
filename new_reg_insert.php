<?php
include 'include/connection.php';

$first_name     = $_POST['first_name'];
$last_name      = $_POST['last_name'];
$email          = $_POST['email'];
$adress         = $_POST['adress'];
$city           = $_POST['city'];
$country        = $_POST['country'];
$about_user     = $_POST['about_user'];

$sql = "INSERT INTO new_user_registration (first_name,last_name,email,adress,city,country,about_user) VALUES ('$first_name','$last_name','$email','$adress','$city','$country','$about_user')" ;

$result = $conn->query($sql);

if($result){
    echo "Data insert successful!";
    header('location:user_sign_in.php');
}
else{
    echo "Data insert Fail!";
}
