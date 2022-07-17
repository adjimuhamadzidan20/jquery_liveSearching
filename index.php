<?php  
	require 'config.php';

	$isiData = dataBarang("SELECT * FROM tb_barang");

	// mencari data
	if (isset($_POST['cari'])) {
		
		$isiData = cariData($_POST['keyword']);

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>belajar jquery live search</title>

	<style>
		#loading {
			position: absolute;
			top: 69px;
			display: none;
		}
	</style>
</head>
<body>
	<h1>Data Barang</h1>

	<!-- form pencarian -->
	<form action="" method="post">
		<input type="text" name="keyword" id="keyword_cari" placeholder="Cari Data">
		<button type="submit" name="cari" id="btn_cari">Cari</button>

		<!-- loading -->
		<img src="loader.gif" width="60" id="loading">

	</form>

	<br>
	<div id="container">
		<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<th>ID Barang</th>
				<th>Nama Barang</th>
				<th>Stok Barang</th>
			</tr>
			<?php foreach ($isiData as $data) : ?>
				<tr>
					<td><?= $data['ID']; ?></td>
					<td><?= $data['Nama_barang']; ?></td>
					<td><?= $data['Stok_barang']; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>

	<script type="text/javascript" src="jquery-3.6.0.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>