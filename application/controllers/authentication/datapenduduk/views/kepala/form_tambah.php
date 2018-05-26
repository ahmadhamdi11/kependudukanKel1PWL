<!-- <html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
	</head>
	<body>
		<h1>Form Tambah Data Mahasiswa</h1>
		<hr> -->

		<div class="content-wrapper" style="padding: 1em">

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("kepala/tambah"); ?>
			<table cellpadding="8">
				<tr>
					<td>NOK</td>
					<td><input type="text" name="nok" value="<?php echo set_value('nok'); ?>"></td>
				</tr>

				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>"></td>
				</tr>

				<tr>
					<td>alamat</td>
					<td><input type="text" name="alamat" value="<?php echo set_value('alamat'); ?>"></td>
				</tr>

				<tr>
					<td>Kode Pos</td>
					<td><input type="text" name="kpos" value="<?php echo set_value('kpos'); ?>"></td>
				</tr>

				
				<tr>
					<td>Kecamatan</td>
					<td><input type="text" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>"></td>
				</tr>

				<tr>
					<td>kabupaten</td>
					<td><input type="text" name="kabupaten" value="<?php echo set_value('kabupaten'); ?>"></td>
				</tr>

				<tr>
					<td>provinsi</td>
					<td><input type="text" name="provinsi" value="<?php echo set_value('provinsi'); ?>"></td>
				</tr>

				
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url('kepala/index'); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>

</div>
		<!-- 
	</body>
</html> -->
