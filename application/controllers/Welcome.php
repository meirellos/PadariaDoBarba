<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->template->load('templates/admintemp', 'welcome_message');
		$this->template->load('index/product', 'welcome_message');
	}
	/*public function admin()
	{
		//$this->load->view('welcome_message');
		$this->template->load('templates/admintemp', 'welcome_message');
		//$this->template->load('index/product', 'welcome_message');
	}*/
}
