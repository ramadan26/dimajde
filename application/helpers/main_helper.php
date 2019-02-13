<?php 


if(!function_exists('dd')){
	function dd($data) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		die();
	}
}


if(!function_exists('ss')){
	function ss($data) {
		echo "<script> alert(".  $data .");";
		echo "</script>";
		// die();
	}
}

if(!function_exists('lang')){
	function lang($row, $field) {
		$row = (array) $row;
		$CI =& get_instance();
		$CI->load->library('session');

		$lang = $CI->session->userdata('lang');
		if(!$lang) $lang = 'en';
		
		return isset($row[$field . '_' . $lang])? $row[$field . '_' . $lang] : $field;
	}
}

if(!function_exists('lang_const')){
	function lang_const($text) {
		$CI =& get_instance();
		$CI->load->library('session');
		$lang = $CI->session->userdata('lang');
		// dd($CI->session->userdata('lang'));
		if(!$lang) $lang = 'en';
		// dd($lang);
		$CI->lang->load($lang, $lang == 'ar' ? 'arabic' : 'english');
		$return = $CI->lang->line($text);

		return $return ? $return : $text;
	}
}


if(!function_exists('is_ar_lang')){
	function is_ar_lang() {
		$CI =& get_instance();
		$CI->load->library('session');
		$lang = $CI->session->userdata('lang');
		if(!$lang) $lang = 'en';
		return $lang == 'ar';
	}
}

?>
