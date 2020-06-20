<?php 


require 'include/PHPMailer.php';
require 'include/SMTP.php';
require 'include/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPAuth = "true";
$mail->Debugoutput='html';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = "true"; 
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->isHTML(true);
$mail->Username = "
seifounfathallah@gmail.com
"; //hedha l mail ili bcih tab3eth bih inty 
$mail->Password = "Sifo1234"; //mdp l mail mte3ik 
$mail->setFrom("
seifounfathallah@gmail.com
"); //nafss l mail mte3ik t3awdou 
$mail->Subject = "3aslema"; //sujet mta3 l mail mte3ik
$mail->Body= "Nous avons reçue votre réclamation et nous allons la traiter dans les plus brefs délais ";
$mail->AltBody ="Nous avons reçue votre réclamation et nous allons la traiter dans les plus brefs délais "; //ikteb ili t7eb
$mail->AddAddress("seifounfathallah@gmail.com"); // lmail mta3 l 3abed ili bich tab3athlou 
if (!$mail->send()) 
    { 
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else
    {
    }
$mail->smtpClose();

?>      

 <script>
        Javascript:alert('Mail sent !');
        </script>




