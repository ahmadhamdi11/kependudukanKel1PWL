 <div class="content-wrapper">

   <br>
   <h2 align="center">Data Anggota Keluarga</h2>
   <br>

	<!-- tabel  -->
	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahA" id="btn-ta"><i class="glyphicon glyphicon-plus"></i>Tambah Data</button> -->
	<table class="table table-hover">
			
		<thead>
			<tr>
				<th>#</th>
				<th>NOK</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Pendidikan</th>
				<th>Pekerjaan</th>
				<th colspan="3">Aksi</th>
			</tr>
		</thead>
			
		<tbody>
			<?php
			$i =1;

			if( ! empty($anggota)){ // Jika data  tidak sama dengan kosong, artinya jika data  ada
				foreach($anggota as $data){
					echo "<tr>
					<td>".$i."</td>
					<td>".$data->nok."</td>
					<td>".$data->nik."</td>
					<td>".$data->namaA."</td>
					<td>".$data->jk."</td>
					<td>".$data->telah."</td>
					<td>".$data->tglah."</td>
					<td>".$data->pendidikan."</td>
					<td>".$data->pekerjaan."</td>

					
					<td><a href='".base_url("anggota/ubah/".$data->nik)."'><i class='glyphicon glyphicon-pencil'></i></a></td>
					<td><a href='".base_url("anggota/hapus/".$data->nik)."'><i class='glyphicon glyphicon-trash'></i></a></td>
					
					</tr>";
					$i++;
				}
			}else{ // Jika data  kosong
				echo "<tr><td align='center' colspan='10'>Data Tidak Ada</td></tr>";
			}

			
			?>

		</tbody>

		<!-- tabel anggota -->
	</table>


 
	<!-- Modal tambah -->
	<div id="tambahA" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Data anggota Keluarga</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<!-- Menampilkan Error jika validasi tidak valid -->
					<div style="color: red;"><?php echo validation_errors(); ?></div>

					<?php echo form_open("anggota/tambah"); ?>

					<div class="form-group row">
						<label for="nok" class="col-sm-2 col-form-label" >NOK</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="nok" value="<?php echo set_value('nok'); ?>" id="noka">
						</div>
						
					</div>

					<div class="form-group row">
						<label for="nik" class="col-sm-2 col-form-label">NIK</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="nik" value="<?php echo set_value('nik'); ?>">
						</div>
						
					</div>

					<div class="form-group row">
						<label for="namaA" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="namaA" value="<?php echo set_value('namaA'); ?>">
						</div>
						
					</div>

					<div class="form-group row">
						<label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
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

					<div class="form-group row">
						<label for="telah" class="col-sm-2 col-form-label">Tempat Lahir</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="telah" value="<?php echo set_value('telah'); ?>">
						</div>
						
					</div>

					<div class="form-group row">
						<label for="tglah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-10">
							<input class="form-control" type="date" name="tglah" value="<?php echo set_value('tglah'); ?>">
						</div>
						
					</div>

					<!-- <div class="form-group row">
						<label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="pendidikan" value="<?php echo set_value('pendidikan'); ?>">
						</div>
						
					</div> -->

					<div class="form-group row">
						<label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
						<div class="col-sm-10">
							<select class="form-control form-control-sm" name="pendidikan" value="<?php echo set_value('pendidikan'); ?>">
							  <option selected> -- Pilih Pendidikan -- </option>
							  <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
							  <option value="Tamat SMP/Sederajat">Tamat SMP/Sederajat</option>
							  <option value="Tamat SMA/Sederajat">Tamat SMA/Sederajat</option>
							  <option value="Tamat S1/Sederajat">Tamat S1/Sederajat</option>
							  <option value="Tamat S2/Sederajat">Tamat S2/Sederajat</option>
							  <option value="Tamat S3/Sederajat">Tamat S3/Sederajat</option>
							</select>
						</div>
						
					</div>

					<div class="form-group row">
						<label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan'); ?>">
						</div>
						
					</div>
						
				<!-- footer modal -->
				<div class="modal-footer">
					<div class="text-right">
						<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
						<a href="<?php echo base_url('anggota/index'); ?>"><input type="button" value="Batal" class="btn btn-warning"></a>
					</div>
				</div>

				<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	 </div>


	 <!-- modal hapus -->
	 <!-- <div id="hapus" class="modal fade" role="dialog">
	 	<div class="modal-dialog">
	 		<div class="modal-content">
	 			<div class="model-header">
	 				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Hapus data</h4>
	 			</div>
	 			<div class="modal-body">
	 				anda yakin ingin menghapus data?
	 			</div>

	 			<div class="modal-footer">
	 				
	 				<button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
	 				<a href="<?=base_url('anggota/hapus/'.$data->nik)?>">
	 					<button type="button" class="btn btn-danger">Ya</button>
	 				</a>
	 			</div>
	 		</div>
	 	</div>
	 </div> -->

		
		
</div>