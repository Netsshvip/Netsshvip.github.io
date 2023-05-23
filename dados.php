<?php

if(isset($_POST(['email']) && !empty ($_POST[email]);

$name=addslashes($_POST['name']);
$email=addslashes($_POST['email']);
$message=addslashes($_POST['message']);

$to = "vtzinx3@gmail.com";

$subject = "MEU SITE";

$body = "nome:".$nome. "/n".

"email:".$email."/n".

"mensagem:".$mensagem;

$hearder = "from: joaovictoroliveira@gmail.com"."/r/n"
                ."reply-to:".$email
                ."x=mailer:php/".phpversion();
if(mail($to,$subject,$body,$hearder)){


     echo("SUCESSO")
     
}else{

        echo("FALHA AO ENVIAR")";"
}


?>
