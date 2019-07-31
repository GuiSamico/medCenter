<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Med Center - Login</title>
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="jquery/jquery.maskedinput.min.js"></script>
    <script src="jquery/jquery.validate.min.js"></script>
    <script src="jquery/additional-methods.min.js"></script>
    <script src="jquery/localization/messages_pt_BR.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <script>
        $(document).ready(function(){
            jQuery("#cpfSec").mask("999.999.999-99");
            jQuery("#cpfMed").mask("999.999.999-99");
            $("#formAdmin").validate({
                rules:{
                    user:{
                        required: true,
                        minlength: 5,
                        maxlength: 50
                    },
                    senha:{
                        required: true,
                        minlength: 8,
                        maxlength: 20
                    }
                }
            }),
            $("#formSecretaria").validate({
                rules:{
                    cpfSec:{
                        required: true,
                        minlength: 14,
                        maxlength: 15
                    },
                    senha:{
                        required: true,
                        minlength: 8,
                        maxlength: 20
                    }
                }
            }),
            $("#formMedico").validate({
                rules:{
                    cpfMed:{
                        required: true,
                        minlength: 14,
                        maxlength: 15
                    },
                    senha:{
                        required: true,
                        minlength: 8,
                        maxlength: 20
                    }
                }
            })
        })
    </script>
    <script>
        function myFunctionAdmin(){
            var x = document.getElementById("senha");
            if(x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
        function myFunctionSec(){
            var x = document.getElementById("senha");
            if(x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
        function myFunctionMed(){
            var x = document.getElementById("senha");
            if(x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div id="logo">
            <a href="javascript:history.back()"><img src="img/logo.png"></a>
        </div>

        <div id="form">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" id="pills-admin-tab" data-toggle="pill" href="#pills-admin" role="tab" aria-controls="pills-admin" aria-selected="true">Administrador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-sec-tab" data-toggle="pill" href="#pills-sec" role="tab" aria-controls="pills-sec" aria-selected="false">Secretária</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-med-tab" data-toggle="pill" href="#pills-med" role="tab" aria-controls="pills-med" aria-selected="false">Médico</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
                    <form action="login.php" method="post" id="formAdmin" name="formAdmin">
                        <div class="form-group">
                            <label for="user">Usuário</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" id="user" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" id="senha">
                            <i class="fa fa-eye" aria-hidden="true" onClick="myFunctionAdmin()" style="color:gray;position:absolute;top:243px;left:455px;"></i>
                        </div>

                        <?php
                            if(isset($_SESSION['nao_autenticado'])):
                        ?>
                        <div class="notificacao-erro">
                            <button type="button" class="btn btn-outline-danger btn-block" disabled>Usuário inválido</button>
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>

                        <button type="submit" class="btn btn-info" name="btn_entrar_admin">Entrar</button>
                    </form>
                </div>

                <div class="tab-pane fade" id="pills-sec" role="tabpanel" aria-labelledby="pills-sec-tab">
                    <form action="login.php" method="post" id="formSecretaria" name="formSecretaria">
                        <div class="form-group">
                            <label for="cpfSec">CPF</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="cpfSec" id="cpfSec" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" id="senha">
                            <i class="fa fa-eye" aria-hidden="true" onClick="myFunctionSec()" style="color:gray;position:absolute;top:243px;left:455px;"></i>
                        </div>

                        <?php
                            if(isset($_SESSION['nao_autenticado'])):
                        ?>
                        <div class="notificacao-erro">
                            <button type="button" class="btn btn-outline-danger btn-block" disabled>Usuário inválido</button>
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>

                        <button type="submit" class="btn btn-info" name="btn_entrar_sec">Entrar</button>
                    </form>
                </div>

                <div class="tab-pane fade" id="pills-med" role="tabpanel" aria-labelledby="pills-med-tab">
                    <form action="login.php" method="post" id="formMedico" name="formMedico">
                        <div class="form-group">
                            <label for="cpfMed">CPF</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="cpfMed" id="cpfMed" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" id="senha">
                            <i class="fa fa-eye" aria-hidden="true" onClick="myFunctionMed()" style="color:gray;position:absolute;top:243px;left:455px;"></i>
                        </div>

                        <?php
                            if(isset($_SESSION['nao_autenticado'])):
                        ?>
                        <div class="notificacao-erro">
                            <button type="button" class="btn btn-outline-danger btn-block" disabled>Usuário inválido</button>
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>

                        <button type="submit" class="btn btn-info" name="btn_entrar_med">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
