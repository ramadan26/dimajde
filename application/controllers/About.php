<?php
	/**
	 * summary
	 */
	class About extends CI_Controller
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
	  	$data['intro'] = $this->dimajde_model->get_aboutintro();
	  	$data['intro1'] = $this->dimajde_model->get_aboutintro1();
	  	$data['aboutSpec']= $this->dimajde_model->get_aboutspec();
	  	$data['client_slider'] = $this->dimajde_model->get_clientSlide();
	  	$data['brand_slider'] = $this->dimajde_model->get_brandSlide();
	  	$data['team_slide'] = $this->dimajde_model->get_teamSlide();
	  	$data['titles'] = $this->dimajde_model->get_titles();
	  	$data['social'] = $this->dimajde_model->get_socialMedia();
	  	$data['active_page'] = 'about';
	  	$data['page'] = 'pages/about_view';
	    	// dd($data);
	  	$this->load->view('templates/layout', $data);
	  }
	}
?>
