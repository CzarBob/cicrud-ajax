<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends CI_Controller{
	function __construct(){
		parent:: __construct();
		/*$this->load->model('employee_m', 'm');
		$this->load->model('employee_m', 'm');*/
		
	}

	function index(){
		/*if ($this->session->userdata('username') != true) {
       		  redirect(base_url() . 'main/login');  
      	}*/
		$this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
		//$this->load->view('layout/footer');
	}

	

}