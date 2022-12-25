<?php
include 'include/header.php' ; 
include 'include/connection.php' ; 

$id = $_GET['id'];

if(isset($_POST['update_contents'])){

   $title          = $_POST['title'];
   $image          = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder   = 'uploaded_img/'.$image;
   $content        = $_POST['content'];


   if(empty($title) || empty($image) || empty($content)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE mobileshop SET title='$title', image='$image' content='$content'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($image_tmp_name, $image_folder);
         header('location:mobileshop.php');
      }else{
         $$message[] = 'please fill out all!';  
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="mobileshop-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM mobileshop WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the content</h3>
      <input type="text" class="box" name="title" value="<?php echo $row['name']; ?>" placeholder="enter a title">
      <input type="file" class="box" name="image"  accept="image/png, image/jpeg, image/jpg">
      <input type="text" class="box" name="content" value="<?php echo $row['name']; ?>" placeholder="enter your contents">

      <input type="submit" value="update content" name="update_contents" class="btn">
      <a href="mobileshop.php" class="btn">go back!</a>
   </form>
 
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>