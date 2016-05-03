
<?php
include 'core/init.php';
protect_page();
include 'includes/overall/top_page.php';
/*
This is the main page for this web application. Each part has been broken down separately
*/
?>

<div class="index_splash">
   <h1 class="header_text">Welcome To Bookmarking!</h1>
   <p class="p_splash">View your bookmarks</p>
</div>
<h2 class="bookmark_list_header">List of Bookmarks</h2>
<?php
output_bookmarks();
?>

<?php include 'includes/overall/bottom_page.php'; ?>
