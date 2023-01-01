<?php include 'include/header.php' ;?>
<?php include 'include/connection.php' ;?>
 <!-- Bootstrap icons-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/nicepage.css" media="screen" />
        <link rel="stylesheet" href="assets/css/Products.css" media="screen" />
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />
        <script class="u-script" type="text/javascript" src="assets/js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="assets/js/nicepage.js" defer=""></script>        
       <br>
       <br>
       <br>
       <br>
       <br>
       <!-- extention -->
       <?php


if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

       <!-- extention -->
     
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-2">Our All Products</h2><hr>
           
        </div>
    </div>
</div>

    <?php

$productSQL = "SELECT * FROM products" ;
$result = $conn->query($productSQL);

?>
<section class="u-clearfix u-section-2" id="sec-a8c0">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-expanded-width u-list u-list-1">
      <div class="u-repeater u-repeater-1">

      <?php while($row = $result->fetch_assoc()): ?>
        <div class="u-border-2 u-border-palette-2-light-2 u-container-align-center u-container-style u-list-item u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-1">
            <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="admin/images/<?php echo $row['image'] ;?>" alt="" data-image-width="800" data-image-height="800">
            <h3 class="u-text u-text-default u-text-1"> <?php echo $row['name'] ; ?></h3>
            <h4 class="u-text u-text-default u-text-2"> $ <?php echo $row['price'] ; ?></h4>
            <a href="add_to_chat.php" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-hover-white u-btn-1">Buy Now</a>
          </div>
        </div>
        <?php endwhile ; ?>


       
      </div>
    </div>
  </div>
</section>
    
  <?php include 'include/footer.php' ;?>