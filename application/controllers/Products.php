<?php
	/**
	 * summary
	 */
	class Products extends CI_Controller
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
	  	$data['product'] = $this->dimajde_model->get_product();
	  	$data['titles'] = $this->dimajde_model->get_titles();
	  	$data['cate'] = $this->dimajde_model->get_prodcategory();
	  	$data['social'] = $this->dimajde_model->get_socialMedia();
	  	$data['active_page'] = 'product';
	  	$data['page'] = 'pages/products_view';
	    	// dd($data['product']);
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
      $temp = $this->dimajde_model->get_product_detail($id);
		if(count($temp))
			{
    			$data['product'] =  $temp[0] ;
			}
		else  
			{
   			    redirect('home');
   				return; 
			}
	  $data['prod_imgs']=$this->dimajde_model->get_prodimgs($id);
      $data['titles'] = $this->dimajde_model->get_titles();
      $data['cate'] = $this->dimajde_model->get_prodcategory();
      $data['social'] = $this->dimajde_model->get_socialMedia();
      $data['active_page'] = 'product';
      $data['page'] = 'pages/pd_view';
        // dd($data['product']);
      $this->load->view('templates/layout', $data);
		}
	}
?>
