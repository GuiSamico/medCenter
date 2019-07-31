<?php
    require_once 'conexao.php';

    $nome = mysqli_escape_string($conn,$_POST['nome']);
    $endereco = mysqli_escape_string($conn,$_POST['endereco']);
    $telefone = mysqli_escape_string($conn,$_POST['telefone']);
    $cnpj = mysqli_escape_string($conn,$_POST['cnpj']);
    $planos = mysqli_escape_string($conn,$_POST['planos']);

    $sql = "INSERT INTO convenio (nome, endereco, telefone, cnpj, planos)";
    $sql.= "values";
    $sql.= "('$nome','$endereco','$telefone','$cnpj','$planos');";

    mysqli_query($conn,$sql);

    header('location:listagem-conv.php');
?>
