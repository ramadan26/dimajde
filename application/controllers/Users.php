<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Users extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   
   $this->load->database();
	$this->load->helper('url');
		
   $this->load->library('grocery_CRUD');
   $this->load->model('comps','',TRUE);
 }
 
 function index()
 {
	 
	 $this->load->library('Session/session');
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$this->_users_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		}
		else
		{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	 //$this->_show_Users();
 }
 
 public function show_Users() {
	 $this->load->library('Session/session');
	if($this->session->userdata('logged_in'))
	{
		$session_data = $this->session->userdata('logged_in');
		$crud = new grocery_CRUD();
		$crud->set_table('users');
		
		$crud->unset_columns('id');
		$crud->set_subject('User');
		$crud->display_as('name','Full Name');
		$crud->display_as('username','Login name');
		$crud->display_as('password','Password');
		$crud->change_field_type('password', 'password');
		$crud->display_as('img','Profile Image');
		$crud->set_field_upload('img','assets/images/users');
		$crud->callback_before_update(array($this,'encrypt_password_callback'));
		
		$output = $crud->render();
		
		$this->_users_output($output);
	}
	else {
		//If no session, redirect to login page
			redirect('login', 'refresh');
	}
}

function _users_output($output = null)
{
	$this->load->view('admin/users_view',(array)$output);    
}

function encrypt_password_callback($post_array, $primary_key = null)
    {
        $post_array['password'] = MD5($post_array['password']);
        return $post_array;
    }
 
}
