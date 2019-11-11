<?php
function validarUser()
{
    if (isset($_POST['confirmar'])) {
        include 'conexao/conexao.php';
        $login =  mysqli_real_escape_string($con, $_POST['email']);
        $senha = sha1($_POST['senha']);
        $result = $con->query("SELECT * FROM `tb_usuario` WHERE `email` = '$login' AND `senha`= '$senha'");

        if (!isset($_SESSION))
            session_start();

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = sha1($senha);
            header('location:index.php');
        } else {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:login.php');
        }
    }
}
