<section class="project_villa_area">
			<div class="container">
				<div class="villa_text">
				    <div class="row">
				        <div class="col-md-6">
				            <h2><?php echo lang_const('Available sizes'); ?></h2>
					        <h3 style="<?php if(is_ar_lang()) {?> text-align: right; <?php } ?>"><?php echo $product->sizes; ?></h3>
					    </div>
					<div class="col-md-6">
					<p><?php echo lang($product, 'prod_desc'); ?></p>
					</div>
					</div>
				</div>
				<!-- View grud multiuploader -->
				<?php if ($prod_imgs!=null) { ?>
				<div class="villa_slider owl-carousel">
					 <?php if(isset($prod_imgs)&& $prod_imgs!=null) {?>
					<?php for ($i=0; $i<count($prod_imgs); ++$i) {?>
					<div class="item">
						<img src="<?php echo base_url(); ?>assets/img/products_by_id/<?php if(isset($prod_imgs[$i]->img)) echo $prod_imgs[$i]->img; ?>" alt="">
					</div>
				<?php } }?>
				
			</div>
			<?php } ?>
		</section>
