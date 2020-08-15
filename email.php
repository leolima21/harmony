<?php

  $nome = addslashes($_POST["name"])
  $email = addslashes($_POST["email"])
  $mensagem = addslashes($_POST["message"])

  $to = "harmonycortinas@gmail.com";
  $subject = "contato - Harmony decoracoes";

  $body = "Nome: ".$nome."\r\n".
          "Email: ".$email."\r\n". 
          "Mensagem: ".$mensagem;
   
  // o email do from tem que ser o email do host
  $header = "From: tucca@harmonydeco.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

  if(mail($to, $subject, $body, $header)){
    echo("Mensagem enviada com sucesso!");
  }else{
    echo("A mensagem não pode ser enviada, tente novamente ou entre em contato pelo e-mail: harmonycortinas@gmail.com");
  }

  // Dorme por 3 segundos
  sleep(3);

  echo ("<script>history.go(-1);</script>");


?>