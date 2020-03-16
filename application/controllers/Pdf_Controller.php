<?php

class Pdf_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf_Library');
    }

    public function generate_pdf_report(){
        $this->load->view('students_report');
    }
}