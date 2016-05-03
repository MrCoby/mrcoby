<?php
include 'core/init.php';
include 'includes/overall/top_page.php';
?>

      <div class="container" id="img1">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="item active carousel_img">
                  <img src="../shared/images/carousel/big_data.jpg" alt="Big Data Carousel">
               </div>
               <div class="item carousel_img">
                  <img src="../shared/images/carousel/code.jpg" alt="Figure Carousel">
               </div>
               <div class="item carousel_img">
                  <img src="../shared/images/carousel/php-code.jpg" alt="PHP-CODE Carousel">
               </div>
               <div class="item carousel_img">
                  <img src="../shared/images/carousel/wordpress.jpg" alt="TEXT Carousel">
               </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>

      <div class="container">
         <h1 class="index_header"><span class="label label-default">Courses Offered</span></h1>
         <div class="row">

            <?php show_courses_thumbnails(); ?>

         </div>
      </div>

<?php include 'includes/overall/bottom_page.php'; ?>
