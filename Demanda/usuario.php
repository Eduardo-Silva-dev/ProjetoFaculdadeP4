<?php include 'repository/conUsuario.php';
require 'repository/protect.php';
protect(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles\menu.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="styles\relatorioUsu.css" media="screen" />
  <script type="text/javascript" src="jquery/jquery.js"></script>
  <script type="text/javascript" src="jquery/additional-methods.min..js"></script>
  <script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
  <script type="text/javascript" src="jquery/messages_pt_BR.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#formcadastro").validate({
        rules: {
          nome: {
            required: true,
            maxlength: 100,
            minlength: 4
          },
          sobrenome: {
            required: true,
            maxlength: 100,
            minlength: 5
          },
          email:{
            required: true,
                  email: true,
                  remote: {
                    url: "repository/verificarEmail.php",
                    type: "post",
                    data: {
                      email: function() {
                        return $("#email").val();
                      }
                    }
                  }
          },
          senha: {
            required: true,
            minlength: 8,
            maxlength: 16
          },
          cpf: {
            required: true,
            minlength: 11,
            maxlength: 11
          }
        },
        messages : {
          email : {
                    required : "É necessário informar um login.",
                    remote : "Esse login já está em uso."
                }
        },
        submitHandler: function(form) {
          form.submit()
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
            <a href="repository/validacaoLogin.php?logout">
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
            cadastro de usuarios
          </div>
        </div>
        <div class="corpo card card-body">
          <form method="POST" action="usuario.php" id="formcadastro">
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
                <select id="setor" name="setor" class="form-control" required="required">
                  <option value="">---</option>
                  <option value="Ensino Fundamental I">Ensino Fundamental I</option>
                  <option value="Ensino Fundamental II">Ensino Fundamental II</option>
                  <option value="Ensino Medio">Ensino Medio</option>
                  <option value="CPD">CPD</option>
                  <option value="Arquivo">Arquivo</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <div class="container">
                  <label>Nivel de Acesso : </label>
                  <label>Alto</label>
                  <input type="radio" value="1" name="niveldeacesso">
                  <label>Medio</label>
                  <input type="radio" value="2" name="niveldeacesso">
                  <label>Baixo</label>
                  <input type="radio" value="3" name="niveldeacesso" checked="checked">
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
            <button type="submit" class="btn btn-primary" name="confirmar"  <?php inserirUser(); ?>>cadastrar</button>
          </form>
          </ul>
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

</html>