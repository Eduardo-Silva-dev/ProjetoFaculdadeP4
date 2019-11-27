<?php include '../repository/conUsuario.php';
require '../repository/protect.php';
protect(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/menu.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../styles/relatorioUsu.css" media="screen" />
</head>
<body>
<nav class="main-menu"> <!-- Início do menu lateral -->
        <ul>
          <li>
            <a href="../index.php">
              <i class="fa fa-home fa-2x"></i>
              <span class="nav-text">
                Dashboard
              </span>
            </a>
          </li>
          <li class="has-subnav">
            <a href="../usuario.php">
              <i class="fa fa-laptop fa-2x"></i>
              <span class="nav-text">
                cadastro de Usuarios
              </span>
            </a>
          </li>
          <li class="has-subnav">
            <a href="../material.php">
              <i class="fa fa-list fa-2x"></i>
              <span class="nav-text">
                Cadastro de Produtos
              </span>
            </a>
          </li>
          <li class="has-subnav">
            <a href="../demandas.php">
              <i class="fa fa-folder-open fa-2x"></i>
              <span class="nav-text">
                Demandas
              </span>
            </a>
          </li>
          <li>
            <a href="../relatorios/usuarios.php">
              <i class="fa fa-bar-chart-o fa-2x"></i>
              <span class="nav-text">
                Relatorio de Usuarios
              </span>
            </a>
          </li>
          <li>
            <a href="../relatorios/produtos.php">
              <i class="fa fa-font fa-2x"></i>
              <span class="nav-text">
                Relatorio de Produtos
              </span>
            </a>
          </li>
          <li>
            <a href="../relatorios/demanda.php">
              <i class="fa fa-table fa-2x"></i>
              <span class="nav-text">
                Relatorio de Demandas
              </span>
            </a>
          </li>
          <li>
            <a href="../confi/solicitacao.php">
              <i class="fa fa-map-marker fa-2x"></i>
              <span class="nav-text">
                Solicitações
              </span>
            </a>
          </li>
          <li>
            <a href="../confi/suporte.php">
              <i class="fa fa-info fa-2x"></i>
              <span class="nav-text">
                Suporte
              </span>
            </a>
          </li>
        </ul>
        <ul class="logout">
          <li>
            <a href="../login.php">
              <i class="fa fa-power-off fa-2x"></i>
              <span class="nav-text">
                Logout
              </span>
            </a>
          </li>
        </ul>
      </nav>
    <?php $user = userSelect(); ?>
    <div class="modalP container-fluid" style="background-color: #007bff;"> <!-- Cor do fundo -->
        <div class="modalUs card card-body">
            <form method="POST" action="../repository/conUsuario.php?id=<?php echo $user['id'] ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="nome" name="nome" value="<?php echo $user['nome']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="sobrenome" name="sobrenome" value="<?php echo $user['sobrenome']; ?>">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" value="<?php echo $user['senha']; ?>">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="cpf">CPF</label>
                        <input type="number" class="form-control" id="cpf" name="cpf" value="<?php echo $user['cpf']; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEstado" name="setor">Setor</label>
                        <select id="inputEstado" name="setor" class="form-control">
                            <option selected><?php echo $user['setor']; ?></option>
                            <option name="setor" value="Ensino Fundamental I">Ensino Fundamental I</option>
                            <option name="setor" value="Ensino Fundamental II">Ensino Fundamental II</option>
                            <option name="setor" value="Ensino Medio">Ensino Medio</option>
                            <option name="setor" value="CPD">CPD</option>
                            <option name="setor" value="Arquivo">Arquivo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nivel de Acesso : </label>
                        <div class="container">
                            <label>Alto</label>
                            <input type="radio" value="1" name="niveldeacesso">
                            <label>Medio</label>
                            <input type="radio" value="2" name="niveldeacesso">
                            <label>Baixo</label>
                            <input type="radio" value="3" name="niveldeacesso">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="alterarUser">>Alterar</button>
                <a href="usuarios.php" class="btn btn-danger"  type="submit" >Sair</a>   
            </form>
        </div>
    </div>
    <div class="container-fluid" style="background:#212121;text-align:center;">
        <footer>
            <span style="color:white;"> comixão e gozadinha produções</span>
        </footer>
    </div>
</body>

</html>