<?php
include "conexao/conexao.php";
include 'repository/conDemandas.php';
include 'repository/conMaterial.php';
include 'repository/conUsuario.php';
require 'repository/validacaoLogin.php';
validarUser();
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Demandas</title>
  <style>
    #sub a {
      height: 30px;
      width: 150px;
    }

    #sub {

      width: 105px;
    }
  </style>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles\index1.css">
  <link rel="stylesheet" href="styles\modal.css">
</head>

<body class="bg-white">
  <?php session_start(); ?>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#"><i class="fa fa-dashboard"> Dashboard</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
      </ul>
      <?php //$_SESSION['logado'];
      ?>
      <form class="form-inline my-2 my-lg-0">
        <a href="login.php"> <i class="fa fa-external-link"></i></a>
      </form>
    </div>
  </nav>
  <div class="row">
    <div class="men col col-sm-2">
      <nav class="navegation bg-primary">
        <ul class="navegMenu sidebar navbar-nav">
          <li> <a href="index.php"><i class="fa fa-home"><span class="sumir">Home<span></i></a></li>
          <li> <a href=""><i class="fa fa-folder-open"><span class="sumir">Cadastros<span></i></a>
            <ul class="submenu">
              <li><a href="usuario.php"><i class="fa fa-user"><span class="sumir">Usuarios<span></i></a></li>
              <li><a href="material.php"><i class="fa fa-cube"><span class="sumir">Produtos<span></i></a></li>
            </ul>
          </li>
          <li> <a href="demandas.php"><i class="fa fa-book"><span class="sumir">Demandas<span></i></a></li>
          <li> <a href=""><i class="fa fa-area-chart"><span class="sumir">Relatorios<span></i></a>
            <ul class="submenu" id="sub">
              <li><a href="relatorios/usuarios.php"><i class="fa fa-users"><span class="sumir">Usuarios<span></i></a></li>
              <li><a href="relatorios/produtos.php"><i class="fa fa-cube"><span class="sumir">Produtos<span></i></a></li>
              <li> <a href="relatorios/demanda.php"><i class="fa fa-book"><span class="sumir">Demandas<span></i></a></li>
            </ul>
          </li>
          <li><a href="#"><i class=""><span class="sumir">suporte<span></i></a></li>
        </ul>
      </nav>
    </div>
    <div class="col-12 col-sm-9" style="text-align:center; justify-content:center; align-items:center;">
      <div class="container">
        <div class="card card-header">Cadastro de Demandas</div>
        <div class="card card-body shadow-sm p-3 mb-5 bg-white rounded">
          <form method="POST" action="demandas.php">
            <div class="form-row">
              <div class="form-group col-md-4">
                <?php $user = selectUser() ?>
                <label for="inputEstado">Nome</label>
                <select class="form-control" id="nome" name="nome">
                  <?php while ($linha1 = $user->fetch_assoc()) { ?>
                    <?php echo '<option value="' . $linha1['id'] . '">' . $linha1['nome'] . " " . $linha1['sobrenome'] . '</option>'; ?> <?php } ?>
                </select>
                <label for="inputEstado">Setor</label>
                <select class="form-control" id="setor" name="setor">
                  <?php $user = selectUser() ?>
                  <?php while ($linha = $user->fetch_assoc()) { ?>
                    <?php echo '<option value="' . $linha['id'] . '">' . $linha['setor'] . '</option>'; ?> <?php } ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputEstado">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade">
                <label for="inputEstado">Produto</label>
                <select class="form-control" id="produto" name="produto">
                  <?php $user = selectMat() ?>
                  <?php while ($linha = $user->fetch_assoc()) { ?>
                    <?php echo '<option>' . $linha['nomedoproduto'] . '</option>'; ?> <?php } ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="observação">Observação</label>
                <input type="area" class="form-control" name="observacao" id="obs" style="height:150px;" placeholder="observação do produto....">
              </div>
              <hr>
              <div class="container">
                <button type="submit" class="btn btn-primary" name="confirmar" <?php inserirDem(); ?>>cadastrar</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="sticky-footer bg-primary">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Your Website 2019</span>
      </div>
    </div>
  </footer>
  <!--  <script src="jscp\usuario.js"></script> -->
</body>

</html>