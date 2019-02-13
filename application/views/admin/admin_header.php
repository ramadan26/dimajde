<head>
<link rel="icon" type="image/png" href="<?php echo base_url("assets/admin/images/favicon.ico"); ?>">
<title>TargusMe Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> 
	addEventListener("load", function() { 
		setTimeout(hideURLbar, 0); 
		}, 
		false); 
		function hideURLbar(){ 
			window.scrollTo(0,1); 
		} 
</script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/bootstrap.min.css"); ?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url("assets/admin/css/style.css"); ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url("assets/admin/css/style-responsive.css"); ?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/font.css"); ?>" type="text/css"/>
<link href="<?php echo base_url("assets/admin/css/font-awesome.css"); ?>" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/morris.css"); ?>" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/monthly.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/slider.css"); ?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo base_url("assets/admin/js/jquery2.0.3.min.js"); ?>"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url("assets/admin/js/slider.js"); ?>"></script>
<script src="<?php echo base_url("assets/admin/js/raphael-min.js"); ?>"></script>
<script src="<?php echo base_url("assets/admin/js/morris.js"); ?>"></script>


</head>
<?php 
	foreach($css_files as $file):
?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


<script type="text/javascript">
	/*var $= jQuery.noConflict();
    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();*/
</script>