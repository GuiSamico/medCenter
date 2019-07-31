<?php
    require_once 'conexao.php';
    include 'login.php';
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Med Center - Tabela CID</title>
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/tabCid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/ajax.js"></script>
    <link rel="stylesheet" href="css/datatable.css">
    <script src="js/datatable.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
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

        <h1 id="tit">Tabela CID (Código Internacional de Doenças)</h1>
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>Código</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM cid";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $row['codigo']?></td>
                    <td><?php echo utf8_encode($row['descricao'])?></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
