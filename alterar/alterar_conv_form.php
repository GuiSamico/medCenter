<?php
    require_once '../conexao.php';
    session_start();
    if(!isset($_SESSION['logado'])):
        header('location:index.php');
    endif;
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Med Center - Editar Convênio</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/alterar.css">
    <script src="../jquery/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function(){
            jQuery("#cnpj").mask("99.999.999/9999-99");
            jQuery("#telefone").mask("(99) 99999-9999");
        })
    </script>
</head>
<body>
    <div class="container">
        <div>
            <a href="../listagem-conv.php"><button type="submit" class="btn btn-info" style="position:absolute;top:0px;left:-300px;">Voltar</button></a>

            <form action="editar-conv.php" method="post" id="formConvenio">
                <h3 style="margin-left:140px;">Editar Convênio</h3>

                <span style="position: relative; top:-35px;">ID:</span>
                <input style="position: relative; top:-35px; left:10px; width:25px; height:25px; border:none" type="text" name="id" id="id" value="<?php echo $id;?>">

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="telefone" id="telefone">
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="endereco" id="endereco">
                </div>

                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="cnpj" id="cnpj">
                </div>

                <div class="form-group">
                    <label for="planos">Planos</label>
                </div>
                <div class="form-group">
                    <textarea class="form-control" required name="planos" id="planos" rows="3" cols="80"></textarea>
                </div>

                <button type="submit" class="btn btn-info" name="btn_alterar_conv">Editar Convênio</button>
            </form>
        </div>
    </div>
</body>
</html>
