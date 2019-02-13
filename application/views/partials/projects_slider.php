<section class="latest_project white_cl">
	<div class="container">
		<div class="l_text">
				<div class="main_title white <?php echo (!is_ar_lang())? 'float-md-right' : 'float-md-left' ?>">
						<h2><?php echo lang($titles, 'hprojects'); ?></h2>
				</div>
			
				<div class="<?php echo (!is_ar_lang())? 'float-md-left' : 'float-md-right' ?> ">
					<ul class="isotope_fillter list">
					<li class="active" data-filter="*"><a href=""><?php echo lang_const('all'); ?></a></li>
					<?php foreach ($cate as $row){ ?>
						<li data-filter="<?php echo '.cat_' . $row->cate_id; ?>"><a href="javascript::"><?php echo lang($row, 'cate_title'); ?></a></li>
					<?php } ?>
				</ul>	
			</div>
		</div>
	</div>
	<div class="fillter_slider owl-carousel">
		<?php foreach ($pro_slider as $row) {?>
		<a href="<?php echo base_url() . 'projects/details/' . $row->id; ?>" target="_blank">
		<div class="item <?php echo 'cat_'.$row->proj_cate_id; ?>">
				<div class="projects_item">
					<img src="<?php echo base_url(); ?>assets/img/All_projects/<?php if(isset($row->img)) echo $row->img; ?>" alt="">
					<div class="hover">
						<!--<a href="<?php //echo base_url() . 'projects/details/' . $row->id; ?>" target="_blank">-->
								<i class="<?php echo (!is_ar_lang())? 'ion-android-arrow-forward' : 'ion-android-arrow-back' ?>"></i>
						<!--</a>-->
						<div class="project_text">
							<h5><?php echo lang($row, 'cate_title'); ?></h5>
							<!--<a href="<?php //echo base_url() . 'projects/details/' . $row->id; ?>" target="_blank">--><h4><?php echo lang($row, 'desc'); ?></h4><!--</a>-->
						</div>
					</div>
				</div>
		</div>
		</a>
		<?php } ?>
	</div>
</section>
