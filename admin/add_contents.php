<?php 

include 'include/header.php' ; 
include 'include/connection.php' ; 

$sql = mysqli_query($conn, "SELECT * FROM mobileshop")


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-2">Contents</h2><hr>
           
        </div>
            <div class="row">
                <div class="col">
                    <div class="text-end">
                        <a href="mobileshop.php" class="btn btn-warning float-right">Go Back!!</a>
                    </div>
                </div>
            </div>

           
            <form action="" method="post" enctype="multipart/form-data">
                <h3> Add New Content</h3>
                
                <p> title    :<input type="text" placeholder="Enter a title" name="title" class="form-control"> </p>                
                <p> image    :<input type="file" accept="image/png, image/jpeg, image/jpg" name="image" class="form-control"> </p>
                <p>content  :<input type="text" placeholder="Enter some Content " name="content" class="form-control"> </p>                


                <input type="submit" class="btn btn-outline-primary" name="add_content" value="Add Your Content">
            </form>

        </div>
    </div>
</div>


<?php 


// For delete

// if(isset($_GET['delete'])){
//     $id = $_GET['delete'];
//     mysqli_query($conn, "DELETE FROM mobileshop WHERE id = $id");
//     header('location:mobileshop.php');
//  };


 if(isset($_POST['add_content'])){

    $title          = $_POST['title'];
    $image          = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder   = 'uploaded_img/'.$image;
    $content        = $_POST['content'];

 
    if(empty($title) || empty($image) || empty($content)){
       $message[] = 'please fill out all';
    }else{
       $insert = "INSERT INTO mobileshop (title, image, content) VALUES('$title', '$image', '$content')";
       $upload = mysqli_query($conn,$insert);
       if($upload){
          move_uploaded_file($image_tmp_name, $image_folder);
          $message[] = 'your content added successfully';
          header('location:mobileshop.php');
            // echo ($upload);
       }else{
          $message[] = 'could not add your content';
       }
    }
 
 };


include 'include/footer.php' ; 





?>
