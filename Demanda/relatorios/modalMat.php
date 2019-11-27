<?php include '../repository/conMaterial.php';
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
<?php $mat = materialSelect();?>
    <div class="modalP container-fluid" style="background-color: #007bff;"> <!-- Cor do fundo -->
        <div class="modalUs card card-body">
            <form method="POST" action="../repository/conMaterial.php?id=<?php echo $user['id'] ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="produto">produto</label>
                        <input type="text" class="form-control" id="produto" placeholder="produto" name="nomedoproduto" value="<?php echo $mat['nomedoproduto'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Quantidade">Quantidade</label>
                        <input type="number" class="form-control" id="Quantidade" placeholder="Quantidade" name="quantidade" value="<?php echo  $mat['quantidade'] ?>">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Descricao">Descrição</label>
                        <input type="text" class="form-control" id="Descricao" placeholder="Descricao" name="descricao" value="<?php echo  $mat['descricao'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="DataE">Data de Entrada</label>
                        <input type="text" class="form-control" id="DataE" placeholder="Data de Entrada" name="datadeentrada" value="<?php echo $mat['datadeentrada'] ?>">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    </div>
                    <div class="form-group col-md-4">
                    </div>
                    <div class="form-group col-md-6">
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="alterarMat" >salvar</button>
                <a href="produtos.php" class="btn btn-danger"  type="submit" >Sair</a>   
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