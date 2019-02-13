<div class="pfsh-counter-area" id="pfsh-counter">
	<div class="pfsh-counter-overlay">
		<div class="container">
			<div class="row">
				<?php foreach ($main_counter as $row) { ?>
					<div class="col-md-3 col-xs-6 counter  text-center">
						<img src="<?php echo base_url(); ?>assets/img/counter/<?php echo $row->img; ?>" style="width: 20%;" />
						<h2 class="timer count-title count-number" data-to="<?php echo $row->counter_num ?>" data-speed="7000"></h2>
						<p class="count-text "><?php echo lang($row, 'title'); ?></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
