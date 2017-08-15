<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function show($action = '', $page = 1){
		//$action cek isi db kalau ada action yang bernama sama
		//jika ada load dari db, klo ga ada not found
		if($action == ''){
			$this->template->show(
				array(
					'carousel',
					'body'
				),
				array(
					'header'=>array('Header','Header2'),
					'body'=>array('Body'),
					'footer'=>array('Footer')
				)
			);
		}else{

		}
	}

	public function index()
	{
		$this->template->show(
			array(
				'carousel',
				'body'
			),
			array(
				'header'=>array('Header','Header2'),
				'body'=>array('Body'),
				'footer'=>array('Footer')
			)
		);
	}

	private function sejarah()
	{
		$this->template->show(
			array(
				'history'
			),
			array(
				'header'=>array('Header','Header2'),
				'body'=>array('Body'),
				'footer'=>array('Footer')
			)
		);
	}

	private function visi()
	{
		$this->template->show(
			array(
				'vision'
			),
			array(
				'header'=>array('Header','Header2'),
				'body'=>array('Body'),
				'footer'=>array('Footer')
			)
		);
	}

	public function struktur()
	{
		$this->template->show(
			array(
				'structure'
			),
			array(
				'header'=>array('Header','Header2'),
				'body'=>array('Body'),
				'footer'=>array('Footer')
			)
		);
	}

	public function tatatertib()
	{
		$this->template->show(
			array(
				'rule'
			),
			array(
				'header'=>array('Header','Header2'),
				'body'=>array('Body'),
				'footer'=>array('Footer')
			)
		);
	}

	public function test(){
		$this->template->show(
			array(
				'test'
			),
			array(
				'header'=>array('Header','Header2'),
				'body'=>array('Body'),
				'footer'=>array('Footer')

			)
		);
	}

	public function login($action = '')
	{
		$data['message'] = $this->session->flashdata('message');

		switch($action){
			case 'auth'	: $submit = $this->input->post('btnlogin');
										if(isset($submit)){
											$username = $this->input->post('username');
											$password = $this->input->post('password');

											if(isset($username) && isset($password)){
												$user_detail = $this->user_model->auth_user($username, sha1($password));

												if(!empty($user_detail)){
													if($user_detail[0]['is_enabled'] != 0){
														$user_info = array(
															"userid" => $user_detail[0]['id'],
															"username" => $user_detail[0]['user_name'],
															"fullname" => $user_detail[0]['full_name'],
															"email" => $user_detail[0]['email'],
															"phone" => $user_detail[0]['phone'],
															"template" => "default"
														);

														$this->session->set_userdata('userinfo', $user_info);
														redirect(parameter_display(3));
													}else{
															$message = message_display(3, 'Administrator Sistem');
															$this->session->set_flashdata('message',$message);
															redirect(parameter_display(2));
													}
												}else{
													$message = message_display(2, '');
													$this->session->set_flashdata('message',$message);
													redirect(parameter_display(2));
												}
											}
										}

										break;
		}

		$this->template->show('login', $data);
	}

	public function admin($method = "index"){
		switch($method){
			case "index" : $this->template->show(
											array(
												'index'
											),
											array(
												'header'=>array('Header','Header2'),
												'body'=>array('Body'),
												'footer'=>array('Footer')

											)
			); break;
			case "parameter" :
											$parameter = $this->system_model->get_parameter(0);
											$this->template->show(
											array(
												'parameter'
											),
											array(
												'header'=>array('Header','Header2'),
												'body'=>array($parameter),
												'footer'=>array('Footer')
											)
			); break;
			case "messagecode" :
											$messagecode = $this->system_model->get_message_code(0);
											$this->template->show(
											array(
												'messagecode'
											),
											array(
												'header'=>array('Header','Header2'),
												'body'=>array($messagecode),
												'footer'=>array('Footer')
											)
			); break;
			case "role" :
											$role = $this->system_model->get_role(0);
											$this->template->show(
											array(
												'role'
											),
											array(
												'header'=>array('Header','Header2'),
												'body'=>array($role),
												'footer'=>array('Footer')
											)
			); break;
			default			 : break;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}
