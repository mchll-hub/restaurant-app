<?php

include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : " ";
$catatan = (isset($_POST['catatan'])) ? htmlentities($_POST['catatan']) : " ";


if (!empty($_POST['siapsaji_orderitem_validate'])) {
    $query = mysqli_query($conn, "UPDATE tb_list_order SET catatan='$catatan', status = 2 WHERE id_list_order='$id'");
    if ($query) {
        $message = '<script>alert("Order siap disajikan");
                    window.location="../dapur" </script>';
    } else {
        $message = '<script>alert("GAgal memproses data");
                    window.location="../dapur" </script>';
        // $error = mysqli_error($conn);
        //         $message = '<script>alert("Data gagal dimasukkan: '.addslashes($error).'")</script>';
    }
    
} echo $message;
?>
