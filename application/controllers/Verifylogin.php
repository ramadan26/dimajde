<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
	 $this->load->library('Session/session');
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   if($this->form_validation->run() == TRUE)
   {
     //Field validation failed.  User redirected to login page
    redirect('dashboard/targus_slider', 'refresh');
   }
   else
   {
     //Go to private area
      $this->load->view('admin/login_view');
   }

 }

 function check_database($password)
 {
	 //$this->load->model('user');
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   
   
    $this->load->library('encrypt');
   //query the database
   $result = $this->user->login($username, MD5($password));

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>
