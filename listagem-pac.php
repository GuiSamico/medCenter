<?php
    require_once 'conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Med Center - Lista de Pacientes</title>
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
        <div id="logo">
            <img src="img/logo.png">
        </div>
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Sexo</th>
                    <th>Convênio</th>
                    <th>Editar</th>
                    <th>Excluir</th>

                </tr>
            </thead>
            <tbody class="td">
                <?php
                    $sql = "SELECT * FROM paciente";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <?php
                        $id = $row['idpac'];
                    ?>
                    <td><?php echo utf8_encode($row['nome'])?></td>
                    <td><?php echo utf8_encode($row['endereco'])?></td>
                    <td><?php echo $row['telefone']?></td>
                    <td><?php echo $row['cpf']?></td>
                    <td><?php echo $row['rg']?></td>
                    <td><?php echo $row['sexo']?></td>
                    <td><?php echo utf8_encode($row['convenio'])?></td>
                    <td><a href="alterar/alterar_pac_form.php?id=<?php echo $id?>"><img src="img/editar.png" class="iconop"></a></td>
                    <td><a href="deletar/excluir-pac.php?id=<?php echo $id?>" onclick="return confirm('Tem certeza?');"><img src="img/iconexcluir.png" class="iconop"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
        <div>
            <a href="sec.php"><button class="botao">Voltar</button></a>
        </div>
    </div>
</body>
</html>
