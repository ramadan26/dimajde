
<header class="full_header ab_mobile_menu mobile_menu">
            <div class="float-left">
                <a class="logo" href="<?php echo base_url(); ?>home">
                	<img src="<?php echo base_url(); ?>assets/img/logo/<?php if(isset($menu->logo)) echo $menu->logo; ?>" alt="">
                	<img src="<?php echo base_url(); ?>assets/img/logo/<?php if(isset($menu->logo)) echo $menu->logo; ?>" alt="">
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
            <div class="menu-lang right-boxed">
			<a href="" id="change_lang" class="lang"><?php echo lang_const('switch_to_lang'); ?></a>
            </div>
            <ul class="menu-list right-boxed">
                <li class="<?php  if($active_page == 'home') {echo 'active ';}  ?>	">
					<a href="<?php echo base_url(); ?>home"><?php echo lang($menu, 'home'); ?></a>
				</li>
				<li class="<?php if($active_page == 'about'){echo 'active ';} ?>">
					<a href="<?php echo base_url(); ?>about"><?php echo lang($menu, 'about'); ?></a>
				</li>
				<li class="<?php if($active_page == 'product') {echo 'active ';} ?>">
					<a href="<?php echo base_url(); ?>products"><?php echo lang($menu, 'product'); ?></a>
				</li>
				
				<li class="<?php  if($active_page == 'contact') {echo 'active ';} ?>">
					<a href="<?php echo base_url(); ?>contact"><?php echo lang($menu, 'contact');?></a>
				</li>
            </ul>
            <div class="menu-footer right-boxed">
                <div class="social-list">
                    <?php for ($i=0; $i < count($social); ++$i) {?>
					<a href="<?php echo $social[$i]->social_link; ?>" class="icon ion-social-<?php echo $social[$i]->social_title; ?>"></a>
					<?php } ?>
                </div>
                <div class="copy">
                	<p><?php echo lang($copy_rights, 'title'); ?>
					<a href="<?php if(isset($copy_rights->img_url)) echo  $copy_rights->img_url; ?>">
						<img src="<?php echo base_url().'assets/img/targus.ico';?>" />
					</a></div>
            </div>
        </div>
        <header class="header_menu_area dark_menu menu_gap">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                   <img src="<?php echo base_url(); ?>assets/img/logo/<?php if(isset($menu->logo)) echo $menu->logo; ?>" alt="">
                   <img src="<?php echo base_url(); ?>assets/img/logo/<?php if(isset($menu->logo)) echo $menu->logo; ?>" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav">
				<li class="<?php  if($active_page == 'home') {echo 'active ';}  ?>	">
					<a href="<?php echo base_url(); ?>home"><?php echo lang($menu, 'home'); ?></a>
				</li>
				<li class="<?php if($active_page == 'about'){echo 'active ';} ?>">
					<a href="<?php echo base_url(); ?>about"><?php echo lang($menu, 'about'); ?></a>
				</li>
				<li class="<?php if($active_page == 'product') {echo 'active ';} ?>">
					<a href="<?php echo base_url(); ?>products"><?php echo lang($menu, 'product'); ?></a>
				</li>
				
				<li class="<?php  if($active_page == 'contact') {echo 'active ';} ?>">
					<a href="<?php echo base_url(); ?>contact"><?php echo lang($menu, 'contact');?></a>
				</li>
			</ul>
                    <ul class="nav navbar-nav navbar-right">
                       <li class="active"><a href="" id="change_lang" class="lang"><?php echo lang_const('switch_to_lang'); ?></a></li>
                    </ul>
                </div>
            </nav>
        </header>
