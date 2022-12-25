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
                        <a href="add_contents.php" class="btn btn-info float-right">Add Contents </a>
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
                    <a href="edit_mobileshop_content.php.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit </a>
                    <a href="delete_content.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"> <i class="fas fa-trash"></i> Delete </a>
                    </td>
                </tr>
            <?php } ?>

        </table>
        </div>
    </div>
</div>
 

<?php include 'include/footer.php' ; ?>







