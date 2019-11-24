<?php include 'repository/validacaoLogin.php';?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles\login.css">
</head>

<body class="bg-light">
  <div class="principal container">
    <div class="card card-header bg-light shadow-lg p-3 mb-5 bg-white rounded">
      <h3 style="text-align:center;">Sistema de Demandas</h3>
      <hr>
      <div class="row">
        <div clas="col">
          <div class="container">
            <img src="imagens\capa1.jpg" alt="Imagem responsiva" class="capa  img-fluid">
          </div>
        </div>
        <div clas="col">
          <div class="resp card card-body bg-white">
            <form method="POST" action="login.php">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" autocomplete="on" placeholder="Seu email" name="email">
              </div>
              <div class="form-group">
                <label for="psw">Senha</label>
                <input type="password" class="form-control" id="psw" placeholder="Senha" name="senha">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="lembrar">
                <label class="form-check-label" for="lembrar">lembrar senha</label>
              </div>
              <a name="recuperarSenha" href="recuperarSenha.php" class="btn btn-success"  type="submit" >Esuqeci minha Senha</a>
              <input id="" class="btn btn-primary" type="submit" value="entrar" name="confirmar"<?php validarUser(); ?>>
            </form>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
</body>

</html>