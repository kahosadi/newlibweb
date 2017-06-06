<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
	private $CI;
	private $template_path;
	private $layer;
	private $css;
	private $js;

	function __construct(){
		$this->CI =& get_instance();
	}

	private function init(){
		//check if template folder exist
		$template_path = 'templates/'.$this->CI->session->userdata['userinfo']['template'];
		if(file_exists(APPPATH.'views/'.$template_path)){
			$this->template_path = $template_path;
			$this->css = base_url().'assets/'.$this->template_path.'/css/style.css';
			$this->js = base_url().'assets/'.$this->template_path.'/js/app.js';
			$this->layer = 'front';

			if($this->CI->session->userdata['userinfo']['userid'] != 0){
				$this->layer = 'back';
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

		$this->init();
		$target_template = $this->template_path.'/'.$this->layer;

		//header
		$data_header['var'] = $data['header'];
		$data_header['css'] = $this->css;
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

		$data_footer['js'] = $this->js;
		$this->CI->load->view($target_template.'/footer', $data_footer);
	}
}
