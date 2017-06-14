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

	private function struktur()
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

	private function tatatertib()
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

	private function login()
	{
		$this->template->show('login');
	}
}
