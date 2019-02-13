<header class="full_header content-white mobile_menu">
	<div class="float-left">
		<a class="logo">
			
			<img src="<?php if(isset($menu->logo)) echo $menu->logo; ?>" alt="">
		</a>
		<a class="phone" href="tel:3689565656"><i class="lnr lnr-phone-handset"></i> (+070) 3689 56 56 56</a>
	</div>
	<div class="float-right">
		<div class="bar_menu">
			<i class="lnr lnr-menu"></i>
		</div>
	</div>
</header>
	<div class="click-capture"></div>
	<div class="side_menu">
			<span class="close-menu lnr lnr-cross right-boxed"></span>
			<div class="menu-lang right-boxed active">
				<a href="" id="change_lang" class="lang"><?php echo lang_const('switch_to_lang'); ?></a>
			</div>
			<ul class="menu-list right-boxed">
				<li class="<?php  if($active_page == 'home') {echo 'active ';}  ?>	">
					<a href=""><?php echo lang($menu, 'home'); ?></a>
				</li>
				<li class="<?php if($active_page == 'about'){echo 'active ';} ?>">
					<a href="<?php echo base_url()?>pages/about_view.php"><?php echo lang($menu, 'about'); ?></a>
				</li>
				<li class="<?php if($active_page == 'product') {echo 'active ';} ?>">
					<a href="work-list.php"><?php echo lang($menu, 'product'); ?></a>
				</li>
				<li class="<?php if($active_page == 'projects') {echo 'active ';}  ?>">
					<a href="work-masonry.php"><?php echo lang($menu, 'projects');?> </a>
				</li>
				<li class="<?php  if($active_page == 'contact') {echo 'active ';} ?>">
					<a href="contact.php"><?php echo lang($menu, 'contact');?></a>
				</li>
			</ul>
			<div class="menu-footer right-boxed">
				<div class="social-list">
					<a href="" class="icon ion-social-twitter"></a>
					<a href="#" class="icon ion-social-facebook"></a>
					<a href="#" class="icon ion-social-googleplus"></a>
					<a href="#" class="icon ion-social-linkedin"></a>
					<a href="#" class="icon ion-social-dribbble-outline"></a>
				</div>
				<div class="copy">
					<p><?php echo lang($copy_rights, 'title'); ?>
					<a href="<?php if(isset($copy_rights->img_url)) echo  $copy_rights->img_url; ?>">
						<img src="<?php echo base_url(); ?>assets/img/targus.ico" />
					</a>
				</p>
			</div>
			</div>
		</div>
