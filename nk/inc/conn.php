<?php
$conn = mysqli_connect('localhost','root','root','nk');

if(!$conn){
  //  echo 'faill';
  echo 'Error: ' . mysqli_connect_error();
}