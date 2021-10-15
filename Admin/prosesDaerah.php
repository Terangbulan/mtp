<?php 

include '../class/daerah.php';

$db= new daerah();



$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_POST['nama_daerah'],$_POST['biaya'],$_POST['id_daerah'],$_POST['id_provinsi']);
 	
 	header("location:admin.php#ajax/daerah.php");

 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:admin.php#ajax/daerah.php");

}elseif($aksi == "update"){
 	$db->update($_POST['id_daerah'],$_POST['id_provinsi'],$_POST['biaya'],$_POST['ket_paket']);
 	header("location:admin.php#ajax/daerah.php");
 }
?>