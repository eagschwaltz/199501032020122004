 <?php

/******************************************************
* Filename		: C_controller.class.php
* Programmer	: Rani Anggraini
* Date			: December, 2021
* WInstagram	: @anggraynni_ran
* Deskripsi		: Controller
******************************************************/
	
	class Maincontrol extends CI_Controller{
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
			$json_urla = 'http://103.226.55.159/json/data_rekrutmen.json';
			// Fetch the JSON data using cURL or any other method of your choice
			$json_data = $this->getJsonData($json_urla);
			if ($json_data) {
				
				$data['view_data'] = json_decode($json_data);
				
				$this->load->view('main/header',$data);
				$this->load->view('main/script');
				$this->load->view('main/navigation',$data);
				$this->load->view('main/dashboard',$data);
				$this->load->view('main/footer');
				
			} else {
				// Handle error if unable to fetch JSON data
				$this->load->view('error_page');
			}
		 }
		 
		public function viewdata(){
			$json_urla = 'http://103.226.55.159/json/data_rekrutmen.json';
			// Fetch the JSON data using cURL or any other method of your choice
			$json_data = $this->getJsonData($json_urla);
			if ($json_data) {
				
				$data['view_data'] = json_decode($json_data);
				$this->load->view('main/header',$data);
				$this->load->view('main/script');
				$this->load->view('main/navigation',$data);
				$this->load->view('main/dashboard',$data);
				$this->load->view('main/footer');
				
			} else {
				// Handle error if unable to fetch JSON data
				$this->load->view('error_page');
			}
		}
		
		private function getJsonData($url) {
			$ch = curl_init();

			// Set cURL options
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			// Execute cURL session and fetch JSON data
			$json_data = curl_exec($ch);

			// Close cURL session
			curl_close($ch);

			return $json_data;
		}
		
		public function details($id){

			$json_urla = 'http://103.226.55.159/json/data_rekrutmen.json';
			$json_urlb = 'http://103.226.55.159/json/data_attribut.json';
			// Fetch the JSON data using cURL or any other method of your choice
			$json_data1 = $this->getJsonData($json_urla);
			$json_data2 = $this->getJsonData($json_urla);
			
			
			$data['title'] = "details";
			$datajson= json_decode($json_data2);
			$vd=array();
			// if ($json_data2) {
				// foreach($datajson as $value){
					// if($value->id_pendaftar==$id){
						// $data['rekrut']= $value;
					// }
				// }
			// }
			//$data['rekrut'] =$vd;
			$atr = json_decode($json_data2);
			$vdr=array();
			foreach($atr as $key=>$val){
				if($val->id_pendaftar==$id){
					$vdr=$val;
				}
			}
			$data['view_data']=$vdr;
			
			$this->load->view('main/header',$data);
			$this->load->view('main/script');
			$this->load->view('main/navigation',$data);
			$this->load->view('act_page/details',$data);
			$this->load->view('main/footer',$data);	
		}
	

		
	//funsi untuk mendownload file data
	public function linkfile($data){
		// $this->load->view('main/header',$data);
		// $this->load->view('navigation',$data);
		// $this->load->view('pdf_viewer',$data);
		// $this->load->view('main/footer',$data);
		// $this->load->view('main/script');
		$path='file/'.$data;
		//force_download($path,NULL);
		$this->output
			->set_content_type('application/pdf')
			->set_output(file_get_contents($path));
	}
		
	
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		
		}
		
	}
?>