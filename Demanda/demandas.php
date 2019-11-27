<?php
require_once 'repository/conDemandas.php';
require_once 'repository/conMaterial.php';
require_once 'repository/conUsuario.php';
require 'repository/protect.php';
protect();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Demandas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles\menu.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="styles\relatorioUsu.css" media="screen" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script type="text/javascript" src="jquery/jquery.js"></script>
  <script type="text/javascript" src="jquery/additional-methods.min..js"></script>
  <script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
  <script type="text/javascript" src="jquery/messages_pt_BR.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#formDem").validate({
        rules: {
          nomeUser: {
            required: true
          },
          produto: {
            required: true
          },
          setor: {
            required: true
          },
          codigo: {
            required: true
          },
          descricao: {
            required: true
          },
          observacao: {
            required: true
          },
          cpf: {
            required: true
          },
          quantidade: {
            required: true
          }
        },
        submitHandler: function(form) {
          form.submit()
          <?php inserirUser(); ?>
        }
      })
    })
  </script>
</head>

<body onload="document.querySelector('.modalP').style.display='none'">
  <div class="row">
    <div class="col col-sm-1 bg-primary">
      <nav class="main-menu">
        <ul>
          <li>
            <a href="index.php">
              <i class="fa fa-home fa-2x"></i>
              <span class="nav-text">
                Dashboard
              </span>
            </a>
          </li>
          <li class="has-subnav">
            <a href="usuario.php">
              <i class="fa fa-laptop fa-2x"></i>
              <span class="nav-text">
                cadastro de Usuarios
              </span>
            </a>
          </li>
          <li class="has-subnav">
            <a href="material.php">
              <i class="fa fa-list fa-2x"></i>
              <span class="nav-text">
                Cadastro de Produtos
              </span>
            </a>
          </li>
          <li class="has-subnav">
            <a href="demandas.php">
              <i class="fa fa-folder-open fa-2x"></i>
              <span class="nav-text">
                Demandas
              </span>
            </a>
          </li>
          <li>
            <a href="relatorios/usuarios.php">
              <i class="fa fa-bar-chart-o fa-2x"></i>
              <span class="nav-text">
                Relatorio de Usuarios
              </span>
            </a>
          </li>
          <li>
            <a href="relatorios/produtos.php">
              <i class="fa fa-font fa-2x"></i>
              <span class="nav-text">
                Relatorio de Produtos
              </span>
            </a>
          </li>
          <li>
            <a href="relatorios/demanda.php">
              <i class="fa fa-table fa-2x"></i>
              <span class="nav-text">
                Relatorio de Demandas
              </span>
            </a>
          </li>
          <li>
            <a href="confi/solicitacao.php">
              <i class="fa fa-map-marker fa-2x"></i>
              <span class="nav-text">
                Solicitações
              </span>
            </a>
          </li>
          <li>
            <a href="confi/suporte.php">
              <i class="fa fa-info fa-2x"></i>
              <span class="nav-text">
                Suporte
              </span>
            </a>
          </li>
        </ul>
        <ul class="logout">
          <li>
            <a href="login.php">
              <i class="fa fa-power-off fa-2x"></i>
              <span class="nav-text">
                Logout
              </span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col col-sm-11 bg-primary">
      <div class="mainp container shadow p-3 mb-5 bg-primary rounded">
        <div class="cabeP container">
          <div class="cabecalho card card-body shadow p-3 mb-5 bg-white rounded">
            Demandas
          </div>
        </div>
        <div class="corpo card card-body">
          <form id="formDem" method="POST" action="demandas.php">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label name="produto" for="produto">Produto</label>
                <select name="produto" id="btnproduto" class="form-control">
                <option id="escolher" value=0>Escolher...</option>
                  <?php $mat = selectMat();
                  while ($linhas = $mat->fetch_assoc()) {
                    if ($linhas['id'] == $_SESSION['matid']) {
                      echo ' <option name="produto" selected id="opcao" value =' . $linhas['nomedoproduto'] . '>' . $linhas['nomedoproduto'] . ' </option> ';
                    } else {
                      echo ' <option name="produto" id="opcao" value =' . $linhas['nomedoproduto'] . '>' . $linhas['nomedoproduto'] . ' </option> ';
                    }
                  }
                   ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="nomeUser">Nome</label>
                <select name="nomeUser" id="btnusuario" class="form-control">
                <option id="escolhe" value=0>Escolher...</option>
                  <?php $user = mostraUse();
                  while ($linha = $user->fetch_assoc()) {
                    if ($linha['id'] == $_SESSION['useid']) {
                      echo ' <option name="nomeUser" selected value =' . $linha['nome'] . '>' . $linha['nome'] . ' </option> ';
                    } else {
                      echo ' <option name="nomeUser" value =' . $linha['nome'] . '>' . $linha['nome'] . ' </option> ';
                    }
                  }
                  ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label name="setor" for="setor">Setor</label>
                <input type="text" class="form-control" id="setor" placeholder="Setor" name="setor" value="<?php if (!$_SESSION['setor'] == "") {echo $_SESSION['setor'];} ?>">
              </div>
              <div class="form-group col-md-4">
                <label for="codigo">Codigo</label>
                <input type="text" class="form-control" id="codigo" placeholder="Codigo" value="<?php if (!$_SESSION['codigo'] == "") {echo $_SESSION['codigo'];} ?>" name="codigo">
              </div>
              <div class="form-group col-md-4">
                <label for="cpf">Cpf</label>
                <input type="text" class="form-control" id="cpf" placeholder="Cpf" name="cpf" value="<?php if (!$_SESSION['desc'] == "") { echo $_SESSION['cpf'];} ?>">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="quantidade">Quantidade</label>
                  <input type="number" class="form-control" id="quantidade" placeholder="quantidade" name="quantidade">
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao" value="<?php if (!$_SESSION['desc'] == "") { echo $_SESSION['desc'];} ?>">
              </div>
              <div class="form-group col-sm-6">
                <label for="observacao">Observação</label>
                <input type="textarea" class="form-control" id="observacao" placeholder="obervação do propduto" name="observacao" style="height:100px;">
              </div>
              <div class="container">
                <button type="submit" class="btn btn-primary" id="Deminserir" name="inserirDem" <?php inserirDem();?>>Cadastrar</button>
              </div>
            </div>
        </div>
        <hr>
        </form>
        </nav>
      </div>
      <!--container do main-->
    </div>
  </div>
  <!--fim da segudna col-->
  </div>
  <div class="container-fluid" style="background:#212121;text-align:center;">
    <footer>
      <span style="color:white;"> comixão e gozadinha produções</span>
    </footer>
  </div>
</body>
<script type="text/javascript">
  btnproduto.addEventListener("change", function() {
    let opcao = document.getElementById("btnproduto").value;
    let usuario = document.getElementById("btnusuario").value;

    if (opcao == 0) {
      let codigo = document.getElementById("codigo").value="---";
      let desc = document.getElementById("descricao").value="---";
    } else {
      window.location.href = "repository/conMaterial.php?preencherMat&name=" + opcao;
    }
  });

  btnusuario.addEventListener("change", function() {
    let usuario = document.getElementById("btnusuario").value;
    let opcao = document.getElementById("btnproduto").value;
    if (usuario == 0) {
      let setor = document.getElementById("setor").value="---";
      let cpf = document.getElementById("cpf").value="---";
    } else {
      window.location.href = "repository/conUsuario.php?preencherUser&name=" + usuario;
    }
  });

</script>

</html>