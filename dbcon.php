<?php

$con = mysqli_connect("localhost","root","","student");
  
  if(!$con){
    die('connection failed' . mysqli_connect_error()); 
  }

?>