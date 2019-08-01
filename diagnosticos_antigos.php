<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;

    $nomePaciente = $_GET['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Med Center - Diagnósticos</title>
    <link rel="stylesheet" href="css/tabCid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/ajax.js"></script>
    <link rel="stylesheet" href="css/datatable.css">
    <script src="js/datatable.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/list-pac.css">
    <script>
        $(document).ready( function () {
            $('#tabela').DataTable({
                "language": {
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ registros no total)",
                    "paginate":{
                        "next": "<img src='img/seta-d.png'>",
                        "previous": "<img src='img/seta-e.png'>"
                    },
                    "search": "Filtrar"
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>ID</th>
                    <th>Paciente</th>
                    <th>Sintomas</th>
                    <th>Doença</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody class="td">
                <?php
                    $sql = "SELECT * FROM diagnostico WHERE paciente = '$nomePaciente'";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo utf8_encode($row['paciente'])?></td>
                    <td><?php echo utf8_encode($row['sintoma'])?></td>
                    <td><?php echo utf8_encode($row['doenca'])?></td>
                    <td><?php echo $row['data']?></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
        <div>
            <a href="javascript:history.back()"><button class="botao">Voltar</button></a>
        </div>
    </div>
</body>
</html>
