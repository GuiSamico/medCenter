<?php
    require_once 'conexao.php';
    include 'login.php';
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;

    $nomePaciente = $_GET['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Med Center - Realizar consulta</title>
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/consulta.css">
</head>
<body>
    <div class="container">
        <nav id="nav1">
            <a href="javascript:history.back()"><img src="img/logo.png" id="logo"></a>

            <div class="fixed-bg">
                <a href="receita.php" target="_blank"><button type="button" class="btn btn-outline-light">Emitir receita</button></a>
                <a href="atestado.php" target="_blank"><button type="button" class="btn btn-outline-light">Emitir atestado</button></a>
                <a href="exames.php" target="_blank"><button type="button" class="btn btn-outline-light">Solicitar Exames</button></a>
                <a href="tabCid.php"><button type="button" class="btn btn-outline-light">Tabela CID</button></a>
            </div>
        </nav>

        <div class="paciente" style="position:relative;top:200px;">
            <?php
                $query = "SELECT * FROM paciente WHERE nome = '{$nomePaciente}'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                $query2 = "SELECT * FROM convenio WHERE nome = '{$row['convenio']}'";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_array($result2);
            ?>
            <h2 style="color:white;"><?php echo $row['nome']; ?></h2>
            <p style="color:white;font-size:20px; float:left; margin-left:30px;"><?php echo $row['endereco']; ?></p>
            <p style="color:white;font-size:20px; float:left; margin-left:30px;"><?php echo $row['telefone']; ?></p>
            <p style="color:white;font-size:20px; float:left; margin-left:30px;"><?php echo $row['cpf']; ?></p>
            <p style="color:white;font-size:20px; float:left; margin-left:30px;"><?php echo $row['rg']; ?></p>
            <p style="color:white;font-size:20px; float:left; margin-left:30px;"><?php echo $row['sexo']; ?></p>
            <p style="color:white;font-size:20px; float:left; margin-left:30px;"><?php echo $row['convenio']; ?></p>
            <p style="color:white;font-size:20px; float:left; margin-left:30px;"><?php echo $row2['planos']; ?></p>

            <a href="diagnosticos_antigos.php?nome=<?php echo $nomePaciente?>" style="margin-top:40px;margin-left:430px;"><button type="button" class="btn btn-light">Diagnósticos cadastrados</button></a>

            <div class="infor_consulta">
                <form action="cad-diagnostico.php" method="POST" name="formCadDiagnostico" id="formCadDiagnostico">

                        <div class="form-group">
                            <label for="paciente">Paciente</label>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="paciente" id="paciente" autocomplete="off" value="<?php echo $nomePaciente?>">
                        </div>

                        <div class="form-group">
                            <label for="sintoma">Sintomas</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="sintoma" id="sintoma" rows="5" cols="80"></textarea>

                        </div>

                        <div class="form-group">
                            <label for="doenca">Doenças</label>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control" name="doenca" id="doenca" autocomplete="off">
                        </div>

                    <button type="submit" class="btn btn-info" name="btn_cad_sec">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
