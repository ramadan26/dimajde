<section class="project_breadcrumb_area">
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 prod_1" style="">
				<div class="breadcrumb_inner">
					<div class="breadcrumb_link">
						<a href="javascript::void(0)"><?php echo lang_const('Category'); ?>: <?php echo lang($product, 'cate_title'); ?></a>
					</div>
					<div class="bread_bottom_text">
						
							

							<h2><?php echo lang($product, 'prod_name'); ?></h2>
							<small><?php echo lang($product,'brought_by'); ?></small>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="prod_img">
					<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/All_products/<?php if(isset($product->prod_img)) echo $product->prod_img; ?>">
				</div>
			</div>
		</div>
	</div>

</section>

