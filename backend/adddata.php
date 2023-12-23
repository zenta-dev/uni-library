<?php

include 'conn.php';

$id = $_POST['id'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$tempat_terbit = $_POST['tempat_terbit'];
$rak = $_POST['rak'];

$connect->query("INSERT INTO buku (id, judul_buku, pengarang, penerbit, tahun_terbit, tempat_terbit, rak) VALUES ('".$id."', '".$judul_buku."', '".$pengarang."', '".$penerbit."', '".$tahun_terbit."', '".$tempat_terbit."', '".$rak."')")

?>