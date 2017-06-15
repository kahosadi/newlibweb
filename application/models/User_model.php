<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	function auth_user($username, $password){
		$sp = "CALL uspSelUserLogin(?,?)";
		$result = $this->db->query($sp, array("user_name"=>$username, "user_password"=>$password))->result_array();
		return $result;
	}
}
