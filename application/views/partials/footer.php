<footer class="footer_area white_f">
	<div class="footer_widgets row m0">
		
		<aside class="f_widgets_item">
			<div class="f_logo">
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/footer/<?php if(isset($footer->img)) echo $footer->img; ?>" alt="" />
			</div>
		</aside>
		
		<aside class="f_widgets_item">
			<div class="f_contact">
				<div class="f_title">
					<h3><?php echo lang($footer, 'title1'); ?></h3>
				</div>
				<p><?php echo lang($footer, 'desc1'); ?></p>			   
			</div>
		</aside>
		<aside class="f_widgets_item">
			<div class="f_link">
				<div class="f_title">
					<h3><?php echo lang($footer, 'title2'); ?></h3>
				</div>
				<ul class="list">
					<li><a target="_blank" href="mailto:<?php echo $footer->mail ?>"><span><?php if(isset($footer->mail)) echo $footer->mail; ?></span></a></li>
					<li><a target="_blank" href="tel:<?php echo $footer->mob; ?>" dir="<?php if(is_ar_lang()) {?>ltr<?php } ?>"><?php if(isset($footer->mob)) echo $footer->mob; ?></a></li>
					<li><a target="_blank" href="tel:<?php echo $footer->fixed; ?>" dir="<?php if(is_ar_lang()) {?>ltr<?php } ?>"><?php if(isset($footer->fixed)) echo $footer->fixed; ?></a></li>
				</ul>
			</div>
		</aside>
		<aside class="f_widgets_item">
			<div class="f_link">
				<div class="f_title">
					<h3><?php echo lang($footer, 'title3'); ?></h3>
				</div>
				<ul class="list">
					<?php for ($i=0; $i < count($social); ++$i) {?>
				<li>
				    <a target="_blank" href="<?php echo $social[$i]->social_link; ?>">
				    <i class="ion-social-<?php echo $social[$i]->social_title; ?>"></i></a></li>
				<?php } ?>
				</ul>
			</div>
			
		</aside>
		<!-- <aside class="f_widgets_item">
			<div class="f_link">
				<div class="f_title">
					<p>©copyrights 2018, All Rights Reserved for <a href="../index.php">Dimajde</a> Developer BY <img src="./img/targus_logo.ico" href="https://www.targusme.com/"></p>
				</div>
				</ul>
			</div>
		</aside> -->
	<div class="footer_copyright">
		<div class="left_text">
			<p><?php echo lang($copy_rights, 'title'); ?>
			    <a href="<?php if(isset($copy_rights->img_url)) echo  $copy_rights->img_url; ?>" target="_blank">
			        <img src="<?php echo base_url().'assets/img/targus.ico';?>" /></a></p>
		</div>
	</div>
		<!-- <div class="middle_text">
			<ul class="list">
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Tumblr</a></li>
				<li><a href="#">Pinterest</a></li>
			</ul>
		</div>
		<div class="right_text">
			<ul class="list">
				<li class="active"><a href="index-rtl.php">Ar</a></li>                        
			</ul>
		</div>
	</div> -->
</footer>
