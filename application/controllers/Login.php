<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Model');
		$this->load->library('session');
	}
	
	public function index(){
		$data['title']="Login";
		$this->load->view('main/header', $data);
		$this->load->view('main/login');
		$this->load->view('main/footer');
	}
	public function proses_login(){
		if(isset($_POST['loginBtn'])){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//validasi form
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		
		//jalankan validasi
		
		if($this->form_validation->run()== FALSE){
			$this->session->set_flashdata('pesan','username dan Password masih kosong');
			redirect('Login');
		}else{
			$cekUsername = $this->Model->cekUsername($username);
			if($cekUsername->num_rows() == 1){
				$cek = $this->Model->cekAll($username,$password);
				if($cek->num_rows() == 1){
					foreach($cek->result() as $data){
						$sess_data['logged_in'] = TRUE;
						$sess_data['id'] = $data->id_user;
						$sess_data['granted'] = $data->id_group_fk;
						$sess_data['username'] = $data->username;
						$this->session->set_userdata($sess_data);
					}
					if(isset($_SESSION['logged_in'])){
						
							redirect('C_controller');
						
					}
				}else{
					$this->session->set_flashdata('pesan',' Maaf, Password yang anda masukkan salah');
					redirect('Login');
				}
			}else
			{
				$this->session->set_flashdata('pesan', 'Maaf, username tidak ditemukan.');
				redirect('Login');
			}
		}
		}else{
			redirect('Login');
		}
	}
	
	function logout()
	{
		
		//$this->Model_tamu->last_Access($this->session->userdata('id')); 
		//$this->session->unset_userdata('username');
		//$this->session->unset_userdata('granted');
		$this->session->sess_destroy();
		redirect('Login');
	}
	
	function __destruct(){
		
	}

}
?>
