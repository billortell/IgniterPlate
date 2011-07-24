<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'	=> 'Welcome to CodeIgniter HTML5 Boilerplate',
			'main_content'	=> 'home'
		);
		$this->load->view('template', $data);
	}
}