<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filter
 *
 * @author nelfrits
 */
class Filter {
    //put your code here
    private $module;
	  private $method;
	  private $user_data;

    function __construct(){
        $this->CI =& get_instance();

        $this->module = strtolower($this->CI->router->fetch_class());
        $this->method = strtolower($this->CI->router->fetch_method());
		    $this->user_data = $this->CI->session->userdata('userinfo');
    }

    function do_filter(){
		if(!$this->is_allowed()){
            redirect('/', 'refresh');
            //show_404('/'.str_replace('|','/',$this->url_segment),FALSE);
        }
    }

    function is_allowed(){
      $is_allowed = $this->CI->system_model->get_user_access($this->user_data['userid'], $this->module, $this->method);
      if($is_allowed[0]['is_allowed'] || $this->CI->router->fetch_method() == 'logout'){
        return true;
      }else{
        return false;
      }
    }
}
/* End of file Filter.php */
/* Location: ./application/hooks/Filter.php */
