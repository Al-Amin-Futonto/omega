<?php include 'include/header.php' ; 
session_start();
//  var_dump($_SESSION['id']) ;


if($_SESSION['id']):
?>
  <main>
    <h1>Profile Page</h1> <a href="logout.php" class="btn btn-info">Logout</a><hr>
    
  <p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
  </main>
<?php include 'include/footer.php' ; ?>
<?php
else:
  header('Location:index.php');
endif;