<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('parameter_display')){
	function parameter_display($id = 1){
		$CI =& get_instance();

		foreach($CI->session->userdata['site_parameter'] as $param){
			if($param['id'] == $id){
				switch($param['parameter_type'])
				{
					case 'INTEGER'	: return intval($param['parameter_value']); break;
					case 'STRING'	: return (string)$param['parameter_value']; break;
					case 'DATE'	: return date('d-m-Y H:i:s', strtotime($param['parameter_value'])); break;
					default : return $param['value']; break;
				}
			}
		}
	}
}
