<?php

	$recepient_email    = "ventas@clubnauticoteques.com.mx"; //recepient
    $subject            = ""; //email subject line
    
    $sender_name = filter_var($_POST["s_name"], FILTER_SANITIZE_STRING); //capture sender name
    $sender_email = filter_var($_POST["s_email"], FILTER_SANITIZE_STRING); //capture sender email
    $sender_tel = filter_var($_POST["s_tel"], FILTER_SANITIZE_STRING); //capture sender email
    $sender_city = filter_var($_POST["s_city"], FILTER_SANITIZE_STRING); //capture sender email
	$subject = filter_var($_POST["s_subject"], FILTER_SANITIZE_STRING); //capture sender subject
    $sender_message = filter_var($_POST["s_message"], FILTER_SANITIZE_STRING); //capture message
	

	
	//php validation
    if(strlen($sender_name)<2){
        echo "<script>alert('El nombre es muy corto'); location.href='http://clubnauticoteques.com/contacto.php';</script>";
    }
	if (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
	  echo "<script>alert('El correo es invalido); location.href='http://clubnauticoteques.com/contacto.php';</script>";
	}
    if(strlen($sender_message)<2){
		echo "<script>alert('El mensaje es muy corto, porfavor escribe algo más'); location.href='http://clubnauticoteques.com/contacto.php';</script>";
    }
	
	
		//header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$sender_name."\r\n"; 
        $headers .= "Reply-To: ".$sender_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //message text

		$body .="Contacto - Club Náutico Teques 

               Nombre:".$sender_name."
               Email: ".$sender_email."
               Tel: ".$sender_tel."
               Ciudad: ".$sender_city."
               Asunto: ".$subject."
               Comentario: ".$sender_message."
                 "; 

	
       $headers = "From:".$sender_email. "\n" .
        "Reply-To: ".$sender_email. "\n" .
        "X-Mailer: PHP/" . phpversion();
       


	 $sentMail = @mail($recepient_email, $subject, $body, $headers);
	if($sentMail) //output success or failure messages
	{	
	echo "<script>alert('Correo enviado'); location.href='http://clubnauticoteques.com/contacto.php'; </script>";
	}



?>



