$(document).ready(function() {

	// menyembunyikan button cari
	$("#btn_cari").hide();

	// event ketika keyword diketik / ditulis
	$("#keyword_cari").on('keyup', function() {

		// menampilkan loading
		$("#loading").show();

		// memakai load()
		// $("#container").load("ajax/barang.php?keyword=" + $("#keyword_cari").val());

		// memakai $.get()
		$.get("ajax/barang.php?keyword=" + $("#keyword_cari").val(), function(data) {

			$("#container").html(data);
			$("#loading").hide();

		});
	});

});