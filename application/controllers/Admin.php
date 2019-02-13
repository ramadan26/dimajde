<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Admin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('grocery_CRUD');
   $this->load->library('image_CRUD');
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
	//General Section -----------------------------------------------------------------------
	public function general()
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
            $crud->display_as('mdesc_en','Meta English Description');
            $crud->display_as('mdesc_ar','Meta Arabic Description');
            $crud->display_as('mkey_en','Meta English Keywords');
            $crud->display_as('mkey_ar','Meta Arabics Keywords');
            $crud->display_as('logo','Logo');
			$crud->display_as('title_en','En Title');
			$crud->display_as('title_ar','Ar Title');
			$crud->display_as('mail','Contact Mail to Send');
			$crud->display_as('mail1','Join Us Mail to Send');
			$crud->set_field_upload('logo','assets/img/logo');
            $crud->required_fields('title_en', 'title_ar','mdesc_en', 'mdesc_ar', 'mkey_en', 'mkey_ar', 'logo', 'mail', 'mail1');
            $output = $crud->render();
			
            $this->_dash_output($output);
			
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //End General Section ================================================
    //Menu Section ===========================================================
    public function _menu_output($output = null)
    {
        $this->load->view('admin/menu',$output);
    }
    public function menu()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('menu');
            $crud->set_subject('Menu');
			$crud->unset_add();
			$crud->unset_delete();
			
			$crud->display_as('home_en','English Home Page');
			$crud->display_as('home_ar','Arabic Home Page');
			
			$crud->display_as('about_en','English About Page');
			$crud->display_as('about_ar','Arabic About Page');
			
			$crud->display_as('product_en','En Title products');
			$crud->display_as('product_ar','Ar Title products');

			$crud->display_as('projects_en','En Title projects');
			$crud->display_as('projects_ar','Ar Title projects');

			$crud->display_as('contact_en','En Title Contact');
			$crud->display_as('contact_ar','Ar Title Contact');

			$crud->display_as('logo','Logo PNG Image');
			$crud->set_field_upload('logo','assets/img/logo');


            $output = $crud->render();
			
            $this->_menu_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //End Menu Section=======================================================
    
    //Titles Seection=====================================================
    
    public function _titles_output($output = null)
    {
        $this->load->view('admin/titles',$output);
    }
    public function titles()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('titles');
			$crud->unset_add();
			$crud->unset_delete();
            $crud->set_subject('Titles Pages');
			
            $crud->display_as('habout_en','En Homepage about Title');
			$crud->display_as('habout_ar','Ar Homepage about Title');
			
			$crud->display_as('hspec_en','En Homepage Specializations Title');
			$crud->display_as('hspec_ar','Ar Homepage Specializations Title');
			
			$crud->display_as('hprojects_en','En Homepage projects Title');
			$crud->display_as('hprojects_ar','Ar Homepage projects Title');
			
			$crud->display_as('clients_en','En Homepage Clients Title');
			$crud->display_as('clients_ar','Ar Homepage Clients Title');
			
			$crud->display_as('aspec_en','En Aboutpage Specializations Title');
			$crud->display_as('aspec_ar','Ar Aboutpage Specializations Title');
			
			$crud->display_as('team_en','En Aboutpage Team Title');
			$crud->display_as('team_ar','Ar Aboutpage Team Title');
			
			$crud->display_as('products_en','En Productspage  Title');
			$crud->display_as('products_ar','Ar Productspage Title');
			
			$crud->display_as('contact_en','En Contactpage Title');
			$crud->display_as('contact_ar','Ar Contactpage Title');

			$crud->display_as('contact1_en','En Contactpage Send message Title');
			$crud->display_as('contact1_ar','Ar Contactpage Send message Title');
			
			$crud->display_as('since_en','En Homepage Since title');
			$crud->display_as('since_ar','Ar Homepage Since title');								
            $crud->required_fields('habout_en','habout_ar','hspec_en', 'hspec_ar', 'hprojects_en', 'hprojects_ar', 'clients_en', 'clients_ar', 'aspec_en', 'aspec_ar', 'team_en', 'team_ar', 'products_en', 'products_ar', 'contact_en', 'contact_ar', 'contact1_en', 'contact1_ar', 'since_en', 'since_ar');
			$output = $crud->render();
			
            $this->_titles_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //End Titles Section========================================================
    
    //Home Slider Section==============================================================
    
    public function _sliders_output($output = null)
    {
        $this->load->view('admin/sliders',$output);
    }
    public function sliders()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('home_slider');
            $crud->set_subject('Sliders');
            $crud->display_as('image','Slider Image');
			$crud->display_as('title_en','English Big Title');
			$crud->display_as('title_ar','Arabic Big Title');
			$crud->display_as('desc_en','English Description');
			$crud->display_as('desc_ar','Arabic Description');	
			$crud->display_as('video','Supported video');
            $crud->set_field_upload('image','assets/img/home-slider');
            $crud->required_fields('image', 'video','title_en', 'title_ar','desc_en', 'desc_ar');
            $output = $crud->render();
			
            $this->_sliders_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    //End Home Slider Section =============================================================
    
    //Home about Section =================================================
    
    public function _about_output($output = null)
    {
        $this->load->view('admin/homeabout',$output);
    }
    public function homeabout()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('home_about');
			
            $crud->set_subject('Home About Section');
            $crud->display_as('title_en','English Title');
			$crud->display_as('title_ar','Arabic Title');

			$crud->display_as('title1_en','English Second Title');
			$crud->display_as('title1_ar','Arabic Second Title');

			$crud->display_as('desc_en','English Description');
			$crud->display_as('desc_ar','Arabic Description');
			$crud->display_as('img','Image');
			$crud->set_field_upload('img','assets/img/home_about');
			$crud->display_as('years','Years Working');			
            $crud->required_fields('title_en', 'title_ar', 'desc_en', 'desc_ar', 'img', 'years');
            $output = $crud->render();
			
            $this->_about_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    //End Home About Section===============================================
    //Home Counter Section ===================================================
    
    public function _count_output($output = null)
    {
        $this->load->view('admin/counter',$output);
    }
    public function counter()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('home_counter');
            $crud->set_subject('Main Counter');
            $crud->display_as('title_en','English Name');
			$crud->display_as('title_ar','Arabic Name');
			$crud->display_as('counter_num','Counter Range');
			$crud->display_as('img','Image Counter');			
			$crud->set_field_upload('img','assets/img/counter');
			
            $crud->required_fields('title_en', 'title_ar','img');
			
            $output = $crud->render();
			
            $this->_count_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    //End Home Counter Section =====================================================
    //Home Spec Section =====================================
    
    public function _Hspec_output($output = null)
    {
        $this->load->view('admin/homespec',$output);
    }
    public function homespec()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('home_spec');
            $crud->set_subject('Main Counter');
            $crud->display_as('title_en','English Title');
			$crud->display_as('title_ar','Arabic Title');

			$crud->display_as('desc_en','English Description');
			$crud->display_as('desc_ar','Arabic Description');

			$crud->display_as('link_en','Link English Description');
			$crud->display_as('link_ar','Link Arabic Description');

			
			$crud->display_as('img','Image Spec');			
			$crud->set_field_upload('img','assets/img/homeSpec');

			$crud->display_as('img_modal','Image Full Description');
			$crud->set_field_upload('img_modal','assets/img/homeSpec');
			
            $crud->required_fields('title_en', 'title_ar','img');
			
            $output = $crud->render();
			
            $this->_Hspec_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //End Home Spec Section =============================================
    

    //================ Product's Category Section =============================
    public function _prodcategory_output($output = null)
    {
        $this->load->view('admin/product_category',$output);
    }
    public function prodcategories()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('prod_categories');
            $crud->set_subject("New Products's Category");
            $crud->display_as('cate_title_en','English Title');
			$crud->display_as('cate_title_ar','Arabic Title');

            $crud->required_fields('cate_title_en', 'cate_title_ar');

            $output = $crud->render();

            $this->_prodcategory_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //============== End Product's Category Section ======================================

    //================ Product's Category Section =============================
    public function _projcategory_output($output = null)
    {
        $this->load->view('admin/project_categories',$output);
    }
    public function projcategories()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('proj_categories');
            $crud->set_subject("New Projects's Category");
            $crud->display_as('cate_title_en','English Title');
			$crud->display_as('cate_title_ar','Arabic Title');

            $crud->required_fields('cate_title_en', 'cate_title_ar');

            $output = $crud->render();

            $this->_projcategory_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //============== End Product's Category Section ======================================
    //Project slider Section =========================================================
   	public function _Hproject_output($output = null)
    {
        $this->load->view('admin/projects',$output);
    }
    public function getproject()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();

            $crud->set_table('projects');

            $crud->set_subject('Projects In Home Page');
            $crud->display_as('desc_en','English Description');
			$crud->display_as('desc_ar','Arabic Description');

			$crud->display_as('proj_cate_id','Category');
			$crud->display_as('proj_home','Show In Homepage');
			$crud->set_relation('proj_cate_id','proj_categories','cate_id');


			$crud->display_as('img','Image 567x670');

			$crud->set_field_upload('img','assets/img/All_projects');

			$crud->field_type('proj_home', 'dropdown', array('1' => 'Yes', '0' => 'No'));
            $crud->required_fields('proj_home', 'desc_en', 'desc_ar', 'proj_cate_id');
			$crud->order_by('id','desc');
			// $crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProjectimgs');
			$output = $crud->render();

            $this->_Hproject_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //==================== End Project Slide =================================================
    
    //================== All Projects =============================================
	
	public function _project1_output($output = null)
    {
        $this->load->view('admin/allprojects',$output);
    }
    public function getAllprojects()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('projects');

            $crud->set_subject('Projects');

			$crud->display_as('desc_en',"English Project's Name");
			$crud->display_as('desc_ar',"Arabic Project's Name");
			$crud->display_as('img','Image 576x670 ');

			$crud->display_as('proj_cate_id',"Projects's category");

			$crud->set_relation('proj_cate_id','proj_categories','cate_title_en');
			$crud->display_as('proj_home','Show In Homepage');
			$crud->set_field_upload('img','assets/img/All_projects');

			$crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProjectimgs');

            $crud->required_fields('desc_en', 'desc_ar', 'img');
			$crud->order_by('id','asc');
			// $crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProjectimgs');
			$output = $crud->render();

            $this->_project1_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function _projectimgs_output($output = null)
    {
        $this->load->view('admin/projects_imgs',$output);
    }
    public function getProjectimgs($id)
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $image_crud = new image_CRUD();

			$image_crud->set_primary_key_field('id');
			$image_crud->set_url_field('img');
			$image_crud->set_table('project_imgs')
			->set_relation_field('proj_id1')
			->set_image_path('assets/img/projects_by_id');

			$output = $image_crud->render();

			$this->_projectimgs_output($output);

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    //================= End All Projects ========================================== 

    //==================== All Products ==========================================
    public function _Allproduct_output($output = null)
    {
        $this->load->view('admin/allprojects',$output);
    }
    public function getAllproducts()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('products');
            $crud->display_as('img','Product Image');
            $crud->set_subject('Products');
           
			$crud->display_as('prod_img','Product Image');

			$crud->display_as('prod_cate_id',"product's Category");
			$crud->set_relation('prod_cate_id','prod_categories','cate_title_en');
			
			$crud->set_field_upload('prod_img','assets/img/All_products');
			$crud->display_as('prod_name_ar','Arabic Product Name');
			$crud->display_as('prod_name_en','English Product Name');
			$crud->display_as('brought_by_en','English Name Of The Manufacturer');
			$crud->display_as('brought_by_ar','Arabic Name Of The Manufacturer');
            $crud->required_fields('prod_img','brought_by_ar','brought_by_en','prod_name_ar','prod_name_en');
			$crud->order_by('prod_id','asc');
			$crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProductimgs');
			$output = $crud->render();
			
            $this->_Allproduct_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //============= End All Products =============================================================

    //=============== Single Product's Images =======================================================
    public function _product_output($output = null)
    {
        $this->load->view('admin/products_imgs',$output);
    }
    public function getProductimgs($id)
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $image_crud = new image_CRUD();
	
			$image_crud->set_primary_key_field('id');
			$image_crud->set_url_field('img');
			$image_crud->set_table('product_imgs')
			->set_relation_field('prod_id1')			
			->set_image_path('assets/img/products_by_id');
				
			$output = $image_crud->render();
		
			$this->_product_output($output);
			
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //========================= End Single Product's Images ====================================================================
    
    //============================= Clients Section =================================================================
    
    public function _client_output($output = null)
    {
        $this->load->view('admin/clients',$output);
    }
    public function clients()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
			
            $crud->set_table('clients');

            $crud->set_subject('Opinion to show');
            $crud->display_as('name_en','English Name');
			$crud->display_as('name_ar','Arabic Name');
			
			$crud->display_as('pos_en','English Position at work');
			$crud->display_as('pos_ar','Arabic Position at work');
			$crud->display_as('opinion_en','English Opinion');
			$crud->display_as('opinion_ar','Arabic Opinion');											
            $crud->required_fields('name_en', 'name_ar', 'pos_en', 'pos_ar', 'opinion_en', 'opinion_ar');
			$crud->order_by('id','desc');
			// $crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProjectimgs');
			$output = $crud->render();
			
            $this->_client_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    //============================ End Clients Section ================================================================
    
    //============ Brands Section =============================
    
    public function _brand_output($output = null)
    {
        $this->load->view('admin/brands',$output);
    }
    public function brands()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
			
            $crud->set_table('brands');

            $crud->set_subject('Brand partner');
            $crud->display_as('img','Brand Logo');
			$crud->set_field_upload('img','assets/img/brands');													
            $crud->required_fields('img');
			$crud->order_by('id','desc');
			// $crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProjectimgs');
			$output = $crud->render();
			
            $this->_client_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //=============== End Brands Section =============================
    
    //============= Footer Section =================================
    public function _footer_output($output = null)
    {
        $this->load->view('admin/footer',$output);
    }
    public function footer()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
			
            $crud->set_table('footer');

            $crud->set_subject('Addicinal Information about Dimajde');

            $crud->display_as('title1_en','English title No.1');
			$crud->display_as('title1_ar','Arabic title No.1');

			$crud->display_as('desc1_en','English Description No.1');
			$crud->display_as('desc1_ar','Arabic Description No.1');
			
			$crud->display_as('title2_en','English title No.2');
			$crud->display_as('title2_ar','Arabic title No.2');

			$crud->display_as('title3_en','English title No.3');
			$crud->display_as('title3_ar','Arabic title No.3');

			$crud->display_as('img','Logo');

			$crud->set_field_upload('img','assets/img/footer');

			$crud->display_as('mail','Email');
			$crud->display_as('mob','Moblie Number');
			$crud->display_as('fixed','Fixed Phone');											
            $crud->required_fields('title1_en', 'title1_ar', 'desc1_en', 'desc1_ar', 'title2_en', 'title2_ar', 'title3_en', 'title3_ar');
			$crud->order_by('id','desc');
			// $crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProjectimgs');
			$output = $crud->render();
			
            $this->_footer_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    //================= End Footer Secton ================================
    
    //=========== Contact Info ============================
    
    public function _social_output($output = null)
    {
        $this->load->view('admin/social_media',$output);
    }
    public function social()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
			
            $crud->set_table('social_media');

            $crud->set_subject('Social Media');
            $crud->display_as('social_title','English Social Media Title');
			$crud->display_as('social_link','link of your page');
			$crud->display_as('username', 'Your Profile Name');											
            $crud->required_fields('social_link', 'social_title');
			
			// $crud->add_action('Photos', site_url('assets/img/pic.png'), 'admin/getProjectimgs');
			$output = $crud->render();
			
            $this->_social_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //============ End Contact Info ============================ 
    
    //================ About Page first intro =================================
    
    public function _Aboutpage_output($output = null)
    {
        $this->load->view('admin/about_intro1',$output);
    }
    public function Aboutintro()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('about_intro');
            $crud->set_subject('About Page introduction');
            $crud->display_as('title_en','English Title');
			$crud->display_as('title_ar','Arabic Title');

			$crud->display_as('desc_en','English Description No.1');
			$crud->display_as('desc_ar','Arabic Description No.1');

			$crud->display_as('desc1_en','English Description No.2');
			$crud->display_as('desc1_ar','Arabic Description No.2');
			
			$crud->display_as('img','Image 1300x600');			
			$crud->set_field_upload('img','assets/img/About_page');
			
            $crud->required_fields('title_en', 'title_ar', 'desc_en', 'desc_ar', 'img');
			
            $output = $crud->render();
			
            $this->_Aboutpage_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    //================ End About Page first intro ===================================
    
    //================= About Page Second intro =======================================
    
    public function _Aboutpage1_output($output = null)
    {
        $this->load->view('admin/about_intro2',$output);
    }
    public function Aboutintro1()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('about_intro1');
            $crud->set_subject('About Page introduction');
            $crud->display_as('title_en','English Title');
			$crud->display_as('title_ar','Arabic Title');

			$crud->display_as('desc_en','English Description');
			$crud->display_as('desc_ar','Arabic Description');

			
			
			$crud->display_as('link_en','English link title No.2');
			$crud->display_as('link_ar','Arabic link title No.2');

			$crud->display_as('img','Image');			
			$crud->set_field_upload('img','assets/img/About_page');
			$crud->display_as('img_modal','Image');			
			$crud->set_field_upload('img_modal','assets/img/About_page');
            $crud->required_fields('title_en', 'title_ar', 'desc_en', 'desc_ar', 'img');
			
            $output = $crud->render();
			
            $this->_Aboutpage1_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //================= End About page second intro =======================================
    
    //==================== About Page Spec ===========================================
    
    public function _Aboutpage2_output($output = null)
    {
        $this->load->view('admin/about_spec',$output);
    }
    public function Aboutspec()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('about_spec');
            $crud->set_subject('About Page Specializations');
            $crud->display_as('title1_en','English Title');
			$crud->display_as('title1_ar','Arabic Title');

			$crud->display_as('desc_en','English Description');
			$crud->display_as('desc_ar','Arabic Description');

			
			
			$crud->display_as('link_en','English link title No.2');
			$crud->display_as('link_ar','Arabic link title No.2');

			$crud->display_as('img','Image');			
			$crud->set_field_upload('img','assets/img/About_page');
			$crud->display_as('img_modal','Image');			
			$crud->set_field_upload('img_modal','assets/img/About_page');
			
            $crud->required_fields('title_en', 'title_ar', 'desc_en', 'desc_ar', 'img');
			
            $output = $crud->render();
			
            $this->_Aboutpage2_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //====================== End About Page Spec ========================================
    
    //=================== Team Section ==========================
    
    public function _team_output($output = null)
    {
        $this->load->view('admin/team',$output);
    }
    public function get_team()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('team');
            $crud->set_subject('About Page Specializations');
            $crud->display_as('name_en','English Title');
			$crud->display_as('name_ar','Arabic Title');

			$crud->display_as('pos_en','English Description');
			$crud->display_as('pos_ar','Arabic Description');

			
			
			$crud->display_as('fb','Facebook link');
			$crud->display_as('twitter','Twitter link');
			$crud->display_as('linkedin','LinkedIn link');

			$crud->display_as('img','Team Member Image');			
			$crud->set_field_upload('img','assets/img/team');
			
            $crud->required_fields('name_en', 'name_ar', 'pos_en', 'pos_ar', 'img', 'fb', 'twitter', 'linkedin');
			
            $output = $crud->render();
			
            $this->_team_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //=================== End Team Section ==========================
    
    //=================== Contact Page =================================
    
    public function _contact_output($output = null)
    {
        $this->load->view('admin/contact',$output);
    }
    public function contact()
    {
        $this->load->library('Session/session');
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $crud = new grocery_CRUD();
            $crud->set_table('contact');
            $crud->set_subject('Contact Info');
            $crud->unset_add();
			$crud->unset_delete();
            $crud->display_as('maplat','latitudes of your location');
			$crud->display_as('maplng','Meridians of your location');

			$crud->display_as('mail','Contact Email');
			$crud->display_as('addr_en','Your address in EN');
			$crud->display_as('addr_ar','Your address in AR');
			$crud->display_as('addr1_en','Address details in EN');
			$crud->display_as('addr1_ar','Address details in AR');
			$crud->display_as('phone','Your Contact Phone Num');
            $crud->display_as('phone_1','Contact Phone Num (Optianl)');
            $crud->required_fields('maplat', 'maplng', 'addr_en', 'addr_ar', 'addr1_en', 'addr1_ar','phone', 'phone_1');
			
            $output = $crud->render();
			
            $this->_contact_output($output);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    //==================== End Contact Page ====================================
    
  }
  ?>
