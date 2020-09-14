<?php

  //echo("funcionando");

  $nome = addslashes($_POST["name"]);
  $email = addslashes($_POST["email"]);
  $mensagem = addslashes($_POST["message"]);

  $to = "contato@harmonycortinas.com.br";
  $subject = "contato - Harmony decoracoes";

  //echo($nome);
  //echo("variaveis 1 ok");

  $body = "Nome: ".$nome."\r\n".
          "Email: ".$email."\r\n". 
          "Mensagem: ".$mensagem;
  
  //echo($body);
  //echo("variaveis 2 ok");      

  // o email do from tem que ser o email do host
  $header = "From: contato@harmonycortinas.com.br"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

  //echo($header);
  //echo("variaveis 3 ok");

  if(mail($to, $subject, $body, $header)){
    echo("Mensagem enviada com sucesso!");
  }else{
    echo("A mensagem não pode ser enviada, tente novamente ou entre em contato pelo e-mail: contato@harmonycortinas.com.br");
  }

  // Dorme por 3 segundos
  sleep(5);

  echo("<script>history.go(-1);</script>");


?>