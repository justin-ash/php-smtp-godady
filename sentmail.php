require_once(APPPATH.'third_party/phpmailer/src/PHPMailer.php');
require_once(APPPATH.'third_party/phpmailer/src/SMTP.php');
$mail = new \PHPMailer(true);
//Server settings
$mail->isSMTP();
//$mail->SMTPDebug = 4;                                // Enable verbose debug output
$mail->CharSet = "utf-8";                                   // Set mailer to use SMTP
$mail->Host = 'localhost';  // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'ssl';       

$mail->Port = 25;//587; 
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
//Recipients
$mail->setFrom('noreply@mail.com', 'From name');
$mail->addAddress($mailData['to_email']);     // Add a recipient
//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Subject";
$mail->Body    ="Html contetn";
$mail->send();
return  true;