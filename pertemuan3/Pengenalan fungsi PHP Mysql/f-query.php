<?php
    $connection = mysqli_connect("localhost", "root", "", "project1");
    if(!$connection){
        die ("Connection Failed : " . mysqli_connect_error());
    } echo "Connection Succesfully to Project1 <br>";
    $query_insert = mysqli_query($connection, "INSERT INTO guru(ID, namalengkap, alamat, TTL, NIP, jurusan) 
    VALUES('', 'Budi', 'Sor Kretek Komplang', '30-10-0000', 'K7803182', 'Mesin') ");
    if (!$query_insert) {
        echo ("Error query : " . mysqli_error($connection));
    }
?>