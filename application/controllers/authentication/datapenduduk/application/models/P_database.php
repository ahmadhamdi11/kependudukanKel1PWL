<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class P_database extends CI_Model {
	// Fungsi untuk menampilkan semua data siswa
	public function view(){
		return $this->db->get('kepala')->result();
	}
	
	// Fungsi untuk menampilkan data siswa berdasarkan NIS nya
	public function view_by($nok){
		$this->db->where('nok', $nok);
		return $this->db->get('kepala')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		
		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
		
		$this->form_validation->set_rules('nok', 'NOK', 'required|max_length[10]');
			
		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('kpos', 'Kode Pos', 'required|numeric|max_length[5]');
		
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'required');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"nok" => $this->input->post('nok'),
			
			"nama" => $this->input->post('nama'),
			"alamat" => $this->input->post('alamat'),
			"kpos" => $this->input->post('kpos'),
			
			"kecamatan" => $this->input->post('kecamatan'),
			"kabupaten" => $this->input->post('kabupaten'),
			"provinsi" => $this->input->post('provinsi')
		);
		
		$this->db->insert('kepala', $data); // Untuk mengeksekusi perintah insert data
	}
	
	// Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
	public function edit($nok){
		$data = array(
			"nok" => $this->input->post('nok'),
			
			"nama" => $this->input->post('nama'),
			"alamat" => $this->input->post('alamat'),
			"kpos" => $this->input->post('kpos'),
			
			"kecamatan" => $this->input->post('kecamatan'),
			"kabupaten" => $this->input->post('kabupaten'),
			"provinsi" => $this->input->post('provinsi')
		);
		
		$this->db->where('nok', $nok);
		$this->db->update('kepala', $data); // Untuk mengeksekusi perintah update data
	}
	
	// Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
	public function delete($nok){
		$this->db->where('nok', $nok);
		$this->db->delete('kepala'); // Untuk mengeksekusi perintah delete data
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
