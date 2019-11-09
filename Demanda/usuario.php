<?php
include "conexao/conexao.php";
include 'repository/conUsuario.php'; 
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> cadastro Usuario</title>

  <style>
    #sub a {
      height: 30px;
      width: 150px;
    }

    #sub {

      width: 105px;
    }
  </style>
  <?php 
session_start();/*
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['login'];*/
  ?>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="styles\index1.css">
  <link rel="stylesheet" href="styles\modal.css">
</head>

<body class="bg-white">
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#"><i class="fa fa-dashboard"> Dashboard</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <?php
       // echo "$logado ";
        ?>
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



        </ul>

      </nav>

    </div>
    <div class="col-12 col-sm-9" style="text-align:center; justify-content:center; align-items:center;">
      <div class="container">
        <div class="card card-header">cadastro de usuarios</div>

        <div class="card card-body shadow-sm p-3 mb-5 bg-white rounded">

          <form method="POST" action="usuario.php">

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="nome" name="nome">
              </div>
              <div class="form-group col-md-6">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="sobrenome" name="sobrenome">
              </div>

            </div>
            <hr>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
              </div>
              <div class="form-group col-md-6">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
              </div>

            </div>
            <hr>
            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf">
              </div>

              <div class="form-group col-md-4">
                <label for="inputEstado">Setor</label>

                <label class="Setor">Setor</label>
                  <select class="form-control" id="setor" name="setor">
                    <option value="Ensino Fundamental I">Ensino Fundamental I</option>
                    <option value="Ensino Fundamental II">Ensino Fundamental II</option>
                    <option value="Ensino Medio">Ensino Medio</option>
                    <option value="High School">High School</option>
                    <option name="CPD">CPD</option>
                    <option name="Arquivo">Arquivo</option>
                  </select>

              </div>
              <div class="form-group col-md-6">
                <label>Nivel de Acesso : </label>
                <div class="container">
                  <label>Alto</label>
                  <input type="checkbox" value= 1 name="niveldeacesso">
                  <label>Medio</label>
                  <input type="checkbox"value= 2 name="niveldeacesso">
                  <label>Baixo</label>
                  <input type="checkbox" value= 3 name="niveldeacesso">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Concordo com os termos e condições
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="confirmar"<?php inserirUser();?>>cadastrar</button>
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