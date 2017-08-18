<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	function get_user_access($user_id, $module, $method){
		$sp = "SELECT ufnCheckControllerAccess(?,?,?) AS is_allowed";
		$result = $this->db->query($sp, array("user_id"=>$user_id, "class"=>$module, "method"=>$method))->result_array();
		return $result;
	}

	function get_parameter($parameter_id = 0){
		$sp = "CALL uspSelParameter(?)";
		$result = $this->db->query($sp, array("parameter_id"=>$parameter_id))->result_array();
		return $result;
	}

	function get_message_code($message_code_id = 0){
		$sp = "CALL uspSelMessageCode(?)";
		$result = $this->db->query($sp, array("message_code_id"=>$message_code_id))->result_array();
		return $result;
	}

	function get_role($role_id = 0){
		$sp = "CALL uspSelRole(?)";
		$result = $this->db->query($sp, array("role_id"=>$role_id))->result_array();
		return $result;
	}

	function updins_parameter($parameter_id = 0, $parameter_name, $parameter_type, $parameter_value, $user_name){
		$sp = "CALL uspUpdInsParameter(?,?,?,?,?)";
		$result = $this->db->query($sp, array("parameter_id"=>$parameter_id, "parameter_name"=>$parameter_name, "parameter_type"=>$parameter_type, "parameter_value"=>$parameter_value, "created_by"=>$user_name))->result_array();
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
