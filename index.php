<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email"  type="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                </div>

                <!-- aqui uma mensagem de erro é mostrada para o(a) usuario(a) -->

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                    <div class='text-danger' style="padding-bottom: 10px;">
                      Usuário ou senha inválido(s)!
                    </div>
               
                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] == 'nao_autenticado') { ?>

                <div class='text-danger' style="padding-bottom: 10px;">
                  Faça o login para poder acessar as páginas!
                </div>

                <? } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>