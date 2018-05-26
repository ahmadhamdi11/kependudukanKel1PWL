<div class="content-wrapper">

  <br>
  <h3 align="center"><strong>Data Hasil Pencarian</strong></h3>
  <br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>NOK</th>
        <th>NIK</th>
        <th>Nama KK</th>
        <th>Nama Anggota</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
      </tr>
    </thead>
    
    <tbody>
    <?php
      if(count($search)>0){
        $no = 1;
        foreach($search as $s){?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $s->nok ?></td>
      <td><?php echo $s->nik ?></td>
      <td><?php echo $s->nama; ?></td>
      <td><?php echo $s->namaA; ?></td>
      <td><?php echo $s->tglah; ?></td>
       <td><?php echo $s->jk; ?></td>
      <td><?php echo $s->kecamatan; ?></td>
      <td><?php echo $s->pendidikan; ?></td>
      <td><?php echo $s->pekerjaan; ?></td>
      
      
    </tr>
      <?php }}else{ ?>
        <tr>
          <td colspan="10" align="center">Tidak Ada Data.</td>
        </tr>
      <?php } ?>
  </tbody>
</table>


</div>







	 