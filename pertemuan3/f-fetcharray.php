<?php
    $connection = mysqli_connect("localhost", "root", "", "project1");
    if(!$connection){
        die ("Connection Failed : " . mysqli_connect_error());
    } echo "Connection Succesfully <br>";

    $query = mysqli_query($connection, "SELECT ID, namalengkap, jurusan FROM guru");

    if (!$query) {
        echo ("Error query " . mysqli_error($connection)); 
    }
    echo "<br> Hasil numerik <br>";
    while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
        print "ID : " . $data[0] . "<br>";
        print "namalengkap : " . $data[1] . "<br>";
        print "jurusan : " . $data[2] . "<br>";
    }

    mysqli_close($connection);
?>