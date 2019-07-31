<?php
    require_once 'conexao.php';
    session_start();
    //admin
    $erros = array();
    $cpf = mysqli_real_escape_string($conn,$_POST['cpf']);

    $query = "SELECT cpf FROM paciente WHERE cpf = '{$cpf}'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['logado'] = true;
        $_SESSION['cpf'] = $cpf;
        header('location:agdConsulta.php');
        exit();
    }else{
        $_SESSION['nao_autenticado'] = true;
        header('location:agdConsulta_login_form.php');
        exit();
    }

?>
