<?php
    require_once 'conexao.php';
    include 'login.php';
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Med Center - Lista de Secretárias</title>
    <link rel="stylesheet" href="css/tabCid.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery/ajax.js"></script>
    <link rel="stylesheet" href="css/datatable.css">
    <script src="js/datatable.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/list-sec.css">
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
        <a href="logout.php"><img src="img/logoff.png" id="logoff"></a>
        <table id="tabela" class="table table-bordered table-hover">
            <thead>
                <tr class="th">
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Sexo</th>
                    <!-- <th>Editar</th> -->
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody class="td">
                <?php
                    $sql = "SELECT * FROM secretaria";
                    $resultado = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <?php
                        $id = $row['idsec'];
                    ?>
                    <td><?php echo utf8_encode($row['nome'])?></td>
                    <td><?php echo $row['cpf']?></td>
                    <td><?php echo $row['rg']?></td>
                    <td><?php echo $row['telefone']?></td>
                    <td><?php echo utf8_encode($row['endereco'])?></td>
                    <td><?php echo $row['sexo']?></td>
                    <!-- <td><a href="alterar/editar-sec.php?id=<?php echo $id?>"><img src="img/iconeditar.png" class="iconop"></a></td> -->
                    <td><a href="deletar/excluir-sec.php?id=<?php echo $id?>" onclick="return confirm('Tem certeza?');"><img src="img/iconexcluir.png" class="iconop"></a></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
        <div>
            <a href="admin.php"><button class="botao">Cadastrar secretaria</button></a>
        </div>
    </div>
</body>
</html>
