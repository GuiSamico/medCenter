<?php
    require_once 'conexao.php';
    include 'login.php';
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
    $medico = $_SESSION['medico'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Med Center - Médico</title>
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/med.css">
    <script src="jquery/ajax.js"></script>
    <link rel="stylesheet" href="css/datatable.css">
    <script src="js/datatable.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/list-cons.css">
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
        <nav id="nav1">
            <ul>
                <img src="img/logo.png" id="logo">
                <a href="logout.php"><img src="img/logoff.png" id="logoff"></a>
            </ul>
        </nav>
        <h2 style="color:white">Consultas</h2>
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>Paciente</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th style="width:50px;">Consultar</th>
                    <th style="width:50px;">Excluir</th>
                </tr>
            </thead>
            <tbody class="td">
                <?php
                    $sql = "SELECT * FROM consulta WHERE medico = '{$medico}'";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <?php
                        $id = $row['idcons'];
                        $nome = $row['paciente'];
                    ?>
                    <td><?php echo utf8_encode($row['paciente'])?></td>
                    <td><?php echo $row['data']?></td>
                    <td><?php echo $row['hora']?></td>
                    <td><a href="consulta.php?nome=<?php echo $nome?>"><img src="img/consulta.png" class="iconop"></a></td>
                    <td><a href="deletar/excluir-cons.php?id=<?php echo $id?>" onclick="return confirm('Tem certeza?');"><img src="img/iconexcluir.png" class="iconop"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>

    </div>
</body>
</html>
