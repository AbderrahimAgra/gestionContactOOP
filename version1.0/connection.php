
<?php


$db_servername = 'localhost' ;
$db_username = 'root' ;
$db_password = '' ;
$db_name = 'gestioncontact' ;
//creat connection
$connection = mysqli_connect($db_servername , $db_username , $db_password , $db_name);
//verefication
if(!$connection){
  die ('connection failed' . mysqli_connect_error()) ;
}