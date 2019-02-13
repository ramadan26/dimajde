<!-- <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countdown.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/parallax/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/animsition/js/animsition.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/smoothscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
<?php if(!is_ar_lang()) { ?>
	<script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
<?php } else { ?>
	<script src="<?php echo base_url(); ?>assets/js/theme-rtl.js"></script>
<?php } ?>

<?php 
if(isset($more_js_files) && $more_js_files != '')
	$this->load->view($more_js_files);
?>


<script type="text/javascript">
	$(document).ready(function() {
		// alert('sasdasd');
		$('.lang').on("click", function(e) {
			//console.log('adad');
			e.preventDefault();
			$.ajax({
				method: 'POST',
				url: '<?php echo site_url('home/change_lang'); ?>',
			}).success(function () {
				location.reload();
			}).error(function(err) {
				// alert(err);
			})
		})
		$('.single-item').slick();
	});
</script>