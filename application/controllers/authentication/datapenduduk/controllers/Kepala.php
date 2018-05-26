<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kepala extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('P_database'); // Load P_database ke controller ini
	}
	
	public function index(){
		$this->load->library('session');
		
		$data['kepala'] = $this->P_database->view();

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('sidebar');
		
		$this->load->view('kepala/index', $data);
		$this->load->view('footer');
	}
	
	public function tambah(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->P_database->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->P_database->save(); // Panggil fungsi save() yang ada di P_database.php
				redirect('kepala/index');
			}
		}
		
		$this->load->view('kepala/form_tambah');
	}
	
	public function ubah($nok){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
			if($this->P_database->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
				$this->P_database->edit($nok); // Panggil fungsi edit() yang ada di P_database.php
				redirect('kepala');
			}
		}
		
		$data['kepala'] = $this->P_database->view_by($nok);
		$this->load->view('kepala/form_ubah', $data);
	}
	
	public function hapus($nok){
		$this->P_database->delete($nok); // Panggil fungsi delete() yang ada di P_database.php
		redirect('kepala');
	}
}
