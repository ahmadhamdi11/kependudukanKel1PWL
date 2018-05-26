<?php
class M_data extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function tampil(){
    $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('anggota'); //dari tabel data_users
    $this->db->join('kepala', 'kepala.nok = anggota.nok', 'left'); //menyatukan tabel users menggunakan left join
    $this->db->order_by('nama', 'ASC');
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
  }


  




}
?>