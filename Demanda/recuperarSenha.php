<?php include 'repository/validacaoLogin.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="recuperarSenha.php">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" autocomplete="off" placeholder="Seu email" name="email">
                <input id="" class="btn btn-primary" type="submit" value="entrar" name="recuperarSenha" <?php echo "Sua nova SENHA => ". $senha = recuperarSenha(); ?>>
                <a name="retornoLogin" href="login.php" class="btn btn-success"  type="submit" >Retorna</a>
            </div>
</form>
</body>
</html>