<?php 
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // estamos trabalhando na mensagem de texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    
    // $texto = implode('#', $_POST);

    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    
    // abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    // escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    //echo $texto;

    header('location: abrir_chamado.php');
    

    
?>