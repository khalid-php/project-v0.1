<?php 
class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function register_info($data=array()) {
		return 	$this->db->insert('user_info');
	}
}
?>