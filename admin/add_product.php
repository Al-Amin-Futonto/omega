<?php 

include 'include/header.php' ; 
include 'include/connection.php' ; 

$sql = mysqli_query($conn, "SELECT * FROM products")


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-2">Products</h2><hr>
           
        </div>
            <div class="row">
                <div class="col">
                    <div class="text-end">
                        <a href="products.php" class="btn btn-info float-right">Products</a>
                    </div>
                </div>
            </div>

           
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h3> Add New Product</h3>
                
                <p>Product Name:  <input type="text" placeholder="Enter product name" name="product_name" class="form-control"> </p>
                
                <p>Product Price : <input type="number" placeholder="Enter product price" name="product_price" class="form-control"> </p>
                
                <p>Product Image : <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="form-control"> </p>

                <input type="submit" class="btn btn-outline-primary" name="add_product" value="Add product">
            </form>

        </div>
    </div>
</div>


<?php 


// For delete

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
    header('location:products.php');
 };


 if(isset($_POST['add_product'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/'.$product_image;
 
    if(empty($product_name) || empty($product_price) || empty($product_image)){
       $message[] = 'please fill out all';
    }else{
       $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
       $upload = mysqli_query($conn,$insert);
       if($upload){
          move_uploaded_file($product_image_tmp_name, $product_image_folder);
          $message[] = 'new product added successfully';
          header('Location:products.php');
       }else{
          $message[] = 'could not add the product';
       }
    }
 
 };


include 'include/footer.php' ; 





?>
