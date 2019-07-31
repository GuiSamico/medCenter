<?php
    require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/cruz.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tabCid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/ajax.js"></script>
    <link rel="stylesheet" href="css/datatable.css">
    <script src="js/datatable.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/messages.css">
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
        <h1 style="position:relative;top:-10px;font-size:30px;color:white">Agendamentos</h1>
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>Paciente</th>
                    <th>Medico</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody class="td">
                <?php
                    $sql = "SELECT * FROM messages";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <?php
                        $id = $row['id'];
                    ?>
                    <td><?php echo utf8_encode($row['paciente'])?></td>
                    <td><?php echo $row['medico']?></td>
                    <td><?php echo $row['data']?></td>
                    <td><?php echo $row['hora']?></td>
                    <td><a href="deletar/excluir-messages.php?id=<?php echo $id?>" onclick="return confirm('Tem certeza?')"><img src="img/iconexcluir.png" class="iconop"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
