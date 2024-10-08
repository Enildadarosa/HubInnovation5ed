<?php
include __DIR__ . '/vendor/autoload.php';
use App\Entity\Palestra;

$new_obj = new Palestra();
$palestras = $new_obj->filtrar();

$nocards = '
                <div class="card_palestra palestra_item">
                    <div class="front_card_palestra">
                        <img class="img_card_palestra"
                            src="./images/IA.jpg"
                            alt="Avatar">
                    </div>

                    <div class="back_card_palestra">
                        <div class="bubbleCardPalestra"></div>
                    </div>

                    <div class="about_palestra_card">
                        <h1> Inteligência Artificial </h1>
                        <h2> Explorando Soluções </h2>
                        <h3>ENCERRADAS</h3>
                    </div>
                </div>
';

$results = '';
foreach ($palestras as $palestra) {
  $contVagas = $palestra->vagas;
  if ($contVagas <= 0) { //BLOQUEAR VAGAS
    $results .= '		
                <div class="card_palestra palestra_item" palestra_id="'.$palestra->id_palestra.'">
                    <div class="front_card_palestra">
                        <img class="img_card_palestra"
                            src="'.$palestra->foto.'"
                            alt="Avatar">

                    </div>

                    <div class="back_card_palestra">
                        <div class="bubbleCardPalestra"></div>
                    </div>

                    <div class="about_palestra_card">
                        <h1> '.$palestra->palestra.' </h1>
                        <h2>'.$palestra->nome_palestrante.'</h2>
                        <h3>ENCERRADAS</h3>
                    </div>
                </div>
          ';
  } else {
    $results .= '
                <div class="card_palestra palestra_item" palestra_id="'.$palestra->id_palestra.'">
                    <div class="front_card_palestra">
                        <img class="img_card_palestra"
                            src="'.$palestra->foto.'"
                            alt="Avatar">

                    </div>

                    <div class="back_card_palestra">
                        <div class="bubbleCardPalestra"></div>
                    </div>

                    <div class="about_palestra_card">
                        <h1> '.$palestra->palestra.' </h1>
                        <h2>'.$palestra->nome_palestrante.'</h2>
                        <h3>'.$palestra->vagas.' VAGAS</h3>
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
    <link rel="stylesheet" href="./styles/sloganSenacHub.css">
    <script src="./js/main.js" defer></script>
</head>

<body>
    <!-- PRECISA DEIXAR RESPONSIVO EM 700PX -->
    <nav class="menu_topo">

        <div class="area_logo">
            <img class="img_logo" src="./svgs/hublogo5.svg">
        </div>
        <ul class="links_topo">
            <li class="itemsTopo"><a href="./index.php">Home</a></li>
            <li class="itemsTopo"><a href="#palestras">Palestras</a></li>
            <li class="itemsTopo"><a href="#sobreHubs">Sobre</a></li>
        </ul>
        <div class="yParte" id="yParte">

            <img class="img_yParte" src="./svgs/hubwhite.svg" alt="">
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

    <section class="home-chamada">
        <div class="imagem-logo-animacao">
            <div class="ring">
                <i style="--clr:#ffd600;"></i>
                <i style="--clr:#F29D35;"></i>
                <i style="--clr:#ffdb64;"></i>
                <div class="imagem-logo">
                    <img src="./images/logohub_yellow.png" alt="">
                </div>
            </div>
            <!-- <div class="areaEngrenagem"></div> -->
        </div>
        <div class="dados-evento">
            <!-- <div class="imagem-logo-hub">
                <img src="./images/34563463.png" alt="">
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

    <section id="textoSloganSenacHub"> 
        
        <h1 class="move" animation="left">SENAC APRESENTA A 5ª EDIÇÃO DO HUB INNOVATION</h1>
        <p class="move" animation="right">ENCONTROS QUE MULTIPLICAM CONEXÕES!!!</p>
        <div class="areaSloganPublicSenacHub">

            <div class="areaTextSlogan_P">
                
                <p class="textLeftSloganHub"> A INOVAÇÃO e a EDUCAÇÃO para o Senac/MS são fatores preponderantes para o crescimento e desenvolvimento sustentável de nosso Estado e País, a inovação possibilita dar concretude às ideias que criam ou melhoram processos, produtos e negócios e a Educação promove o compartilhamento de conhecimentos e desenvolvimento de skills e competências para o trabalho, ambas contribuindo para a melhoria de nossa sociedade e dos setores produtivos do Comércio de bens, Serviços e Turismo. Elas são valores perenes de nossa instituição, que busca associá-las e constantemente torná-las acessíveis e disponíveis a toda a sociedade, num processo repleto de aprendizado, crescimento e descoberta. Uma oportunidade é o HUB INNOVATION, um grande evento do Senac Hub Academy que objetiva compartilhar – Inovação e Educação – por meio de novas técnicas, protocolos, produtos, tecnologias e conhecimento nas áreas de saúde, estética, beleza, tecnologia da informação, games, gestão, varejo, comunicação e marketing, possibilitando que, gratuitamente, TODOS se conectem com as tendências e mudanças num mundo em constante transformação. BEM-VINDOS AO HUB INNOVATION – ENCONTROS QUE MULTIPLICAM CONEXÕES!!!! </p>
                
                <div class="areaMargenDivisoriaGala">
                    <div class="lineGMargen"></div>
                    <div class="middleLineGMargen">

                        <div class="lineGmargenLancelot"></div>
                        <div class="lineGmargenLancelot"></div>

                    </div>
                    <div class="lineGMargen"></div>

                </div>

            </div>
            <div class="areaImgSlogan_P">
                <img class="imgSloganImg" src="./images/imgPublicHubInnovation2.jpg" alt="">

                <div class="bubbleSloganHubP bubbleSlogan_1"></div>
                <div class="bubbleSloganHubP bubbleSlogan_2"></div>
            </div> 
            
        </div>



    </section>


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
        <div class="areaCardsPalestras" id="palestras">

            <div class="content_cardsPalestras">

            <?php $cards = $palestras  == 0 ? $nocards : $results;
                    echo $cards; 
            ?>           
                
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
                <img id="biglogo" src="./images/logo_hub_senac.png">
                <img src="./images/logofabrica.png">
           
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
                        src="./svgs/whiteSquare.svg" alt="" srcset="">
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
                src="./images/20231025_213213.jpg">
            <img class="imgGal imgGal2" 
                src="./images/IMG-20230621-WA0214 .jpg">
            <img class="imgGal imgGal3"
                src="./images/IMG_20230621_212109_2.jpg">
            <img class="imgGal imgGal4"
                src="./images/IMG-20240619-WA0142.jpg">
            <img class="imgGal imgGal5"
                src="./images/IMG-20230622-WA0009.jpg">
            <img class="imgGal imgGal6" 
                src="./images/IMG-20231025-WA0148.jpg">
            <img class="imgGal imgGal7"
                src="./images/IMG-20230622-WA0006.jpg">
            <img class="imgGal imgGal8"
                src="./images/1719031219184.jpg">
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
                <img src="./images/buy.png">
            </div>
            <div class="cardApoiador">
                <img src="./images/logo_eco.png">
            </div>
            <div class="cardApoiador">
                <img src="./images/comex.svg">
            </div>
            <div class="cardApoiador">
                <img src="./images/ipia_ms.png">
            </div>
            <div class="cardApoiador">
                <img src="./images/digix.svg">
            </div>
            <div class="cardApoiador">
                <img src="./images/landgrow.svg" id="landgrow">
            </div>


        </div>

    </section>



    <footer class="rodapeSite">

        <div class="leftContentRodape move" animation="left">
            © 2024 FÁBRICA DE SOFTWARE
        </div>
        <div class="iconsFooter">
            <a href="https://instagram.com/senachubacademy" class="move" animation="top"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://web.facebook.com/senachubacademy" class="move" animation="top"><i class="fa-brands fa-facebook"></i></a>
        </div>

    </footer>

</body>

</html>