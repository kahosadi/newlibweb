<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}
	
	/*function getUserAccess($user_id, $module, $method){
		$sp = "SELECT ufnCheckScreenAccess(?,?,?) AS is_allowed";
		$result = $this->db->query($sp, array("UserId"=>$user_id, "Class"=>$module, "Method"=>$method))->result_array();
		return $result;
	}*/
	
	function get_parameter($parameter_id = 0){
		$sp = "CALL uspSelParameter(?)";
		$result = $this->db->query($sp, array("parameter_id"=>$parameter_id))->result_array();
		mysqli_next_result($this->db->conn_id);
		return $result;
	}
	
	function get_message_code($message_code_id = 0){
		$sp = "CALL uspSelMessageCode(?)";
		$result = $this->db->query($sp, array("message_code_id"=>$message_code_id))->result_array();
		mysqli_next_result($this->db->conn_id);
		return $result;
	}
	
	/*function authUser($username, $password){
		$sp = "CALL uspSelUserLogin(?,?)";
		$result = $this->db->query($sp, array("UserName"=>$username, "UserPassword"=>$password))->result_array();
		return $result;
	}
	
	function getMenu($role_id, $position, $controller, $method){
		$sp = "CALL uspSelMenu(?,?,?,?)";
		$result = $this->db->query($sp, array("RoleId"=>$role_id, "Position"=>$position, "Class"=>$controller, "Method"=>$method))->result_array();
		return $result;
	}*/
}