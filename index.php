<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Escola Municipal América Ribeiro Lopes</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<link rel="icon" href="_imagens/americalopes.ico" sizes="32x32"/>
</head>
<script  language="javascript" src="_javascript/funcoes.js"></script>
<body>
	<div id="interface">
    <?php 
        $foto = "_imagens/entre_folhas.png"; 
        $pagina = 'entre_folhas';
        include("menu.php");
    ?>
    <section id="corpo">
        <article id="noticia-principal">
            <h2>Bem-vindos</h2>
            <p>Lembrem-se de que a educação é o que abre as portas para a liberdade e é o que permite que nós possamos escolher os caminhos que iremos tomar em nossas vidas. 
            <p>Encare os desafios, estude mais sobre aquilo que tem dificuldade, encontre a motivação que precisa para aprofundar-se nos assuntos e jamais desista!</p>
            <figure class="foto-legenda">
                <img src="_imagens/alegria_de_viver.jpg">
                <figcaption>
                    <h3>Educação é a chave para o futuro!</h3>
                </figcaption>
            </figure>
        </article>
    </section>
    <aside id="lateral">
        <h1>Outras Notícias</h1>
        <h2>Oficina de Costura</h2>
        <figure class="foto-legenda2">
            <img src="_imagens/oficina_costura.jpg">
        </figure>
        <h2>Atenção</h2>
        <figure class="foto-legenda2">
            <img src="_imagens/morar_legal.jpg">
            </figure>
        <p>O atendimento do programa Morar Legal retoma as atividades na próxima segunda-feira, dia 12.</p>
        <p>Se você fez o agendamento pelo telefone, basta comparecer na sede do Centro de Referência da Assistência Social (CRAS) munido de documentos pessoais e comprobatórios de posse do terreno.</p>
        <p>Vale lembrar que, na ocasião, é preciso estar usando máscara e seguir todas as medidas sanitárias estipuladas pela Secretaria Municipal de Saúde. </p>
        <p>Caso não tenha horário marcado, basta agendar pelo telefone 3324-6678. </p>
        <p>Uma cidade melhor é a gente que faz!</p>
    </aside>
    <?php include("footer.php");?>
	</div>	
</body>
</html>