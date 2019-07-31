<?php
    require_once 'conexao.php';
    session_start();
    //admin
    if(isset($_POST['btn_entrar_admin'])):
        $erros = array();
        $usuario = mysqli_real_escape_string($conn,$_POST['user']);
        $senha = mysqli_real_escape_string($conn,$_POST['senha']);

        $query = "SELECT login FROM admin WHERE login = '{$usuario}' and senha = md5('{$senha}')";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);

        if($row == 1){
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $usuario;
            header('location:listagem-sec.php');
            exit();
        }else{
            $_SESSION['nao_autenticado'] = true;
            header('location:form-login.php');
            exit();
        }
    endif;

    //secretaria
    if(isset($_POST['btn_entrar_sec'])):
        $erros = array();
        $cpf = mysqli_real_escape_string($conn,$_POST['cpfSec']);
        $senha = mysqli_real_escape_string($conn,$_POST['senha']);

        $query = "SELECT cpf FROM secretaria WHERE cpf = '{$cpf}' and senha = md5('{$senha}')";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);

        if($row == 1){
            $_SESSION['logado'] = true;
            header('location:sec.php');
            exit();
        }else{
            $_SESSION['nao_autenticado'] = true;
            header('location:form-login.php');
            exit();
        }
    endif;

    //medico
    if(isset($_POST['btn_entrar_med'])):
        $erros = array();
        $cpf = mysqli_real_escape_string($conn,$_POST['cpfMed']);
        $senha = mysqli_real_escape_string($conn,$_POST['senha']);

        $query = "SELECT * FROM medico WHERE cpf = '{$cpf}' and senha = md5('{$senha}')";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);

        $r = mysqli_fetch_array($result);
        $nome = $r['nome'];

        if($row == 1){
            $_SESSION['logado'] = true;
            $_SESSION['medico'] = $nome;
            header('location:med.php');
            exit();
        }else{
            $_SESSION['nao_autenticado'] = true;
            header('location:form-login.php');
            exit();
        }
    endif;
?>
