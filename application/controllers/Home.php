<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Home');
	}

	public function index()
	{
		$this->load->view('home');
	}

  public function daftar()
	{
		$this->load->view('daftar');
	}

	public function tambah()
	{
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$no = $_POST['no'];
		$alamat = $_POST['alamat'];
		$alasan = $_POST['alasan'];
		$tgl = date("Y-m-d H:i:s");
		$data = array(
			'tgl'=>$tgl,
			'nama'=>$nama,
			'email'=>$email,
			'no_hp'=>$no,
			'alamat'=>$alamat,
			'alasan'=>$alasan
			);
		$this->Model_Home->tambah('tb_pendaftar',$data);
		redirect(base_url('sukses'));
	}

	public function sukses()
	{
		$this->load->view('sukses');
	}
}
