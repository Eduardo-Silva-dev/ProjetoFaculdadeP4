<?php
function inserirDem(){
    include 'conexao/conexao.php';
    if (isset($_POST['confirmar'])) {

        if (!isset($_SESSION)){
            session_start();}

        foreach ($_POST as $chave => $valor)
            $_SESSION[$chave] = mysqli_real_escape_string($con, $valor);
        
        $sql = "INSERT INTO tb_demanda (
            nomeuser,
            setor,
            quantidade,
            produto,
            datadesaida,
            observacao)
            VALUES(
            '$_SESSION[nome]',
            '$_SESSION[setor]',
            '$_SESSION[quantidade]',
            '$_SESSION[produto]',
            now(),
            '$_SESSION[observacao]'
            )";
        $confimar = $con->query($sql) or die($con->error);
        if ($confimar) {
            unset($_SESSION['nome'],
            $_SESSION['setor'],
            $_SESSION['quantidade'],
            $_SESSION['produto'],
            $_SESSION['observacao']);
        } else {
            $erro[] = $confirmar;
            echo "<script> alert('$erro') </srcipt>";
        }
        mysqli_close($con);
    }
}

?>