<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>usuario</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles\menu.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles\relatorioUsu.css" media="screen" />
</head>
<body  onload="document.querySelector('.modalP').style.display='none'">
<div class="row">
<div class="col col-sm-1 bg-primary">

      <nav class="main-menu">
        
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
</div>
<div class="col col-sm-11 bg-primary">
<div class="mainp container shadow p-3 mb-5 bg-primary rounded">
  <div class="cabeP container">
  <div class="cabecalho card card-body shadow p-3 mb-5 bg-white rounded">
   cadastro de Material
  </div>
  </div>
<div class="corpo card card-body">
<form method="POST" action="inserir.php">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="codigo">Codigo</label>
      <input type="number" class="form-control" id="number" placeholder="codigo do produto" name="number">
    </div>
    <div class="form-group col-md-6">
      <label for="produto">Produto</label>
      <input type="text" class="form-control" id="produto" placeholder="digite o nome do produto.." name="produto">
    </div>
  
  </div>
  <hr>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="quantidade">Quantidade</label>
      <input type="number" class="form-control" id="quantidade" placeholder="quantidade" name="quantidade">
    </div>
    <div class="form-group col-md-6">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" placeholder="Descricão.." name="descricao">
    </div>
  </div>
  <hr>
  <div class="form-row">
  
  <div class="form-group col-sm-4">

   <label for="dataE">Data de entrada</label>
   <input type="date" class="form-control" name="dataEp">

    </div>
    <hr>
<div class="container">
  <button type="submit" class="btn btn-primary">cadastrar</button>
  </div>
</form>


  </ul>
</nav>
</div><!--container do main-->
</div>
</div><!--fim da segudna col-->
</div>  

<div class="container-fluid" style="background:#212121;text-align:center;">
  <footer>
    <span style="color:white;"> comixão e gozadinha produções</span>
</footer>
</div>

</body>
</html>