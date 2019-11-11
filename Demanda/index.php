<?php require 'repository/validacaoLogin.php';
validarUser(); ?>
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
  <link redl="stylesheet" href="styles\modalAviso.css">
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
        <? php // echo $_SESSION['logado']; 
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
          <!--<li><a href="#"><i class=""><span class="sumir">suporte<span></i></a></li>-->
        </ul>
      </nav>
    </div>
    <div class="contP col-12 col-sm-9" style="margin-top:50px;">
      <div class="cont card-header bg-light shadow-lg p-3 mb-5 bg-white rounded">
        <h1 style="text-align:center;">Dashboard</h1>
        <hr>
        <div class="con1 card-body">
          <div class="conteudo row ">
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <div class="mr-5"><span style="color:red;"> +2 </span> novas Mensagens!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Visualizar Detalhes</span>
                  <span class="float-right">
                    <i class="fa fa-book" style="font-size:70px; transform: rotate(30deg);"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <div class="mr-5"><span style="color:red;"> +4 </span>Novos Usuarios</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Visualizar Detalhes</span>
                  <span class="float-right">
                    <i class="fa fa-users" style="font-size:70px; transform: rotate(30deg);"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <div class="mr-5"><span style="color:red;"> +9 </span>Solicitações</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Visualizar</span>
                  <span class="float-right">
                    <i class="fa fa-thumbs-o-up" style="font-size:70px; transform: rotate(30deg);"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="b container">
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 70rem;">
              <div class="card-header ">
                Graficos
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
        <!--fim do conteudo-->
      </div>
      <!--fim do col-->
    </div>
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
  <!-- Modal de Aviso
  <div id="zeroum" class="zeroum animacao">
    <div class="mod" id="mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Seja Bem-Vindo, <?php //echo "$logado ";
                                                                                  ?></h5>
          </div>
          <div class="modal-body">
            <p>Esse é o nosso mais novo sistema de estoques e demandas de materiais<p>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="document.getElementById('zeroum').style.display='none'" class="btn btn-danger">ok</button>
          </div>
        </div>
      </div>
    </div>-->
  </div>
  <!--  <script src="jscp\usuario.js"></script> -->
</body>

</html>