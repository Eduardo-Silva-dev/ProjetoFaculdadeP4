<?php
include('conexao.php');


$email=$_POST['email'];
$senha=$_POST['senha'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$cpf=$_POST['cpf'];
$setor=$_POST['setor'];




$sql = "INSERT INTO usuario(email, nome, senha)VALUES('$email', '$nome', '$senha')";

$confimar = $con->query($sql) or die ($con->error);
    if($confimar){

        echo"<script>alert('cadastrado')</script>";

    }else{
        $erro[]=$confirmar;
   
    }
?>