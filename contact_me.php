<?php
// Check for empty fields
if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	   echo "No arguments Provided!";
	   return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$telefone = $_POST['telefone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'viturino_souza@outlook.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Rodrigo Viturino Freelancer: Contado pelo Formulário:  $name";
$email_body = "Você recebeu uma nova mensagem do formulário de contato do seu site.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nEmail: $email_address;
\nTelefone: $telefone; 
\nMensagem:\n$message";

 
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
// return true;	
header("Location: index.php");
?>