<?php
    require_once '../conexao.php';

    $id = $_POST['id'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cnpj = $_POST['cnpj'];
    $planos = $_POST['planos'];

    $sql_query = "UPDATE convenio SET telefone = '$telefone', endereco = '$endereco', cnpj = '$cnpj', planos = '$planos' WHERE idconv = '$id'";
    mysqli_query($conn, $sql_query);
    header('location:../listagem-conv.php');
?>
