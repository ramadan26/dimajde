<section class="intes_studio_area white_cl">
			<div class="since_text">
				<h5><?php echo lang($titles, 'since'); ?></h5>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="studio_img">
							<img src="<?php echo base_url(); ?>assets/img/home_about/<?php echo $home_about->img; ?>" alt="">
							<div class="years_text">
								<div class="years_text_inner">
									<h1><?php echo $home_about->years; ?></h1>
									<?php if(!is_ar_lang()) {?>
										<h2>Years</h2>
										<h4>working</h4>
									<?php } else { ?>
										<h2>سنوات</h2>
										<h4>من العمل</h4>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="studio_text">							
							<h6 class="s_title white"><?php echo lang($titles, 'habout'); ?></h6>						
							<h3><?php echo lang($home_about, 'title'); ?></h3>
							<h5><?php echo lang($home_about, 'title1'); ?></h5>
							<p><?php echo lang($home_about, 'desc'); ?></p>
							<?php if(!is_ar_lang()) {?>
								<a class="br_btn white" href="<?php echo base_url(); ?>about">more about us</a>
							<?php } else { ?>
								<a class="br_btn white" href="<?php echo base_url(); ?>about">إقرأ أكثر </a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
