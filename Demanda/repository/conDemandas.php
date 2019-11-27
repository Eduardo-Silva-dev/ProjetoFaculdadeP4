<?php
function inserirDem(){
    include 'conexao/conexao.php';
    if (isset($_POST['inserirDem'])) {
        foreach ($_POST as $chave => $valor)
            $_SESSION[$chave] = mysqli_real_escape_string($con, $valor);

            $Andamento = "Em Andamento";

        $sql = "INSERT INTO tb_demanda (
            nomeuser,
            setor,
            cpf,
            quantidade,
            produto,
            codigo,
            descricao,
            datadesaida,
            observacao,
            statusdem)
            VALUES(
            '$_SESSION[nomeUser]',
            '$_SESSION[setor]',
            '$_SESSION[cpf]',
            '$_SESSION[quantidade]',
            '$_SESSION[produto]',
            '$_SESSION[codigo]',
            '$_SESSION[descricao]',
            now(),
            '$_SESSION[observacao]',
            '$Andamento'
            )";
        $confimar = $con->query($sql) or die($con->error);
        $_SESSION['cpf'] = "---";
        $_SESSION['setor'] = "---";
        $_SESSION['useid'] = "---";
        $_SESSION['codigo'] = "---";
        $_SESSION['desc'] = "---";
        $_SESSION['matid'] = "---";
        $_SESSION['useid'] = "---";
        if ($confimar) { 
              unset($_SESSION);
              
        } else {
            $erro[] = $confirmar;
            echo '<script> alert('.$erro.') </srcipt>';
        }
        mysqli_close($con);
    }
}

function selectDem(){
    include '../conexao/conexao.php';
    $sql = "SELECT id,nomeuser,setor,produto,quantidade,descricao,statusdem, DATE_FORMAT(datadesaida, '%d/%m/%Y') AS datadesaida FROM tb_demanda  ORDER BY tb_demanda.datadesaida DESC ,tb_demanda.statusdem DESC ";
    $resposta = $con->query($sql) or die ($con->errno);
    return $resposta;
    mysqli_close($con);
}

function concluirDem(){
    include '../conexao/conexao.php';

    $concluido = "Concluido";
    $id_dem = $_GET['id'];
    $sql = "UPDATE tb_demanda SET
            datadeentrada = now(),
            statusdem = '$concluido '
            WHERE id = '$id_dem'";

        $confimar = $con->query($sql) or die($con->error);
        if ($confimar) {
            header("Location: ../relatorios/demanda.php" );
        } else {
            $erro[] = $confirmar;
            echo "<script> alert('$erro') </srcipt>";
        }
}

if (isset($_GET['concluirDem'])) {
    concluirDem();
}

if (isset($_GET['inserirDem'])) {
    inserirDem();
}

if (isset($_GET['limparSession'])) {
    limparSession();
}

?>