<?php
    $connection = mysqli_connect("localhost", "root", "", "project1");
    if(!$connection){
        die ("Connection Failed : " . mysqli_connect_error());
    } echo "Connection Succesfully to Project1 <br>";
    //ubah koneksi ke project2
    $connection_2 = mysqli_select_db($connection, "project2");
    if(!$connection_2){
        die ("Connection Failed : " . mysqli_connect_error()); 
    } echo "Connection Succesfully to Project2";
?>