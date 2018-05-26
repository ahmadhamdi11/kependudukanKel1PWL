<html>
	<head>
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>Form Ubah data</title>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/customStyle1.css">
	</head>
	<body>

	 <div class="form-wrapper">
		<h1>Ubah Data Kepala keluarga</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("kepala/ubah/".$kepala->nok); ?>
				<div class="form-group ">
					<label for="nok" >NOK</label>
					<input class="form-control" type="text" name="nok" value="<?php echo set_value('nok', $kepala->nok); ?>" readonly>
				</div>

				<div class="form-group ">
					<label for="nama" >Nama</label>
					<input class="form-control" type="text" name="nama" value="<?php echo set_value('nama', $kepala->nama); ?>">
				</div>

				<div class="form-group ">
					<label for="alamat" >alamat</label>
					<textarea name="alamat" class="form-control" rows="2"><?php echo set_value('alamat', $kepala->alamat); ?></textarea>
				</div>

				<div class="form-group ">
					<label for="kpos" >Kode Pos</label>
					<input class="form-control" type="text" name="kpos" value="<?php echo set_value('kpos', $kepala->kpos); ?>">
				</div>

				<div class="form-group ">
					<label for="kecamatan" >Kecamatan</label>
					<input class="form-control" type="text" name="kecamatan" value="<?php echo set_value('kecamatan', $kepala->kecamatan); ?>">
				</div>

				<div class="form-group ">
					<label for="kabupaten" >Kabupaten</label>
					<input class="form-control" type="text" name="kabupaten" value="<?php echo set_value('kabupaten', $kepala->kabupaten); ?>">
				</div>

				<div class="form-group ">
					<label for="provinsi" >Provinsi</label>
					<input class="form-control" type="text" name="provinsi" value="<?php echo set_value('provinsi', $kepala->provinsi); ?>">
				</div>	
				<div class="text-right">
					<input type="submit" name="submit" value="Ubah" class="btn btn-primary">
					<a href="<?php echo base_url('kepala/index'); ?>"><input type="button" value="Batal" class="btn btn-warning"></a>
				</div>
			
		<?php echo form_close(); ?>
	</div>

		<script src="<?php echo base_url();?>assets/js/dist/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	</body>
</html>
