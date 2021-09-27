<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Calendário Escolar</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="_css/form.css">
	<link rel="icon" href="_imagens/americalopes.ico" sizes="32x32"/>

</head>
<script  language="javascript" src="_javascript/funcoes.js"></script>
<body>
<body>
    <div id="interface">
    <?php
		$foto = "_imagens/calendario.png"; 
		$pagina = 'calendario';
		include("menu.php"); 
	?>
		<section id="corpo-full">
            <article>
                <header id="cabecalho-artigo">
                    <h1>Calendário Escolar</h1>
                </header>
				<figure class="foto-legenda">
					<img src="_imagens/CalendarioAcademico.jpg">
				</figure>	
            </article>
        </section>

		<?php include("footer.php");?>
	</div>	
</body>
</html>