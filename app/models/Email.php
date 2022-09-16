<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email extends Model{
    public function send($email,$content){
        $mail = new PHPMailer(TRUE);
        try {
            /*Server settings */ 
            $mail->SMTPDebug = 2; 
            $mail->isSMTP(); 
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sonphamminh1197@gmail.com';
            $mail->Password   = 'Minhson123456';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
        
            /* Recipients */
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($email, 'Joe User');
        
            /* Attachments */
            $mail->addAttachment('http://example.com/attachments/file1.pdf');         
        
            /* Content */
            $mail->isHTML(true); 
            $mail->Body    =  $content;
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
        }
    }
   
}
?>