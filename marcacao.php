<?php
    
    require_once 'conexao.php';
        
    if(isset($_POST['btn_cadastrar_marc'])):
        $paciente = mysqli_escape_string($conn,$_POST['paciente']);
        $medico = mysqli_escape_string($conn,$_POST['medico']);
        $data = mysqli_escape_string($conn,$_POST['data']);
        $hora = mysqli_escape_string($conn,$_POST['hora']);
        $erros[] = "<li>Preencha todos os campos</li>";

        $sql = "INSERT INTO consulta (paciente, medico, data, hora)";
        $sql.= "values";
        $sql.= "('$paciente','$medico','$data','$hora');";

        mysqli_query($conn,$sql);

       
    endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Med Center - Marcar consulta</title>
    <link rel="shortcut icon" href="iimg\favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <div class="container">
            <div id="logo">
                <img src="img\logo.png">
            </div>
            <div>
                    <form action="marcacao.php" method="post" id="formMarcacao">
                        <div class="form-group">
                            <label for="paciente">Paciente</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="paciente" id="paciente">
                        </div>
                        
                        <div class="form-group">
                            <label for="medico">Médico</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="medico" id="medico">
                        </div>
                        
                        <div class="form-group">
                            <label for="data">Data</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="data" id="data">
                        </div>

                         <div class="form-group">
                            <label for="hora">Hora</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="hora" id="hora">
                        </div>

                         <button type="submit" class="btn btn-info" name="btn_cadastrar_marc">Marcar consulta</button>
                    </form>
                </div>
    
</body>
</html>