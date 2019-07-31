<?php
    require_once 'conexao.php';

    $erros = array();
    $paciente = mysqli_escape_string($conn,$_POST['paciente']);
    $medico = mysqli_escape_string($conn,$_POST['medico']);
    $data = mysqli_escape_string($conn,$_POST['data']);
    $hora = mysqli_escape_string($conn,$_POST['hora']);

    $sql = "INSERT INTO messages (paciente,medico,data,hora)";
    $sql.= "values";
    $sql.= "('$paciente', '$medico', '$data', '$hora')";

    mysqli_query($conn,$sql);
        //limpar sessão
    session_unset();
    echo "<script>
            alert('Agendado com sucesso');
            window.location.replace('agdConsulta.php');
        </script>";

?>
