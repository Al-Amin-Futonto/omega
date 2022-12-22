<?php 

include 'include/header.php' ; 
include 'include/connection.php' ; 

$sql = mysqli_query($conn, "SELECT * FROM mobileshop")


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-2">About US</h2><hr>
           
        </div>
            <div class="row">
                <div class="col">
                    <div class="text-end">
                        <a href="#" class="btn btn-info float-right">#</a>
                    </div>
                </div>
            </div>

            <table class="mobileshop-display-table table">
                <thead>
                <tr>
                    <th>title</th>
                    <th>image</th>
                    <th>content</th>
                    <th>Action</th>
                </tr>
                </thead>
                <?php while($row = mysqli_fetch_assoc($sql)){ ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                    <td><?php echo $row['content']; ?></td>
                    <td>
                    <a href="?id=<?php echo $row['id']; ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit </a>
                    <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete </a>
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
    header('location:#');
 };


include 'include/footer.php' ; 





?>
