<?php 

include "koneksi.php";

	
class daerah extends database{

	function __construct()
			{
				$this->getConnection();
			}

 	// $db->input( $_POST['nama_daerah'],$_POST['biaya'],$_POST['id_daerah'],$_POST['id_provinsi']);
			
	function tampil_data(){
		$sql = "SELECT * FROM tbl_daerah, tbl_provinsi where tbl_daerah.id_provinsi = tbl_provinsi.id_provinsi";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}
	
	function input($nama, $biaya, $daerah, $provinsi) {
		$sql = "insert into tbl_daerah values ('$provinsi', '$daerah', '$nama', '$biaya')";
		$result = mysqli_query($this->getConnection(), $sql);
		return $result;
	}

	function hapus($id) {
		$sql = "delete from tbl_daerah where id_daerah = $id";
		return mysqli_query($this->getConnection(), $sql);
	}


} 

?>