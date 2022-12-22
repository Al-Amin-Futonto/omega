<?php include 'include/header.php' ;?>
<?php include 'include/connection.php' ;?>



    <section class="u-carousel u-slide u-block-cb53-1" id="carousel_f58b" data-interval="5000" data-u-ride="carousel">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-cb53-2">
        <li data-u-target="#carousel_f58b" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_f58b" class="u-grey-30" data-u-slide-to="1"></li>
        <li data-u-target="#carousel_f58b" class="u-grey-30" data-u-slide-to="2"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-carousel-item u-clearfix u-white u-section-1-1">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
              <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-size-60 u-white u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <div class="u-border-3 u-border-palette-2-base u-line u-line-horizontal u-line-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction=""></div>
                      <img class="u-image u-image-contain u-image-default u-image-1" src="images/roadmap.png" alt="" data-image-width="1228" data-image-height="870" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="X">
                      <h1 class="u-text u-text-palette-2-light-2 u-text-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="250"> Selling Only </h1>
                      <h3 class="u-text u-text-palette-4-light-2 u-text-2" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="1000"> The Best Things </h3>
                      <h4 class="u-text u-text-palette-3-light-2 u-text-3" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="1750"> ONLINE.<span style="font-weight: 400;"></span>
                        <br>
                      </h4>
                      <div class="u-absolute-hcenter u-border-3 u-border-palette-4-base u-line u-line-horizontal u-line-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


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
                <a href="add_to_chat.php" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-hover-white u-btn-1">Add To Chat</a>
              </div>
            </div>
            <?php endwhile ; ?>


           
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-5" id="sec-a8ee">
      <div class="u-clearfix u-sheet u-sheet-2">
        <div class="u-absolute-hcenter u-border-3 u-border-palette-2-base u-line u-line-horizontal u-line-1  " data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction=""></div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-section-4" id="sec-ae46">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">
          <span class="u-text-palette-2-light-1"> Best&nbsp;</span>
          <span class="u-text-palette-4-light-1">Mobile&nbsp;</span>
          <span class="u-text-palette-3-light-1">Shop</span>
        </h1>
        <p class="u-text u-text-2"> "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/handsome-confident-businessman-wearing-suit-holding-n1.jpg" alt="" data-image-width="2305" data-image-height="2482">
        <h2 class="u-text u-text-palette-3-light-2 u-text-3"> "Capable With Your Price"</h2>
        <p class="u-text u-text-4"> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.&nbsp;<br>
        </p>
        <img class="u-image u-image-default u-preserve-proportions u-image-2" src="images/instructor-1x-v33.jpg" alt="" data-image-width="400" data-image-height="400">
        <h2 class="u-text u-text-palette-4-light-2 u-text-5"> "Always Something New"</h2>
        <p class="u-text u-text-6"> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.&nbsp;<br>
        </p>
        <img class="u-image u-image-default u-preserve-proportions u-image-3" src="images/ub-1x-v3.jpg" alt="" data-image-width="400" data-image-height="400">
        <h2 class="u-text u-text-palette-2-light-2 u-text-7">"​Explore The World Class Products With Omega"</h2>
        <p class="u-text u-text-8"> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.&nbsp;<br>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-5" id="sec-a8ee">
      <div class="u-clearfix u-sheet u-sheet-1">
        <!-- <h1 class="u-text u-text-default u-text-1"></h1> -->
        <div class="u-absolute-hcenter u-border-3 u-border-palette-3-base u-line u-line-horizontal u-line-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction=""></div>
      </div>
    </section>
    
    
    <?php include 'include/footer.php' ;?>