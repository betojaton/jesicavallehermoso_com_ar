<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
	empty($_POST['email']) 		||
	empty($_POST['message'])	||
	!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
	echo "No arguments Provided!";
	return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// create email body and send it	
$to = 'jesicapellegrini2019@gmail.com'; // put your email
$email_subject = "Formulario de contacto enviado por:  $name";
$email_body = "Has recibido un nuevo mensaje. \n\n".
" Here are the details:\n \nNombre: $name \n ".
"Email: $email_address\n Mensaje \n $message";
$headers = "From: jesicapellegrini2019@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>