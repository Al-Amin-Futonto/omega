<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM mobileshop WHERE id='$id'";

$result = $conn->query($sql);

if($result)
    header('location:mobileshop.php');