<?php
include '../conexao/conexao.php';
include '../repository/conUsuario.php'
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Relatorio de usuarios</title>

  <style>
    #sub a {
      height: 30px;
      width: 150px;
    }

    #sub {

      width: 105px;
    }
  </style>
  <?php /*
session_start();
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

  <link rel="stylesheet" href="../styles\index1.css">
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
 //       echo "$logado ";
        ?>
        <a href="login.php"> <i class="fa fa-external-link"></i></a>
      </form>
    </div>
  </nav>


  <div class="row">
    <div class="men col col-sm-2">
      <nav class="navegation bg-primary">
        <ul class="navegMenu sidebar navbar-nav">
          <li> <a href="../index.php"><i class="fa fa-home"><span class="sumir">Home<span></i></a></li>
          <li> <a href=""><i class="fa fa-folder-open"><span class="sumir">Cadastros<span></i></a>
            <ul class="submenu">
              <li><a href="../usuario.php"><i class="fa fa-user"><span class="sumir">Usuarios<span></i></a></li>
              <li><a href="../material.php"><i class="fa fa-cube"><span class="sumir">Produtos<span></i></a></li>
            </ul>
          </li>
          <li> <a href="../demandas.php"><i class="fa fa-book"><span class="sumir">Demandas<span></i></a></li>


          <li> <a href=""><i class="fa fa-area-chart"><span class="sumir">Relatorios<span></i></a>
            <ul class="submenu" id="sub">
              <li><a href="usuarios.php"><i class="fa fa-users"><span class="sumir">Usuarios<span></i></a></li>
              <li><a href="produtos.php"><i class="fa fa-cube"><span class="sumir">Produtos<span></i></a></li>
              <li> <a href="demanda.php"><i class="fa fa-book"><span class="sumir">Demandas<span></i></a></li>

            </ul>
          </li>



        </ul>
      </nav>

    </div>
    <div class="col-12 col-sm-9" style="text-align:center; justify-content:center; align-items:center; margin-top:20px;">
      <div class="container">
        <div class="card card-header">Relatorios de Usuarios</div>

        <div class="card card-body shadow-sm p-3 mb-5 bg-white rounded">
          <div class="form-group">
            <label for="">Pesquisar</label>
            <input type="text" class="form-control" name="" id="filtro" aria-describedby="helpId" placeholder="">

          </div>

          <table class="table table-hover">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>email</th>
                <th>CPF</th>
                <th>Setor</th>
                <th>Nivel de Acesso</th>
                <th>ações<th>
              </tr>
            </thead>
            <tbody id="tbody">
            <?php
            $coletar = mostraUser();
            while($linha = $coletar->fetch_assoc()){
              ?>
            <tr>
              <td><?php echo $linha['id']; ?>
              <td><?php echo $linha['nome']; ?> 
              <td><?php echo $linha['email']; ?>
              <td><?php echo $linha['cpf']; ?>
              <td><?php echo $linha['setor']; ?>
              <td><?php if($linha['niveldeacesso']==1){echo "ADM";}if ($linha['niveldeacesso']==2){echo "Usuario";}; ?>
              <td>
            </tr>
            <?php }?>
           </tbody>
          </table>




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
  <script src="jscp\usuario.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#filtro").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>

</body>

</html>