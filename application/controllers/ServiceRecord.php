<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ServiceRecord extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('employee_m', 'm');
		$this->load->model('EmployeeDetail_m', 'md');
		$this->load->model('ServiceRecord_m', 'sr');
		$this->load->helper('form');
	}

	function index(){
		if ($this->session->userdata('username') != true) {
			redirect(base_url() . 'main/login');  
	 }
		$this->load->view('layout/header');
		$this->load->view('employee/employeeServiceRecordMain');
		$this->load->view('layout/footer');
	}

	public function editEmployee($id){
		/*$result = $this->m->editEmployee();
		echo json_encode($result); */
		$data['row'] = $this->sr->getData($id);

		//$data['record'] = $this->sr->getEmployeeServiceRecord($id);
		//var_dump($data['record']);
		$this->load->view('layout/header');
		$this->load->view('employee/employeeServiceRecordMain',$data);
		$this->load->view('layout/footer');
	}

	public function showAllEmployeeRecord(){
		$result = $this->sr->getEmployeeServiceRecord();
		echo json_encode($result);
	}

	public function addEmployeeRecord(){
		$result = $this->sr->addEmployeeRecord();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployeeRecord(){
		$result = $this->sr->deleteEmployeeRecord();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}


	public function editEmployeeRecord(){
		$result = $this->sr->editEmployeeRecord();
		echo json_encode($result); 
	}

	public function updateEmployeeRecord(){
		$result = $this->sr->updateEmployeeRecord();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	/*public function ExportToExcelEmployeeRecord($id){
		//var_dump($id);

		require(APPPATH, 'third_party/PHPExcel');
		$result = $this->sr->getEmployeeServiceRecordExcel($id);
		echo json_encode($result);
	
	}*/




}