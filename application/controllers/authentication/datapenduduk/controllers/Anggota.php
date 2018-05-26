<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('A_database'); // Load A_database ke controller ini
	}
	
	public function index(){
		$this->load->library('session');
		
		$data['anggota'] = $this->A_database->view();

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('sidebar');
				
		$this->load->view('anggota/index', $data);
		$this->load->view('footer');
	}
	
	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->A_database->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->A_database->save(); // Panggil fungsi save() yang ada di A_database.php
				redirect('anggota/index');
			}
		}
		
		$this->load->view('anggota/form_tambah');
	}
	
	public function ubah($nik){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->A_database->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->A_database->edit($nik); // Panggil fungsi edit() yang ada di A_database.php
				redirect('anggota');
			}
		}
		
		$data['anggota'] = $this->A_database->view_by($nik);
		$this->load->view('anggota/form_ubah', $data);
	}
	
	public function hapus($nik){
		$this->A_database->delete($nik); // Panggil fungsi delete() yang ada di A_database.php
		redirect('anggota');
	}

	
}
