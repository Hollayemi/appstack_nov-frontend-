<?php
     function testInput($data){
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }
    require 'vendor/autoload.php';
         
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMPT;
    use PHPMailer\PHPMailer\Exception; 
    function MyMailer($subject,$to,$message){

        require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require 'vendor/phpmailer/phpmailer/src/Exception.php';
        require 'vendor/phpmailer/phpmailer/src/SMTP.php';
        

        $mail = new PHPMailer();
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.mailtrap.io';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'b5a94aad8ed3d7';               
        $mail->Password   = '02e31b9e82633e';                              
        $mail->Port       = 587;                                   
        

        $mail->SMPTSecure = 'tls';  

        $mail->setFrom('stephanyemmitty@gmail.com', 'Stephen Olayemi');
        $mail->addAddress($to);
        $mail->addReplyTo('stephanyemmitty@gmail.com');

        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        
        if($mail->send()){
            echo 'Message has been sent';

        } else{
            echo  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }




    if(isset($_POST['sendMail'])){
        $firstName  =   testInput($_POST['firstName']);
        $lastName   =   testInput($_POST['lastName']);
        $email      =   testInput($_POST['email']);

        if(!empty($firstName) && !empty($lastName) && !empty($email)){
            MyMailer($firstName,"stephanyemmitty@gmail.com",$lastName);
        }
        
    }
                
?>