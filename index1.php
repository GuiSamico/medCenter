<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Med Center</title>
    <link rel="shortcut icon" href="img\favicon.png" type="image/x-icon">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/whhg.css">
    <script src="js/jquery.cycle2.js"></script>
    <script src="js/jquery.cycle2.carousel.js"></script>
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
    <script src="js/index.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton|Arvo|Indie+Flower|Lobster|Pacifico|Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container" style="height:2000px">
    <!--Carrousel.....................................-->
    
        <nav id="nav1">
            <ul>
                <img src="img/logo.png" id="logo">
                <a href="form-login.php"><i class="fas fa-user"></i></a>
            </ul>
        </nav>
    <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="200">
        <!-- prev/next links -->
        <div class="cycle-prev"></div>
        <div class="cycle-next"></div>

        <img class="imgCar" src="img/imgcar1.jpg">
        <img class="imgCar" src="img/imgcar2.jpg">
        <img class="imgCar" src="img/imgcar3.jpg">
        <img class="imgCar" src="img/imgcar4.jpg">
    </div>
    
    
     <div class="fixed-bg">
        <div class="icones">
            <a href="#s" class="scrollSuave" id="icon_1">
                <span class="nIcon">SERVIÇOS</span>
                <img src="img/iconservicos.png" class="icones-link">
            </a>
            <a href="#conv" class="scrollSuave" id="icon_2">
                <span class="nIcon" style="position: relative;
                left:225px;">CONVÊNIOS</span>
                <img src="img/iconconvenio.png" class="icones-link">
            </a>
            <a href="agdConsulta_login_form.php" id="icon_3">
                <span class="nIcon">AGENDAR</span>
                <img src="img/iconconsulta.png" class="icones-link">
            </a>
        </div>
    </div> 

    
    <div id="conteudo">

        <div id="s">
            <span class="linha"></span><span>Serviços</span>
        </div>

        <div class="tudo">

            <div class="box">
                <div class="content">
                    <div>
                    <h2>Cardiologia</h2>
                    <p>Cardiologia é a especialidade médica que se ocupa do diagnóstico e tratamento das doenças que acometem o coração bem como os outros componentes do sistema circulatório.</p>
                    </div>
                </div>
                <img src="img/cardiologia.jpg" alt="">
            </div>

            <div class="box1">
                <div class="content">
                    <div>
                    <h2>Pediatria</h2>
                    <p>A pediatria é a especialidade médica dedicada à assistência à criança e ao adolescente, nos seus diversos aspectos, sejam eles preventivos ou curativos.</p>
                    </div>
                </div>
                <img src="img/pediatra.jpg" alt="">
            </div>

            <div class="box2">
                <div class="content">
                    <div>
                    <h2>Oftamologia</h2>
                    <p>A oftalmologia é uma especialidade da medicina que estuda e trata as doenças relacionadas ao olho.</p>
                    </div>
                </div>
                <img src="img/oftalmologia.jpg" alt="">
            </div>

            <div class="box3">
                <div class="content">
                    <div>
                    <h2>Ginecologia</h2>
                    <p>A ginecologia é a prática da medicina que lida diretamente com a saúde do aparelho reprodutor feminino e mamas.</p>
                    </div>
                </div>
                <img src="img/ginecologia.png" alt="">
            </div>

            <div class="box4">
                <div class="content">
                    <div>
                    <h2>Psiquiatria</h2>
                    <p>Psiquiatria é a especialidade da Medicina que lida com a prevenção, diagnóstico, tratamento e reabilitação das diferentes formas de sofrimentos mentais.</p>
                    </div>
                </div>
                <img src="img/psiquiatria.jpg" alt="">
            </div>

            <div class="box5">
                <div class="content">
                    <div>
                    <h2>Ortopedia</h2>
                    <p>A ortopedia é a especialidade médica que cuida da saúde relacionadas aos elementos do aparelho locomotor, como ossos, músculos, ligamentos e articulações.</p>
                    </div>
                </div>
                <img src="img/ortopedia.jpg" alt="">
            </div>

            <div class="box6">
                <div class="content">
                    <div>
                    <h2>Radiologia</h2>
                    <p>Radiologia é a especialidade da medicina que utiliza as radiações para a realização de diagnósticos, controle e tratamento de doenças.</p>
                    </div>
                </div>
                <img src="img/radiologia.jpg" alt="">
            </div>

            <div class="box7">
                <div class="content">
                    <div>
                    <h2>Dermatologia</h2>
                    <p>Dermatologia é a especialidade médica que se ocupa do diagnóstico e tratamento clínico-cirúrgico das enfermidades relacionados à pele e aos anexos cutâneos.</p>
                    </div>
                </div>
                <img src="img/dermatologia.jpeg" alt="">
            </div>
        </div>

        <div class="conv" id="conv">
            <div id="c">
                <span class="linha"></span><span>Convênios</span>
            </div>
            <div id="ca-container" class="ca-container">
            	<div class="ca-wrapper">
            		<div class="ca-item ca-item-1">
            			<div class="ca-item-main">
            				<img src="img/conv1.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-2">
                        <div class="ca-item-main">
            				<img src="img/conv2.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-3">
                        <div class="ca-item-main">
            				<img src="img/conv3.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-4">
                        <div class="ca-item-main">
            				<img src="img/conv4.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-5">
                        <div class="ca-item-main">
            				<img src="img/conv5.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-6">
                        <div class="ca-item-main">
            				<img src="img/conv6.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-7">
                        <div class="ca-item-main">
            				<img src="img/conv7.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-8">
                        <div class="ca-item-main">
            				<img src="img/conv8.png">
            			</div>
            		</div>

            		<div class="ca-item ca-item-9">
                        <div class="ca-item-main">
            				<img src="img/conv9.png">
            			</div>
            		</div>
            	</div>
            </div>
        </div>

    </div>

</div>
    <div class="footer">
        <div class="inf">
            <p>Endereço: Rua dos anjos, 666</p>
            <p>Copyright © 2019 | Nicoly & Guilherme</p>
            <p>Contato: (85)985476425</p>
            <p>Email: medcenter_ng@gmail.com</p>
        </div>

        <p class="logoRod"><img src="img/logo.png" alt=""></p>

        <p class="icon"><img src="img/inst.png" class="icon">@med_center</p>
        <p class="icon"><img src="img/face.png" class="icon">Med Center</p>
        <p class="icon"><img src="img/twit.png" class="icon">@medCenter</p>
        <p class="icon"><img src="img/link.png" class="icon">Med Center .inc</p>

        <a id="subirTopo">
            <img src="img/subir.png" alt="">
        </a>
    </div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
	<script type="text/javascript">
		$('#ca-container').contentcarousel();
	</script>
    <!-- <script type="text/javascript">
        $('.icones a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;
            $('html, body').animate({
                scrollTop: targetOffset - 100
            }, 800);
        });
    </script> -->

    <script src="js/index.js"></script>
</body>
</html>
