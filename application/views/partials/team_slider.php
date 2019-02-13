<style>
  .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
  margin: 0;
  padding: 0;
  border: none;
  box-shadow: none;
  text-align: center;
  }
  .kv-avatar {
  display: inline-block;
  }
  .kv-avatar .file-input {
  display: table-cell;
  width: 213px;
  }
  .kv-reqd {
  color: red;
  font-family: monospace;
  font-weight: normal;
  }
</style>
<?php
  require_once('phpmailer/class.phpmailer.php');
  require_once('phpmailer/class.smtp.php');
  
  $mail = new PHPMailer();
  
  
  //$mail->SMTPDebug = 3;                               // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'www.dimajde.com';                  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'info@dimajde.com';    // SMTP username
  $mail->Password = 'h0%_XNk^~0Yi';                         // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                    // TCP port to connect to
  
  $message = "";
  $status = "false";
  
  if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  	if( $_POST['fname'] != '' AND $_POST['email'] != '') {
  
  		$name = $_POST['fname'];
  		$email = $_POST['email'];
  		
  
  		$subject = isset($subject) ? $subject : 'New Message | Job Apply Form';
  
  		$botcheck = $_POST['submit'];
  
          $toemail = $_POST['join']; // Receiver Email Address
          $toname = 'Dimajde Team';                // Receiver Name
  
          if( $botcheck == 'submit' ) {
  
          	$mail->SetFrom( $email , $name );
          	$mail->AddReplyTo( $email , $name );
          	$mail->AddAddress( $toemail , $toname );
          	$mail->Subject = $subject;
  
          	$name = isset($name) ? "Name: $name<br><br>" : '';
          	$email = isset($email) ? "Email: $email<br><br>" : '';
  
          	$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';
  
          	$body = "$name $email $referrer";
  
              //mail attachment
          	if ( isset( $_FILES['avatar-1'] ) && $_FILES['avatar-1']['error'] == UPLOAD_ERR_OK ) {
          		$mail->IsHTML(true);
          		$mail->AddAttachment( $_FILES['avatar-1']['tmp_name'], $_FILES['avatar-1']['name'] );
          	}
  
          	$mail->MsgHTML( $body );
          	$sendEmail = $mail->Send();
  
          	if( $sendEmail == true ):
          		echo '<script language ="javascript" >';
          		echo 'alert( "We have successfully received your Message and will get Back to you as soon as possible.")';
          		$status = "true";
          		echo '</script>';
          	else:
          		echo '<script language ="javascript" >';
          		 echo 'alert("Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />")';
          		$status = "false";
          		echo '</script>';
  
          	endif;
          } else {
          	$message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
          	$status = "false";
          }
        } else {
        	$message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        	$status = "false";
        }
      } else {
      	$message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
      	$status = "false";
      }
  
      // $status_array = array( 'message' => $message, 'status' => $status);
      // echo json_encode($status_array);
      ?>
<section class="meet_team_area">
  <div class="container">
    <div class="team_inner text-center">
      <h4><?php echo lang($titles, 'team'); ?></h4>
      <div class="team_slider owl-carousel">
        <?php for($i=0; $i<count($team_slide); ++$i) {?>
        <div class="item">
          <div class="team_item">
              
              <img src="<?php echo base_url(); ?>assets/img/team/<?php if (isset($team_slide[$i]->img)) {
                echo $team_slide[$i]->img;
                }?>" alt="">
              <div class="hover text-center">
                  <ul class="list">
                    <li><i class="ion-link" style="font-size:20px; color:#f3f3f3;" aria-hidden="true"></i></li>
                  </ul>
                  <a href="javascript::void(0)" data-toggle="modal" data-target=".bd-example-modal-lg4<?php echo $i; ?>">
                    <?php echo lang_const("Read more"); ?>
                </a>
              </div>
              </div>
              </div>
              <?php } ?>
      </div>
      <?php for($i=0; $i<count($team_slide); ++$i) {?>
            <div class="modal fade bd-example-modal-lg4<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center"><?php echo lang($team_slide[$i], 'name'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets/img/team/<?php if (isset($team_slide[$i]->img)) {
                echo $team_slide[$i]->img;
                }?>" alt="" style="width: 60%;
    border-radius: 20px;">
      </div>
      <div class="col-md-4">
          <h6><?php echo lang($team_slide[$i], 'pos'); ?></h6>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 m-auto">
          <ul class="list">
									<li><a href="<?php if (isset($team_slide[$i]->twitter)) {
										echo $team_slide[$i]->twitter;
									}?>"><i class="ion-social-twitter"></i></a></li>
									<li><a href="<?php if (isset($team_slide[$i]->fb)) {
										echo $team_slide[$i]->fb;
									}?>"><i class="ion-social-facebook"></i></a></li>
									<li><a href="<?php if (isset($team_slide[$i]->linkedin)) {
										echo $team_slide[$i]->linkedin;
									}?>"><i class="ion-social-linkedin"></i></a></li>
								</ul>
      </div>
    </div>
  </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo lang_const("Close"); ?></button>
      </div>
    </div>
  </div>
