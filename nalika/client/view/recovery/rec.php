<html>

<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>

</body>

</html>

<?php
require '../../view/PHPMailer/include/PHPMailer.php';
require '../../view/PHPMailer/include/SMTP.php';
require '../../view/PHPMailer/include/Exception.php';
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

include "../../core/userC1.php";

$user1C = new userC1();
$recover1C = new recoverC();
$i = 0;

if (!empty($_POST['email'])) {
    if ($user1C->emailExists($_POST['email'])) {

        $recup_email = htmlspecialchars($_POST['email']);

        $recup_code = "";
        for( $i ; $i < 8 ; $i++ ){
          $recup_code .= mt_rand(0,9);
        }

        $pseudo = $user1C->findName($recup_email);

        if($recover1C->emailExists($recup_email) == $recup_email){
          $recover1C->update($recup_email,$recup_code);
        }
        else{
          $recover1C->addrecover($recup_code,$recup_email);
          echo "done";
        }

$mail->Username = "
seifounfathallah@gmail.com
"; //hedha l mail ili bcih tab3eth bih inty 
$mail->Password = "Sifo1234"; //mdp l mail mte3ik 
$mail->setFrom("
seifounfathallah@gmail.com
"); //nafss l mail mte3ik t3awdou 
$mail->Subject = "Récupération de mot de passe !"; //sujet mta3 l mail mte3ik
$mail->Body ="Bonjour ". $pseudo . "cliquez <a href=localhost/client/view/recovery/rec.php?section=code&code=". $recup_code .">ici</a>pour reinitialiser votre mot de passe !<br>
                   
                    
                       Ceci est un email automatique, merci de ne pas y répondre
                   "; //ikteb ili t7eb
$mail->AddAddress($recup_email); // lmail mta3 l 3abed
if (!$mail->send()) 
    { 
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    
$mail->smtpClose();
}
}
?>      
<script>
        Javascript:alert('Mail sent !');
        </script>




