<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
    $cpf = $_SESSION['cpf'];

    $sql = "SELECT nome FROM paciente WHERE cpf = '$cpf'";
    $resultado = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Med Center - Agendamento</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/agdConsulta.css">
    <script src="jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
    <script src="jquery/jquery.validate.min.js"></script>
    <script src="jquery/additional-methods.min.js"></script>
    <script src="jquery/localization/messages_pt_BR.js"></script>
    <script>
        $(document).ready(function(){
            $("#data").mask("99/99/9999");
            $("#hora").mask("99:99");
        })
    </script>
</head>
<body>
    <div class="container">
        <div id="logo">
            <a href="javascript:history.back()"><img src="img\logo.png"></a>
            <a href="logout.php"><img src="img/logoff.png" id="logoff"></a>
        </div>

        <div id="cons">
            <form id="formcons" method="POST" action="cad-messages.php">
                <div id="title">
                    <span>Agendar consulta</span>
                </div>
                <div class="form-group">
                    <label for="paciente">Paciente</label>
                    <input autocomplete="off" type="text" class="form-control" id="paciente" name="paciente" value="<?php echo $row['nome'];?>">
                </div>
                <div class="form-group">
                    <label for="medico">Médico</label>
                    <select class="form-control" name="medico" id="medico">
                        <?php
                            $sql = "SELECT * FROM medico";
                            $resultado = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($resultado)):
                        ?>
                        <option value="<?php echo $row['nome'];?>"><?php echo utf8_encode($row['nome'])?></option>
                        <?php
                            endwhile;
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input autocomplete="off" type="text" class="form-control" id="data" name="data" placeholder="00/00/0000" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input autocomplete="off" type="text" class="form-control" id="hora" name="hora" placeholder="00:00" required>
                </div>
                <button type="submit" class="btn btn-info">Agendar</button>
            </form>
        </div>
        <div class="medicos">
            <iframe src="listagem-med-cons2.php" width="600" height="400" style="margin-top:100px;"></iframe>
        </div>
    </div>
</body>
</html>
