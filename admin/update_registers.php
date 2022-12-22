<?php

include 'include/connection.php';

$id         = $_POST['id'];
$name       = $_POST['name'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$mobile  = $_POST['mobile'];
$role       = $_POST['role'];

$sql = "UPDATE admin_registration SET name='$name', email='$email', password='$password', mobile='$mobile',role='$role' WHERE id='$id'";


$result = $conn->query($sql);

if($result){
   header('Location:view_registers.php');
}
