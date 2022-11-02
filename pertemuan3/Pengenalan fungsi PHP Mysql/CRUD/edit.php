<?php
// Membuat koneksi ke database mengguhnakan file config.php dengan include_once
include_once("config.php");

//  Menmapilkan customer data yang di pilih sesuai id nya
//  Mengambil id dari url
$id = $_GET['id'];

// Mengambil semua data customer sesuai id
$result = mysqli_query($conn_db, "SELECT * FROM customers WHERE id=$id");
if (!$result) {
    header("Location : index.php");
}

while ($customer_data = mysqli_fetch_array($result)) {
    $name = $customer_data['name'];
    $email = $customer_data['email'];
    $phone = $customer_data['phone'];
}
?>
<html>
<head>
    <title>Edit Customer data</title>
</head>

<body>
    <a href="index.php"></a>
    <br>

    <form name="update_user" method="POST" action="edit-process.php">
        <table border="0">
            <tr>
                
            </tr>
        </table>
    </form>
</body>
</html>