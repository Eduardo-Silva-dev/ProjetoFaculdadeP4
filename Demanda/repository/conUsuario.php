<?php

function inserirUser(){
    include 'conexao/conexao.php';
    if (isset($_POST['confirmar'])) {

        if (!isset($_SESSION)){
            session_start();}

        foreach ($_POST as $chave => $valor)
            $_SESSION[$chave] = mysqli_real_escape_string($con, $valor);


            $senha = sha1($_SESSION['senha']);
        
        $sql = "INSERT INTO tb_usuario (
            nome,
            sobrenome, 
            email, 
            senha,
            cpf,
            setor,
            niveldeacesso)
            VALUES(
            '$_SESSION[nome]',
            '$_SESSION[sobrenome]',
            '$_SESSION[email]',
            '$senha',
            '$_SESSION[cpf]',
            '$_SESSION[setor]',
            '$_SESSION[niveldeacesso]'
            )";
        $confimar = $con->query($sql) or die($con->error);
        if ($confimar) {
            unset($_SESSION['nome'],
            $_SESSION['sobrenome'],
            $_SESSION['email'],
            $_SESSION['senha'],
            $_SESSION['cpf'],
            $_SESSION['setor'],
            $_SESSION['niveldeacesso']);
        } else {
            $erro[] = $confirmar;
            echo "<script> alert('$erro') </srcipt>";
        }
        mysqli_close($con);
    }
}

function mostraUser()
{
    include '../conexao/conexao.php';

    $sql_select = "SELECT * FROM tb_usuario";
    $coletar = $con->query($sql_select) or die($con->error);
    return $coletar;

    mysqli_close($con);
}

function alterarUser()
{
    if (!isset($_GET['usuario'])) { } else {

        $usu_cpf = intval($_GET['usuario']);
        include '../conexao/conexao.php';
        if (isset($_POST['confirmar'])) {
            if (!isset($_SESSION))
                session_start();

            foreach ($_POST as $chave => $valor)
                $_SESSION[$chave] = mysqli_real_escape_string($con, $valor);

            $sql = "UPDATE tb_usuario SET
            nome = '$_SESSION[nome]',
            sobrenome = '$_SESSION[sobrenome]',
            email = '$_SESSION[email]',
            senha = '$_SESSION[senha]',
            cpf ='$_SESSION[cpf]',
            setor ='$_SESSION[setor]',
            niveldeacesso) = '$_SESSION[niveldeacesso]'
            WHERE cpf = '$usu_cpf'";

            $confimar = $con->query($sql) or die($con->error);

            if ($confimar) {
                unset($_SESSION['nome'],
                $_SESSION[sobrenome],
                $_SESSION[email],
                $_SESSION[senha],
                $_SESSION[cpf],
                $_SESSION[setor],
                $_SESSION[niveldeacesso]);
            } else {
                $erro[] = $confirmar;
                echo "<script> alert('$erro') </srcipt>";
            }
            mysqli_close($con);
        } else {
            $sql_cpf = "SELECT * FROM tb_usuario WHERE cpf = 'usu_cpf'";
            $sql_query = $con->query($sql_cpf) or die($con->errno);
            $linha = $sql_query->fetch_assoc();

            if (!isset($_SESSION))
                session_start();

            $_SESSION[nome] = $linha['nome'];
            $_SESSION[sobrenome] = $linha['sobrenome'];
            $_SESSION[email] = $linha['email'];
            $_SESSION[email] = $linha['senha'];
            $_SESSION[cpf] = $linha['cpf'];
            $_SESSION[setor] = $linha['setor'];
            $_SESSION[niveldeacesso] = $linha['niveldeacesso'];
        }
    }
    mysqli_close($con);
}

function deleteUser()
{
    include '../conexao/conexao.php';
    $usu_cpf = intval($_GET['cpf']);

    $sql = "DELETE FROM tb_usuario WHERE cpf = '$usu_cpf'";
    $resposta = $con->query($sql) or die($con->errno);
    if ($resposta) { 
        echo "<script> 
        alert('O usuario foi deletado com sucesso!')
        location.href='index.php';
        </script>" ;
    } else { 
        echo "<script> 
        alert('Não foi possivel deletar o Usuario!')
        location.href='index.php';
        </script>" ; 
    }
}

function selectUser(){
    include 'conexao/conexao.php';
    $sql = "SELECT id,nome,sobrenome,setor FROM tb_usuario ORDER BY nome ASC";
    $resposta = $con->query($sql) or die ($conn->errno);
    return $resposta;
    mysqli_close($con);
}
?>