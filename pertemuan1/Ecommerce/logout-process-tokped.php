<?php
session_start();

if (isset($_SESSION['email'])) {
    session_destroy();
    echo '<script>
        alert("Anda berhasil logout");
        window.location="landing-tokped.php";
    </script>';
} else {
    header("location:index-include-tokped.php");
    exit();
}
