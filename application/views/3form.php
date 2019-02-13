     
         
<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'gator4104.hostgator.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'infomessage@magmtl.com';    // SMTP username
$mail->Password = '*123@2017';                         // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$message = "";
$status = "false";
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
if ( isset($_POST['job'] )) {
    if(!empty($_POST['form_name']) && !empty($_POST['form_email'])&& !empty($_POST['form_message'])) {

        $name = $_POST['form_name'];
        $email = $_POST['form_email'];
        $message = $_POST['form_message'];

        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        
        $name1 = $_POST['form_name1'];
        $postal = $_POST['postal_code'];
        $subject = isset($subject) ? $subject : 'New Message | Job Apply Form';

        $botcheck = $_POST['job'];

        $toemail =   $_POST["send_email1"]; // Receiver Email Address
        $toname = 'magmtl';                // Receiver Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "First Name: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $name1 = isset($name1) ? "Last Name: $name1<br><br>" : '';
            $message = isset($message) ? "Message: $message<br><br>" : '';
            
            $phone = isset($name) ? "Phone: $phone<br><br>" : '';
            $address = isset($address) ? "Address: $address<br><br>" : '';
            $city = isset($city) ? "City: $city<br><br>" : '';
            $postal = isset($postal) ? "Postal code: $postal<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $name1 $email $phone $address $city $postal $message $referrer";

            //mail attachment
            if ( isset( $_FILES['form_attachment'] ) && $_FILES['form_attachment']['error'] == UPLOAD_ERR_OK ) {
                $mail->IsHTML(true);
                $mail->AddAttachment( $_FILES['form_attachment']['tmp_name'], $_FILES['form_attachment']['name'] );
            }

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
               
                $status = "true"; 
echo' <div class="alert alert-success">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.
</div>'
?>
<?php
            else:
               
                $status = "false";
            echo ' <div class="alert  alert-danger">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><br />
</div>';?>
 
<?php
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
}
else if ( isset($_POST['cost'] )) {
          if($_POST['form_email'] != '' ) {

        $name = $_POST['name'];
        $name1 = $_POST['name1'];
        $email = $_POST['form_email'];
        $curves = $_POST['curves'];
        $phone = $_POST['Difficulty'];
        $message = $_POST['Width'];
              $height = $_POST['Height'];
               $sex = $_POST['form_sex'];
               $sex1 = $_POST['form_sex1'];
        $subject = isset($subject) ? $subject : 'New Message | Estimator Form';

$botcheck = $_POST['cost'];

        $toemail =   $_POST["send_email2"]; // Receiver Email Address
        $toname = 'magmtl';  // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "First Name: $name<br><br>" : '';
            
            $name1 = isset($name1) ? "Last Name: $name1<br><br>" : '';
            $height = isset($height) ? "Height: $height" : '';
            $sex = isset($sex) ? " $sex<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
            $message = isset($message) ? "Width: $message" : '';
            $sex1 = isset($sex) ? "$sex1<br><br>" : '';
            $curves = isset($curves) ? "How many windows of this size? : $curves<br><br>" : '';


            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $name1 $phone $curves $height $sex $message $sex1 $email  $referrer";
       //mail attachment
            if ( isset( $_FILES['form_attachment'] ) && $_FILES['form_attachment']['error'] == UPLOAD_ERR_OK ) {
                $mail->IsHTML(true);
                $mail->AddAttachment( $_FILES['form_attachment']['tmp_name'], $_FILES['form_attachment']['name'] );
            }

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
               
                $status = "true"; 
echo' <div class="alert alert-success">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.
</div>'
?>
<?php
            else:
               
                $status = "false";
            echo ' <div class="alert  alert-danger">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><br />
</div>';?>
 
<?php
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
}
else if ( isset($_POST['contact'] )){
        if( $_POST['form_name'] != '' AND $_POST['form_email'] != '' ) {

        $name = $_POST['form_name'];
        $name1 = $_POST['form_name1'];
        $email = $_POST['form_email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postal = $_POST['postal_code'];
        $phone = $_POST['form_phone'];
        $message = $_POST['form_message'];

        $subject = isset($subject) ? $subject : 'New Message | Contact Form';

        $botcheck = $_POST['contact'];

        $toemail =   $_POST["send_email"]; // Receiver Email Address
        $toname = 'magmtl';  // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "First Name : $name<br><br>" : '';
            $name1 = isset($name1) ? "Last  Name : $name1<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
            $address = isset($address) ? "address: $address<br><br>" : '';
            $city = isset($city) ? "City: $city<br><br>" : '';
            $postal = isset($address) ? "	Postal Code: $postal<br><br>" : '';
            $message = isset($message) ? "Message: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $name1 $email $phone $address $city $postal $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

              if( $sendEmail == true ):
               
                $status = "true"; 
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
?>
<?php
            else:
               
                $status = "false";
            echo ' <div class="alert  alert-danger">
  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
 Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><br />
</div>';?>
 
<?php
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
}
}
?>
