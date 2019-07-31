<?php

    //referenciar o domPDF com namespace
    use Dompdf\Dompdf;
    // include autoloader
    require_once 'dompdf/autoload.inc.php';

    $dompdf = new DOMPDF();

    $dompdf->load_html('
        <img src="img/logo.png">
        <h1 style="position:relative; top:-180px;left:300px;">ATESTADO MÉDICO</h1>
        <br>
        <p>Atesto que o(a) Sr.(a)___________________________________</p>
        <p>foi atendido em nosso consultório no dia ____/____/________, das ____:____ás ____:____.</p>

        <p style="position:relative; top:300px;left:150px;">_____________________________________________________</p>
        <p style="position:relative; top:300px;left:300px;">Assinatura do médico</p>
    ');

    //renderizar o html
    $dompdf->render();

    //exibir a pagina
    $dompdf->stream(
        "atestado.pdf",
        array(
            "Attachment" => false //download automatico, coloque true
        )
    );
?>
