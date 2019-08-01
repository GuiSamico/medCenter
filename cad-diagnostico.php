<?php
    require_once 'conexao.php';

    $paciente = mysqli_escape_string($conn,$_POST['paciente']);
    $sintoma = mysqli_escape_string($conn,$_POST['sintoma']);
    $doenca = mysqli_escape_string($conn,$_POST['doenca']);
    $data = date('d/m/Y');

    $sql = "INSERT INTO diagnostico (paciente, sintoma, doenca, data)";
    $sql.= "values";
    $sql.= "('$paciente','$sintoma','$doenca','$data');";

    mysqli_query($conn,$sql);
    echo "<script>
            alert('Diagnóstico cadastrado com sucesso');
            window.location.replace('javascript:history.back()');
        </script>";
?>
