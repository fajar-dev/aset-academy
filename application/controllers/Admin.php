<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	function index()
	{
		$data['total_pendaftar'] =  $this->Model_Admin->total_rows('tb_pendaftar');
		$this->load->view('Admin/dashboard', $data);
	}

	function pendaftar()
	{
		$data['pendaftar']= $this->Model_Admin->tampil('tb_pendaftar')->result();
		$this->load->view('Admin/pendaftar',$data);
	}
	
	function hapus($id)
	{
		$where = array('id'=>$id);
		$this->Model_Admin->hapus('tb_pendaftar',$where);
		redirect(base_url('admin/pendaftar'));
	}

}