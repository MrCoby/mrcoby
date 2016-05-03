<div class="bookmark_side">
    <?php
        if(logged_in() === true){
            include 'widgets/loggedin.php';
        }else{
            include 'widgets/login.php';
        }
     ?>
</div>