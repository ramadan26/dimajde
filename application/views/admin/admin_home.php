<!DOCTYPE html>
   <?php  $this->load->view('admin/admin_header');?>
   
 <body>
<section id="container">
<!--header start-->
    <?php  $this->load->view('admin/admin_nav');?>

    
    	<?php  $this->load->view('admin/admin_sidebar');?>
        
        <!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
    	<div class="typo-agile">
            <h3 style="font-weight: bold;">TargusMe Offers</h3>
            <?php 
			
					/*$my_url = 'https://www.dropbox.com/sh/nk6jhfih2d94thk/AADgOTZ1UTdxa6G_4AO7DX1na?dl=0/';
					//$url = 'http://www.targusme.com/ADV/';
					$base = 'https://www.dropbox.com/';
					
					// Pull in the external HTML contents
					$contents = file_get_contents($my_url);
					
					// Use Regular Expressions to match all <img src="???" />
					preg_match_all( '/<img[^>]*src=[\"|\'](.*)[\"|\']/Ui', $contents, $out, PREG_PATTERN_ORDER);
					
					foreach ( $out[1] as $k=>$v ){ // Step through all SRC's
					
						// Prepend the URL with the $base URL (if needed)
						if ( strpos( $v, 'http://' ) !== true ) $v = $base . $v;
					
						// Output a link to the URL
						echo '<a href="' . $v . '">' . $v . '</a><br/>';
					}*/
					
					// set up basic connection
					/*$ftp_server = "http://www.targusme.com/ADV/";
					$conn_id = ftp_connect($ftp_server);
					
					// login with username and password
					$ftp_user_name = "targusme";
					$ftp_user_pass = "($(AO=e=d%C,";
					$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
					
					// get contents of the current directory
					$contents = ftp_nlist($conn_id, ".");
					
					// output $contents
					var_dump($contents);*/
			?>
            
           
            <div class="slider-container">
              <div class="slider">
              
                
                <?php
				/*$files = glob("C:\xampp\htdocs\admin_cms_ci\assets\images\hero\*.*");
				
				for ($i=0; $i<count($files); $i++) {
					$image = $files[$i];
					print $image ."<br />";
					echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
				}*/
				
				/*$my_url = 'https://www.dropbox.com/sh/nk6jhfih2d94thk/AADgOTZ1UTdxa6G_4AO7DX1na?dl=0/';
				//$url = 'http://www.targusme.com/ADV/';
				$base = '';
				
				// Pull in the external HTML contents
				$contents = file_get_contents($my_url);
				
				// Use Regular Expressions to match all <img src="???" />
				//preg_match_all( '/<img[^>]*src=[\"|\'](.*)[\"|\']/Ui', $contents, $out, PREG_PATTERN_ORDER);
				preg_match_all( '/ADV?.(png)/', $contents, $out, PREG_PATTERN_ORDER);
				
				foreach ( $out[1] as $k=>$v ){ // Step through all SRC's
				
					// Prepend the URL with the $base URL (if needed)
					if ( strpos( $v, 'http://' ) !== true ) $v = $base . $v;
				
					// Output a link to the URL
					echo '<div class="slider__item">';
					  echo '<img src="'. $v.'" alt="">';
					echo '</div>';
					//echo '<a href="' . $v . '">' . $v . '</a><br/>';
				}*/
				
				?>
                
                <?php
					/*$dir = base_url('assets/targus_img/');
					$files = glob($dir.'*.*');
					for ($i=0; $i<count($files); $i++) {
						$image = $files[$i];
						unlink($image);
					}*/
					$url = 'https://www.targusme.com/Offer/';
					for ($i = 1; $i < 5; $i++) {
						$img = $url.'OFFER'.$i.'.png';
						if ( @getimagesize($img) !==  false ){							
							echo '<div class="slider__item">';
							  echo '<img src="'. $img.'" alt="" class="img-responsive">';
							echo '</div>';
						}
					}
					
					/*$url="https://www.targusme.com/ADV/ADV4.png";
					$contents=file_get_contents($url);
					$save_path="assets/copy/image.png";
					file_put_contents($save_path,$contents);*/
				?>
                <!--<img src="https://www.targusme.com/ADV/ADV4.png" />-->
              </div>
                <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
                  <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
                </div>
                <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
                  <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
                </div>
            </div>
        </div>
    </section>

        <?php  $this->load->view('admin/admin_footer');?>

 </body>

<script>
 $(document).ready(function() {
	 $(".nav .active").removeClass("active");
	 $(".nav .dash").addClass("active");
 });
 
 $(".slider-container").ikSlider({
	  speed: 500
	});
 
 

 </script>
</html>
