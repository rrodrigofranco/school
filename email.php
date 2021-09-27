<?php
    $enviar = 0;
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $nome = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['message']);

        $to = "comunicacao@americaribeiro.kinghost.net";
        $subject = "Contato - Escola América Ribeiro";
        $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email."\r\n".
            "Mensagem: ".$mensagem;
        $header = "From:comunicacao@americaribeiro.kinghost.net"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
            
        $send_mail = mail($to, $subject, $body, $header);
        if($send_mail){
            //redireciona para onde quiser, neste caso, para index.html
            header('location: /EmailEnviado.html');
        } else {
            //redireciona para onde quiser, neste caso, para index.html
            header('location: /EmailNaoEnviado.html');
        }
        
    }
?>