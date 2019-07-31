<?php
    require_once 'conexao.php';

    $nome = mysqli_escape_string($conn,$_POST['medico']);
    $horario = mysqli_escape_string($conn,$_POST['horario']);
    $cpf = mysqli_escape_string($conn,$_POST['cpfmed']);
    $rg = mysqli_escape_string($conn,$_POST['rgmed']);
    $crm = mysqli_escape_string($conn,$_POST['crm']);
    $telefone = mysqli_escape_string($conn,$_POST['telefonemed']);
    $endereco = mysqli_escape_string($conn,$_POST['enderecomed']);
    $s = mysqli_escape_string($conn,$_POST['sexo']);
    if($s == 1){
        $sexo = "masculino";
    }elseif($s == 2){
        $sexo = "feminino";
    }
    $senha = mysqli_escape_string($conn,$_POST['senha']);


    $sql = "INSERT INTO medico (nome, horario, cpf, rg, crm, telefone, endereco, sexo, senha)";
    $sql.= "values";
    $sql.= "('$nome','$horario','$cpf','$rg','$crm','$telefone','$endereco','$sexo', md5('$senha'));";

    mysqli_query($conn,$sql);

    header('location:listagem-med.php');
?>
