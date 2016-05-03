<?php

session_start();
error_reporting(0);

require 'database/connect.php';
require 'functions/users.php';
require 'functions/bookmarker.php';
require 'functions/helper.php';

if(logged_in() === true){
    $session_user_id = $_SESSION['user_id'];
    $user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email');
    $bookmark_data = get_all_user_bookmarks($session_user_id, 'bookmark_name', 'bookmark_url');
}
//this keeps track of all errors in our system
$errors = array();
?>