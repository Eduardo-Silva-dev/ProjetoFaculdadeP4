<?php
require '../conexao/conexao.php';

$email = $_POST["email"];
$cpf = $_POST["cpf"];

$sql = "SELECT * FROM tb_usuario where email = '$email' OR cpf = '$cpf'";
$result = $con->query($sql) or die($con->error);
$res = $result->fetch_assoc();

if ($email == $res['email'] || $cpf == $res['cpf']) {
    echo json_encode(false); 
} else {
    echo json_encode(true);
}

?>