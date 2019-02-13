<section class="speciallization_area white_cl">
	<div class="container">		
			<h6 class="s_title white"><?php echo lang($titles, 'hspec'); ?></h6>			
		<div class="row">
			<?php for($i=0; $i < count($home_spec); ++$i) {?>
				<div class="col-md-4 col-xs-6">
					<div class="spec_item">
						<div class="spec_text text-center">
							<img src="<?php echo base_url(); ?>assets/img/homeSpec/<?php if(isset($home_spec[$i]->img)) echo $home_spec[$i]->img; ?>" alt="">
							<h4><?php echo lang($home_spec[$i], 'title'); ?></h4>
							<p><?php echo word_limiter(lang($home_spec[$i], 'desc'), 10); ?></p>
							<a href="javascript::void(0);" data-toggle="modal" data-target="#exampleModalCenter2<?php echo $i; ?>"><?php echo lang($home_spec[$i], 'link'); ?></a>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo lang($home_spec[$i], 'title'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo lang($home_spec[$i], 'desc');?>
      </div>
      <div class="modal-footer">
      	<img src="<?php echo base_url(); ?>assets/img/homeSpec/<?php if(isset($home_spec[$i]->img_modal)) echo $home_spec[$i]->img_modal; ?>" alt="" style="width: 10%;<?php if(!is_ar_lang()) {?>margin-right: 70%;<?php } else { ?>margin-right: 70%;<?php } ?>">
      	<?php if(!is_ar_lang()) { ?>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
      <?php } else { ?>
      	<button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
      <?php } ?>

      </div>
    </div>
  </div>
</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
