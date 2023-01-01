<?php include 'include/header.php' ;?>
<?php include 'include/connection.php' ;?>
<br>
<br>
<br>
<br>
<br>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<!-- css cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
  
<!-- js cdn -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="assets/css/myacc.css" media="screen" />

<?php

$user_regiSQL = "SELECT * FROM user_registration" ;
$result = $conn->query($user_regiSQL);

?>
<?php

$new_user_regiSQL = "SELECT * FROM new_user_registration" ;
$result = $conn->query($new_user_regiSQL);

?>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!-- My account -->
<body>


  <div class="main-content">
    <div class="row">
      
      <div class="col-sm-6">
          <div class="container ">
        <div class="row d-flex justify-content-center align-items-center ">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

                    <form class="mx-1 mx-md-4" method="POST" action="user_reg_insert.php">
                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="email" name="email" id="form3Example3c" class="form-control" required placeholder="Enter your email"  />
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <input type="password" name="password" id="form3Example4c" class="form-control" required placeholder="Enter a password" />
                        </div>
                      </div>
                      
                     

                      <div class="d-flex justify-content-left mx-4 mb-3 mb-lg-4">
                        <a href="index.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Log In</a>
                      </div>

                    </form>

                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="images/invoice-animation-dribbble.gif"
                      class="img-fluid" alt="Sample image">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       
        
      </div>
      <div class="col-sm-6">
        <!-- Table -->
      <div class="row">
        <div class="col-xl-8 m-auto order-xl-1">
          <div class="card bg-secondary ">
            <div class="card-header bg-white border-0">
              <div class="row   ">
                <div class="col-8">
                  <h3 class="mb-0">My Account</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="new_reg_insert.php">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" name="first_name" class="form-control form-control-alternative" placeholder="First name" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" name="last_name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                  </div>
                
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name="email" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                  </div>
                  
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Shifting Information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name="adress" class="form-control form-control-alternative" placeholder="Home Address" value="" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" name="city" class="form-control form-control-alternative" placeholder="City" value="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" name="country" class="form-control form-control-alternative" placeholder="Country" value="">
                      </div>
                    </div>
                   
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <!-- <textarea rows="4"  for="input-about" class="form-control form-control-alternative" placeholder="A few words about you ..."> -->
                      <input type="text" id="input-about" name="about_user" class="form-control form-control-alternative"  value="">
                    <!-- </textarea> -->
                    <br>
                    <input class="form-check-input me-2"  type="checkbox" value="" id="form2Example3c" required >
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                    <br>
                    <br>
                    <input type="submit" name="save" id="save" class="form-submit btn btn-primary" value="Register Now"/>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
       </div>
    </div>

    
  </div>
  <!-- my account end -->
  
</section>
</body>

    <?php include 'include/footer.php' ;?>