<!DOCTYPE html>
   <?php  $this->load->view('admin/admin_header');?>
   
 <body>
<section id="container">
<!--header start-->
	<?php  $this->load->view('admin/admin_nav');?>

	
		<?php  $this->load->view('admin/admin_sidebar');?>
		
		<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="typo-agile">
			<h3 style="font-weight: bold;">Images For This Project</h3>
			<?php echo $output; ?>
		</div>
	</section>

		<?php  $this->load->view('admin/admin_footer');?>

 </body>

  <script>
 $(document).ready(function() {
	 $(".nav .active").removeClass("active");
	 $(".nav .home").addClass("active");
 });
 </script>
</html>
