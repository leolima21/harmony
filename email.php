<?php

  $nome = addslashes($_POST["name"])
  $email = addslashes($_POST["email"])
  $mensagem = addslashes($_POST["message"])

  $to = "leo.mendes21@hotmail.com";
  $subject = "contato - Harmony decoracoes";

  $body = "Nome: " .$nome "\n".
          "Email: " .$email "\n". 
          "Mensagem: " .$mensagem "\n";
          
  $header = "From: tucca@harmonydeco.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

  if(mail($to, $subject, $body, $header)){
    echo("Contato enviado com sucesso!");
  }else{
    echo("O contato n pode ser enviado, tente novamente ou entre em contato pelo e-mail: harmonycortinas@gmail.com");
  }

?>