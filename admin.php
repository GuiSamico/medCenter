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
    <title>Med Center - Administrador</title>
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css\admin.css">
    <script src="jquery/jquery.maskedinput.min.js"></script>
    <script src="jquery/jquery.validate.min.js"></script>
    <script src="jquery/additional-methods.min.js"></script>
    <script src="jquery/localization/messages_pt_BR.js"></script>

    <script>
        $(document).ready(function(){
            jQuery("#cpf").mask("999.999.999-99");
            jQuery("#rg").mask("9999999999-9");
            jQuery("#telefone").mask("(99) 99999-9999");
            $("#formCadSecretaria").validate({
                rules:{
                    nome:{
                        required: true,
                        minlength:5,
                        maxlength:100,
                        minWords:2
                    },
                    cpf:{
                        required: true,
                        maxlength: 15,
                        minlength: 11
                    },
                    rg:{
                        required: true,
                        maxlength: 15,
                        minlength: 11
                    },
                    telefone:{
                        required: true,
                        maxlength: 15,
                        minlength: 11
                    },
                    sexo:{
                        required: true
                    },
                    endereco:{
                        required:true,
                        minlength: 10,
                        maxlength:100
                    },
                    senha:{
                        required:true,
                        minlength: 8,
                        maxlength:20
                    }
                }
            })
        })
    </script>
</head>
<body>
    <div class="container">

        <div id="logo">
            <a href="javascript:history.back()"><img src="img/logo.png"></a>
        </div>


        <div id="form">
            <div id="title">
                <span>Cadastrar Secretária</span>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-sec" role="tabpanel" aria-labelledby="pills-sec-tab">
                    <form action="cad-sec.php" method="POST" name="formCadSecretaria" id="formCadSecretaria">

                        <div id="d1">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" autocomplete="off">
                            </div>
                        </div>

                        <div id="d2">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="cpf" id="cpf" autocomplete="off">
                            </div>
                        </div>

                        <div id="d3">
                            <div class="form-group">
                                <label for="rg">RG</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="rg" id="rg" autocomplete="off">
                            </div>
                        </div>

                        <div id="d4">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefone" id="telefone" autocomplete="off">
                            </div>
                        </div>

                        <div id="d5">
                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" value="1" name="sexo"> Masculino<br>
                                <input type="radio" value="2" name="sexo"> Feminino
                            </div>
                        </div>

                        <div id="d6">
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="endereco" id="endereco" autocomplete="off">
                            </div>
                        </div>

                        <div id="d7">
                            <div class="form-group">
                                <label for="senha">Senha</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha" id="senha">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info" name="btn_cad_sec">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
