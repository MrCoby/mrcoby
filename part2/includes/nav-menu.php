
<?php

?>
<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="index.php"><strong>Web Development</strong></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
            <li><a href="index.php"><strong>Home</strong></a></li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Courses</strong> <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <?php show_courses_dropdown(); ?>
               </ul>
            </li>
            <li><a href="#about"><strong>About</strong></a></li>
         </ul>
      </div><!--/.nav-collapse -->
   </div>
</nav>