<?php
    require_once 'conexao.php';

    $nome = mysqli_escape_string($conn,$_POST['nomepac']);
    $endereco = mysqli_escape_string($conn,$_POST['enderecopac']);
    $telefone = mysqli_escape_string($conn,$_POST['telefonepac']);
    $cpf = mysqli_escape_string($conn,$_POST['cpfpac']);
    $rg = mysqli_escape_string($conn,$_POST['rgpac']);
    $s = mysqli_escape_string($conn,$_POST['sexo']);
    if($s == 1){
        $sexo = "masculino";
    }else{
        $sexo = "feminino";
    }
    $convenio = mysqli_escape_string($conn,$_POST['convenio']);

    $sql = "INSERT INTO paciente (nome, endereco, telefone, cpf, rg, sexo, convenio)";
    $sql.= "values";
    $sql.= "('$nome','$endereco','$telefone','$cpf','$rg','$sexo','$convenio');";

    mysqli_query($conn,$sql);

    header('location:listagem-pac.php');
?>
