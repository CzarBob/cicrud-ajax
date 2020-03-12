<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeDetail_m extends CI_Model{
	
	public function showAllEmployee(){
		$this->db->order_by('created_at', 'desc');
		$query = $this->db->get('tbl_employees');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function showAllEmployeeDetail(){

		$field = array(
			'employee_name'=>$this->input->post('txtEmployeeName'),
			);
		$employee_name = $this->input->post('searchData');
		
		//echo $employee_name;
		
		/*$sqlTable = "INSERT INTO tbl_employees_detail_temp (EMPLOYEEID, POSITION, DATEHIRED, DATERESIGNED, STATUS, CANCELLED)
		SELECT EMPLOYEEID, POSITION, DATEHIRED, DATERESIGNED, STATUS, CANCELLED FROM tbl_employees_detail
		WHERE EMPLOYEEID = '".$id."' AND CANCELLED ='N' ";*/

		$sqlTable = "SELECT id, employee_name FROM tbl_employees
		WHERE employee_name LIKE '%".$employee_name."%' ";
		//var_dump($sqlTable);

		/*$sqlTable = "SELECT EMPLOYEEID, POSITION, DATEHIRED, DATERESIGNED, STATUS FROM tbl_employees_detail
		WHERE EMPLOYEEID = '".$id."' AND CANCELLED ='N'";
		$this->db->query($sqlTable);*/
		

		$query =$this->db->query($sqlTable);


		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function showAllEmployeeRecord(){

		$field = array(
			'employee_name'=>$this->input->post('txtEmployeeName'),
			);
		$employee_name = $this->input->post('searchData');
		$id = $this->input->get('id');

		$sqlTable = "SELECT ID, POSITION, DATEHIRED, DATERESIGNED, STATUS FROM tbl_employees_detail
		WHERE EMPLOYEEID = '".$id."' AND CANCELLED ='N'";
		//$this->db->query($sqlTable);
		
		//var_dump($sqlTable);
		$query =$this->db->query($sqlTable);


		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function editEmployeeRecord(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_employees');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateEmployeeRecord(){
		//var_dump("tnagungs");
		$id = $this->input->post('txtId');
		$field = array(
		'employee_name'=>$this->input->post('txtEmployeeName'),
		'address'=>$this->input->post('txtAddress'),
		'updated_at'=>date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_employees', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	public function addEmployeeRecord(){
		/*$field = array(
			'employee_name'=>$this->input->post('txtP'),
			'address'=>$this->input->post('txtAddress'),
			'created_at'=>date('Y-m-d H:i:s')
			);
		$this->db->insert('tbl_employees', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}*/




		$field = array(
			'employee_name'=>$this->input->post('txtEmployeeName'),
			);
		$position = $this->input->post('txtPosition');
		$dateHired = $this->input->post('txtDateHired');
		$dateResigned = $this->input->post('txtDateResigned');
		$status = $this->input->post('txtStatus');
		$employeeID = $this->input->post('txtId');
		
		//echo $employee_name;
		
		/*$sqlTable = "INSERT INTO tbl_employees_detail_temp (EMPLOYEEID, POSITION, DATEHIRED, DATERESIGNED, STATUS, CANCELLED)
		SELECT EMPLOYEEID, POSITION, DATEHIRED, DATERESIGNED, STATUS, CANCELLED FROM tbl_employees_detail
		WHERE EMPLOYEEID = '".$id."' AND CANCELLED ='N' ";*/

		/*$sqlTable = "SELECT id, employee_name FROM tbl_employees
		WHERE employee_name LIKE '%".$employee_name."%' ";*/
		$sqlTable = "INSERT INTO tbl_employees_detail (EMPLOYEEID, POSITION, DATEHIRED, DATERESIGNED, STATUS, CANCELLED) VALUES ( '".$employeeID."','".$position."', '".$dateHired."', '".$dateResigned."',  '".$status."', 'N')";

		//$this->db->query($sqlTable);

		$query =$this->db->query($sqlTable);


		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}

	}



	function deleteEmployeeRecord(){
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_employees_detail');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}