<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class M_cari extends CI_Model
{
	 public function __construct() {
        parent::__construct();
 	}

 	public function data(){
     $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('anggota'); //dari tabel data_users
    $this->db->join('kepala', 'kepala.nok = anggota.nok'); //menyatukan tabel users menggunakan left join
    $this->db->order_by('nama', 'ASC');
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); 
  }



  public function cari($keyword){
   $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('anggota'); //dari tabel data_users
    $this->db->join('kepala', 'kepala.nok = anggota.nok' ); //menyatukan tabel users menggunakan left join
    
     $this->db->like('nama', $keyword)->or_like('namaA', $keyword)->or_like('nik', $keyword)->or_like('kecamatan', $keyword);
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); 
  }
}