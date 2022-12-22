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
                        <a href="add_product.php" class="btn btn-info float-right">Add New Product</a>
                    </div>
                </div>
            </div>

            <table class="product-display-table table">
                <thead>
                <tr>
                    <th>Product image</th>
                    <th>Product name</th>
                    <th>Product price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <?php while($row = mysqli_fetch_assoc($sql)){ ?>
                <tr>
                    <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>$<?php echo $row['price']; ?>/-</td>
                    <td>
                    <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit </a>
                    <a href="products.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
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


include 'include/footer.php' ; 





?>
