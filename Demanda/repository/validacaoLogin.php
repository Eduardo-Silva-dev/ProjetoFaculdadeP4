<?php
function validarUser()
{
    if (isset($_POST['confirmar'])) {
        include 'conexao/conexao.php';
        $login =  mysqli_real_escape_string($con, $_POST['email']);
        $senha = sha1($_POST['senha']);
        $result = $con->query("SELECT * FROM `tb_usuario` WHERE `email` = '$login' AND `senha`= '$senha'");
        $resultado = $result->fetch_assoc();
        if (!isset($_SESSION))
            session_start();

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = sha1($senha);
            $_SESSION['usuario'] = $resultado['id'];
            header('location: index.php');
        } else {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:login.php');
        }
    }
}

if (isset($_GET['logout'])) {
    logout();
}

function logout()
{
    unset($_SESSION['usuario']);
    header("Location: ../login.php");
}

function recuperarSenha()
{
    include 'conexao/conexao.php';
    if (isset($_POST['recuperarSenha'])) {
        $email = $con->escape_string($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro[] = "E-mail Invalido.";
            return $erro;
        } else {
            $sql_select = "SELECT id,senha FROM tb_usuario WHERE email='$email'";
            $coletar = $con->query($sql_select) or die($con->error);
            $dado = $coletar->fetch_assoc();
            $total = $coletar->num_rows;
            if ($total == 0) {
                $texto = "Email não consta no nosso banco de dados";
                return $texto;
            } else {
                $novasenha = substr(sha1(time()), 0, 8);
                $cripnovasenha = sha1($novasenha);
                $sql = "UPDATE tb_usuario SET senha = '$cripnovasenha' WHERE email = '$email'";
                $coleta = $con->query($sql) or die($con->error);
                return $novasenha;
            }
        }
    }
}
