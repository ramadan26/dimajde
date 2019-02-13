<section class="speciallization_area ab_spec white_cl text-center">
 <div class="container">
  <h3 class=" white"><?php echo lang($titles, 'aspec'); ?></h3>    
  <div class="row">
    <div class="spec-slider owl-carousel">


     <?php for ($i=0 ; $i < count($aboutSpec); ++$i) { ?>
       <div class="text-center">
        <div class="spec_item text-center">
         <div class="spec_text text-center">
           <img class="text-center" style="width: 20%;margin:auto" src="<?php echo base_url(); ?>assets/img/About_page/<?php if(isset($aboutSpec[$i]->img)) echo $aboutSpec[$i]->img; ?>" alt="">
           <h4><?php echo character_limiter(lang($aboutSpec[$i], 'title1'), 20); ?></h4>
           <p><?php if(is_ar_lang()){ echo character_limiter(lang($aboutSpec[$i], 'desc'), 150);}else{echo character_limiter(lang($aboutSpec[$i], 'desc'), 120);} ?></p>
           <a href="javascript::void(0);" data-toggle="modal" data-target="#exampleModalCenter1<?php echo $i; ?>"><?php echo lang($aboutSpec[$i], 'link'); ?></a>

           <!-- Modal -->
           
         </div>
       </div>
     </div>
    
   <?php } ?>
   </div>
   <?php for ($i=0; $i < count($aboutSpec); $i++) { ?>
   <div class="modal fade" id="exampleModalCenter1<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo lang($aboutSpec[$i], 'title1'); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo lang($aboutSpec[$i], 'desc');?>
        </div>
        <div class="modal-footer">
         <?php if(!is_ar_lang()) { ?>
          <img src="<?php echo base_url(); ?>assets/img/About_page/<?php if(isset($aboutSpec[$i]->img_modal)) echo $aboutSpec[$i]->img_modal; ?>" alt="" style="width: 10%; margin-right: 70%;">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
        <?php } else { ?>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
       <?php } ?>
     </div>
   </div>
 </div>
</div> 
<?php } ?>
</div>
</div>
</section>
