<?php 
function generate_password($length){

  if($form_submitted){
    $alfa_number="abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $password = "";
    $min = 0;
    $max = strlen($alfa_number) -1;
  
    for($i=0; $i < $passwrod_length; $i++ ){
  
      $random_password= rand($min, $max);
  
      $random_char = $alfa_number[$random_password];

    
  
      $password .= $random_char;
    }
  }

  return $password;
}


?>