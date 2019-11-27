<?php

function inserirUser()
{
    require 'conexao/conexao.php';
    if (isset($_POST['confirmar'])) {

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
            unset($_SESSION);
        } else {
            $erro[] = $confirmar;
            echo "<script> alert('$erro') </srcipt>";
        }
        mysqli_close($con);
    }
}

function mostraUser()
{
    require '../conexao/conexao.php';
    $sql_select = "SELECT * FROM tb_usuario ORDER BY nome ASC";
    $coletar = $con->query($sql_select) or die($con->error);
    return $coletar;
    mysqli_close($con);
}
function mostraUse()
{
    require 'conexao/conexao.php';
    $sql_select = "SELECT * FROM tb_usuario ORDER BY nome ASC";
    $coletar = $con->query($sql_select) or die($con->error);
    return $coletar;
    mysqli_close($con);
}

function userSelect()
{
    require '../conexao/conexao.php';
    if (isset($_GET['id'])) {
        $usu_id = intval($_GET['id']);
        $sql_cpf = "SELECT * FROM tb_usuario WHERE id = '$usu_id'";
        $sql_query = $con->query($sql_cpf) or die($con->errno);
        $linha = $sql_query->fetch_assoc();
        return $linha;
    }
}

function useSelect()
{
    require '../conexao/conexao.php';
    session_start();
    $nome = $_GET['name'];
    if ($nome == "") {
        $_SESSION['cpf'] = "---";
        $_SESSION['setor'] = "---";
        $_SESSION['nome'] = "---";
        header("Location: " . $_SERVER['HTTP_REFERER'] . "");
    } else {
        $sql = "SELECT * FROM tb_usuario WHERE nome = '$nome'";
        $sql_query = $con->query($sql) or die($con->errno);
        $linha = $sql_query->fetch_assoc();
        var_dump($linha);
        if ($linha) {
            $_SESSION['cpf'] = $linha['cpf'];
            $_SESSION['setor'] = $linha['setor'];
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['useid'] = $linha['id'];
            header("Location: " . $_SERVER['HTTP_REFERER'] . "");
        } else {
            echo "$con->errno";
        }
    }
}

function alterarUser()
{

    require '../conexao/conexao.php';
    if (isset($_GET['id'])) {

        $usu_id = intval($_GET['id']);

        if (!isset($_SESSION))
            session_start();

        foreach ($_POST as $chave => $valor)
            $_SESSION[$chave] = mysqli_real_escape_string($con, $valor);

        $senha = sha1($_SESSION['senha']);
        $cpf = intval($_SESSION['cpf']);
        $niveldeacesso = intval($_SESSION['niveldeacesso']);

        $sql = "UPDATE tb_usuario SET
            nome = '$_SESSION[nome]',
            sobrenome = '$_SESSION[sobrenome]',
            email = '$_SESSION[email]',
            senha = '$senha',
            cpf ='$cpf',
            setor ='$_SESSION[setor]',
            niveldeacesso = '$niveldeacesso'
            WHERE id = '$usu_id'";

        $confimar = $con->query($sql) or die($con->error);

        if ($confimar) {
            unset($_SESSION);
            header("Location: ../relatorios/usuarios.php");
        } else { }
        mysqli_close($con);
    }
}


function deleteUser()
{
    require '../conexao/conexao.php';
    $use_cpf = intval($_GET['id']);
    echo $use_cpf;
    $sql = "DELETE FROM tb_usuario WHERE id = '$use_cpf'";
    $resposta = $con->query($sql) or die($con->errno);
    if ($resposta) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "");
    } else {
        echo "$con->errno";
    }
}

function selectUser()
{
    require 'conexao/conexao.php';
    $sql = "SELECT id,nome FROM tb_usuario ORDER BY nome ASC";
    $resposta = $con->query($sql) or die($conn->errno);
    return $resposta;
    mysqli_close($con);
}

if (isset($_POST['alterarUser'])) {
    alterarUser();
}

if (isset($_GET['deleteUser'])) {
    deleteUser();
}
if (isset($_GET['preencherUser'])) {
    useSelect();
}
function paginaUser()
{
    require '../conexao/conexao.php';
    $itens_por_pagina = 2;
    $sql = "SELECT * FROM tb_usuario LIMIT $itens_por_pagina ";
    $res = $con->query($sql) or die($con->errno);
    return $res;
    header("Location: " . $_SERVER['HTTP_REFERER'] . "");
}
