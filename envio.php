<?php
$mail = new PHPMailer(true);
$mail->IsSMTP(); 
$mail->CharSet = 'UTF-8';
//$mail->true;
$mail->Host = "smtp.gmail.com"; // Servidor SMTP
$mail->SMTPSecure = "tls"; // conexão segura com TLS
$mail->Port = 587; 
$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
$mail->Username = "fabio79siqueira@gmail.com"; // SMTP username
$mail->Password = "F@b101971"; // SMTP password
$mail->From = "fabio79siqueira@gmail.com"; // From
$mail->FromName = "Fabio Siqueira Paula" ; // Nome de quem envia o email
$mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
$mail->WordWrap = 50; // Definir quebra de linha
$mail->IsHTML = true ; // Enviar como HTML
$mail->Subject = $assunto ; // Assunto
$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML
$mail->AddAttachment('CurriculoFabio.pdf'); //Anexa o Arquivo

if(!$mail->Send()) // Envia o email
{ 
echo "Erro no envio da mensagem";
} 
?>