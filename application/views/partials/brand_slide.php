<div class="instruction text-center">

</div>
<div class="clients_slider owl-carousel">
	<?php foreach ($brand_slider as $row) { ?>
		<div class="item">
			<img src="<?php echo base_url(); ?>assets/img/brands/<?php if(isset($row->img)) echo $row->img; ?>" alt="">
		</div>
	<?php } ?>
</div>
</div>
</section>
