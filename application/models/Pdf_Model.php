<?php

class Pdf_Model extends CI_Model{
    public function select_employees(){
        return $this->db->get('employee')->result();
    }
}