<?php 

//1. Create Connection
$connect = mysqli_connect('localhost','collins','1234','recipe_db');

//2. Check connection

if(!$connect){
    echo 'could not connect' . mysqli_connect_error();
}

?>