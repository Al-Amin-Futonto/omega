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

// <div>                <a href="add_to_chat.php" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-hover-white u-btn-1">Add To Chat</a>

// </div>


