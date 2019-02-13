<section class="project_villa_area">
			<div class="container">
				<div class="villa_text">
					<h2><?php echo lang($project, 'desc'); ?></h2>
					<p><?php echo lang($project, 'full_desc'); ?></p>
				</div>
				<?php if ($proj_imgs!=null) { ?>
				<div class="villa_slider owl-carousel">
					 <?php if(isset($proj_imgs)&& $proj_imgs!=null) {?>
					<?php for ($i=0; $i<count($proj_imgs); ++$i) {?>
					<div class="item">
						<img src="<?php echo base_url(); ?>assets/img/projects_by_id/<?php if(isset($proj_imgs[$i]->img)) echo $proj_imgs[$i]->img; ?>" alt="">
					</div>
				<?php } }?>
				
			</div>
			<?php } ?>
		</section>
