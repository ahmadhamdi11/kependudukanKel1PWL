  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   		<table>
  <tr>
    <th>No.</th>
    <th>NOK</th>
    <th>Nama kepala Keluarga</th>
    <th>Nama Anggota Keluarga</th> 
    <th>alamat</th>      
  </tr>
  <?php 
  $no=1; 
  foreach ($penduduk as $row) { ?>
  <tr>
  <td><?php echo $no++;?></td>
  <td><?php echo $row->nok;?></td>
  
  <td><?php echo $row->nama;?></td>
   <td><?php echo $row->namaA;?></td>
    <td><?php echo $row->alamat;?></td>
  </tr>
    <?php } ?>
    
</table>
  </div>