<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	/*-----------------login function---------------------------------*/
	//cek ketersedian user berdasarkan username(id)
	function cekUsername($username){
		
		$this->db->where('Username', $username);
		return $this->db->get('user');
	}
	//cek kecocokan username dan password
	function cekAll($username, $password){
		
		$this->db->where('Username', $username);
		$this->db->where('Password', $password);
		return $this->db->get('user');
	}
	
	function get_user($id){
		$this->db->select('user.id_user, user.username, instansi.id_instansi, instansi.nama_instansi, instansi.alamat_instansi, instansi.logo');
		$this->db->from('user');
		$this->db->join('instansi','user.instansi = instansi.id_instansi');
		$this->db->where('id_user', $id);
		return $this->db->get()->row();
	}
	
	function get_all_user(){
		$this->db->select('user.id_user, user.id_group_fk, user.instansi, user.username, instansi.id_instansi, instansi.nama_instansi, instansi.alamat_instansi, instansi.logo');
		$this->db->from('user');
		$this->db->join('instansi','user.instansi = instansi.id_instansi');
		
		return $this->db->get()->result();
	}
	
	function update_user($id,$data){
		
		$this->db->where('id_user',$id);
		$this->db->update('user',$data);
	}
	function delete_user($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
	function get_instansi(){
		$this->db->select('*');
		$this->db->from('instansi');
		return $this->db->get()->result();
	}
	
	function add_instansi($data){
		if(!empty($data)){
			$this->db->insert('instansi',$data);
		}else{
			echo "data kosong";
		}
	}
	
	
	/*------------------data function------------------------*/
	function get_all_data(){
		$this->db->select('pihak.id_pihak, pihak.nama_pihak1, pihak.alamat_pihak1, pihak.nama_pihak2, pihak.alamat_pihak2, pihak.nomor_perkara, pihak.status_anak, pihak.jenis_perkara, file_data.approve_status');
		$this->db->from('pihak');
		$this->db->join('file_data','pihak.nomor_perkara = file_data.nomor_perkara');
		$query=$this->db->get();
		//$query = $this->db->query("select pihak.nama_pihak, pihak.nomor_perkara, pihak.status_anak, pihak.id_jenis_pkr_fk, file_data.approve_status from pihak join file_data on pihak.nomor_perkara=file_data.id_nomor_perkara_fk");
		return $query->result();
		
	}
	function get_all_byIdPihak($id){
		$this->db->select('pihak.id_pihak,file_data.id_file, file_data.approve_status, file_data.kakel, file_data.ktp_pihak1, file_data.ktp_pihak2, file_data.user_file, file_data.sptjm');
		$this->db->from('pihak');
		$this->db->join('file_data','pihak.nomor_perkara = file_data.nomor_perkara');
		$this->db->where('id_pihak',$id);
		$query=$this->db->get();
		//$query = $this->db->query("select pihak.nama_pihak, pihak.nomor_perkara, pihak.status_anak, pihak.id_jenis_pkr_fk, file_data.approve_status from pihak join file_data on pihak.nomor_perkara=file_data.id_nomor_perkara_fk");
		return $query->row();
		
	}
	
	/*------------------get pihak----------------------------*/
	function get_pihak(){
		return $this->db->get('pihak')->result();
	}
	
	function get_pihak_byid($id){
		$this->db->where('id_pihak',$id);
		return $this->db->get('pihak')->row();
	}
		
	function add_pihak($data){
		if(!empty($data)){
			$this->db->insert('pihak',$data);
		}else{
			echo "data kosong";
		}
	}
	function delete($id){
		$this->db->where('id_pihak', $id);
		$this->db->delete('pihak');
	}
	
	function get_file_byNoperk($noperk){
		$this->db->where('nomor_perkara',$noperk);
		return $this->db->get('file_data')->row();
	}
	
	function add_file($data){
		if(!empty($data)){
			$this->db->insert('file_data',$data);
		}else{
			echo "data kosong";
		}
	}
	
	function update_data($id,$data){
		
		$this->db->where('id_pihak',$id);
		$this->db->update('pihak',$data);
	}
	
	function update_data_file($id,$data){
		$this->db->where('id_file',$id);
		$this->db->update('file_data',$data);
	}
	function update_data_filebyNoperk($noperk,$data){
		$this->db->where('nomor_perkara',$noperk);
		$this->db->update('file_data',$data);
	}
	
	function update_read_status($noperk,$stat){
		$this->db->set('approve_status',$stat);
		$this->db->where('nomor_perkara',$noperk);
		$this->db->update('file_data');
	}
	
	function get_data_notif(){
		$this->db->select('pihak.id_pihak, pihak.nama_pihak1, pihak.nama_pihak2,pihak.alamat_pihak1, pihak.alamat_pihak2,pihak.nomor_perkara, pihak.status_anak, pihak.jenis_perkara,file_data.id_file, file_data.kakel, file_data.ktp_pihak1,file_data.ktp_pihak2,file_data.user_file,file_data.sptjm, file_data.approve_status, file_data.tanggal_approve,file_data.tanggal_upload');
		$this->db->from('pihak');
		$this->db->join('file_data','pihak.nomor_perkara = file_data.nomor_perkara');
		$this->db->where('file_data.approve_status',1);
		$query=$this->db->get();
		//$query = $this->db->query("select pihak.nama_pihak, pihak.nomor_perkara, pihak.status_anak, pihak.id_jenis_pkr_fk, file_data.approve_status from pihak join file_data on pihak.nomor_perkara=file_data.id_nomor_perkara_fk");
		return $query->result();
		
	}
	function get_data_notif2(){
		$this->db->select('pihak.id_pihak, pihak.nama_pihak1, pihak.nama_pihak2,pihak.alamat_pihak1, pihak.alamat_pihak2,pihak.nomor_perkara, pihak.status_anak, pihak.jenis_perkara,file_data.id_file, file_data.kakel, file_data.ktp_pihak1,file_data.ktp_pihak2,file_data.user_file,file_data.sptjm, file_data.approve_status');
		$this->db->from('pihak');
		$this->db->join('file_data','pihak.nomor_perkara = file_data.nomor_perkara');
		$this->db->where('file_data.approve_status',4);
		$query=$this->db->get();
		//$query = $this->db->query("select pihak.nama_pihak, pihak.nomor_perkara, pihak.status_anak, pihak.id_jenis_pkr_fk, file_data.approve_status from pihak join file_data on pihak.nomor_perkara=file_data.id_nomor_perkara_fk");
		return $query->result();
		
	}
	function get_data_notif3(){
		$this->db->select('pihak.id_pihak, pihak.nama_pihak1, pihak.nama_pihak2,pihak.alamat_pihak1, pihak.alamat_pihak2,pihak.nomor_perkara, pihak.status_anak, pihak.jenis_perkara,file_data.id_file, file_data.kakel, file_data.ktp_pihak1,file_data.ktp_pihak2,file_data.user_file,file_data.sptjm, file_data.approve_status, file_data.tanggal_approve,file_data.tanggal_upload');
		$this->db->from('pihak');
		$this->db->join('file_data','pihak.nomor_perkara = file_data.nomor_perkara');
		$this->db->where('file_data.approve_status',2);
		$query=$this->db->get();
		//$query = $this->db->query("select pihak.nama_pihak, pihak.nomor_perkara, pihak.status_anak, pihak.id_jenis_pkr_fk, file_data.approve_status from pihak join file_data on pihak.nomor_perkara=file_data.id_nomor_perkara_fk");
		return $query->result();
		
	}
	
	
	
	
	
}
?>