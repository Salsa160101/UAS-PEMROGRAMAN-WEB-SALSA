<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home | Tour And Travel';
		$this->load->view('template/header',$data);
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function service()
	{
		$data['title'] = 'Service | Tour And Travel';
		$this->load->view('template/header',$data);
		$this->load->view('service');
		$this->load->view('template/footer');
	}

	public function price()
	{
		$data['title'] = 'Price | Tour And Travel';
		$this->load->view('template/header',$data);
		$this->load->view('price');
		$this->load->view('template/footer');
	}

	public function contact()
	{
		$data['title'] = 'Contact | Tour And Travel';
		$this->load->view('template/header',$data);
		$this->load->view('contact');
		$this->load->view('template/footer');
	}
}