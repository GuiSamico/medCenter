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
    <title>Med Center - Secretária</title>
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sec.css">
    <script src="jquery/jquery.maskedinput.min.js"></script>
    <script src="jquery/jquery.validate.min.js"></script>
    <script src="jquery/additional-methods.min.js"></script>
    <script src="jquery/localization/messages_pt_BR.js"></script>
    <script src="js/sec.js" charset="utf-8"></script>
    <script>
        $(document).ready(function(){
            jQuery("#data").mask("99/99/9999");
            jQuery("#hora").mask("99:99");
            jQuery("#cpf").mask("999.999.999-99");
            jQuery("#rg").mask("9999999999-9");
            jQuery("#telefone").mask("(99) 99999-9999");

            jQuery("#cpfmed").mask("999.999.999-99");
            jQuery("#rgmed").mask("9999999999-9");
            jQuery("#telefonemed").mask("(99) 99999-9999");

            jQuery("#cpfpac").mask("999.999.999-99");
            jQuery("#rgpac").mask("9999999999-9");
            jQuery("#telefonepac").mask("(99) 99999-9999");

            jQuery("#cnpj").mask("99.999.999/9999-99");
            $("#formcons").validate({
                rules:{
                    paciente:{
                        required: true,
                        minlength: 8,
                        maxlength: 50,
                        minWords:2
                    },
                    medico:{
                        required: true,
                        minlength: 8,
                        maxlength: 50,
                        minWords:2
                    },
                    data:{
                        required: true
                    },
                    hora:{
                        required: true
                    }
                }
            })
        })
    </script>
</head>
<body>
    <div class="container">
        <div class="nav">
            <div id="logo">
                <img src="img\logo.png">
            </div>
            <a href="logout.php"><img src="img/logoff.png" id="logoff"></a>

            <div class="fixed-bg">
                <a href="#cons" class="but">
                    <button type="button" class="btn btn-outline-light">Marcar consulta</button>
                </a>
                <div class="btn-group">
                    <button class="dropdown">Cadastrar</button>
                    <ul class="dropdown-menu">
                        <li><a href="#formrealimed">Medico</a></li>
                        <li><a href="#formrealipac">Paciente</a></li>
                        <li><a href="#formrealiconv">Convênio</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="dropdown">Listar</button>
                    <ul class="dropdown-menu">
                        <li><a href="listagem-med.php">Medico</a></li>
                        <li><a href="listagem-pac.php">Paciente</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div id="cons">
            <form id="formcons" method="POST" action="cad-consulta.php">
                <div id="title">
                    <span>Marcar consulta</span>
                </div>
                <div class="form-group">
                    <label for="paciente">Paciente</label>
                    <input autocomplete="off" type="text" class="form-control" id="paciente" name="paciente">
                </div>
                <div class="form-group">
                    <label for="medico">Médico</label>
                    <input autocomplete="off" type="text" class="form-control" id="medico" name="medico">
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input autocomplete="off" type="text" class="form-control" id="data" name="data">
                </div>
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input autocomplete="off" type="text" class="form-control" id="hora" name="hora">
                </div>
                <button type="submit" class="btn btn-info">Marcar</button>
            </form>

            <iframe class="messages" src="messages.php" width="590px" height="300px"></iframe>
        </div>

        <div id="reali" style="height: 1700px;">
            <form id="formrealimed" method="POST" action="cad-med.php">
                <div id="title">
                    <span>Cadastrar médico</span>
                </div>
                <div class="form-group">
                    <label for="medico">Nome</label>
                    <input required autocomplete="off" type="text" class="form-control" id="medico" name="medico">
                </div>
                <div class="form-group">
                    <label for="horario">Horário</label>
                    <input required autocomplete="off" type="text" class="form-control" id="horario" name="horario" placeholder="seg a sex, 7h - 12h" title="exemplo: seg a sex, 7h - 12h">
                </div>
                <div class="form-group">
                    <label for="cpfmed">CPF</label>
                    <input required autocomplete="off" type="text" class="form-control" id="cpfmed" name="cpfmed">
                </div>
                <div class="form-group">
                    <label for="rgmed">RG</label>
                    <input required autocomplete="off" type="text" class="form-control" id="rgmed" name="rgmed">
                </div>
                <div class="form-group">
                    <label for="crm">CRM</label>
                    <input required autocomplete="off" type="text" class="form-control" id="crm" name="crm">
                </div>
                <div class="form-group">
                    <label for="telefonemed">Telefone</label>
                    <input required autocomplete="off" type="text" class="form-control" id="telefonemed" name="telefonemed">
                </div>
                <div class="form-group">
                    <label for="enderecomed">Endereço</label>
                    <input required autocomplete="off" type="text" class="form-control" id="enderecomed" name="enderecomed">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                </div>
                <div class="sex">
                    <div class="form-group">
                        <input type="radio" value="1" name="sexo"> Masculino<br>
                        <input type="radio" value="2" name="sexo"> Feminino
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input required type="password" class="form-control" id="senha" name="senha">
                </div>
                <button type="submit" class="btn btn-info">Cadastrar</button>
            </form>


            <form id="formrealipac" method="POST" action="cad-pac.php">
                <div id="title">
                    <span>Cadastrar Paciente</span>
                </div>
                <div class="form-group">
                    <label for="nomepac">Nome</label>
                    <input required autocomplete="off" type="text" class="form-control" id="nomepac" name="nomepac">
                </div>
                <div class="form-group">
                    <label for="enderecopac">Endereço</label>
                    <input required autocomplete="off" type="text" class="form-control" id="enderecopac" name="enderecopac">
                </div>
                <div class="form-group">
                    <label for="telefonepac">Telefone</label>
                    <input required autocomplete="off" type="text" class="form-control" id="telefonepac" name="telefonepac">
                </div>
                <div class="form-group">
                    <label for="cpfpac">CPF</label>
                    <input required autocomplete="off" type="text" class="form-control" id="cpfpac" name="cpfpac">
                </div>
                <div class="form-group">
                    <label for="rgpac">RG</label>
                    <input required autocomplete="off" type="text" class="form-control" id="rgpac" name="rgpac">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                </div>
                <div class="sex">
                    <div class="form-group">
                        <input type="radio" value="1" name="sexo"> Masculino<br>
                        <input type="radio" value="2" name="sexo"> Feminino
                    </div>
                </div>

                <div class="form-group">
                    <label for="convenio">Convenio</label>
                    <select class="form-control" id="convenio" name="convenio">
                        <?php
                            $sql = "SELECT * FROM convenio";
                            $resultado = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($resultado)):
                        ?>
                        <option value="<?php echo $row['nome'];?>"><?php echo $row['nome'];?></option>
                        <?php
                            endwhile;
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-info">Cadastrar</button>
            </form>

            <form id="formrealiconv" method="POST" action="cad-conv.php">
                <div id="title">
                    <span>Cadastrar Convênio</span>
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input required autocomplete="off" type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input required autocomplete="off" type="text" class="form-control" id="telefone" name="telefone">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input required autocomplete="off" type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                    <input required autocomplete="off" type="text" class="form-control" id="cnpj" name="cnpj">
                </div>
                <div class="form-group">
                    <label for="planos">Planos</label>
                    <textarea required autocomplete="off" type="text" class="form-control" id="planos" name="planos"></textarea>

                </div>
                <button type="submit" class="btn btn-info">Cadastrar</button>
            </form>
            <a href="listagem-conv.php" style="position:absolute;top:2375px;left:760px;"><button class="btn btn-info">Ver cadastrados</button></a>
        </div>
    </div>
</body>
</html>
