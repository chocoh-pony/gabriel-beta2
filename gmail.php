<?php
if(isset($_POST['email']) && !empty($_POST['email'])){

  $nome = addslashes ($_POST['name']);
  $email =addslashes ($_POST['email']);
  $mensagem =addslashes ($_POST['mensagem']);

  $to = "ponychocoh@gmail.com";
  $subject = "contato - programador BR";
  $body = "Nome: ".$nome. "\r\n";
          "email: " .$email. "\r\n";
          "mensagem: ".$mensagem;
  $header = "forum:tuikugames@gmail.com"."\r\n"."Reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();
  if(mail($to, $subject, $body, $header)){
      echo("email enciado com sucesso!");
  }
  else{
      echo("o email não pode ser enviado");
  }
}






?>