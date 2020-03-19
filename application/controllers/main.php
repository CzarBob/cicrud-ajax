 <?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller {
     function __construct(){
		parent:: __construct();
          $this->load->library('form_validation');
		
	}
  
      //functions  
      function login()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
        $this->load->library('form_validation');
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
           $this->load->view("login", $data);  
      }  
      function login_validation()  
      {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  

                $this->load->model('main_model'); 
                //var_dump($this->main_model->can_login($username, $password));
                if($this->main_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'main/enter');  
                  
                }  
                else  
                {  

                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'main/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      function enter(){  
           if($this->session->userdata('username') != '')  
           {  
               //redirect(base_url() . 'main/viewHead'); 
               redirect(base_url() . 'Employee/index'); 
              // http://localhost/cicrud-ajax/Employee/index
           }  
           else  
           {  
                redirect(base_url() . 'main/login');  
           }  
      } 

      function viewHead()
      {
          $this->load->library('form_validation');
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
           $this->load->view('header', $data);  
      } 
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'main/login');  
      }  
 }  