<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM admin_registration WHERE id='$id'";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    //var_dump($data);
?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
        <h1>Edit Page</h1><hr>
        <form action="update_registers.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            <p>Name : <input name="name" type="text" value="<?php echo $data['name'] ; ?>" class="form-control" placeholder="Enter your name"></p>
            <p>Email : <input name="email" type="email"  value="<?php echo $data['email'] ; ?>" class="form-control" placeholder="Enter your email" required></p>
            <p>Password: <input name="password" type="password" value="<?php echo $data['password'] ; ?>" class="form-control" placeholder="Enter the password" required></p>
            <p>Mobile No : <input name="mobile" value="<?php echo $data['mobile'] ; ?>" type="number" placeholder="Enter your mobile no" class="form-control" required></p>
            <p>Role : <input name="role" value="<?php echo $data['role'] ; ?>" type="text" placeholder="Enter your role" class="form-control" required></p>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        </div>
    </div>
</div>


<?php include 'include/footer.php' ; ?>