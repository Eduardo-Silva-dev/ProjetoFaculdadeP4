<?php
//include '../conexao/conexao.php';

function inserirMat(){
    include 'conexao/conexao.php';
    if (isset($_POST['confirmar'])){
    if(!isset($_SESSION))
        session_start();
        
        foreach ($_POST as $chave=>$valor)
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
        $confimar = $con->query($sql) or die ($con->error);
        if($confimar){
            unset($_SESSION['codigo'],
            $_SESSION['produto'],
            $_SESSION['quantidade'],
            $_SESSION['descricao'],
            $_SESSION['datadeentrada']);
            session_destroy();
        }else{
           $erro[]=$confirmar;
           echo"<script> alert('$erro') </srcipt>";
        }
       mysqli_close($con);
    }
}

function mostraMat(){
    include '../conexao/conexao.php';

    $sql_select_mat = "SELECT id,nomedoproduto,quantidade,descricao,DATE_FORMAT(datadeentrada, '%d/%m/%Y') AS datadeentrada FROM tb_material";
    $coletar_mat = $con->query($sql_select_mat) or die ($con->error);
    return $coletar_mat;

   mysqli_close($con);

}
function selectMat(){
    include 'conexao/conexao.php';
    $sql = "SELECT nomedoproduto FROM tb_material";
    $resposta = $con->query($sql) or die ($conn->errno);
    return $resposta;
    mysqli_close($con);
}
?>