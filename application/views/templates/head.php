
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo lang($gen, 'desc'); ?>">
	<meta name="keywords" content="<?php echo lang($gen, 'mkey'); ?>">
	<meta name="google-site-verification" content="<?php echo base_url(); ?>google528e797629d2f5e6.html"/>
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow" />
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/fav-icon.html" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/<?php echo $gen->logo; ?>">

	<title><?php echo lang($gen, 'title'); ?></title>
	
	<link href="<?php echo base_url(); ?>assets/vendors/linear-icon/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/elegant-icon/style.css" rel="stylesheet">
	

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/vendors/revolution/css/settings.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/revolution/css/layers.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/revolution/css/navigation.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/vendors/popup/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/animsition/css/animsition.min.css" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css">	
	<?php if(!is_ar_lang()) {?> <!--  is english language -->
<style>
    @font-face
    {
      font-family: 'Dorid';
      src: url('<?php echo base_url(); ?>assets/fonts/DroidKufi-Regular.ttf'); 
    }
	.header_menu_area .navbar.navbar-expand-lg .nav.navbar-nav.navbar-right li:hover a,
	.header_menu_area .navbar.navbar-expand-lg .nav.navbar-nav.navbar-right li.active a
	{
		font-family: 'Dorid';
	}
</style>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/responsive-en.css" rel="stylesheet">
<?php }  else { ?>   <!-- is arabic language -->
<link href="<?php echo base_url(); ?>assets/css/style-rtl.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
<style>
@font-face
    {
      font-family: 'Dorid';
      src: url('<?php echo base_url(); ?>assets/fonts/DroidKufi-Regular.ttf'); 
    }
body
{
    font-family:'Dorid';
}
</style>
<?php } ?>
</head> 
