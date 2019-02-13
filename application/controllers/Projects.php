<?php
	/**
	 * summary
	 */
	class Projects extends CI_Controller
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
	  	$data['project'] = $this->dimajde_model->get_project();
	  	$data['titles'] = $this->dimajde_model->get_titles();
	  	$data['cate'] = $this->dimajde_model->get_projcategory();
	  	$data['social'] = $this->dimajde_model->get_socialMedia();
	  	$data['active_page'] = 'projects';
	  	$data['page'] = 'pages/projects_view';
	    	// dd($data);
	  	$this->load->view('templates/layout', $data);
	  }
	  function details ($id) {
	  	if(!isset($id) ||  !is_numeric($id)) {  //check if the id is excit or not or it is a number or not
    		redirect('home');
   			exit();
			}
	  	 $data['footer'] = $this->dimajde_model->get_footer();
      $data['copy_rights'] = $this->dimajde_model->get_copyrights();
      $data['menu'] = $this->dimajde_model->get_menu();
      $data['gen'] = $this->dimajde_model->get_general();
      	$temp = $this->dimajde_model->get_project($id);
				if(count($temp))
				{
    			$data['project'] =  $temp[0] ;
				}
				else  
				{
   				redirect('home');
   				return; 
				}
			$data['proj_imgs']=$this->dimajde_model->get_projimgs($id);
      $data['titles'] = $this->dimajde_model->get_titles();
      $data['cate'] = $this->dimajde_model->get_projcategory();
      $data['social'] = $this->dimajde_model->get_socialMedia();
      $data['active_page'] = 'projects';
      $data['page'] = 'pages/pj_view';
        // dd($data['project']);
      $this->load->view('templates/layout', $data);
		}
	}
?>
