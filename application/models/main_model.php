<?php  
 class Main_model extends CI_Model  
 {  
      function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  


          $sqlTable = "SELECT * FROM users
              WHERE username = '".$username."' AND password ='".$password."'";
              //$this->db->query($sqlTable);
              
              //var_dump($sqlTable);
              $query =$this->db->query($sqlTable);


              if($query->num_rows() > 0){
                return $query->result();
              }else{
                return false;
              }



          /* if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  */
      }  
 }  