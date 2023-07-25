 <?php

/******************************************************
* Filename		: Content.class.php
* Programmer	: Rani Anggraini
* Date			: December, 2021
* WInstagram	: @anggraynni_ran
* Deskripsi		: Controller
******************************************************/
	
	class Content extends CI_Controller{
		//variabel public
		//public $model;
		
		//inisialisasi awal untuk class
		public function __construct(){
			parent:: __construct();
			$this->load->model('Model');
			$this->load->helper('url');
			$this->load->helper('download');
		}
		  
		 public function index(){
			if(isset($_SESSION['logged_in'])){
			if($this->session->userdata('granted') == 1){
			//jika user login
			//$data['data_tamu'] = $this->Model_tamu->view();	//load interface login
			$data['title'] = "Data pihak";	//load interface login
			
				
			//$data['data_tamu'] = $this->Model_tamu->viewPage($config['per_page'],$from);
			//$data['data_spot'] = $this->Model_spot->view();
			
			$this->load->view('main/header',$data);
			$this->load->view('main/script');
			$this->load->view('main/navigation');
			$this->load->view('add_file',$data);
			$this->load->view('main/footer');
		
			
			}
			else if($this->session->userdata('granted') == '3'){
				//$data['title'] = "Daftar Tamu";	//load interface login
				//semua data dari tabel data_tamu(mengakses model untuk mendapatkan semua data)
				//$data['data_tamu'] = $this->Model_tamu->satpamView();
				//$data['data_spot'] = $this->Model_spot->view();
				//$this->load->view('main/header',$data);
				//$this->load->view('satpam/dashboard',$data);
			}
		 }else{
			 redirect('Login');
		 }
		 }
		
		
		public function add_data(){
			$data = array();
				// Jika user mengklik tombol submit yang ada di form
				if(isset($_POST['btnAdd'])){
					//$this->form_validation->set_rules('nama', 'nama', 'required|max_length[200]');
					//$this->form_validation->set_rules('noperk', 'noperk', 'required|numeric|max_length[13]|min_length[1]');
					
					//upload file
					$namapihak=addslashes($this->input->post('nama'));
					$noperk=addslashes($this->input->post('noperk'));
					$config['upload_path'] = './file/';
					$config['allowed_types'] = 'pdf|jpg|png|gif|bmp';
					$config['max_size'] = '10000';
					//$config['file_name'] = str_replace('.','-',$namapihak).'_'.$noperk;
					
					$kk;
					$ktp1;
					$ktp2;
					$ace;
					$sptjm;
					$this->load->library('upload', $config);
					if($this->upload->do_upload('kk')){
						$kkdata = $this->upload->data();
						$kk = $kkdata['file_name'];
					}
					
					if(	$this->upload->do_upload('ktp1')){
						$ktpdata = $this->upload->data();
						$ktp1 = $ktpdata['file_name'];
					}
					if(	$this->upload->do_upload('ktp2')){
						$ktpdata = $this->upload->data();
						$ktp2 = $ktpdata['file_name'];
					}
					if(	$this->upload->do_upload('ace')){
						$acedata = $this->upload->data();
						$ace = $acedata['file_name'];
					}
					if(	$this->upload->do_upload('sptjm')){
						$acedata = $this->upload->data();
						$sptjm = $acedata['file_name'];
					}
					$jepe;
					if($this->input->post('noperk1')=="/Pdt.G/"){
						$jepe = 1;
					}else if ($this->input->post('noperk1')=="/Pdt.P/"){
						$jepe = 2;
					}
					
					 if ( ! $this->upload->do_upload('kk') || ! $this->upload->do_upload('ktp1') || ! $this->upload->do_upload('ace')){
						$error = array('error' => $this->upload->display_errors());
						
						if(!empty($_SERVER['HTTP_REFERER'])){
							$this->session->set_flashdata('pesan',$error['error']);
							redirect($_SERVER['HTTP_REFERER']);
						}
					 }else{
						
						 $data_pihak =array(
						 "jenis_perkara"=>$jepe,
						 "pengaju"=>$this->input->post('pihak'),
						 "nama_pihak1" =>$this->input->post('nama1'),
						 "nama_pihak2" =>$this->input->post('nama2'),
						 "alamat_pihak1" =>$this->input->post('alamat1'),
						 "alamat_pihak2" =>$this->input->post('alamat2'),
						 "nomor_perkara"=>$this->input->post('noperk').$this->input->post('noperk1').$this->input->post('noperk2').$this->input->post('noperk3'),
						 "status_anak"=>$this->input->post('status'),
						 "pengambilan"=>$this->input->post('tempat')
						 );
						 
						 $data_upload=array(
							 "nomor_perkara"=>$this->input->post('noperk').$this->input->post('noperk1').$this->input->post('noperk2').$this->input->post('noperk3'),
							 "jenis_pihak"=>$this->input->post('pihak'),
							 "kakel"=>$kk,
							 "ktp_pihak1"=>$ktp1,
							 "ktp_pihak2"=>$ktp2,
							 "user_file"=>$ace,
							 "sptjm"=>$sptjm
							 //"tanggal_upload"=>date
						 );
						 $this->Model->add_pihak($data_pihak);
						 $this->Model->add_file($data_upload);
						 // $this->load->view('main/header',$data);
						 // $this->load->view('dashboard',$data);
						//$this->load->view('main/footer');
						//$this->load->view('main/script');
						redirect("Dashboard");
					 }
				
				}
		}
		
		public function edit($id){
			if(isset($_SESSION['logged_in'])){
				if($this->session->userdata('granted') == 1 || $this->session->userdata('granted')==2){
				$data['data'] = $this->Model->get_pihak_byid($id);
				$data['title'] = "Edit data";
				
			$this->load->view('main/header',$data);
			$this->load->view('navigation',$data);
			$this->load->view('update',$data);
			$this->load->view('main/footer',$data);
			$this->load->view('main/script');
				
				}
			}
		}
		public function update_data($id){
			if(isset($_SESSION['logged_in'])){
			if($this->session->userdata('granted') == 1 || $this->session->userdata('granted')==2){
				if(isset($_POST['btnUdt'])){
					$data_kirim =array(
								
								 "nama_pihak1" =>$this->input->post('nama1'),
								 "nama_pihak2" =>$this->input->post('nama2'),
								 "alamat_pihak1" =>$this->input->post('alamat1'),
								 "alamat_pihak2" =>$this->input->post('alamat2'),
								 "nomor_perkara"=>$this->input->post('noperk'),
								 "pengaju"=>$this->input->post('pihak'),
								 "status_anak"=>$this->input->post('status'),
								 "pengambilan"=>$this->input->post('tempat')
								
								);
					
					$this->Model->update_data($id,$data_kirim);
					redirect('Dashboard');
				}
				}
			}
				
			
		}
		
		public function delete_data($id){
			$this->Model->delete($id); // Panggil fungsi delete() yang ada di Model_tamu.php
			redirect('Dashboard');
		}
		public function details($id){
			if(isset($_SESSION['logged_in'])){
				if($this->session->userdata('granted') == 1 || $this->session->userdata('granted')==2){
				$data['data'] = $this->Model->get_pihak_byid($id);
				$noperk=$this->Model->get_pihak_byid($id);
				
				$data['file'] = $this->Model->get_file_byNoperk($noperk->nomor_perkara);
				$data['title'] = "details";
				
			$this->load->view('main/header',$data);
			$this->load->view('navigation',$data);
			$this->load->view('details',$data);
			$this->load->view('main/footer',$data);
			$this->load->view('main/script');
				
				}
			}
		}
		
	public function linkfile($data){
		// $this->load->view('main/header',$data);
		// $this->load->view('navigation',$data);
		// $this->load->view('pdf_viewer',$data);
		// $this->load->view('main/footer',$data);
		// $this->load->view('main/script');
		$path='file/'.$data;
		force_download($path,NULL);
	}
	
	public function notif(){
		$data['view_data'] = $this->Model->get_all_data();
			//$data['view_data_itsbat'] = $this->Model->get_all_data();
			
						
			$this->load->view('main/header',$data);
			$this->load->view('main/script');
			$this->load->view('c_navigation',$data);
			$this->load->view('dashboard',$data);
			$this->load->view('main/footer');
		
	}
	public function notif1(){
		if(isset($_SESSION['logged_in'])){
		$get=$this->Model->get_data_notif();
		echo json_encode($get);
		}
	}
	public function approve($id){
		$data['data'] = $this->Model->get_pihak_byid($id);
		$noperk=$this->Model->get_pihak_byid($id);
				
				$data['file'] = $this->Model->get_file_byNoperk($noperk->nomor_perkara);
				$data['title'] = "details";
		$this->load->view('main/header',$data);
		//$this->load->view('navigation',$data);
		$this->load->view('main/script');
		$this->load->view('c_navigation',$data);
		$this->load->view('details',$data);
		$this->load->view('main/footer',$data);
	}
		
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
			
		}
		
	}
?>