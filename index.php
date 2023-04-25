<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UbiEnsueño</title>
        <link rel="shortcut icon" href="images/mapaPestaña.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    
    <script type="text/javascript" language="Javascript" src="./js/funcionad.js"></script>
    </head>

    <body>
        <header>
            <div class="menu container">
                <nav class="navbar">
                    <div class="menu-1">
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="registro.php">Registro</a></li>    <!--Aqui vamos a redirigir a lo que necesitemos :3-->
                            <li><a href="login.php">Login</a></li>       <!--Aqui vamos a redirigir a lo que necesitemos :3-->
                        </ul>
                    </div>
                    <div class="socials">
                        <a href="https://www.facebook.com/CentroComercialGranPlazaElEnsueno" target="_blank">
                            <div class="social">
                                <img src="images/s1.svg" alt="">
                            </div>
                        </a>
                        <a href="https://www.instagram.com/explore/locations/169108183822479/gran-plaza-el-ensueno/" target="_blank">
                            <div class="social">
                                <img src="images/s3.svg" alt="">
                            </div>
                        </a>
                        <a href="https://twitter.com/search?q=centro%20comercial%20gran%20plaza%20el%20ensue%C3%B1o&src=typed_query" target="_blank">
                            <div class="social">
                                <img src="images/s2.svg" alt="">
                            </div>
                        </a>
                    </div>
                </nav>
            </div>

            <div class="header-content container">
                <div class="swiper mySwiper-1">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="slider">
                                <div class="slider-txt">
                                    <h1>¿Y esto?</h1>
                                    <p>
                                        La aplicación suministra una ruta específica con indicadores, los cuales tienen
                                        como objetivo que el usuario llegue de forma eficiente a su lugar preferido 
                                        dentro del centro comercial. Además, esta aplicación brinda información sobre
                                        los horarios de atención de los locales registrados.
                                    </p>
                                </div>
                                <div class="slider-img">
                                    <img src="images/buscador-web.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider">
                                <div class="slider-txt">
                                    <h1>¿para que?</h1>
                                    <p>
                                        Esta aplicación pretende optimizar los tiempos de búsqueda de locales dentro del 
                                        centro comercial, hacerlo más eficiente, gráfico y sencillo para todas las 
                                        personas que transitan el centro comercial. 
                                    </p>
                                </div>
                                <div class="slider-img">
                                    <img src="images/eficiencia.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </header>

        <section>
            <a href="https://wa.me/3188326317?text=Hola%20me%20das%20mas%20informacion"
                target="_blank" class="wa-btn"><i class="bi bi-whatsapp"></i>
                <div class="joinchat_tooltip"><i class="bi bi-person-circle"></i>
                    <div class="text">
                        ¿Podemos Ayudarte?
                    </div>
                </div>
            </a>
        </section>
        
        <section>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.0656753786893!2d-74.15892278523806!3d4.582230696670989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9fe2be82fecd%3A0x9dab24661016eda5!2sCentro%20Comercial%20Gran%20Plaza%20El%20Ensue%C3%B1o!5e0!3m2!1ses!2sco!4v1681432757006!5m2!1ses!2sco" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>