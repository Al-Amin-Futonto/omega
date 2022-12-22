<?php include 'include/header.php' ; ?>

<main>


    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h1>Registration Page</h1><hr>
            <form action="registration_insert.php" method="POST">
                <p>Name : <input name="name" type="text" class="form-control" placeholder="Enter your name"></p>
                <p>Email : <input name="email" type="email" class="form-control" placeholder="Enter your email" required></p>
                <p>Password: <input name="password" type="password" class="form-control" placeholder="Enter the password" required></p>
                <p>Mobile : <input name="mobile" type="number" placeholder="Enter your mobile no" class="form-control"></p>
                <p>Role : <input name="role" type="text" placeholder="Enter your role " class="form-control" required></p>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr>
     <center><div>
     <a href="view_registers.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">view Registers</a>
     </div></center>
     <hr>
</main>
<?php include 'include/footer.php' ; ?>