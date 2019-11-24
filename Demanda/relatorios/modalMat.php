<?php include '../repository/conMaterial.php'; ?>
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
<?php $mat = matSelect();
var_dump($mat); ?>
    <div class="modalP container-fluid">
        <div class="modalUs card card-body">
            <form method="POST" action="">
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
                <button type="submit" class="btn btn-primary">Sair</button>
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