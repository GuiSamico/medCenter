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

    <script>
        $(document).ready(function(){
            jQuery("#cpf").mask("999.999.999-99");
        })
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
                    <h2 style="font-size: 25px;color: #29a3a3; margin-left:70px;">Paciente</h2>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
                    <form action="agdConsulta_login.php" method="post" id="formAdmin" name="formAdmin">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="cpf" id="cpf" autocomplete="off">
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

                        <button type="submit" class="btn btn-info" name="btn_entrar_pac">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
