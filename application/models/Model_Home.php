<?php
class Model_Home extends CI_Model
{
	function tambah($table,$data){
		$this->db->insert($table,$data);
	}
	
}