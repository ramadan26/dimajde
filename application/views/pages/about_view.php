<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/piexif.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/sortable.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/purify.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<?php if(!is_ar_lang()) {?>
<script src="./assets/js/fileinput.js"></script>

<?php } else { ?>
	<script src="./assets/js/fileinput-rtl.js"></script>
<?php } ?>
	<!-- <script src="./assets/js/fileinput-rtl.js"></script> -->
<!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/themes/fa/theme.js"></script>
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/locales/(lang).js"></script>
</head>
<body>
    <div class="animsition">
<?php $this->load->view('partials/navbar_about'); ?>
<?php $this->load->view('partials/about_introduction'); ?>
<?php $this->load->view('partials/about_introduction1'); ?>
<?php $this->load->view('partials/about_speciallization'); ?>
<?php $this->load->view('partials/client_slide'); ?>
<?php $this->load->view('partials/brand_slide'); ?>
<?php $this->load->view('partials/team_slider'); ?>
<?php $this->load->view('partials/footer'); ?>
	</div>
</body>
