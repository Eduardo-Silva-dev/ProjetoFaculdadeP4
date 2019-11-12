<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>usuario</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../styles/menu.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../styles/relatorioUsu.css" media="screen" />
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
                   <a href="relatorios\demanda.php">
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
    Relatorio de Demandas
  </div>
  </div>
<div class="corpo card card-body">
<div class="filtro form-group">
 
  <input type="text" class="filtrar form-control" name="" id="filtro" aria-describedby="helpId" placeholder="Filtro de Pesquisa..." >
  
</div>
<hr>
<table class="table table-hover shadow p-3 mb-5 bg-white rounded">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <th>Descrição</th>
      <th>Data de entrada<th>
    </tr>
  </thead>
  <tbody id="tbody"  onclick="document.querySelector('.modalP').style.display='block'">
    <tr>
      <th >001</th>
      <td>Monitor</td>
      <td>1</td>
      <td>monitor samsung HDMI</td>
      <td>05/11/2019</td>
    </tr>
    <tr>
      <th >002</th>
      <td>teclado</td>
      <td>10</td>
      <td>modelo C3tech</td>
      <td>05/11/2019</td>
    </tr>
    <tr>
      <th >003</th>
      <td>Mouse</td>
      <td>9</td>
      <td>Marca c3tech</td>
      <td>05/11/2019</td>
    </tr> 
    <tr>
      <th >003</th>
      <td>Mouse</td>
      <td>9</td>
      <td>Marca c3tech</td>
      <td>05/11/2019</td>
    </tr> 
    <tr>
      <th >003</th>
      <td>Mouse</td>
      <td>9</td>
      <td>Marca c3tech</td>
      <td>05/11/2019</td>
    </tr> 
    <tr>
      <th >003</th>
      <td>Mouse</td>
      <td>9</td>
      <td>Marca c3tech</td>
      <td>05/11/2019</td>
    </tr>
    <tr>
      <th >003</th>
      <td>Mouse</td>
      <td>9</td>
      <td>Marca c3tech</td>
      <td>05/11/2019</td>
    </tr>  
    <tr>
      <th >003</th>
      <td>Mouse</td>
      <td>9</td>
      <td>Marca c3tech</td>
      <td>05/11/2019</td>
    </tr> 


  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div><!--container do main-->
</div>
</div><!--fim da segudna col-->
</div>  
<div class="modalP container-fluid">
<div class="modalUs card card-body">
<form method="POST" action="">

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
  
  <div class="form-group col-md-2">
    <label for="cpf">CPF</label>
    <input type="number" class="form-control" id="cpf" name="cpf">
  </div>

<div class="form-group col-md-4">
    <label for="inputEstado">Setor</label>
    <select id="inputEstado" class="form-control">
      <option selected>Escolher...</option>
      <option name="setor">Ensino Fundamental I</option>
      <option name="setor">Ensino Fundamental II</option>
      <option name="setor">Ensino Medio</option>
      <option name="setor">CPD</option>
      <option name="setor">Arquivo</option>
    </select>
  </div>
  <div class="form-group col-md-6">
   <label>Nivel de Acesso : </label>
   <div class="container">
   <label>Alto</label>
   <input type="checkbox">
   <label>Medio</label>
   <input type="checkbox">
   <label>Baixo</label>
   <input type="checkbox">
   </div>
  </div>
  </div>
<button type="submit" class="btn btn-primary">Concluir</button>
<button type="" class="btn btn-danger">Deletar</button>
<button type="" class="btn btn-success">salvar</button>
<button type="" class="btn btn-info">Historico</button>
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