<?php

session_start();
if(!isset($_SESSION['id_usuario'])){
    header("location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/stylePagPrincipal.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Bag</title>
</head>

<body>
    <div id="cabecalho">
        <h1>Borrow Bag</h1>
    </div>
    <div id="menuOpcoes">
        <ul>
            <li><a id="GG" href="../pages/bagagensTamanhoGG.html" title="GG">Tamanho GG</a></li>
            <li><a id="G" href="../pages/bagagensTamanhoG.html" title="G">Tamanho G</a></li>
            <li><a id="M" href="../pages/bagagensTamanhoM.html" title="M">Tamanho M</a></li>
            <li><a id="P" href="../pages/bagagensTamanhoP.html" title="P">Tamanho P</a></li>
            <li><a id="PP" href="../pages/bagagensTamanhoPP.html" title="PP">Tamanho PP</a></li>
            <div id="sair">
                <a href="../../backEnd/sair.php" name="sair" title="sair">Sair</a>
            </div>
        </ul>
        <br>
        <br>
        <h1>Seja bem vindo ao Borrow Bag!</h1></br>
    </div>
    <section class="slide">
        <img class="imgSlide" src="../img/Captura de Tela (0).png">
        <img class="imgSlide" src="../img/Captura de Tela (02).png">
        <img class="imgSlide" src="../img/Captura de Tela (03).png">
        <img class="imgSlide" src="../img/Captura de Tela (04).png">
        <img class="imgSlide" src="../img/Captura de Tela (05).png">
        <img class="imgSlide" src="../img/Captura de Tela (06).png">
        <img class="imgSlide" src="../img/Captura de Tela (07).png">
        <img class="imgSlide" src="../img/Captura de Tela (08).png">
        <img class="imgSlide" src="../img/Captura de Tela (09).png">
    </section>

    <section id="rodape">
        Siga nossas redes sociais
    </section>

</body>

</html>