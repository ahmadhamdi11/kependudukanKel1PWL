<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A_database extends CI_Model {
	public function __construct() {
        parent::__construct();
  }


	// Fungsi untuk menampilkan semua data 
	public function view(){
		return $this->db->get('anggota')->result();
	}
	
	// Fungsi untuk menampilkan data    nya
	public function view_by($nik){
		$this->db->where('nik', $nik);
		return $this->db->get('anggota')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		
		
		if($mode == "save")
		
		$this->form_validation->set_rules('nok', 'NOK', 'required|max_length[10]');
		$this->form_validation->set_rules('nik', 'NIK', 'required|max_length[10]');
		
		$this->form_validation->set_rules('namaA', 'namaA', 'required|max_length[50]');
		$this->form_validation->set_rules('jk', 'JK', 'required');
				
		$this->form_validation->set_rules('telah', 'TeLah', 'required');
		$this->form_validation->set_rules('tglah', 'Tglah', 'required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan data ke tabel 
	public function save(){
		$data = array(
			"nok" => $this->input->post('nok'),
			"nik" => $this->input->post('nik'),
			"namaA" => $this->input->post('namaA'),
			"jk" => $this->input->post('jk'),
			"telah" => $this->input->post('telah'),
			"tglah" => $this->input->post('tglah'),
			"pendidikan" => $this->input->post('pendidikan'),
			"pekerjaan" => $this->input->post('pekerjaan')
		);
		
		$this->db->insert('anggota', $data); // Untuk mengeksekusi perintah insert data
	}
	
	// Fungsi untuk melakukan ubah data    
	public function edit($nik){
		$data = array(
			"nok" => $this->input->post('nok'),
			"nik" => $this->input->post('nik'),
			"namaA" => $this->input->post('namaA'),
			"jk" => $this->input->post('jk'),
			"telah" => $this->input->post('telah'),
			"tglah" => $this->input->post('tglah'),
			"pendidikan" => $this->input->post('pendidikan'),
			"pekerjaan" => $this->input->post('pekerjaan')
		);
		
		$this->db->where('nik', $nik);
		$this->db->update('anggota', $data); // Untuk mengeksekusi perintah update data
	}
	
	// Fungsi untuk melakukan menghapus data    
	public function delete($nik){
		$this->db->where('nik', $nik);
		$this->db->delete('anggota'); // Untuk mengeksekusi perintah delete data
	}

	public function tampil_penduduk() {
		 // 	$this->db->select('*');    
			// $this->db->from('anggota');
			// $this->db->join('kepala', 'kepala.nok = anggota.nok');
			
			$query = $this->db->select('SELECT * FROM kepala INNER JOIN anggota ON kepala.nok = anggota.nok  ');

			$query = $this->db->get();
		 return $query->result();
		}
	



}
