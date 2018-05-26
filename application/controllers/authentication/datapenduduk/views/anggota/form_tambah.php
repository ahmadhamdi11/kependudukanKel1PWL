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

		<?php echo form_open("anggota/tambah"); ?>
			<table cellpadding="8">
				<tr>
					<td>NOK</td>
					<td><input type="text" name="nok" value="<?php echo set_value('nok'); ?>"></td>
				</tr>

				<tr>
					<td>NIK</td>
					<td><input type="text" name="nik" value="<?php echo set_value('nik'); ?>"></td>
				</tr>


				<tr>
					<td>Nama</td>
					<td><input type="text" name="namaA" value="<?php echo set_value('namaA'); ?>"></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jk" value="<?php echo set_value('jk'); ?>"></td>
				</tr>

				<tr>
					<td>Tempat Lahir</td>
					<td><input type="text" name="telah" value="<?php echo set_value('telah'); ?>"></td>
				</tr>

				
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tglah" value="<?php echo set_value('tglah'); ?>"></td>
				</tr>

				<tr>
					<td>Pendidikan</td>
					<td><input type="text" name="pendidikan" value="<?php echo set_value('pendidikan'); ?>"></td>
				</tr>

				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan'); ?>"></td>
				</tr>

				
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url('anggota/index'); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>

</div>
		<!-- 
	</body>
</html> -->
