<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Fale Conosco</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="_css/form.css">
    <link rel="icon" href="_imagens/americalopes.ico" sizes="32x32"/>

</head>
<script  language="javascript" src="_javascript/funcoes.js"></script>
<body>
<body>
    <div id="interface">
        <?php
            $foto = "_imagens/contato.png"; 
            $pagina = 'contato';
            include("menu.php"); 
        ?>

<section id="corpo-full">
            <article id="noticia-principal">
                <header id="cabecalho-artigo">
                    <h1>Endereço</h1>
                </header>
            </article>
        </section>
        Rua Dr. Maninho, nº 72,  Centro
        <br/>
        Entre Folhas - MG, CEP: 35324-000
        <br/>
        Fone: (33) 3324-6106
        <br/>
        E-mail: emamericaribeiro@gmail.com
        <br/>
        <form class="form" method="POST" action = "./email.php">
            <fieldset id="usuario">
                <legend>Identificação do Usuário</legend>
                    <p><label for="cNome">Nome:</label>
                        <br/>
                        <input type="text" name="name" id="cNome" size="20" maxlength="30"placeholder="Nome Completo"/></p>

                    <p><lable>E-mail:</label>
                        <br/>
                        <input type="email" name="email" id="cEmail" size="20" maxlength="40"/></p>
                    
                    <p><lable>Assunto:</label>
                        <br/>
                        <input type="text" name="assunto" id="cAssunto" size="20" maxlength="40"/></p>

                    <p><label>Mensagem:</label>
                        <br/>
                    <textarea name="message" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
            </fieldset>
            <input type="image" name="tEnviar"src="_imagens/botao-enviar.png"/>
        </form>
        <?php include("footer.php");?>
    </div>  
</body>
</html>