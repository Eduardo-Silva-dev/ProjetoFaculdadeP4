<?php
include 'conexao/conexao.php';

function retorna($nome){
    include 'conexao/conexao.php';
    $sql = "SELECT * FROM tb_usuario WHERE nome='$nome'";
    $result = $con->query($sql) or die ($con->error);
    $row_user = $result->fetch_assoc();
    $valores['cpf'] = $row_user['cpf'];
    $valores['setor'] = $row_user['setor'];
    var_dump($valores);
    return json_encode($valores);
}
if(isset($_GET['nome'])){
    retorna($_GET['nome']);
    echo "teste";
}