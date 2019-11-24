<?php
function inserirMat()
{
    include 'conexao/conexao.php';
    if (isset($_POST['confirmar'])) {

        foreach ($_POST as $chave => $valor)
            $_SESSION[$chave] = mysqli_real_escape_string($con, $valor);

        $sql = "INSERT INTO tb_material (
            codigo,
            nomedoproduto, 
            quantidade, 
            descricao,
            datadeentrada)
            VALUES(
            '$_SESSION[codigo]',    
            '$_SESSION[produto]',
            '$_SESSION[quantidade]',
            '$_SESSION[descricao]',
            '$_SESSION[datadeentrada]'
            )";
        $confimar = $con->query($sql) or die($con->error);
        if ($confimar) {
            unset($_SESSION);
        } else {
            $erro[] = $confirmar;
            echo $erro;
        }
        mysqli_close($con);
    }
}

function mostraMat()
{
    include '../conexao/conexao.php';
    $sql_select_mat = "SELECT id,nomedoproduto,quantidade,descricao,DATE_FORMAT(datadeentrada, '%d/%m/%Y') AS datadeentrada FROM tb_material";
    $coletar_mat = $con->query($sql_select_mat) or die($con->error);
    return $coletar_mat;
    mysqli_close($con);
}
function selectMat()
{
    include 'conexao/conexao.php';
    $sql = "SELECT id,nomedoproduto FROM tb_material ORDER BY nomedoproduto ASC";
    $resposta = $con->query($sql) or die($conn->errno);
    return $resposta;
    mysqli_close($con);
}

function deleteMat()
{
    include '../conexao/conexao.php';
    $id_mat = intval($_GET['id']);
    $sql = "DELETE FROM tb_material WHERE id = '$id_mat'";
    $resposta = $con->query($sql) or die($con->errno);
    if ($resposta) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "");
    } else {
        echo "$con->errno";
    }
}

function matSelect()
{
    include '../conexao/conexao.php';
    if (isset($_GET['id'])) {
        session_start();
        $id_mat = intval($_GET['id']);
        if ($id_mat == 0) { 
            
            $_SESSION['codigo'] = "---";
            $_SESSION['desc'] = "---";
            $_SESSION['matid'] = "---";
            header("Location: " . $_SERVER['HTTP_REFERER'] . "");
        } else {
            $sql_cpf = "SELECT * FROM tb_material WHERE id = '$id_mat'";
            $sql_query = $con->query($sql_cpf) or die($con->errno);
            $linha = $sql_query->fetch_assoc();
            if ($linha) {
                $_SESSION['codigo'] = $linha['codigo'];
                $_SESSION['desc'] = $linha['descricao'];
                $_SESSION['matid'] = $linha['id'];
                header("Location: " . $_SERVER['HTTP_REFERER'] . "");
            } else {
                echo "$con->errno";
            }
        }
    }
}


function alterarMat()
{

    include '../conexao/conexao.php';
    if (isset($_GET['id'])) {

        $id_mat = intval($_GET['id']);

        if (!isset($_SESSION))
            session_start();

        foreach ($_POST as $chave => $valor)
            $_SESSION[$chave] = mysqli_real_escape_string($con, $valor);

        $sql = "UPDATE tb_material SET
            nomedoproduto = '$_SESSION[nomedoproduto]',
            quantidade = '$_SESSION[quantidade]',
            descricao = '$_SESSION[descricao]',
            datadeentrada ='$_SESSION[datadeentrada]'
            WHERE id = '$id_mat'";

        $confimar = $con->query($sql) or die($con->error);

        if ($confimar) {
            unset($_SESSION);
            header("Location: ../relatorios/produtos.php");
        } else { }
        mysqli_close($con);
    }
}

if (isset($_POST['alterarMat'])) {
    alterarMat();
}

if (isset($_GET['deleteMat'])) {
    deleteMat();
}

if (isset($_GET['preencherMat'])) {
    matSelect();
}
