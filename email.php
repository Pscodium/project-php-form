<?php

if(isset($_POST['email']) && !empty($_POST['email']))

$nome = addslashes($_POST['name']);
$servico = addslashes($_POST['service']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "peterson_larson@estudante.sesisenai.org.br";
$subject = "Contato - Serviços de Eletroerosão";
$body = "Nome: ".$nome. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Serviço: ".$servico."\r\n".
        "Descrição: ".$mensagem;
$header = "From: matheus_graciki@estudante.sesisenai.org.br"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("E-mail enviado com Sucesso!");

}else{
    echo("O E-mail não pode ser enviado..");
}



?>