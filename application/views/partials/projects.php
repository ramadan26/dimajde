<section class="ms_project_area">
			<div class="ms_project_inner">
				<div class="gird_sizer">					
				</div>
				<ul class="isotope_fillter list text-center">
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
						<?php foreach ($project as $row) {?>
						
				<div class="ms_p_item <?php echo 'cat_' . $row->proj_cate_id; ?>">
				    
					<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/All_projects/<?php if(isset($row->img)) echo $row->img; ?>" alt="" />
					<a href="<?php echo base_url() . 'projects/details/' . $row->id; ?>">
					<div class="hover">
						<?php if (!is_ar_lang()) { ?>
						<!--<a href="javascript:;">-->
							<i class="ion-android-arrow-forward"></i>
						<!--</a>-->
					<?php } else { ?>
						<!--<a href="javascript:;">-->
							<i class="ion-android-arrow-back"></i>
						<!--</a>-->
					<?php } ?>
						<div class="project_text">
							<h5><?php echo lang($row, 'cate_title'); ?></h5>
							<!--<a href="<?php //echo base_url() . 'projects/details/' . $row->id; ?>">-->
								<h4><?php echo lang($row, 'desc'); ?></h4>
							<!--</a>-->
						</div>
					</div>
					</a>
				</div>
			<?php } ?>
				</div>
		</section>
