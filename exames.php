<?php

    //referenciar o domPDF com namespace
    use Dompdf\Dompdf;
    // include autoloader
    require_once 'dompdf/autoload.inc.php';

    $dompdf = new DOMPDF();

    $dompdf->load_html('
        <img src="img/logo.png">
        <h1 style="position:relative; top:-180px;left:300px;">Solicitação de exames</h1>
        <br>
        <p>Nome do Paciente:__________________________________________</p>
        <p>Nascimento:____/____/________</p>
        <p>Data:____/____/________</p>
        <p>Profissional:______________________________________________</p>
        <br>
        <p>Exames</p>
        <p>Solicito:</p>
        <p><textarea style="height:300px;"></textarea></p>
    ');

    //renderizar o html
    $dompdf->render();

    //exibir a pagina
    $dompdf->stream(
        "exames.pdf",
        array(
            "Attachment" => false //download automatico, coloque true
        )
    );
?>
