<?php 
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $arquivo = fopen('arquivo.hd', 'a');

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = implode('#', $_POST);

    fwrite($arquivo, $texto);
    echo $texto;
?>