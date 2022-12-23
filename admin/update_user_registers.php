<?php

include 'include/connection.php';

$id         = $_POST['id'];
$name       = $_POST['name'];
$email      = $_POST['email'];
$password   = $_POST['password'];

$sql = "UPDATE user_registration SET name='$name', email='$email', password='$password' WHERE id='$id'";


$result = $conn->query($sql);

if($result){
   header('Location:view_user_registration.php');
}
