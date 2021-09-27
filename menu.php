<header id="cabecalho">
    <hgroup>
        <br/>
        <br/>
        <h1>E. M. AMÉRICA RIBEIRO LOPES</h1>
        <h2>HISTÓRIA, TRADIÇÃO E INOVAÇÃO!</h2>
    </hgroup>
   
    <img  id="icone" src= <?php echo $foto; ?> />
    <nav id="menu">
        <h1>Menu Principal</h1>
        <ul onmouseout="mudaFoto('<?php echo $pagina; ?>	')">
            <li onmouseover="mudaFoto('home')" ><a href="index.php">Início<a></li>
            <li onmouseover="mudaFoto('instituicao')" ><a href="instituicao.php">Instituição</a></li>
            <li onmouseover="mudaFoto('facebook')"><a href="https://www.facebook.com/america.lopes.39545" target="_blank">Redes Sociais</a></li>
            <li onmouseover="mudaFoto('calendario')"><a href="calendario.php">Calendário</a></li>
            <li onmouseover="mudaFoto('aluno')"><a href="/escolar" target="_blank">Portal do Aluno</a></li>
            <li onmouseover="mudaFoto('contato')"><a href="fale-conosco.php">Fale conosco</a></li>
        </ul>
    </nav>
</header>