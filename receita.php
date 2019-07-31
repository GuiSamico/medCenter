<?php

    //referenciar o domPDF com namespace
    use Dompdf\Dompdf;
    // include autoloader
    require_once 'dompdf/autoload.inc.php';

    $dompdf = new DOMPDF();

    $dompdf->load_html('
        <img src="img/logo.png">
        <h1 style="position:relative; top:-180px;left:400px;">RECEITA</h1>
        <br>
        <p>Unidade de saúde:__________________________________________</p>
        <p>Nome do Paciente:__________________________________________</p>
        <p>Prescrição:</p>
        <p><textarea style="height:400px;"></textarea></p>

    ');

    //renderizar o html
    $dompdf->render();

    //exibir a pagina
    $dompdf->stream(
        "receita.pdf",
        array(
            "Attachment" => false //download automatico, coloque true
        )
    );
?>
