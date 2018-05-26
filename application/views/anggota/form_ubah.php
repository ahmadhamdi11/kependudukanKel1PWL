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
		<h1>Ubah Data anggota keluarga</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("anggota/ubah/".$anggota->nik); ?>
				<div class="form-group ">
					<label for="nok" >NOK</label>
					<input class="form-control" type="text" name="nok" value="<?php echo set_value('nok', $anggota->nok); ?>" readonly>
				</div>

				<div class="form-group ">
					<label for="nik" >NIK</label>
					<input class="form-control" type="text" name="nik" value="<?php echo set_value('nik', $anggota->nik); ?>">
				</div>

				<div class="form-group ">
					<label for="namaA" >Nama</label>
					<input class="form-control" type="text" name="nama" value="<?php echo set_value('namaA', $anggota->namaA); ?>">
				</div>

				<!-- <div class="form-group ">
					<label for="jk" >Jenis Kelamin</label>
					<textarea name="jk" class="form-control" rows="2"><?php echo set_value('jk', $anggota->jk); ?></textarea>
				</div> -->
		
					<div class="form-group row">
						<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-10">
							<div class="radio-inline">
							  <input type="radio" value="P"  name="jk" >
							  <label for="jk">P</label>
							</div>
							<div class="radio-inline">
							  <input type="radio" value="L" name="jk">
							  <label  for="jk">L</label>
							</div>
						</div>
						
					</div>

				<div class="form-group ">
					<label for="telah" >Tempat Lahir</label>
					<input class="form-control" type="text" name="telah" value="<?php echo set_value('telah', $anggota->telah); ?>">
				</div>

				<div class="form-group ">
					<label for="tglah" >Tanggal Lahir</label>
					<input class="form-control" type="date" name="tglah" value="<?php echo set_value('tglah', $anggota->tglah); ?>">
				</div>

				<div class="form-group ">
					<label for="pendidikan" >Pendidikan</label>
					<input class="form-control" type="text" name="pendidikan" value="<?php echo set_value('pendidikan', $anggota->pendidikan); ?>">
				</div>

				<div class="form-group ">
					<label for="pekerjaan" >Pekerjaan</label>
					<input class="form-control" type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan', $anggota->pekerjaan); ?>">
				</div>	
				<div class="text-right">
					<input type="submit" name="submit" value="Ubah" class="btn btn-primary">
					<a href="<?php echo base_url('anggota/index'); ?>"><input type="button" value="Batal" class="btn btn-warning"></a>
				</div>
			
		<?php echo form_close(); ?>
	</div>

		<script src="<?php echo base_url();?>assets/js/dist/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	</body>
</html>
