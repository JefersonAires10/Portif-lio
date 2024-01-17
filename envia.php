<?php

    $nome = addcslashes($_POST['nome']);

    $email = addcslashes($_POST['email']);

    $telefone = addcslashes($_POST['telefone']);

    $mensagem = addcslashes($_POST['mensagem']);


    $to = "jefersoninformatica10@gmail.com";
    $assunto = "Contato - Site";
    $corpo = "Nome: ".$nome. "\r\n".
            "Email: ".$email. "\r\n".
            "Telefone: ".$telefone. "\r\n".
            "Mensagem: ".$mensagem; 

    $cabeca = "From: jeffsouzaah@gmail.com"."\r\n".
                "Reply-To: ".$email."\r\n".
                "X-Mailer: PHP/".phpversion();  

    if(mail($to, $assunto, $corpo, $cabeca)) {
        echo("Email enviado com sucesso!");
    } else {
        echo("O Email não pode ser enviado");
    }
?>