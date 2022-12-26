<?php include 'include/header.php' ; ?>
<?php include 'include/connection.php' ; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-2">Login page</h2><hr>
           
        </div>
    </div>
</div>

<main>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
          <form action="admin_login_process.php" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="text"
              class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter your email address">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="text"
              class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter the password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          </form>
      </div>
    </div>
  </div>
  


</main>

<?php include 'include/footer.php' ; ?>
