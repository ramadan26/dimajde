<section class="clients_area white_cl">
			<div class="container">
				<div class="main_title white">
					
						<h2><?php echo lang($titles, 'clients'); ?></h2>
				</div>
				<div class="testimonials_slider owl-carousel">
					<?php for ($i=0; $i<count($client_slider); ++$i) {?>
					<div class="item">
						<div class="test_item">
							<h4><span><?php echo lang($client_slider[$i], 'name'); ?></span> / <?php echo lang($client_slider[$i], 'pos'); ?></h4>
							<p><?php echo word_limiter(lang($client_slider[$i], 'opinion'), 20); ?></p>
							<a href="javascript::void(0);" data-toggle="modal" data-target="#exampleModalCenter3<?php echo $i; ?>"><?php echo lang_const('Read more'); ?></a>
							
						</div>
						
						
					</div>
					
					
				<?php }?>
					<!-- <div class="item">
						<div class="test_item">
							<h4><span>Bobs Hanley</span> / Owner of Edden Villa</h4>
							<p>Paras stalor ed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum vitalun Dolor tusima olatiup aculis sed semper sit ame</p>
						</div>
					</div> -->
				</div>
				<?php for($i=0 ; $i < count($client_slider); ++$i) {?>
				<div class="modal fade" id="exampleModalCenter3<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true" style="z-index:9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          
        <h5 class="modal-title" id="exampleModalCenterTitle3<?php echo $i; ?>"><?php echo lang($client_slider[$i], 'name'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo lang($client_slider[$i], 'opinion');?>
      </div>
      <div class="modal-footer">
          
      	<?php if(!is_ar_lang()) { ?>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
      <?php } else { ?>
      	<button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
      <?php } ?>
        </div>
    </div>
  </div>
</div>
<?php } ?>
				
