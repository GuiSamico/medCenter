<?php
    require_once '../conexao.php';

    $id = $_POST['id'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $convenio = $_POST['convenio'];

    $sql_query = "UPDATE paciente SET cpf = '$cpf', rg = '$rg', telefone = '$telefone', endereco = '$endereco', convenio = '$convenio' WHERE idpac = '$id'";
    mysqli_query($conn, $sql_query);
    header('location:../listagem-pac.php');
?>
