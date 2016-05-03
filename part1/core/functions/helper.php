<?php

function logged_in_redirect(){
    if(logged_in() === true){
        header('Location: index.php');
        exit();
    }
}
function protect_page(){
    if(logged_in() === false){
        header('Location: protected.php');
        exit();
    }
}

function check_to_show_bookmark(){
    if(logged_in() === true){
        header('Location: bookmark.php');
        exit();
    }
}
function array_sanitize(&$item){
    $item = mysqli_real_escape_string($GLOBALS['connect'], $item);
}
function sanitize($data){

    return mysqli_real_escape_string($GLOBALS['connect'], $data);
}

function output_errors($errors){
    $output = array();
    foreach($errors as $error){
        $output[] = '<li>'. $error . '</li>';
    }
    //takes each error element in the output array and implode it as a string
    return '<ul>'. implode('', $output) . '</ul>';
}

?>