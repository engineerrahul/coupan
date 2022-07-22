<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
    class Login_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function can_login($user, $password)
        {
         $this->db->where('username', $user);
         $query = $this->db->get('users');
         if($query->num_rows() > 0)
         {
          foreach($query->result() as $row)
          {
           
            $store_password = $row->password;
            if($password == $store_password)
            {
             $this->session->set_userdata('id', $row->id);
            }
            else
            {
             return 'Wrong Password';
            }
           
           
          }
         }
         else
         {
          return 'Wrong Email Address';
         }
        }
    
}

?>