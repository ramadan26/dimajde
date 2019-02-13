<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Dashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('grocery_CRUD');
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->_dash_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
	function _dash_output($output = null)
	{
		$this->load->view('admin/dashboard_view',(array)$output);    
	}

	public function getGeneral()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('general');

            $crud->set_subject('general');
			$crud->unset_add();
			$crud->unset_delete();
            $crud->display_as('desc_en','Meta English Description');
            $crud->display_as('desc_ar','Meta Arabic Description');
            $crud->display_as('mkey_en','Meta English Keywords');
            $crud->display_as('mkey_ar','Meta Arabic Keywords');
            $crud->display_as('logo','Logo');
			$crud->display_as('title_en','En Title');
			$crud->display_as('title_ar','Ar Title');
			$crud->display_as('mail','Contact Mail to Send');
			$crud->display_as('mail1','Join Us Mail to Send');
			$crud->set_field_upload('logo','assets/images/logo');
            $crud->required_fields('title_en', 'title_ar','desc_en', 'desc_ar', 'mkey_en', 'mkey_ar', 'logo', 'mail', 'mail1');
            $output = $crud->render();
			
            $this->_dash_output($output);
			
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
	
	function _req_output($output = null)
	{
		$this->load->view('admin/req',(array)$output);    
	}

	public function getReq()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('tbl_reqsections');

            $crud->set_subject('required Sections');
			$crud->unset_add();
			$crud->unset_delete();
            $crud->display_as('req_title','Section Title');
            $crud->display_as('req_boolean','Required?');
			$crud->field_type('req_boolean', 'dropdown', array('1' => 'Yes', '0' => 'No'));
            
            $crud->required_fields('req_title', 'req_boolean');
            $output = $crud->render();
			
            $this->_req_output($output);
			
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
	
	function _title_output($output = null)
	{
		$this->load->view('admin/title',(array)$output);    
	}

	public function getTitles()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('tbl_titles');

            $crud->set_subject('Sections Titles');
			$crud->unset_add();
			$crud->unset_delete();
            $crud->display_as('about_title','About Title');
            $crud->display_as('about_title1','Big Right About Title');
			
			$crud->display_as('serv_title','Service Title');
            $crud->display_as('serv_desc','Service Description');
			
			$crud->display_as('projects_title','Recent Exterior Projects');
            $crud->display_as('projects_title1','Recent Interior Projects');
			
			$crud->display_as('contact_title','Home Contact Title');
            $crud->display_as('what_title','What Title');
			
			$crud->display_as('client_title','Partner Title');
            $crud->display_as('team_title','Team Title');
			
			$crud->display_as('ipro_title','Interior Projects Page Title');
            $crud->display_as('epro_title','Exterior Projects Page Title');
			
			$crud->display_as('logos_title','Logos Projects Title');
            $crud->display_as('contact_title1','Contact Page Title');
			
			$crud->display_as('touch_title','Keep Touch Title');
            $crud->display_as('form_title','FormTitle');			
            
            $crud->required_fields('about_title', 'about_title1', 'serv_title', 'serv_desc', 'projects_title', 'projects_title1', 'contact_title', 'what_title', 'client_title', 'team_title', 'ipro_title', 'epro_title', 'logos_title', 'contact_title1', 'touch_title', 'form_title');
            $output = $crud->render();
			
            $this->_title_output($output);
			
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }


 public function targus_slider()
{
	
	if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->_targus_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
}

function _targus_output($output = null)
{
	
	$this->load->view('admin/admin_home',(array)$output);    
}

}
?>
