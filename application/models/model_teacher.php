<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class model_teacher extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function get_all_teacher(){
		return $this->db->get("teacher")->result();
	}
}
?>