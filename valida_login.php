<?php 
    
    $usuario_autenticado = false;

    $usuario_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'teste@teste.com.br', 'senha' => 'abcde'),
    );


    foreach($usuario_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {

            $usuario_autenticado = true;
            
        }

        
    }

        if($usuario_autenticado) {
            echo 'Usuário autenticado';
        } else {
            header('location: index.php?login=erro');
        }

    // echo '<pre>';
    // print_r($usuario_app);
    // echo '</pre>';

?>