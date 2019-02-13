<section class="full_project_area">
			<div class="container">				
				<div class="main_title white">					
					<h2><?php echo lang($titles, 'products'); ?></h2>
				</div>							
				<ul class="isotope_fillter list">
					<?php if(!is_ar_lang()) {?>
					<li class="active" data-filter="*"><a href="#"><?php echo lang_const('All'); ?></a></li>
				<?php } else { ?>
					<li class="active" data-filter="*"><a href="#"><?php echo lang_const('الجميع'); ?></a></li>
				<?php } ?>
					<?php foreach ($cate as $row){ ?>
						<li data-filter="<?php echo '.cat_' . $row->cate_id; ?>"><a href="#"><?php echo lang($row, 'cate_title'); ?></a></li>
					<?php } ?>
				</ul>			
				<div class="project_full_inner">
						<?php foreach ($product as $row) {?>
						<a class="p_full_item <?php echo 'cat_' . $row->prod_cate_id; ?> no1" href="<?php echo base_url() . 'products/details/' . $row->prod_id; ?>">
					<div class=" <?php echo 'cat_' . $row->prod_cate_id; ?> ">
						<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/All_products/<?php if(isset($row->prod_img)) echo $row->prod_img; ?>" alt="">
						
						<div class="hover">
							<h5><?php echo lang($row, 'cate_title'); ?></h5>
							<h4><?php echo lang($row, 'prod_name'); ?></h4>
						</div>
					</div>
					</a>
						<?php } ?>	
				</div>
			</div>
		</section>
