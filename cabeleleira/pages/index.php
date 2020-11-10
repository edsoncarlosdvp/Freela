<?php
    require_once("../vendor/autoload.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- SEO -->
    <title>Stallos Cabelereiros</title>
    <meta name="description" content="Fundanda em 1998, a Stallos Cabeleireiros tem como principio trazer o auto estima para aqueles que necessitam e proporcionar o melhor atendimento possível. Somos um studio de beleza renomado com excelente qualidade de atendimento. Reconhecido pelo prêmio em Tendências de Academias internacionais como Studio Llongueras/Tony & Guy / Pivot Point.
    Temos os serviços de cabeleireiros, avaliação visagista, manicure, colorimetria, terapia capilar, pedicure, depilação, alongamentos, estética em geral e dia da Noiva.">
    <meta http-equiv="cache-control"   content="no-cache" />
    <meta http-equiv="pragma"   content="no-cache" /> 
    <meta name="keywords" content="Ollimpium, Ollimpium Agência: Agência de Marketing Ollimpium, Stallos, Salão Stallos, Cabeleireiro barueri, cabeleireira barueri, barueri, salão barueri, salão em barueri, Visagismo, visagismo barueri, dia da noiva, dia da noiva barueri, avaliação visagista, manicure, colorimetria, terapia capilar, pedicure, depilação, alongamentos, estética em geral e dia da Noiva.">
    <meta name="author" content="Ollimpium Digital Marketing Agency">
    
    <meta name="copyright" content="© Stallos Cabelereiros" />
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="rating" content="general" />
    <meta name="robots" content="follow" />

    <link rel="shortcut icon" href="../images/favicon.png"/>
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="stylesheet" href="../assets/styles/scroll-indicator.css">
    <link rel="stylesheet" href="../assets/styles/animate.css">
    <link rel="stylesheet" href="../assets/styles/sweetalert2.min.css">


</head>

<body class="theme-scroll" onload="myFunction()">
    <div class="container-fluid m-0 p-0">
        
        <!-- PROGRESS BAR -->
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>    

        <!-- NAVBAR -->

        <nav id="menuTop" class="navbar navbar-expand-md sticky-top justify-content-md-between d-md-flex bg-white p-0 shadow width-menu">

            <div class="w-100 pl-4 pl-sm-0 d-md-none text-center position-absolute" style="top: 0; z-index: 80;">
                <img class="img-logo" src="../images/logo.png" alt="">
            </div>
            
            <ul id="redes-sociais-hide" class="nav align-items-baseline justify-content-center d-md-none">
                <li class="nav-item">
                    <a href="https://www.facebook.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-facebook-f icon-social-top"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://instagram.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-instagram icon-social-top"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-twitter icon-social-top"></i></a>
                </li>
            </ul>

            <button class="navbar-toggler bg-black rounded-0" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Alterna navegação" style="z-index: 99;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <button class="btn-close-menu d-lg-none" style="z-index: 99;">X</button>

            <div class="d-none d-md-flex text-center">
                <img class="img-logo" src="../images/logo.png" alt="">
            </div>

            <div class="collapse navbar-collapse justify-content-center" id="navbarTop">
                <ul class="navbar-nav text-center mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-item nav-link text-uppercase scroll active" href="#aTop">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link text-uppercase scroll" href="#servicos">serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link text-uppercase scroll" href="#especial">especiais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link text-uppercase scroll" href="https://wa.me/5511973454151">agende online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link text-uppercase scroll" href="#contato">contato</a>
                    </li>
                </ul>
            </div>

            <!-- PARA O MODO MD EM DIANTE -->
            <ul id="redes-sociais-right" class="nav align-items-baseline justify-content-center d-none d-md-inline-flex">
                <li class="nav-item">
                    <a href="https://www.facebook.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://instagram.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>

        </nav>

        <!-- CAROUSEL -->
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                
                <div class="carousel-item bg-img01-carousel active">
                    
                </div>

            </div>

        </div>

        <!-- SEÇÃO SERVIÇOS -->

        <section id="servicos" class="container-fluid mx-0 px-0">

            <div class="d-flex flex-lg-row justify-content-center flex-wrap p-3 p-sm-2 p-md-5 container-servicos">

                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-servicos-bege mx-lg-0 d-flex flex-column justify-content-around">

                    <hr class="underscore-black mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">estética</h2>
                    <a href="https://wa.me/5511973454151" class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">agende já ></a>

                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-face mx-lg-0"></div>
                
                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-servicos-preto mx-lg-0 d-flex flex-column justify-content-around">
                    
                    <hr class="underscore-white mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">maquiagem</h2>
                    <a href="https://wa.me/5511973454151" class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">agende já ></a>
                    
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-make mx-lg-0"></div>

                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-servicos-branco mx-lg-0 d-flex flex-column justify-content-around d-lg-none">
                    
                    <hr class="underscore-black mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">cabelo</h2>
                    <a href="https://wa.me/5511973454151" class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">agende já ></a>
                    
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-hair mx-lg-0 d-flex flex-column d-lg-none"></div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-servicos-bege mx-lg-0 d-flex flex-column justify-content-around d-lg-none">
                    
                    <hr class="underscore-black mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">unhas</h2>
                    <a href="https://wa.me/5511973454151" class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">agende já ></a>
                    
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-3 div-servicos bg-nails mx-lg-0 d-flex flex-column d-lg-none"></div>

                <!-- SERVIÇOS LG -->
                <div class="col-12 mt-n1 col-md-5 col-lg-3 div-servicos bg-hair mx-lg-0 d-none d-lg-block"></div>
                <div class="col-12 mt-n1 col-md-5 col-lg-3 div-servicos bg-servicos-branco mx-lg-0 d-none flex-column justify-content-around d-lg-flex">
                    
                    <hr class="underscore-black mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">cabelo</h2>
                    <a href="https://wa.me/5511973454151" class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">agende já ></a>
                    
                </div>
                <div class="col-12 mt-n1 col-md-5 col-lg-3 div-servicos bg-nails mx-lg-0 d-none d-lg-block"></div>
                <div class="col-12 mt-n1 col-md-5 col-lg-3 div-servicos bg-servicos-bege mx-lg-0 d-none flex-column justify-content-around d-lg-flex">
                    
                    <hr class="underscore-black mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">unhas</h2>
                    <a href="https://wa.me/5511973454151" class="text-uppercase wow fadeInUp" data-wow-delay="0.5s">agende já ></a>
                    
                </div>

            </div>

        </section>

        <!-- SEÇÃO ESPECIAL -->

        <section id="especial" class="container-fluid align-content-center d-inline-flex bg-especial py-4">
            <div class="col-12 col-md-8 col-xl-6 mx-md-auto bg-servicos-preto">
                    
                <hr class="underscore-white mx-auto wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="text-center title-style01 wow fadeInUp" data-wow-delay="0.5s">Especial da Estação</h2>
                
                <table class="table text-white table-borderless wow fadeIn" data-wow-delay="0.7">
                    
                    <tbody>
                        <tr>
                            <th scope="row">Coloração</th>
                            <td>
                                <span class="initial-price">À partir de </span> 
                                <span class="initial-price-min-screen">*</span> 
                                R$ 80,00
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Mechas</th>
                            <td>
                                <span class="initial-price">À partir de </span> 
                                <span class="initial-price-min-screen">*</span> 
                                R$ 350,00
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Manicure e pedicure</th>
                            <td>
                                <span class="initial-price">À partir de </span> 
                                <span class="initial-price-min-screen">*</span> 
                                R$ 45,00
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Corte Masculino</th>
                            <td><span class="initial-price">À partir de </span> 
                                <span class="initial-price-min-screen">*</span> 
                                R$ 35,00
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Corte Feminino Modelado</th>
                            <td>
                                <span class="initial-price">À partir de </span> 
                                <span class="initial-price-min-screen">*</span> 
                                R$ 75,00
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Escova</th>
                            <td>
                                <span class="initial-price">À partir de </span> 
                                <span class="initial-price-min-screen">*</span> 
                                R$ 45,00
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Hidratação</th>
                            <td>
                                <span class="initial-price">À partir de </span> 
                                <span class="initial-price-min-screen">*</span> 
                                R$ 50,00
                            </td>
                        </tr>
                    </tbody>
                    <caption class="text-caption">*Valores à partir</caption>
                    <caption class="text-caption-nota">Confira todos nossos serviços através do Instagram e Whatsapp</caption>
                </table>
                
                <a href="https://wa.me/5511973454151" class="d-block mx-auto text-uppercase text-center">agende já ></a>
                
            </div>

        </section>

        <!-- SEÇÃO DEPOIMENTOS -->

        <section id="depoimentos" class="container-fluid mx-0 px-0">

            <div class="container-fluid">
                <div class="w-100 text-center my-3 mx-0">
                    <hr class="underscore-black mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="title-style01 mb-n3 wow fadeInUp" data-wow-delay="0.5s">Depoimentos</h1>
                </div>

                <div class="row justify-content-center">

                    <div class="col-12 col-md-10 col-lg-7 col-xl-6">

                        <div id="cTestimonyInner" class="carousel slide carousel-fade vh-box-dep" data-ride="carousel" data-interval="5000" data-pause="hover">
                            
                            <div class="carousel-inner d-inline-flex flex-lg-nowrap">
                                
                                <div class="carousel-item active col-12 border text-center">
                                    <div class="d-block">
                                        <img src="../images/depoimentos/user-icon-0.png" class="rounded-circle mt-3 vh-40" alt="Tania Barrelhas">
                                    </div>
                                    
                                    <span class="text-center text description-depoimentos">"Funcionários super atenciosos e o  lugar super aconchegante e o loiro que a Amanda faz perfeito.😍"</span>
                                    <h5 class="title my-2">Tania Barrelhas</h5>
                                </div>

                                <div class="carousel-item col-12 border text-center">
                                    <div class="d-block">
                                        <img src="../images/depoimentos/user-icon-1.jpg" class="rounded-circle mt-3 vh-40" alt="Rodrigo RedHead">
                                    </div>
                                    
                                    <span class="text-center text description-depoimentos">Meu salão preferido há longos 4 anos. Não troco de maneira alguma. Atendimento sensacional, profissionais qualificados e ambiente super agradável. 😍😍😍</span>
                                    
                                    <h5 class="title my-2">Rodrigo RedHead</h5>
                                </div>

                                <div class="carousel-item col-12 border text-center">
                                    <div class="d-block">
                                        <img src="../images/depoimentos/user-icon-0.png" class="rounded-circle mt-3 vh-40" alt="Flávia Oliveira">
                                    </div>
                                    
                                    <span class="text-center text description-depoimentos">"Muito bom. Atenciosos experientes ambiente bem agradável"</span>
                                    
                                    <h5 class="title my-2">Flávia Oliveira</h5>
                                </div>
                                
                                <div class="carousel-item col-12 border text-center">
                                    <div class="d-block">
                                        <img src="../images/depoimentos/user-icon-0.png" class="rounded-circle mt-3 vh-40" alt="Eliane Santos">
                                    </div>
                                    
                                    <span class="text-center text description-depoimentos">"Super recomendo
                                    Frequento a 10 anos e são todos maravilhosos😘"
                                    </span>
                                    
                                    <h5 class="title my-2">Eliane Santos</h5>
                                </div>

                            </div>
                            
                            <a class="carousel-control-prev" href="#cTestimonyInner" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon adjust-arrow-dep" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#cTestimonyInner" role="button" data-slide="next">
                                <span class="carousel-control-next-icon adjust-arrow-dep" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

        </section>

        <!-- CONTATO -->

        <section id="contato" class="container-fluid bg-contato">

            <div class="row flex-wrap flex-md-nowrap pl-md-0 bg-black">
                <div class="col-12 col-lg-6">
                    
                    <div class="row d-flex justify-content-center my-3">
                        <hr class="underscore-white wow fadeInUp" data-wow-delay="0.5s">
                        <hr class="underscore-white wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="title-style01 w-100 text-center text-white wow fadeInUp" data-wow-delay="0.5s">Faça uma visita</h1>

                        <div class="col-12 mx-0 text-center py-3">
                        <span class="d-lg-none txt-padrao text-white wow fadeInUp" data-wow-delay="0.5s">
                            Av. Dom Pedro II, 169 - Centro Av. Dom Pedro II, 169 - Centro, Barueri - SP, 06401-060
                        </span>
                        <br>
                        <span class="d-lg-none txt-padrao text-white wow fadeInUp" data-wow-delay="0.5s">
                            <a class="nav-link wow fadeInLeft"ref="https://wa.me/5511973454151" target="_blank"><i class="fab fa-whatsapp mr-2"></i>(11) 97345-4151</a> <span class="wow fadeInLeft d-none d-md-block">|</span> <a class="nav-link wow fadeInRight"ref="mailto:atendimento@stalloscabeleireiros.com.br"><i class="far fa-envelope mr-2"></i>atendimento@stalloscabeleireiros.com.br</a>
                        </span>

                        <h5 class="w-100 mt-3 mt-lg-n4 text-center text-white text-uppercase font-weight-normal wow fadeInUp" data-wow-delay="0.5s">horário de funcionamento</h5>

                        <span class="txt-padrao text-white wow fadeInUp" data-wow-delay="0.5s">
                            <i class="far fa-clock"></i> Seg - Sex: 7:00 - 22:00
                            <br>
                            <i class="far fa-clock"></i> Sáb: 8:00 - 22:00
                        </span>

                    </div>

                </div>
                    
                <form id="form-contact">
                    <div class="row justify-content-center border-contact-form">
                        <div class="form-row form-group col-12 col-sm-10 col-md-10">
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="Nome" required>
                        </div>
                        <div class="form-row form-group col-12 col-sm-10 col-md-10">
                        <input type="eemail" class="form-control" id="eemail" name="eemail"
                            placeholder="Email" required>
                        </div>
                        <div class="form-row form-group col-12 col-sm-10 col-md-10">
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            placeholder="Telefone">
                        </div>
                        <div class="form-row form-group col-12 col-sm-10 col-md-10">
                            <textarea class="form-control" rows="8" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                        </div>

                        <div class="form-row form-group mb-1 col-12 justify-content-center wow fadeIn">
                        <button class="btn eni-btn-contato" name="enviar" id="btn-send" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
                <div id="div-links-contato" class="d-flex flex-column flex-lg-row flex-wrap justify-content-center align-items-center my-1 text-center text-white">
                    
                    <a class="nav-link cor-link02 wow fadeInLeft"ref="https://wa.me/5511973454151" target="_blank"><i class="fab fa-whatsapp mr-2"></i>(11) 97345-4151</a> <a class="nav-link cor-link02 wow fadeInRight"ref="mailto:atendimento@stalloscabeleireiros.com.br"><i class="far fa-envelope mr-2"></i>atendimento@stalloscabeleireiros.com.br</a>
                    <br>
                    <a href="./local.html" target="_blank" class="d-lg-none nav-link03 text-uppercase mt-n3 mb-2">como chegar ></a>

                </div>

            </div>

            <!-- LOCALIZAÇÃO -->

            <div class="d-none d-lg-block col-12 col-md-6">

                <div class="d-flex justify-content-center col-12">

                    <div class="row d-flex justify-content-center my-3">
                        <hr class="underscore-white wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="title-style01 w-100 text-center text-white wow fadeInUp" data-wow-delay="0.5s">Localização</h1>
                        <div class="col-12 mx-0 text-center py-3">
                            <span class="txt-padrao text-white wow fadeInUp" data-wow-delay="0.5s">
                                Av. Dom Pedro II, 169 - Centro Av. Dom Pedro II, 169 - Centro, Barueri - SP, 06401-060
                            </span>
                            <br>
                            <span class="d-lg-none txt-padrao text-white">
                                <a class="nav-link wow fadeInLeft"ref="https://wa.me/5511973454151" target="_blank"><i class="fab fa-whatsapp mr-2"></i>(11) 97345-4151</a> <span class="wow fadeInLeft d-none d-md-block">|</span> <a class="nav-link wow fadeInRight"ref="mailto:atendimento@stalloscabeleireiros.com.br"><i class="far fa-envelope mr-2"></i>atendimento@stalloscabeleireiros.com.br</a>
                            </span>

                            <h5 class="d-none w-100 mt-3 text-center text-uppercase text-white font-weight-normal wow fadeInUp" data-wow-delay="0.5s">horário de funcionamento</h5>

                            <span class="d-none txt-padrao text-white wow fadeInUp" data-wow-delay="0.5s">
                                <i class="far fa-clock"></i> Seg - Sex: 7:00 - 22:00
                                <br>
                                <i class="far fa-clock"></i> Sáb: 8:00 - 22:00
                            </span>

                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.563844733197!2d-46.878678385022965!3d-23.512214384707253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03dbd6040777%3A0x6f6d03847532342b!2sAv.%20Dom%20Pedro%20II%2C%20169%20-%20Centro%2C%20Barueri%20-%20SP%2C%2006401-060!5e0!3m2!1spt-BR!2sbr!4v1604682813002!50m2!1spt-BR!2sbr" class="mt-4" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="wow fadeInUp" data-wow-delay="0.5s"></iframe>
                    </div>

                </div>

            </div>
            
        </div>

        <!-- LINK WHATSAPP -->
        <a href="https://wa.me/5511973454151" class="link-whatsapp">
            <img src="../images/logo-zap.png" alt="" class="logo-zap">
        </a>

    </section>

    <!-- FOOTER -->

    <footer id="footer" class="container-fluid bg-black mx-0 px-0">

        <div class="mx-0 p-0 text-center wow fadeInUp" data-wow-delay="0.5s">
        
            <ul id="redes-sociais-hide" class="nav align-items-baseline justify-content-center d-lg-none">
                <li class="nav-item">
                    <a href="https://www.facebook.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://instagram.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/stalloshair" target="_blank" class="nav-link02"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>

            <span class="txt-corp text-white">Stallos Cabelereiros &copy; 2020.</span>
            <br>
            <a href="https://www.ollimpium.com.br" target="_blank">
                <span class="txt-corp text-white wow fadeInUp" data-wow-delay="0.5s">Desenvolvido por: Ollimpium Digital Marketing Agency.</span>
            </a>

        </div>

    </footer>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<script src="../assets/js/essential.js"></script>
<script src="../assets/js/sweetalert2@9.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/wow-instance.js"></script>
</body>

</html>