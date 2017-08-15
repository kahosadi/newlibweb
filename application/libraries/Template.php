<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
	private $CI;
	private $template_path;
	private $css;
	private $js;
	private $images;
	private $layer;

	function __construct(){
		$this->CI =& get_instance();
	}

	private function init(){
		//check if template folder exist
		$template_path = '';
		if(strtolower($this->CI->router->fetch_method()) == "admin"){
			$this->layer = 'admin';
		}else{
			$template_path = 'templates/'.$this->CI->session->userdata['userinfo']['template'];
		}

		if(file_exists(APPPATH.'views/'.$template_path)){
			$this->template_path = $template_path;
			$this->css = base_url().'assets/'.$this->template_path.'/css/style.css';
			$this->js = base_url().'assets/'.$this->template_path.'/js/app.js';
			$this->images = base_url().'assets/images/';
			$this->layer = '';

			if(strtolower($this->CI->router->fetch_method()) == "admin"){
				$this->layer = 'admin';
			}

		}else{
			show_error('Unable to load the requested file');
		}
	}

	function show($view,
		$data = array(
							'header'=>array(),
							'body'=>array(),
							'footer'=>array()
		)
	){

		if($view == 'login'){
			$this->CI->load->view('login',$data);
			return;
		}

		$this->init();
		$target_template = $this->template_path.'/'.$this->layer;

		//header
		$data_header['var'] = $data['header'];
		$data_header['css'] = $this->css;
		$data_header['logo'] = $this->images.'WebLogo.png';
		$data_header['logoXS'] = $this->images.'WebLogoXS.png';
		$this->CI->load->view($target_template.'/header', $data_header);

		//body
		$data_body['var'] = null;
		if(is_array($view)){
			$index = 0;
			for($index=0;$index<count($view);$index++){
				if(isset($data['body'][$index])){
					$data_body['var'] = $data['body'][$index];
				}
				$this->CI->load->view($target_template."/{$view[$index]}", $data_body);
				$data_body['var'] = null; //reset
			}
		}else{
			if(isset($data['body'])){
				$data_body['var'] = $data['body'];
			}

			$this->CI->load->view($target_template."/{$view}", $data_body);
		}

		//footer
		$data_footer['var'] = null;
		if(isset($data['footer'])){
			$data_footer['var'] = $data['footer'];
		}

		/*For admin only use 'js' as array key*/
		if(array_key_exists('js',$data_footer['var'])){
			$this->js = $data_footer['var']['js'];
		}

		$data_footer['js'] = $this->js;
		$this->CI->load->view($target_template.'/footer', $data_footer);
	}
}
