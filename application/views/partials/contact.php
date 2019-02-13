<section class="banner_map">
			<!-- div id="mapBox2" class="mapBox row m0" data-lat="<?php if(isset($con->maplat)) echo $con->maplat; ?>" data-lon="<?php if(isset($con->maplng)) echo $con->maplng; ?>" data-zoom="15" data-marker="assets/img/map-marker.png" data-info="54B, Tailstoi Town 5238 La city, IA 522364" data-mlat="<?php if(isset($con->maplat)) echo $con->maplat; ?>" data-mlon="<?php if(isset($con->maplng)) echo $con->maplng; ?>">
			</div> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.1679641282803!2d36.23399381456863!3d33.497006880760594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518de49324fb219%3A0x398afcfc3681465a!2sLebanon+Embassy!5e0!3m2!1sen!2s!4v1537381600419" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
		<section class="contact_area2">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="left_contact_details">
							<h1><?php echo lang($titles, 'contact'); ?></h1>
							<h2><span><?php echo lang($con, 'addr'); ?></span></h2>
							<p><?php echo lang($con, 'addr1'); ?></p>
							<a <?php if(is_ar_lang()) {?>dir="ltr"<?php } ?> href="tel:<?php if(isset($con->phone)) echo $con->phone; ?>"><?php if(isset($con->phone)) echo $con->phone; ?></a>
							<a <?php if(is_ar_lang()) {?>dir="ltr"<?php } ?> href="tel:<?php if(isset($con->phone_1)) echo $con->phone_1; ?>"><?php if(isset($con->phone_1)) echo $con->phone_1; ?></a>
							<a href="mailto:<?php if(isset($con->mail)) echo $con->mail; ?>" ><span><?php if(isset($con->mail)) echo $con->mail; ?></span></a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="right_contact_form">
							<h4><?php echo lang($titles, 'contact1'); ?></h4>
							<?php if(!is_ar_lang()) {?>
							<form method="post" action="<?php echo base_url() ?>contact" class="row contact_us_form">
							<div class="form-group col-md-6 hidden" style="display: none;">
									<input type="text" class="hidden form-control" value="<?php if(isset($con->mail)) echo $con->mail; ?>"  name="sendEmail" placeholder="Adam Warlock" required>
								</div>
								<div class="form-group col-md-6">
									<input type="text" $companyEmail="focon$companyName-control" id="name" name="name" placeholder="Adam Warlock" required>
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
									<input type="hidden" name="contact" value="<?php if(isset($gen->mail)) echo $gen->mail; ?>" class="form-control" >
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" id="pos" name="pos" placeholder="Your Position" required>
								</div>
								<div class="form-group col-md-12">
									<textarea class="form-control" name="opinion" id="message" rows="1" placeholder="Here goes your message" required></textarea>
								</div>
								<div class="form-group col-md-12">
									<button type="submit" value="submit" class="btn order_s_btn form-control">Send Message <i class="ion-paper-airplane"></i></i></button>
								</div>
								<!-- <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
								<div class="error-message">We're sorry, but something went wrong</div> -->
							</form>
							<?php } else { ?>
							<form method="post" action="<?php echo base_url() ?>contact" class="row contact_us_form">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" id="name" name="name" placeholder="اكتب اسمك" required>
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control" id="email" name="email" placeholder="الايمل الخاص بك" required>
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="form-control" id="pos" name="pos" placeholder="منصبك الحالي" required>
								</div>
								<div class="form-group col-md-12">
									<textarea class="form-control" name="opinion" id="message" rows="1" placeholder="اكتب رسالتك هنا" required></textarea>
								</div>
								<div class="form-group col-md-12">
									<button type="submit" name="sendEmail" value="submit" class="btn order_s_btn form-control">أرسال<i class="ion-paper-airplane"></i></button>
								</div>
							</form>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
// $mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'dimajde.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@dimajde.com';    // SMTP username
$mail->Password = 'BuebHyiddemNee3';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if ( isset($_POST['sendEmail'] )) {
        if(!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['pos']) && !empty($_POST['opinion'])) {
					$name = $_POST['name'];
					$email = $_POST['email'];
					$pos = $_POST['pos'];
					$opinion = $_POST['opinion'];
					$subject = isset($subject) ? $subject : 'New Message | Job Apply Form';
					$botcheck = $_POST['sendEmail'];
					$toemail = $_POST['contact']; // Receiver Email Address
        	$toname = 'Dimajde Team';                // Receiver Name
        if( true ||  $botcheck == '' ) {
						/// first send email to the company
            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name);
            $mail->AddAddress( $toemail , $toname );
						$mail->Subject = $subject;
            $name = isset($name) ? "Name: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $pos = isset($pos) ? "Possition: $pos<br><br>" : '';
            $opinion = isset($opinion) ? "Message: $opinion<br><br>" : '';
            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';
            $body = "$name $email $pos  $opinion $referrer";
						$mail->MsgHTML( $body );
						$sendEmail = $mail->Send();
						if ($sendEmail == true) {
								$status = "true";
								echo '<script language ="javascript" >';
								if(!is_ar_lang())
								{
								echo 'alert("Thank you, Your message successfully sent")';
								}
								else
								{
									echo 'alert("شكراً لتواصلك معنا، تم الارسال بنجاح")';
								}
								echo '</script>';
						}
						else
						{
							echo $sendEmail;
                $status = "false";
                echo ' <div class="alert  alert-danger">
                <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
                Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><br />
								</div>';
						}
				}
				else 
				{
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
		}
		else 
		{
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
	}
}
?>


	<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/vendors/popup/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/parallax/parallax.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/pagepiling/jquery.pagepiling.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/smoothscroll.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo base_url(); ?>assets/js/gmaps.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/map-active.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
