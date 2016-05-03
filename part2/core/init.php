<?php
session_start();
error_reporting(0);

require 'database/connect.php';
require 'functions/courses_transact.php';
require 'functions/quiz_transact.php';
require 'functions/lessons_transact.php';
require 'functions/units_transact.php';
require 'functions/helper.php';
require 'functions/parser.php';

global $courses;
$courses = get_all_courses();

//this keeps track of all errors in our system
$errors = array();
?>