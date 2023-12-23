<?php
require 'conn.php'; 
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];
$prodi = $_POST['prodi'];
$domisili = $_POST['domisili'];
$no_telp = $_POST['no_telp'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT username FROM pengguna WHERE username = '".$username."'";
$result = mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);
if($count == 1){
	echo json_encode("Error");
}else{
	$insert = "INSERT INTO pengguna(nama,nim,fakultas,jurusan,prodi,domisili,no_telp,username,password) VALUES ('".$nama."','".$nim."','".$fakultas."','".$jurusan."','".$prodi."','".$domisili."','".$no_telp."','".$username."','".$password."')";
		$query = mysqli_query($connect,$insert);
		if($query){
			echo json_encode("Success");
		}
}
?>