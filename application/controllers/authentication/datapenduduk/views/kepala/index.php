 <div class="content-wrapper">
	<br>
	<h2 align="center">Data Kepala Keluarga</h2>
	<br>
	<!-- tabel kepala -->
  <!-- <a   data-toggle="modal" data-target="#tambah"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a><br><br> -->

		<table class="table table-hover">
			
		<thead>
			<tr>
				<th>#</th>
				<th>NOK</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Provinsi</th>
				<th>Kode Pos</th>
				<th colspan="3">Aksi</th>
			</tr>
		</thead>
			
		<tbody>
			<?php
			$i =1;

			if( ! empty($kepala)){ // Jika data  tidak sama dengan kosong, artinya jika data  ada
				foreach($kepala as $data){
					echo "<tr>
					<td>".$i."</td>
					<td>".$data->nok."</td>
					<td>".$data->nama."</td>
					<td>".$data->alamat."</td>
					<td>".$data->kecamatan."</td>
					<td>".$data->kabupaten."</td>
					<td>".$data->provinsi."</td>
					<td>".$data->kpos."</td>

					
					<td><a href='".base_url("kepala/ubah/".$data->nok)."'><i class='glyphicon glyphicon-pencil'></i></a></td>
					<td><a href='".base_url("kepala/hapus/".$data->nok)."'><i class='glyphicon glyphicon-trash'></i></a></td>
					
					</tr>";
					$i++;
				}
			}else{ // Jika data  kosong
				echo "<tr><td align='center' colspan='10'>Data Tidak Ada</td></tr>";
			}

			
			?>

		</tbody>

		<!-- tabel kepala -->
		</table>


 
	<!-- Modal tambah -->
	<div id="tambah" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Data Kepala Keluarga</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<!-- Menampilkan Error jika validasi tidak valid -->
					<div style="color: red;"><?php echo validation_errors(); ?></div>

					<?php echo form_open("kepala/tambah"); ?>

					<div class="form-group row">
						<label for="nok" class="col-sm-2 col-form-label" >NOK</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="nok" value="<?php echo set_value('nok'); ?>">
						</div>
						
					</div>

					
					<div class="form-group row">
						<label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="nama" value="<?php echo set_value('nama'); ?>">
						</div>
						
					</div>

					<div class="form-group row">
						<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="2" name="alamat" value="<?php echo set_value('alamat'); ?>"></textarea>
							
						</div>
						
					</div>

					<div class="form-group row">
						<label for="kpos" class="col-sm-2 col-form-label">Kode Pos</label>
						<div class="col-sm-10">
							<input class="form-control" type="text" name="kpos" value="<?php echo set_value('kpos'); ?>">
						</div>
						
					</div>

					<div class="form-group row">
						<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
						<div class="col-sm-10">
							<select class="form-control form-control-sm" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>">
							  <option selected> -- Pilih Kecamatan -- </option>
							  <option value="Cipanas">Cipanas</option>
							  <option value="Sukaresmi">Sukaresmi</option>
							  <option value="Pacet">Pacet</option>
							</select>
						</div>
						
					</div>

					
		
					<div class="form-group row">
						<label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
						<div class="col-sm-10">
							<select class="form-control form-control-sm" name="kabupaten" value="<?php echo set_value('kabupaten'); ?>">
							  <option selected> -- Pilih Kabupaten -- </option>
							  <option value="Cianjur">Cianjur</option>
							  <option value="Sukabumi">Sukabumi</option>
							  <option value="Bogor">Bogor</option>
							</select>
							
						</div>
						
					</div>

					<div class="form-group row">
						<label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
						<div class="col-sm-10">
							<select class="form-control form-control-sm" name="provinsi" value="<?php echo set_value('provinsi'); ?>">
							  <option selected> -- Pilih Provinsi -- </option>
							  <option value="Jawa Barat">Jawa Barat</option>
							  <option value="Jawa Timur">Jawa Timur</option>
							  <option value="DKI Jakarta">DKI Jakarta</option>
							</select>
							
						</div>
						
					</div>
											
					<hr>

				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					
					<div class="text-right">
						<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
						<button type="button" class="btn btn-primary" data-dismiss="modal">batal</button>
					</div>	
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	 </div>

	 
	


		
		
</div>