<?php
include('class.php')
?>

<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usarios</title>
        <link rel="shortcut icon" href="images/mapaPestaña.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    
    <script type="text/javascript" language="Javascript" src="./js/funcionad.js"></script>
    </head>

    <body>
        <header>
            <div class="header-content container">
                <div class="swiper mySwiper-1">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="slider">
                                <div class="slider-txt">
                                    <h1>¿Quieres Eliminar el usuario?</h1>
                                    <p>
                                        Se borraran todos tus datos de cualquier
                                        base de datos relacionada con nuestra aplicacion
                                    </p>
                                    <div class="boton">
                                        <a href="delete.php" class="btn-1">Acepto</a>
                                        <a href="principal.php" class="btn-1">No Acepto</a>
                                    </div>
                                </div>
                                <div class="slider-img">
                                    <img src="images/eliminar.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider">
                                <div class="slider-txt">
                                    <h1>¿Entretenimiento?</h1>
                                    <p>
                                        Contamos con una sala de cine espectacular. Tambien tenemos discoteca y bolos para 
                                        que pases una noche agradable. Ademas, hay espacio para los niños en la terraza
                                    </p>
                                </div>
                                <div class="slider-img">
                                    <img src="images/eficiencia.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider">
                                <div class="slider-txt">
                                    <h1>¿Ropa?</h1>
                                    <p>
                                        Contamos con una gran variedad de tiendas para que le des un estilaso a tu vida,
                                        en estas encontraras cualquier tipo de prenda o accesorio para que te conviertas
                                        en todo un astro de la moda
                                    </p>
                                </div>
                                <div class="slider-img">
                                    <img src="images/eficiencia.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider">
                                <div class="slider-txt">
                                    <h1>¿Que mas encuentro?</h1>
                                    <p>
                                        En el centro comercial puedes encontrar multiples servicios
                                        desde cursos de ingles hasta hacer el mercado de tu hogar
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
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>