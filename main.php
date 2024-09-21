<?php
if (empty($_SESSION['username_micoffee'])) {
    header('location:login');
}

include "process/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_micoffee]'");
$hasil = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>MiCoffee-App</title>
</head>

<body>
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- Header End -->

    <div class="container-lg">
        <div class="row mb-5">
            <!-- SideBar -->
            <?php include "sidebar.php"; ?>
            <!-- SideBar End -->

            <!-- Content -->
            <?php include $page; ?>
            <!-- Content End -->
        </div>
        <div class="fixed-bottom text-center bg-light py-2">Copyright 2024 Michelle Azkya Isnain</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>