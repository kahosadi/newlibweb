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
    var $CI, $url_segment;
    function __construct(){
        $this->CI =& get_instance();
        $this->url_segment = strtolower($this->CI->router->fetch_class().'|'.$this->CI->router->fetch_method());
    }

    function do_filter(){
		if(!$this->is_allowed()){
            redirect('pages/index', 'refresh');
            //show_404('/'.str_replace('|','/',$this->url_segment),FALSE);
        }
    }

    function is_allowed(){
		
		foreach($this->CI->session->userdata['site_page'] as $value){
            if($this->url_segment == $value['ClassMethod']){
                return true;
            }
        }
        return false;
    }
}
/* End of file Filter.php */
/* Location: ./application/hooks/Filter.php */
