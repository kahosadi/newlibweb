<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
	private $CI;
	private $template;
	function __construct(){
		$this->CI =& get_instance();
		$this->template = $this->CI->session->userdata['userinfo']['template'];
	}
	
	private function load($view, $data){
		$this->CI->load->view("templates/{$this->template}/{$view}", $data);
	}
	
	function template($is_secure, $data = array('header','body','footer')){
		$header = "";
		$body = "";
		$footer = "";
		
		if($is_secure){
			
		}else{
		
		}
		
		$this->template->load($header, $data['header']);	
		$this->template->load($body, $data['body']);
		$this->template->load($footer, $data['footer']);
	}
	
	/*private function login($data)
	{
		$this->CI->load->view("templates/{$this->template}/login", $data);
	}
	
	private function header()
	{
	}
	
	private function main()
	{
	}
	
	private function footer()
	{
	}
		
	private function headerSecure()
	{
		$data_head['site_name'] = parameter_display(1);
		$data_head['menu'] = $this->CI->system_model->getMenu($this->CI->session->userdata('userinfo')['userrole'], 'side', $this->CI->router->fetch_class(), $this->CI->router->fetch_method());
		$this->CI->load->view("templates/{$this->template}/header_secure", $data_head);
	}
	
	private function mainSecure($view, $data)
	{
		$this->CI->load->view("templates/{$this->template}/{$view}", $data);
	}
	
	private function footerSecure()
	{
		$this->CI->load->view("templates/{$this->template}/footer_secure", array());
	}
	
	function templateLogin($params)
	{
		$this->login($params);
	}
	
	function templateMain($mainView, $paramMain)
	{
		$this->headerSecure();
		$this->mainSecure($mainView, $paramMain);
		$this->footerSecure();
	}*/
}