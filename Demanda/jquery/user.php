<?php
include '../conexao/conexao.php';
$id = $_POST['iduser'];

$sql = mysqli_query($con,"SELECT * FROM tb_usuario WHERE id = '$id'");

$usuario = mysqli_fetch_object($sql);
$dados = $usuario->setor."/".$usuario->cpf;
return $dados;