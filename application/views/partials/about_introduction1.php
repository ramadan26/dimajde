<div class="row">
	<?php for($i = 0 ; $i < count($intro1); ++$i) { ?>
    <div class="col-lg-4 col-sm-12">
      <div class="spec_item text-center">
        <div class="spec_text">														
          <img src="<?php echo base_url(); ?>assets/img/About_page/<?php if(isset($intro1[$i]->img)) echo $intro1[$i]->img; ?>" alt="">
          <h4><?php echo lang($intro1[$i], 'title'); ?></h4>
          <p><?php if(is_ar_lang()){ echo character_limiter(lang($intro1[$i], 'desc'), 110);}else{echo character_limiter(lang($intro1[$i], 'desc'), 120);} ?></p>
          <!-- Button trigger modal -->
          <?php if(!is_ar_lang()) { ?>
            <a href="javascript::void(0);" data-toggle="modal" data-target="#exampleModalCenter<?php echo $i; ?>"><?php echo lang($intro1[$i], 'link'); ?></a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo lang($intro1[$i], 'title'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo lang($intro1[$i], 'desc');?>
                  </div>
                  <div class="modal-footer">
                   
                    <img src="<?php echo base_url(); ?>assets/img/About_page/f28e3-street-light-1-.svg" alt="" style="width: 10%; margin-right: 70%;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          <?php } else { ?>
            <a href="javascript::void(0);" data-toggle="modal" data-target="#exampleModalCenter<?php echo $i; ?>"><?php echo lang($intro1[$i], 'link'); ?></a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo lang($intro1[$i], 'title'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo lang($intro1[$i], 'desc');?>
                  </div>
                  <div class="modal-footer">
                   
                    <img src="<?php echo base_url(); ?>assets/img/About_page/street-light (2).svg" alt="" style="width: 10%; margin-left: 70%;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                  </div>
                </div>
              </div>
            </div>
            
          <?php } ?>
          
        </div>
      </div>
    </div>
  <?php } ?>
</div>                     
</section>
