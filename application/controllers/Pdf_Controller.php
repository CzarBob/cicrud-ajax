<?php

class Pdf_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf_Library');
        $this->load->model('Pdf_Model');
    }

    public function generate_pdf_report(){
        $data['employees'] = $this->Pdf_Model->select_employees();
        $this->load->view('students_report', $data);
    }
}