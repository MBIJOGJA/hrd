<?php
include 'koneksi.php';
$input = $_POST['addmore'];
foreach ($input as $output) {
    mysqli_query($connect,"INSERT INTO datakeluarga VALUES ('','$output')");
}
header('location:index.html')
?>