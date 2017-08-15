<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('message_display')){
	function message_display($id = 1, $replacement_text){
		$CI =& get_instance();
		$message_code = $CI->system_model->get_message_code($id)[0]['message;;type'];

		if(is_array($replacement_text)){
			$idx = 0;
			foreach($replacement_text as $rplt){
				$message_code = str_replace("{{$idx}}", $rplt, $message_code);
				$idx++;
			}

			return $message_code;
		}

		return str_replace("{0}", $replacement_text, $message_code);
	}
}

if(!function_exists('message_display_panel')){
	function message_display_panel($message){
		if(!isset($message)){
			return;
		}

		$message = explode(MESSAGE_CODE_DELIMITER, $message);

		$message_class = "";
		$type = strtolower($message[1]);
		switch($type)
		{
			case 'error' : $message_class = "alert alert-danger alert-dismissable fade show"; break;
			case 'warning' : $message_class = "alert alert-warning alert-dismissable fade show"; break;
			case 'confirmation' : $message_class = "alert alert-success alert-dismissable fade show"; break;
			case 'info' : $message_class = "alert alert-info alert-dismissable fade show"; break;
			default : break;
		}

		$html = "<br /><div class='".$message_class."'>";
		$html .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">";
		$html .= "<span aria-hidden=\"true\">&times;</span>";
		$html .= "</button>";
		//$html .= "<a href=\"#\" class=\"close\" data-dismis=\"alert\" aria-hidden=\"true\">&times;</a>";
		$html .= "{$message[0]}";
		$html .= "</div>";

		echo (!empty($message)) ? $html : "";
	}
}
