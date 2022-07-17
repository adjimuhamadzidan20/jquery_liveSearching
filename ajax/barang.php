<?php  
	usleep(500000); // memberi jeda selama 5 sec

	require '../config.php';

	$keyword = $_GET['keyword'];

	$sql = "SELECT * FROM tb_barang WHERE Nama_barang LIKE '%$keyword%' OR Stok_barang LIKE '%$keyword%'";

	$isiData = dataBarang($sql); 

?>
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