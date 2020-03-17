<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class EmployeeRecord extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('employee_m', 'm');
		$this->load->model('EmployeeDetail_m', 'md');
		$this->load->helper('form');
	}

	function index(){
		if ($this->session->userdata('username') != true) {
			redirect(base_url() . 'main/login');  
	 }
		$this->load->view('layout/header');
		$this->load->view('employee/employeeServiceRecord');
		$this->load->view('layout/footer');
	}


	public function showAllEmployee(){
		
		$result = $this->md->showAllEmployee();
		echo json_encode($result);
	}

	public function showAllEmployeeDetail(){
		$result = $this->md->showAllEmployeeDetail();
		echo json_encode($result);
	}


	public function showAllEmployeeRecord(){
		$result = $this->md->showAllEmployeeRecord();
		echo json_encode($result);
	}

	public function addEmployeeRecord(){
		$result = $this->md->addEmployeeRecord();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editEmployee(){
		/*$result = $this->m->editEmployee();
		echo json_encode($result); */

		$this->load->view('layout/header');
		$this->load->view('employee/employeeServiceRecordMain');
		$this->load->view('layout/footer');
	}

	public function updateEmployee(){
		$result = $this->m->updateEmployee();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployeeRecord(){
		$result = $this->md->deleteEmployeeRecord();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}