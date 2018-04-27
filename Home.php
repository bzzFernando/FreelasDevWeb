<?php
/**
 * Created by PhpStorm.
 * User: rafa-
 * Date: 25/04/2018
 * Time: 15:59
 */
include 'Cabecalho.php';

?>

<body>

<main>
            
            <!--Classe Container que irá servir de definidor de Layout-->
            <div class="container my-2">
                <div class="row">
                    <!--Div que irá comportar o carousel alinhado ao centro-->
                    <div class="col-md-12 text-center">
                        <!--Carousel Wrapper-->
                        <div id="carousel01" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel01" data-slide-to="0"></li>
                                    <li data-target="#carousel01" data-slide-to="1" class="active"></li>
                                    <li data-target="#carousel01" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <img class="d-block" src="img/baner.png" alt="First slide">
                                    </div>
                                    <!--/First slide-->
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <img class="d-block" src="img/baner.png" alt="Second slide">
                                    </div>
                                    <!--/Second slide-->
                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <img class="d-block" src="img/baner.png" alt="Third slide">
                                    </div>
                                    <!--/Third slide-->
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel01" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel01" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Proximo</span>
                                </a>
                                <!--/.Controls-->
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>    
                    <!--Fim da Div que comporta o Carousel-->
                        <div id = "sobre" class="col-md-10 mx-auto my-2 text-center" uk-scrollspy="cls: uk-animation-slide-top-small; delay: 200; repeat: true" >
                            <h2>Equipe de Profissionais Comprometidos com a qualidade nos produtos.</h2>
                            <div class="col-md-10 mx-auto">
                                <p>"Buscando sempre inovação na area de desenvolvimento, contamos com uma equipe de Profissionais
                                    altamente capacitados, onde todas as tarefas são divididas por area de especialização. Isso
                                    proporciona aplicações baseada nos minimos detalhes em cada ferramenta utilizada".
                                </p>
                                <p>Referencia hoje no estado do Tocantins utilizamos as melhores ferramentas disponíveis. Conheca Algumas delas, e nossos projetos 
                                    baseados nas mesmas.
                                </p>
                            </div>
                        </div>
                 </div>
                 <!--Fim da Div ROW-->    
                 <div class="row my-2 z-depth-2 p-3" id="ferramentas">  
                    <div class="col-6 col-sm-4 col-md-2 mx-auto">
                        <a class="uk-button uk-button-text">
                            Java Swing
                                <img src="img/java.png" width="50" height="50" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mx-auto">
                        <a class="uk-button uk-button-text">
                            PHP Servers
                                <img src="img/php.png" width="50" height="50" alt="">
                        </a>
                        
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mx-auto">
                        <a class="uk-button uk-button-text">
                            JavaScript
                            <img src="img/javascript.png" width="50" height="50" alt="">
                        </a>
                       
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mx-auto">
                        <a class="uk-button uk-button-text">
                            HTML e CSS
                            <img src="img/html.png" width="50" height="50" alt="">
                        </a>
                        
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mx-auto">
                        <a class="uk-button uk-button-text">
                            MySql
                            <img src="img/mysql.png" width="50" height="50" alt="">
                        </a>
                        
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 mx-auto">
                        <a class="uk-button uk-button-text">
                            Bootstrap
                            <img src="img/boots.jpg" width="50" height="50" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-10 mx-auto mt-5 p-3 text-center">
                        Ver Mais<br>
                        <a id="js-scroll-trigger"href="#proximaDiv" uk-scroll>
                            <img src="img/descer.png" alt="">
                        </a>
                        <script>
                                UIkit.util.on('#scroll-trigger', 'scrolled', function () {
                                    alert('Done.');
                                });
                        </script>
                </div>
            </div>
            <!--Fim do Container-->    
            
            









            <!--Classe Container que irá servir de definidor de Layout-->
            <div id="proximaDiv" class="container my-5">
                    <div class="row">
                        <!--Div que irá comportar o carousel alinhado ao centro-->
                        <div class="col-md-12 text-center">
                            <!--Carousel Wrapper-->
                            <div id="carousel01" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel01" data-slide-to="0"></li>
                                        <li data-target="#carousel01" data-slide-to="1" class="active"></li>
                                        <li data-target="#carousel01" data-slide-to="2"></li>
                                    </ol>
                                    <!--/.Indicators-->
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <!--First slide-->
                                        <div class="carousel-item active">
                                            <img class="d-block" src="img/baner.png" alt="First slide">
                                        </div>
                                        <!--/First slide-->
                                        <!--Second slide-->
                                        <div class="carousel-item">
                                            <img class="d-block" src="img/baner.png" alt="Second slide">
                                        </div>
                                        <!--/Second slide-->
                                        <!--Third slide-->
                                        <div class="carousel-item">
                                            <img class="d-block" src="img/baner.png" alt="Third slide">
                                        </div>
                                        <!--/Third slide-->
                                    </div>
                                    <!--/.Slides-->
                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel01" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel01" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Proximo</span>
                                    </a>
                                    <!--/.Controls-->
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>    
                        <!--Fim da Div que comporta o Carousel-->
                            <div class="col-md-10 mx-auto my-2 text-center">
                                <h2>Equipe de Profissionais Comprometidos com a qualidade nos produtos.</h2>
                                <div class="col-md-10 mx-auto">
                                    <p>"Buscando sempre inovação na area de desenvolvimento, contamos com uma equipe de Profissionais
                                        altamente capacitados, onde todas as tarefas são divididas por area de especialização. Isso
                                        proporciona aplicações baseada nos minimos detalhes em cada ferramenta utilizada".
                                    </p>
                                    <p>Referencia hoje no estado do Tocantins utilizamos as melhores ferramentas disponíveis. Conheca Algumas delas, e nossos projetos 
                                        baseados nas mesmas.
                                    </p>
                                </div>
                            </div>




        </main>

<?php include 'Rodape.php'; ?>