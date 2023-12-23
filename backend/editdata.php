<?php

include 'conn.php';

$id = $_POST['id'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$tempat_terbit = $_POST['tempat_terbit'];
$rak = $_POST['rak'];

$connect->query("UPDATE buku SET judul_buku='".$judul_buku."', pengarang='".$pengarang."', penerbit='".$penerbit."', tahun_terbit='".$tahun_terbit."', tempat_terbit='".$tempat_terbit."', rak='".$rak."' WHERE id=". $id);

?>