</div>
        <?php }?>
      <?php if (!is_ar_lang()) {
        ?>
      <button type="button" class="btn btn-primary b1a" data-toggle="modal" data-target="#exampleModalCenter6" style="margin-top: 5%">
      Join Our Team
      </button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title" id="exampleModalCenterTitle">Jop Form</h5>
              <img src="./assets/img/CV.svg" alt="" style="width: 4%;<?php if(!is_ar_lang()) {?> margin-left:1%<?php } else { ?>margin-left:1%<?php } ?>">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- markup -->
              <!-- note: your server code `avatar_upload.php` will receive `$_FILES['avatar']` on form submission -->
              <!-- the avatar markup -->
              <form class="form form-vertical" action="<?php echo base_url(); ?>about" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-4 text-center">
                    <div class="kv-avatar">
                      <div class="file-loading">
                        <input id="avatar-1" name="avatar-1" type="file" required>
                      </div>
                    </div>
                    <div class="kv-avatar-hint"><small> <?php echo lang_const('Select file < 2MB'); ?></small></div>
                  </div>
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="email">Email Address<span class="kv-reqd">*</span></label>
                          <input type="email" class="form-control" name="email" required>
                          <input type="hidden" name="join" value="<?php if(isset($gen->mail1)) echo $gen->mail1; ?>" class="form-control" >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="fname">First Name<span class="kv-reqd">*</span></label>
                          <input type="text" class="form-control" name="fname" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <hr>
                      <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary"><?php echo lang_const("Submit"); ?></button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </form>
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
            <!-- the fileinput plugin initialization -->
          </div>
          <!-- <div class="modal-footer">
            </div> -->
        </div>
      </div>
      <?php
        } else {
        	?>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter6" style="margin-top: 5%;">انضم لفريقنا</button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="text-align: right;">
              <img src="./assets/img/CV.svg" alt="" style="width: 4%;">
              <h5 class="modal-title" id="exampleModalCenterTitle" style="text-align: right;">
              طلب الانضمام
              <h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- <div class="file-loading">
                <input id="input-b7" name="input-b7[]" multiple type="file" class="file" data-allowed-file-extensions='["pdf", "txt", "doc"]'>
                </div> -->
              <form class="form form-vertical" action="<?php echo base_url(); ?>about" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-4 text-center">
                    <div class="kv-avatar">
                      <div class="file-loading">
                        <input id="avatar-1" name="avatar-1" type="file" required>
                      </div>
                    </div>
                    <div class="kv-avatar-hint"><small><?php echo lang_const('Select file < 2MB'); ?></small></div>
                  </div>
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="email">الايميل<span class="kv-reqd">*</span></label>
                          <input type="email" class="form-control" name="email" required>
                          <input type="hidden" name="join" value="<?php if(isset($gen->mail1)) echo $gen->mail1; ?>" class="form-control" >
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="fname">الاسم<span class="kv-reqd">*</span></label>
                          <input type="text" class="form-control" name="fname" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <hr>
                      <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary">إرسال</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </form>
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
          </div>
          <div id="kartik-file-errors"></div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-primary" name="uploadCV" title="Your custom upload logic">إرسال</button>
          </div> -->
      </div>
    </div>
  </div>
  <?php
    }?>
  <script>
    var btnCust = '<button type="button" class="btn btn-secondary" title="" ' +
    '</button>';
    $("#avatar-1").fileinput({
    	overwriteInitial: true,
    	maxFileSize: 2000,
    	showClose: false,
    	showCaption: false,
    	browseLabel: '<?php if(!is_ar_lang()) { ?> Browse <?php } else { ?> تصفح <?php } ?>',
    	removeLabel: '<?php if(!is_ar_lang()) { ?> Remove <?php } else { ?> حذف <?php } ?>',
    	browseIcon: '<i class="fa fa-folder-open-o" aria-hidden="true"></i>',
    	removeIcon: '<i class="fa fa-trash" aria-hidden="true"></i>',
    	removeTitle: '<?php if(!is_ar_lang()) { ?>Cancel or browse another file<?php } else { ?>الغاء أو تصفح ملف آخر<?php } ?>',
    	elErrorContainer: '#kv-avatar-errors-1',
    	msgErrorClass: 'alert alert-block alert-danger',
    	defaultPreviewContent: '<img src="<?php echo base_url(); ?>assets/img/curriculum (1).svg" alt="Your Avatar" style="width:100%;height:100%">',
    	layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    	allowedFileExtensions: ["pdf"]
    });
  </script>
  </div>
  </div>
</section>