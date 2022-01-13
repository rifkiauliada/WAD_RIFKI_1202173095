<?php
include('Rifki_koneksi.php');
$id_buku = $_GET['id_buku'];
$delete = "DELETE FROM buku_table WHERE id_buku = '$id_buku'";
$sukses = mysqli_query($connection, $delete);

if ($sukses) {
    header('location: Rifki_Home.php?success');
}
