<?php

function part2_sanitize($data){

   return mysqli_real_escape_string($GLOBALS['connect'], $data);
}

function part2_output_errors($errors){
   $output = array();
   foreach($errors as $error){
      $output[] = '<li><p class="bg-danger lead">'. $error . '</p></li>';
   }
   //takes each error element in the output array and implode it as a string
   return '<ul>'. implode('', $output) . '</ul>';
}
?>