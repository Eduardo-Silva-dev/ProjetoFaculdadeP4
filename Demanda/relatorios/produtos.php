<?php include '../repository/conMaterial.php'; 
 include '../conexao/conexao.php';
 require '../repository/protect.php';
protect();
 $itens_por_pagina = 2;
 if(isset($_GET['pagina'])){
 $pagina = intval($_GET['pagina']);}else{
   $pagina = 0;
 }
 $sql = "SELECT * FROM tb_material LIMIT $pagina , $itens_por_pagina";
 $resposta = $con->query($sql) or die($conn->errno);;
 $num = $resposta->num_rows;
 $total = mostraMat();
 $num_total = $total->num_rows;
 $num_pagina = ceil($num_total / $itens_por_pagina);?>
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

<body onload="document.querySelector('.modalP').style.display='none'">
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
            Relatorio de Produtos
          </div>
        </div>
        <div class="corpo card card-body">
          <div class="filtro form-group">
            <input type="text" class="filtrar form-control" name="" id="filtro" aria-describedby="helpId" placeholder="Filtro de Pesquisa...">
          </div>
          <hr>
          <table class="table table-hover shadow p-3 mb-5 bg-white rounded">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Descrição</th>
                <th>Data de entrada
                <th>Ação
              </tr>
            </thead>
          <?php if ($num >= 0) { ?>
            <tbody id="tbody">
              <?php
              while ($linha = $resposta->fetch_assoc()) {
                ?>
                <tr>
                  <td onclick="document.querySelector('.modalP').style.display='block'"><?php echo $linha['id']; ?>
                  <td><?php echo $linha['nomedoproduto']; ?>
                  <td><?php echo $linha['quantidade']; ?>
                  <td><?php echo $linha['descricao']; ?>
                  <td><?php if ($linha['datadeentrada'] === "") { } else {
                          echo $linha['datadeentrada'];
                        } ?>
                  <td><a type="submit" class='btn btn-danger' href="../repository/conMaterial.php?deleteMat&id=<?php echo $linha['id']; ?>" name="confirmar">Deletar</a>
                    <a type="submit" class="btn btn-warning" href="modalMat.php?id=<?php echo $linha['id']; ?>">Editar</a>
                </tr>
              <?php } ?>
            </tbody>  
            <?php } ?>
          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="../relatorios/produtos.php?pagina=0">Inicio</a></li>
              <?php for ($i = 0; $i < $num_pagina; $i++) { ?>
                <li class="page-item"><a class="page-link" href="../relatorios/produtos.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
              <?php } ?>
              <li class="page-item"><a class="page-link" href="../relatorios/produtos.php?pagina=<?php echo $num_pagina; ?>">Final</a></li>
            </ul>
          </nav>
        </div>
        <!--container do main-->
      </div>
    </div>
    <!--fim da segudna col-->
  </div>
</body>

</html>