<?php  
	// koneksi
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$DB = 'belajar_ajax';

	$konek = mysqli_connect($host, $user, $pass, $DB);

	if (!$konek) {
		die('koneksi database gagal '. mysqli_error());
	}

	// menampilkan data barang
	function dataBarang($query) {
		global $konek;

		$hasil = mysqli_query($konek, $query);
		$wadah = [];
		while ($data = mysqli_fetch_assoc($hasil)) {
			$wadah [] = $data;
		}

		return $wadah;
	}

	// mencari data 
	function cariData($data) {
		global $konek;

		$sql = "SELECT * FROM tb_barang WHERE Nama_barang LIKE '%$data%' OR Stok_barang LIKE '%$data%'";

		return dataBarang($sql);
	}

?>