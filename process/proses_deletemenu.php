<?php
include "connect.php";
$id = (isset($_POST ['id'])) ? htmlentities($_POST ['id']) : " " ;

$password = md5('password');

if (!empty($_POST['input_user_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_daftar_menu WHERE id='$id'");
    if ($query) {
        $message = '<script>alert("Data berhasil dihapus"); 
        window.location="../menu"</script>';
    } else {
        $message = '<script>alert("Data gagal dihapus");
         window.location="../menu"</script>';
    }
} echo $message;
?>