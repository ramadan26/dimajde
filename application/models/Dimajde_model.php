<?php 

/**
 * 
 */
class Dimajde_model extends CI_Model
{
	
	function get_slider () {
		return $this->db->from('home_slider')->order_by('order_number')->get()->result();
	}

	function get_menu(){
		$res = $this->db->get('menu')->result();
		return count($res) ? $res[0] : null;
	}

	function get_general(){
		$res = $this->db->get('general')->result();
		return count($res) ? $res[0] : null;
	}
	function get_hAbout()
	{
		$res = $this->db->get('home_about')->result();
		return count($res) ? $res[0] : null;
	}
	function get_mCounter()
	{
		return $this->db->from('home_counter')->limit(4)->get()->result();
	}
	function get_homesepc()
	{
		return $this->db->from('home_spec')->limit(3)->get()->result();
	}
	function get_proSlide($id = null)
	{
		$this -> db ->where('proj_home', 1);
		$this -> db ->order_by('id', 'desc');
		return $res1 = $this->db->from('projects as p2')->join('proj_categories as c2', 'p2.proj_cate_id = c2.cate_id')->get()->result();
		if(isset($id) && $id != '' && $id != null )
     $sql->where('id', $id);
    return $sql->get()->result();
	}
	function get_clientSlide()
	{
		$this->db->order_by('id', 'desc');
		return $this->db->get('clients')->result();
	}
	function get_brandSlide()
	{
		return $this->db->get('brands')->result();
	}
	function get_footer()
	{
		$res = $this->db->get('footer')->result();
		return count($res) ? $res[0] : null;
	}
	function get_copyrights()
	{
		$res = $this->db->get('copyrights')->result();
		return count($res) ? $res[0] : null;
	}
	function get_aboutintro()
	{
		$res = $this->db->get('about_intro')->result();
		return count($res) ? $res[0] : null;
	}
	function get_aboutintro1()
	{
		return $this->db->get('about_intro1')->result();
	}
	function get_aboutspec()
	{
		return $this->db->get('about_spec')->result();
	}
	function get_teamSlide()
	{
		return $this->db->get('team')->result();
	}
	function get_contact()
	{
		$res = $this->db->get('contact')->result();
		return count($res) ? $res[0] : null;
	}
	function get_product($id = null)
  {
    $sql = $this->db->from('products as p')
    ->join('prod_categories as c', 'p.prod_cate_id = c.cate_id');
   if(isset($id) && $id != '' && $id != null )
     $sql->where('prod_id', $id);
     $sql->order_by($id, 'asc');
    return $sql->get()->result();
  }
  function get_product_detail($id = null)
  {
    $sql = $this->db->from('products as p')->join('prod_categories as c', 'p.prod_cate_id = c.cate_id');
   if(isset($id) && $id != '' && $id != null )
     $sql->where('prod_id', $id);
    return $sql->get()->result();
  }
  //product images =============================================================================================
	function get_prodimgs($id = null)
	{
		// return $this->db->select('img')->from('product_imgs')->where('prod_id1', $id)->get()->result();
		
		$this->db->select('img');
		$this -> db -> from('product_imgs');
		$this -> db -> where('prod_id1', $id);
		
         $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
   
	}
	//=============================================================================================================
	function get_project($id = null)
	{
		$sql = $this->db->from('projects as p')
    ->join('proj_categories as c', 'p.proj_cate_id = c.cate_id');
   if(isset($id) && $id != '' && $id != null )
     $sql->where('id', $id);
     $sql->order_by($id, 'desc');
    return $sql->get()->result();
	}
	function get_projimgs($id = null)
	{
		// return $this->db->select('img')->from('product_imgs')->where('prod_id1', $id)->get()->result();
		
		$this->db->select('img');
		$this -> db -> from('project_imgs');
		$this -> db -> where('proj_id1', $id);
		
         $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
   
	}
	function get_titles()
	{
		$res = $this->db->get('titles')->result();
		return count($res) ? $res[0] : null;
	}
	function get_prodcategory()
	{
		return $this->db->get('prod_categories')->result();
	}	
	function get_projcategory()
	{
		return $this->db->get('proj_categories')->result();
	}	
	function get_socialMedia()
	{
		return $this->db->get('social_media')->result();
	}
	
}

?>
