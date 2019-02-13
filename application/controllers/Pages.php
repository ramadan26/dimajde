<?php 
class Pages extends CI_Controller {

    public function view ($page = 'home_view')
    {
    	if(file_exists(APPPATH.'views/pages/'.$page.'.php'))
    	{
    		show_404();
    	}
    		$data['active_page'] = 'home';
	    	// dd($data);
	    	$this->load->view('pages/'.$page);
	    	$this->load->view('templates/layout', $data);
    	}
    }
?>
