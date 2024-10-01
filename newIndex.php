<?php

include __DIR__ . '/vendor/autoload.php';

use App\Entity\Palestra;

$new_obj = new Palestra();
$palestras = $new_obj->filtrar();

$results = '';
foreach ($palestras as $palestra) {
  $contVagas = $palestra->vagas;
  if ($contVagas <= 0) {
    $results .= '		
            <div class="card-container move" animation="top" href="inscricao.html"> 
             
            <div class="card" onclick="seeCardDescription(this)">
              <div class="imgs_palestrante" data-carousel=0>
                <img class="palestrante" src="' . $palestra->foto . '" alt="">
              </div> 
              <div class="front-content">
                <p class="nome-palestrante">' . $palestra->nome_palestrante . '</p>
              </div>
              <div class="content">
                <h1> ENCERRADAS </h1> 
                <div class="area_icons">
                  <a href="'.$palestra->instagram.'" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-instagram"></i></a> 
                  <a href="'.$palestra->linkedin.'" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-linkedin"></i></a> 
                </div>
                <p class="titulo-palestra"> ' . $palestra->palestra . '</p>
                <p class="titulo-palestra2"></p>
              </div>
            </div>
          </div> 
          ';
  } else {
    $results .= '
          <div class="card-container move" animation="top" href="inscricao.html"> 
            
            <div class="card" onclick="seeCardDescription(this)">
              <div class="imgs_palestrante" data-carousel=0>
                <img class="palestrante" src="' . $palestra->foto . '" alt="">
              </div> 
              <div class="front-content">
                <p class="nome-palestrante">' . $palestra->nome_palestrante . '</p>
              </div>
              <div class="content">
                <h1> ' . $palestra->vagas . ' VAGAS</h1>
                <div class="area_icons">
                  <a href="'.$palestra->instagram.'" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-instagram"></i></a> 
                  <a href="'.$palestra->linkedin.'" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-linkedin"></i></a> 
                </div>
                <p class="titulo-palestra"> ' . $palestra->palestra . '</p>
                <p class="titulo-palestra2"></p>
                <a href="./inscricao.php?id_palestra=' . $palestra->id_palestra . '" class="ver_palestra clicavel"><span class="span_btn_inscricao">Ver <i class="fa-solid fa-arrow-right "></i></span> </a>
              </div>
            </div>
          </div>
 
    ';
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB INNOVATION 5</title>

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./styles/root.css">

    <link rel="stylesheet" href="./styles/menuTopo.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="./styles/representantesSenac.css">
    <link rel="stylesheet" href="./styles/textoGradiente.css">
    <link rel="stylesheet" href="./styles/palestras.css">
    <link rel="stylesheet" href="./styles/sobreHub.css">
    <link rel="stylesheet" href="./styles/galerySenac.css">
    <link rel="stylesheet" href="./styles/apoiadores.css">
    <link rel="stylesheet" href="./styles/footer.css">


    <script defer src="./js/main.js"></script>
</head>

<body>
    <!-- PRECISA DEIXAR RESPONSIVO EM 700PX -->
    <nav class="menu_topo">

        <div class="area_logo">
            <img class="img_logo" src="./SVG SITE HUB 5/Logo e Elementos/SVG/AtivoYW.svg">
        </div>
        <ul class="links_topo">
            <li class="itemsTopo"><a href="#home_section">Home</a></li>
            <li class="itemsTopo"><a href="#palestras">Palestras</a></li>
            <li class="itemsTopo"><a href="#sobreHubs">Sobre</a></li>
        </ul>
        <div class="yParte" id="yParte">

            <img class="img_yParte" src="./SVG SITE HUB 5/Logo e Elementos/SVG/whiteSquare.svg" alt="">
            <div class="areaHamburguerNavBar" id="buttonAreaHamburguerNavBar">

                <div class="lineNav lineNav1"></div>
                <div class="lineNav lineNav2"></div>
                <div class="lineNav lineNav3"></div>

            </div>

            <ul class="responsiveNavBar">
                <li class="itemsTopoResponsive"><a href="#home_section">Home</a></li>
                <li class="itemsTopoResponsive"><a href="#palestras">Palestras</a></li>
                <li class="itemsTopoResponsive"><a href="#sobreHubs">Sobre</a></li>
            </ul>

        </div>

    </nav>

    <!-- RESPONSIVIZAR PARA 900px 100% -->
    <!-- <section id="home_section"> 
        <div class="backgroundHomeRounded"></div> 
        <div class="homeSectionContent">
            <img class="hubSplashBg" src="../images/art backgorund5.png" alt="" srcset="">
            <div class="rightContentHome">
                <div class="areaAboutHomeText">
                    <h1>O MAIOR EVENTO</h1>
                    <h2>DO SENAC HUB ACADEMY</h2>
                    <h3>DIA  23/10 ÀS 19:00</h3>
                    <a href="#palestras">Quero me inscrever!</a>
                </div>                
            </div>


            <div class="bubble1"></div>
            <div class="areaImgSenacHome"> 
                <img src="../images/hubAcademy.jpg" alt="">  
            </div>
            <div class="bubble2"></div>
            <div class="bubble3"></div> 
        </div> 

    </section>  -->

    <section class="home-chamada">
        <div class="imagem-logo-animacao">
            <div class="ring">
                <i style="--clr:#ffd600;"></i>
                <i style="--clr:#F29D35;"></i>
                <i style="--clr:#ffdb64;"></i>
                <div class="imagem-logo">
                    <img src="./images/Amarelo innovation-01.png" alt="">
                </div>
            </div>
            <!-- <div class="areaEngrenagem"></div> -->
        </div>
        <div class="dados-evento">
            <!-- <div class="imagem-logo-hub">
                <img src="../images/34563463.png" alt="">
            </div> -->
            <div class="areaTextCardTitulo">
                <h1 class="titleCard move" animation="left">HUB </h1>
                <h1 class="marcaDagua move" animation="right">HUB </h1>
                <h1 class="titleCard move" animation="left">INNOVATION </h1>
                <h1 class="marcaDagua2 move" animation="right">INOVATION </h1>
            </div>
            <h1 class="info-evento move" animation="left">O MAIOR EVENTO</h1>
            <h1 class="info-evento move" animation="left">DO SENAC HUB ACADEMY</h1>
            <h1 class="data-evento move" animation="left">DIA 23/10 ÀS 19:00</h1>
            <a href="#palestras">
            <div class="botao-inscrever">
                <button>Inscreva-se</button>
            </div>
            </a>
        </div>

    </section>

    <!-- RESPONSIVIZAR 1250PX -->
    <section class="admsSenac">
        <div class="alotofBubbles">

            <!-- <div class="bubblebgAdms1 bubblebgAdms"></div> -->
            <div class="bubblebgAdms2 bubblebgAdms"></div>
            <!-- <div class="bubblebgAdms3 bubblebgAdms"></div> -->
            <!-- <div class="bubblebgAdms4 bubblebgAdms"></div> -->
            <div class="bubblebgAdms5 bubblebgAdms"></div>
            <!-- <div class="bubblebgAdms6 bubblebgAdms"></div> -->
            <!-- <div class="bubblebgAdms7 bubblebgAdms"></div> -->
            <div class="bubblebgAdms8 bubblebgAdms"></div>
            <!-- <div class="bubblebgAdms9 bubblebgAdms"></div> -->
            <div class="bubblebgAdms10 bubblebgAdms "></div>

        </div>
        <div class="card1Adm">
            <!-- <div class="areaIconCardAdm">
                <div class="bubbleCardAdm1"></div>
                <div class="imgIconAdm">
                    <img src="../images/vitor-mello.jpg"
                        alt="" srcset="">
                </div>
                <div class="bubbleCardAdm2"></div>
            </div> -->
            <div class="areaTextCardAdm">
                <h1 class="titleCard move" animation="left">SENAC MS</h1>
                <h1 class="marcaDagua move" animation="right">SENAC MS</h1>
            </div>
        </div>
        <div class="palavras-flutuantes">
            <span class="marcaDaguaSpan move palavra1" animation="right">INOVAÇÃO</span>
            <span class="marcaDaguaSpan move palavra2" animation="left">EMPREENDEDORISMO</span>
            <span class="marcaDaguaSpan move palavra3" animation="left">TECNOLOGIA</span>
            <span class="marcaDaguaSpan move palavra4" animation="right">SAÚDE</span>
            <span class="marcaDaguaSpan move palavra5" animation="left">COMÉRCIO</span>
            <span class="marcaDaguaSpan move palavra6" animation="right">MODA</span>
            <span class="marcaDaguaSpan move palavra7" animation="left">BELEZA</span>
            <span class="marcaDaguaSpan move palavra8" animation="right">GESTÃO</span>
            <span class="marcaDaguaSpan move palavra9" animation="right">SEGURANÇA</span>
            <span class="marcaDaguaSpan move palavra10" animation="right">GAMES</span>
        </div>
        <div class="card2Adm">
            <div class="areaTextCardAdm">
                <h1 class="titleCard move" animation="right">HUB ACADEMY</h1>
                <h1 class="marcaDagua move" animation="left">HUB ACADEMY</h1>                
            </div>
          
        </div>

    </section>

    <!-- <section id="textoSloganSenacHub"> 
        <h1 class="move" animation="left">Hub Innovation: Transformando Ideias em Realidade, Impulsionando o Futuro do Comércio</h1>
        <p class="move" animation="right">Há 5 edições, o Senac MS inspira e conecta ideias, criando soluções que impulsionam o comércio e transformam o futuro.</p>
    </section> -->


    <div class="area-frase">

        <h5 class="move" animation="right"> EXPLORE, VIVA e INSPIRE A INOVAÇÃO</h5>

    </div>
            <div class="titleHeadrPalestras texto" contenteditable="true">
                <h3></h3>
            </div>
         
 
        <div class="headerPalestras">

            <!-- <div class="leftHeaderC">
                <div class="cLefttHeader"></div>
            </div>
             -->
         
            <div class="titleHeadrPalestras texto" contenteditable="true">
                <h4>PALESTRAS</h4>
            </div>
            <!-- <div class="rightHeaderC"> 
                <div class="cRightHeader"></div>
            </div> -->
        </div>
        <div class="areaCardsPalestras">

            <div class="content_cardsPalestras">
                <div class="card_palestra palestra_item" palestra_id="28">
                    <div class="front_card_palestra">
                        <img class="img_card_palestra"
                            src="./images/Thiago.jfif"
                            alt="">
                    </div>
                    <div class="back_card_palestra">
                        <div class="bubbleCardPalestra"></div>
                    </div>
                    <div class="about_palestra_card">
                        <h1>A.I. para Vendas A.I. para Vendas A.I. para Vendas</h1>
                        <h2>Thiago Almeida</h2>
                        <h3>20 VAGAS</h3>
                    </div>
                </div>
                <div class="card_palestra palestra_item" palestra_id="22">
                    <div class="front_card_palestra">
                        <img class="img_card_palestra"
                            src="./images/Ederson.jfif"
                            alt="">

                    </div>

                    <div class="back_card_palestra">
                        <div class="bubbleCardPalestra"></div>
                    </div>

                    <div class="about_palestra_card">
                        <h1>A.I. para Vendas A.I. para Vendas A.I. para Vendas</h1>
                        <h2>Ederson Costa</h2>
                        <h3>20 VAGAS</h3>
                    </div>
                </div>
                <div class="card_palestra palestra_item" palestra_id="13">
                    <div class="front_card_palestra">
                        <img class="img_card_palestra"
                            src="./images/Calebe.jfif"
                            alt="">

                    </div>

                    <div class="back_card_palestra">
                        <div class="bubbleCardPalestra"></div>
                    </div>

                    <div class="about_palestra_card">
                        <h1>A.I. para Vendas A.I. para Vendas A.I. para Vendas</h1>
                        <h2>Calebe Caleberson</h2>
                        <h3>20 VAGAS</h3>
                    </div>
                </div>
                <div class="card_palestra palestra_item" palestra_id="11">
                    <div class="front_card_palestra">
                        <img class="img_card_palestra"
                            src="https://delco.today/wp-content/uploads/sites/3/2023/07/iStock-1452604857-970x550.jpg"
                            alt="">
                    </div>

                    <div class="back_card_palestra">
                        <div class="bubbleCardPalestra"></div>
                    </div>

                    <div class="about_palestra_card">
                            <h1>A.I. para Vendas A.I. para Vendas A.I. para Vendas</h1>
                            <h2>Como captalizar clientes</h2>
                        <h3>20 VAGAS</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modalSubscribePalestra">
        <div class="contentModalSubscribe">
            <div class="card_palestra cardPalestraSubscribe">
                <!-- CARD SUPERIOR DO MODAL -->
                <div class="front_card_palestra">
                    <img id="img_card_palestraModal" class="img_card_palestra"
                        src="./images/32e8b686f190fae3e64a74c8a8df1ac8.jpg" alt="">
                </div>

                <div class="back_card_palestra">
                    <div class="bubbleCardPalestra"></div>
                </div>

                <div class="about_palestra_card">
                    <h1 id="titleCardPalestraSubscribe"></h1>
                    <h2 id="subTitleCardPalestraSubscribe"></h2>
                </div>
                <!-- FIM DO CARD SUPERIOR DO MODAL  -->
            </div>

            <div class="cardPalestranteSubscribe">

                <div class="frontCardPalestranteSubscribe">
                    <img id="img_palestranteSubscribe" src="./images/32e8b686f190fae3e64a74c8a8df1ac8.jpg" alt="">
                </div>
                <div class="shadowCardPalestranteSubscribe"></div>

            </div>

            <button id="closeButtonSubscribe" class="closeButtonSubscribe">X</button>

            <div class="headerSubscribe">

                <h1 id="titleHeaderSubscribe">A.I. para vendas</h1>
                <h2 id="subtitleHeaderSubscribe">Como captar clientes</h2>

            </div>
            <div class="areaAboutPalestraSubscribe">

                <p class="aboutPalestraSubscribe" id="aboutPalestraSubscribe">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan.
                    Donec sit amet ante sodales, auctor erat nec, efficitur ante. Pellentesque nunc nisi, laoreet ut
                    sodales at, cursus at dolor. Ut et porttitor urna. Aliquam erat volutpat. Maecenas scelerisque lorem
                    purus, quis posuere orci sollicitudin vel. Sed egestas maximus ultricies. Aliquam mattis, eros in
                    vulputate ullamcorper, tellus justo pulvinar neque, vel rutrum libero dui sit amet purus. Curabitur
                    tempor erat dui, tincidunt mollis augue semper luctus. Praesent imperdiet sem nec tellus vehicula
                    vestibulum. Aliquam dapibus vel eros et pretium.</p>

            </div>
            <div class="areaButtonSubscribe">

                <button id="btnToSubscribeModalSimao100">Quero me Inscrever</button>
                <h3 class="nomePalestranteSubscribe" id="nomePalestranteSubscribe">Prof. Matheus Silva</h3>

            </div>

        </div>
    </div>

    <section class="apoiadores">

        <div class="headerApoiadores">

            <div class="retangleLeftA"></div>
            <div class="areaTitleA">
                <h1 class="titleApoiadores move" animation="right">REALIZAÇÃO</h1>
            </div>
            <div class="retangleRightA"></div>

        </div>

        <div class="areaRealizao">
                <img src="./images/Logo Hub Negativo.png">
                <img src="./images/logoFecomercionegativo.png" id="fe-com">
        
                <img src="./images/Logo Branca Fábrica de Software.png">
           
        </div>
    </section>


    <section id="sobreHubs" class="sobreHub">
        <div class="headerSobreHub">

            <h1 class="move" animation="right"> SOBRE O HUB INNOVATION</h1>

        </div>

        <div class="sobreChooses">

            <div class="headerSelectAbout">

                <div class="itemHeaderAbout active" id="oqItemAbout">
                    <button>O QUE É?</button>
                    <div class="oqueeG"></div>
                </div>

                <div class="itemHeaderAbout" id="paraQuemItemAbout">
                    <button>PARA QUEM?</button>
                    <div class="oqueeG"></div>
                </div>

                <div class="itemHeaderAbout" id="pqItemAbout">
                    <button>POR QUE IR?</button>
                    <div class="oqueeG"></div>
                </div>

            </div>

            <div class="contentSobre">

                <div class="textSobreHub">
                    <p id="descAboutHub">O Hub Innovation não é apenas um espaço físico; é uma incubadora de ideias e um
                        catalisador para a transformação social e profissional. Localizado no coração da cidade, esse
                        hub se destaca não só pela localização privilegiada, mas também por um ambiente que respira
                        tecnologia e inovação. A estrutura é projetada para facilitar a interação e o compartilhamento
                        de conhecimentos, promovendo a emancipação dos papéis individuais em um contexto que valoriza
                        tanto a autonomia quanto a colaboração. É um local onde futuros líderes são forjados, novas
                        ideias são concebidas e a inovação é uma constante. Cada canto do Hub está equipado para
                        incentivar a criatividade e a inovação, tornando-o um ponto de encontro essencial para qualquer
                        pessoa interessada em moldar o futuro. Investir seu tempo para conhecer o Hub Innovation é uma
                        decisão que promete retornos significativos em crescimento pessoal e profissional.</p>
                </div>
                <div class="areaEngrenagemAbout">
                    <img class="engrenagemAbout move" animation="right"
                        src="./SVG SITE HUB 5/Logo e Elementos/SVG/whiteSquare.svg" alt="" srcset="">
                </div>
                <div class="outLineEng1"></div>
                <div class="outLineEng2"></div>

            </div>



        </div>
    </section>


    <section class="galerySenacHub">

        <div class="bubblesGalery">
            <div class="bubbleGal bubbleGal1"></div>
            <div class="bubbleGal bubbleGal2"></div>
            <div class="bubbleGal bubbleGal3"></div>
            <div class="bubbleGal bubbleGal4"></div>
            <div class="bubbleGal bubbleGal5"></div>
            <div class="bubbleGal bubbleGal6"></div>
            <div class="bubbleGal bubbleGal7"></div>
            <div class="bubbleGal bubbleGal8"></div>
        </div>


        <div class="imgsGalery">
            <img class="imgGal imgGal1"
                src="./images/IMG-20230621-WA0229.jpg">
            <img class="imgGal imgGal2" src="../images/IMG-20230621-WA0214 .jpg">
            <img class="imgGal imgGal3"
                src="./images/IMG_20230621_212109_2.jpg">
            <img class="imgGal imgGal4"
                src="./images/IMG-20230621-WA0296.jpg">
            <img class="imgGal imgGal5"
                src="./images/IMG-20230622-WA0009.jpg">
            <img class="imgGal imgGal6" src="../images/IMG-20231025-WA0148.jpg">
            <img class="imgGal imgGal7"
                src="./images/IMG-20230622-WA0006.jpg">
            <img class="imgGal imgGal8"
                src="./images/IMG-20221025-WA0216.jpg">
        </div>


    </section>


    
    <section class="apoiadores">

        <div class="headerApoiadores">

            <div class="retangleLeftA"></div>
            <div class="areaTitleA">
                <h1 class="titleApoiadores move" animation="right">APOIADORES</h1>
            </div>
            <div class="retangleRightA"></div>

        </div>

        <div class="areaCardsApoiadores">
            <div class="cardApoiador">
                <img src="./SVG SITE HUB 5/Logo e Elementos/SVG/wizardIcon.png">
            </div>
            <div class="cardApoiador">
                <img src="./SVG SITE HUB 5/Logo e Elementos/SVG/wizardIcon.png">
            </div>
            <div class="cardApoiador">
                <img src="./SVG SITE HUB 5/Logo e Elementos/SVG/wizardIcon.png">
            </div>
            <div class="cardApoiador">
                <img src="./SVG SITE HUB 5/Logo e Elementos/SVG/wizardIcon.png">
            </div>

            <div class="cardApoiador">
                <img src="./SVG SITE HUB 5/Logo e Elementos/SVG/wizardIcon.png">
            </div>

        </div>

        <!-- <div class="areaLogoHub5Big">
            <img src="../SVG SITE HUB 5/Logo e Elementos/SVG/Ativo 1.svg">
        </div> -->

    </section>



    <footer class="rodapeSite">

        <div class="leftContentRodape move" animation="left">
            © 2024 FÁBRICA DE SOFTWARE
        </div>
        <div class="iconsFooter">
            <a href="#" class="move" animation="top"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" class="move" animation="top"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="move" animation="top"><i class="fa-brands fa-facebook"></i></a>
        </div>

    </footer>

</body>

</html>