<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_aplikasi extends CI_Model {

	public function insert_data($tablename, $data){
		return $this->db->insert($tablename, $data);
	}
}