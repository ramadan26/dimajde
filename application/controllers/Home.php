<?php
	/**
	 * summary
	 */
	class Home extends CI_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	    	parent::__construct();
	    }

	    function change_lang () {
	    	if (!$this->input->is_ajax_request()) {
	    		exit('No direct script access allowed');
	    	}
	    	$lang = $this->session->lang;
	    	if(!isset($lang) || $lang == '' || is_null($lang))
	    		$lang = 'en';
	    	$this->session->set_userdata(array('lang' => $lang == 'en' ? 'ar' : 'en'));
	    	echo $lang;
			}
	    public function index()
	    {
	    	$data['main_counter'] = $this->dimajde_model->get_mCounter();
	    	$data['home_spec'] = $this->dimajde_model->get_homesepc();
	    	$data['home_slider'] = $this->dimajde_model->get_slider();
	    	$data['pro_slider'] = $this->dimajde_model->get_proSlide();
	    	$data['client_slider'] = $this->dimajde_model->get_clientSlide();
	    	$data['brand_slider'] = $this->dimajde_model->get_brandSlide();
	    	$data['footer'] = $this->dimajde_model->get_footer();
	    	$data['copy_rights'] = $this->dimajde_model->get_copyrights();
	    	$data['menu'] = $this->dimajde_model->get_menu();
	    	$data['gen'] = $this->dimajde_model->get_general();
	    	$data['home_about'] = $this->dimajde_model->get_hAbout();
	    	$data['titles'] = $this->dimajde_model->get_titles();
	    	$data['cate'] = $this->dimajde_model->get_projcategory();
	    	$data['social'] = $this->dimajde_model->get_socialMedia();
	    	
	    	$data['active_page'] = 'home';
	    	$data['page'] = 'pages/home_view';
	    	// dd($data);
	    	$this->load->view('templates/layout', $data);
	    }
	 //    public function create()
		// {
			
		// 	$this->form_validation->set_rules('name_en', 'Name in English', 'required');
		// 	$this->form_validation->set_rules('name_ar', 'Name in Arabic', 'required');
		// 	$this->form_validation->set_rules('pos_en', 'Position En', 'required');
		// 	$this->form_validation->set_rules('pos_ar', 'Position Ar', 'required');
		// 	$this->form_validation->set_rules('opinion_en', 'opinion En', 'required');
		// 	$this->form_validation->set_rules('opinion_ar', 'opinion Ar', 'required');

		// 	if ($this->form_validation->run() === FALSE)
		// 	{
		// 		show_404();
		// 	}
		// 	else
		// 	{
		// 		$this->dimajde_model->get_clientSlide();
		// 		$data['active_page'] = 'home';
	 //    	$data['page'] = 'pages/home_view';
	 //    	// dd($data);
	 //    	$this->load->view('templates/layout', $data);
		// 	}
		// }
	  }
	  ?>
