<?php
	/**
	 * summary
	 */
	class Contact extends CI_Controller
	{
	  /**
	  * summary
	  */
	  public function index()
	  {
	  	$data['footer'] = $this->dimajde_model->get_footer();
	  	$data['copy_rights'] = $this->dimajde_model->get_copyrights();
	  	$data['menu'] = $this->dimajde_model->get_menu();
	  	$data['gen'] = $this->dimajde_model->get_general();
	  	$data['con'] = $this->dimajde_model->get_contact();
	  	$data['titles'] = $this->dimajde_model->get_titles();
	  	$data['social'] = $this->dimajde_model->get_socialMedia();
	  	$data['active_page'] = 'contact';
	  	$data['page'] = 'pages/contact_view';
	    	// dd($data);
	  	$this->load->view('templates/layout', $data);
	  }
	}
?>
