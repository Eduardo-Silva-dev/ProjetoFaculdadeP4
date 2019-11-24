<?php include '../repository/conUsuario.php'; ?>
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
    <?php $user = userSelect() ?>
    <div class="modalP container-fluid">
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
                <button type="submit" class="btn btn-success" name="confirmar">Alterar</button>
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