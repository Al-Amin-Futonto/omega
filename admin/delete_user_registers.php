<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM user_registration WHERE id='$id'";

$result = $conn->query($sql);

if($result)
    header('Location:view_user_registration.php');

