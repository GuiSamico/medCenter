<?php
    require_once '../conexao.php';

    $id = $_POST['id'];
    $horario = $_POST['horario'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql_query = "UPDATE medico SET horario = '$horario', cpf = '$cpf', rg = '$rg', telefone = '$telefone', endereco = '$endereco' WHERE idmed = '$id'";
    mysqli_query($conn, $sql_query);
    header('location:../listagem-med.php');
?>
