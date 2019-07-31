<?php
    require_once 'conexao.php';

    $erros = array();
    $nome = mysqli_escape_string($conn,$_POST['nome']);
    $cpf = mysqli_escape_string($conn,$_POST['cpf']);
    $rg = mysqli_escape_string($conn,$_POST['rg']);
    $telefone = mysqli_escape_string($conn,$_POST['telefone']);
    $endereco = mysqli_escape_string($conn,$_POST['endereco']);
    $s = mysqli_escape_string($conn,$_POST['sexo']);
    if($s == 1){
        $sexo = "masculino";
    }else{
        $sexo = "feminino";
    }
    $senha = mysqli_escape_string($conn,$_POST['senha']);

    // $nome = utf8_encode($n);
    // $endereco = utf8_encode($end);

    $sql = "INSERT INTO secretaria (nome, cpf, rg, telefone, endereco, sexo, senha)";
    $sql.= "values";
    $sql.= "('$nome', '$cpf', '$rg', '$telefone', '$endereco', '$sexo', md5('$senha'))";

    mysqli_query($conn,$sql);
        //limpar sessão
    session_unset();
    header('location:listagem-sec.php');
?>
