
            <?php

            require_once('phpmailer/class.phpmailer.php');
            require_once('phpmailer/class.smtp.php');

            $mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'targusme.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'webmaster@targusme.com';    // SMTP username
$mail->Password = '*123@2018';                         // SMTP password
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

            $name1 = $_POST['form_name1'];
            $subject = isset($subject) ? $subject : 'New Message | Job Apply Form';

            $botcheck = $_POST['job'];

        $toemail =   $_POST["send_email1"]; // Receiver Email Address
        $toname = 'magmtl';                // Receiver Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Name: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $message = isset($message) ? "Message: $message<br><br>" : '';
            
            $phone = isset($name) ? "Phone: $phone<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $name1 $email $phone   $message $referrer";

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
}
?>


