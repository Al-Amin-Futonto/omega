<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 
    $sql = "SELECT * FROM user_registration";
    $result = $conn->query($sql);
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
            <h1>User Registers</h1><hr>
                <table class="table table-bordered">
                    <thead>
                        <th>Id#</th>
                        <th>User Email</th>
                        <th>User Password</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['email'] ; ?></td>
                            <td><?php echo $row['password'] ; ?></td>
                            <td>
                                <a href="edit_user_registers.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                <!-- <form action="delete-user.php" method="POST">
                                    <input name="id" type="hidden" value="<?php echo $row['id'] ; ?>">
                                    <button class="btn btn-danger" type="submit" >Delete</button>
                                </form> -->
                                <a href="delete_user_registers.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
<?php include 'include/footer.php' ; ?>