<?php
session_start();
require_once "./comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Latino Express, tu puerta de enlace a cualquier parte del mundo">
    <meta name="theme-color" content="#01162b">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="canonical" href="https://www.latinoexpress-cargo.com/">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">
    <title>Latino Express</title>

<body>
    <main>
        <!-- Bar Top -->
        <div class="container bg_bar_top" id="inicio">
            <div class="content">
                <div class="bar_top">

                    <div class="bar_top_logo">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/img/logo-latino-express.webp">
                            <img class="image" data-img="/public/img/logo-latino-express.png" alt="Latino express logo" title="Latino express logo" width="100" height="100">
                        </picture>
                        <div class="bar_top_logo_divider"></div>
                    </div>

                    <div class="bar_top_contact">
                        <div class="bar_top_contact_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/clock.svg">
                                <img class="image" data-img="/public/icon/clock.svg" alt="Latino express nuestros horarios" title="Latino express horario" width="100" height="100">
                            </picture>
                            <div class="bar_top_contact_content_text">
                                <p>Lunes - Sábado 9.00 - 18.00</p>
                                <p>Domingo cerrado.</p>
                            </div>
                        </div>
                        <div class="bar_top_contact_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/email.svg">
                                <img class="image" data-img="/public/icon/email.svg" alt="Latino express envianos un email" title="Latino express email" width="100" height="100">
                            </picture>
                            <div class="bar_top_contact_content_text">
                                <p>Email</p>
                                <a href="mailto:info@latinoexpress-cargo.com" onclick="gtag('event', 'email')">info@latinoexpress-cargo.com</a>
                            </div>
                        </div>
                        <div class="bar_top_contact_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/call.svg">
                                <img class="image" data-img="/public/icon/call.svg" alt="Latino express llamanos" title="Latino express llamada" width="100" height="100">
                            </picture>
                            <div class="bar_top_contact_content_text">
                                <p>llamanos</p>
                                <a href="tel:+15597616772" onclick="gtag('event', 'telefonos')">+1 5597616772</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu de Navegacion -->
        <div class="container bg_nav">
            <div class="content">
                <div class="nav">
                    <div class="toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
                            <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
                        </svg>
                    </div>

                    <div class="nav_navegacion menu_enlaces" id="menuMobile">
                        <nav class="nav_enlaces menu_enlaces_a">
                            <p class="closeMenu" id="closeMenu">X</p>
                            <a href="#inicio">Inicio</a>
                            <span>|</span>
                            <a href="#soluciones">Soluciones</a>
                            <span>|</span>
                            <a href="#servicios">Servicios</a>
                            <span>|</span>
                            <a href="#rastreo">Rastreo</a>
                            <span>|</span>
                            <a href="#testimonios">Testimonios</a>
                            <span>|</span>
                            <a href="#beneficios">Beneficios</a>
                        </nav>

                        <!-- <div class="nav_social">
                            <div class="nav_icons_social">
                                <a href="https://www.instagram.com/" target="_blank">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/instagram.svg">
                                        <img class="image" data-img="/public/icon/instagram.svg" alt="Latino express instagram" title="Latino express instagram" width="100" height="100">
                                    </picture>
                                </a>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/facebook.svg">
                                        <img class="image" data-img="/public/icon/facebook.svg" alt="Latino express facebook" title="Latino express facebook" width="100" height="100">
                                    </picture>
                                </a>
                                <a href="https://www.twitter.com" target="_blank">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/twitter.svg">
                                        <img class="image" data-img="/public/icon/twitter.svg" alt="Latino express twitter" title="Latino express twitter" width="100" height="100">
                                    </picture>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/linkeding.svg">
                                        <img class="image" data-img="/public/icon/linkeding.svg" alt="Latino express linkeding" title="Latino express linkeding" width="100" height="100">
                                    </picture>
                                </a>
                            </div>
                            <div class="nav_btn">
                                <a href="">Request Quote</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <div class="container bg_header">
            <div class="content">
                <div class="header">
                    <section class="header_content">
                        <div class="header_content_p">
                            <p>Latino express es tu solución</p>
                        </div>
                        <header class="header_content_title">
                            <h1>Tu puerta de enlace <br> a cualquier Destino <br> en el Mundo</h1>
                        </header>
                        <div class="header_content_subtitle">
                            <p>Contamos con Agencias, las cuales estan localizadas en diferentes areas <br> estratégicas, para la comodidad de los clientes y nuestros agentes. <br> Nuestros servicios ofrecen la logistica necesaria para transportar los <br> paquetes con los requerimientos necesarios para ser <br> llevados a su destino final.</p>
                        </div>

                        <div class="header_btn">
                            Explorar
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Soluciones -->
        <div class="container" id="soluciones">
            <div class="content">
                <div class="what_we_do">
                    <div class="what_we_do_title">
                        <section class="what_we_do_title_spacing">
                            <div class="what_we_do_title_p">
                                <p><span>|</span> Soluciones</p>
                            </div>
                            <header class="what_we_do_title">
                                <h2>Soluciones de carga <br> seguras y confiables</h2>
                            </header>
                        </section>
                    </div>

                    <div class="what_we_do_flex">
                        <div class="what_we_do_content">
                            <div class="what_we_do_content_article">
                                <div class="what_we_do_content_article_img">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/barco.svg">
                                        <img class="image" data-img="/public/icon/barco.svg" alt="Latino express envios maritimos" title="Latino express envios maritimos" width="100" height="100">
                                    </picture>
                                </div>
                                <div class="what_we_do_content_article_content">
                                    <section class="what_we_do_content_article_content_title">
                                        <header>
                                            <h3>Servicio de <br> transporte marítimo <br> (Pronto)</h3>
                                        </header>
                                        <p>Estamos trabajando para no tener <br> limitaciones, a la hora de hacer <br> llegar un paquete hasta tu destino.</p>
                                    </section>
                                </div>
                            </div>

                            <div class="what_we_do_content_article">
                                <div class="what_we_do_content_article_img">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/aereo.svg">
                                        <img class="image" data-img="/public/icon/aereo.svg" alt="Latino express envios aereos" title="Latino express envios aereos" width="100" height="100">
                                    </picture>
                                </div>
                                <div class="what_we_do_content_article_content">
                                    <section class="what_we_do_content_article_content_title">
                                        <header>
                                            <h3>Servicios aéreos</h3>
                                        </header>
                                        <p>Nuestra prioridad siempre sera el <br> movimiento más rapido para aquellos <br> paquetes que estan en rutas lejanas.</p>
                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="what_we_do_content">
                            <div class="what_we_do_content_article">
                                <div class="what_we_do_content_article_img">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/almacenamiento.svg">
                                        <img class="image" data-img="/public/icon/alamacenamiento.svg" alt="Latino express almacenamiento de paquetes" title="Latino express almacenamientos de paquetes" width="100" height="100">
                                    </picture>
                                </div>
                                <div class="what_we_do_content_article_content">
                                    <section class="what_we_do_content_article_content_title">
                                        <header>
                                            <h3>Servicio de <br> almacenamientos</h3>
                                        </header>
                                        <p>Buscamos implemetar respaldos de <br> bodega muy pronto para que podamos <br> realizar rutas más extensas.</p>
                                    </section>
                                </div>
                            </div>

                            <div class="what_we_do_content_article">
                                <div class="what_we_do_content_article_img">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/icon/terrestre.svg">
                                        <img class="image" data-img="/public/icon/terrestre.svg" alt="Latino express envios locales" title="Latino express envios locales" width="100" height="100">
                                    </picture>
                                </div>
                                <div class="what_we_do_content_article_content">
                                    <section class="what_we_do_content_article_content_title">
                                        <header>
                                            <h3>Servicio de envío locales</h3>
                                        </header>
                                        <p>Transitamos localmente con el <br> mejor equipo, rutas y seguridad.</p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why us -->
        <div class="container bg_section_img" id="servicios">
            <div class="content">
                <div class="why_us">
                    <div class="why_us_content">
                        <div class="why_choose_content">
                            <div class="why_choose_p">
                                <p>¿Porqué nosotros?</p>
                            </div>
                            <section class="why_choose_title">
                                <header>
                                    <h2>Proporcionamos una <br> solución logística global de <br> gama completa.</h2>
                                </header>
                            </section>
                            <div class="why_choose_subtitle">
                                <p>Asesoramos a todos nuestros clientes, en su proceso de <br> envíar o recibir paquetes Estados Unidos a México y America <br> latina</p>
                                <p>ENVIOS A CUALQUIER PARTE DE MÉXICO <br> Contamos con agencias colocadas en áreas estratégicas para <br> hacer más accesible nuestro servicio</p>
                            </div>

                            <div class="why_choose_icons">
                                <div class="why_choose_icons_flex">
                                    <div class="why_choose_icons_content">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/img/latino-express-box.webp">
                                            <img class="image" data-img="/public/img/latino-express-box.png" alt="Latino express la mejor seguridad en envios" title="Latino express la mejor seguridad en envios" width="100" height="100">
                                        </picture>
                                        <p>Entrega a tiempo</p>
                                    </div>
                                    <div class="why_choose_icons_content">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/img/cash.webp">
                                            <img class="image" data-img="/public/img/cash.png" alt="Latino express el mejor precio en paquetes" title="Latino express el mejor precio en paquetes" width="100" height="100">
                                        </picture>
                                        <p>Costo de viaje optimizado</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="why_us_image">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/img/latino-express-why-us.webp">
                                <img class="image" data-img="/public/img/latino-express-why-us.jpg" alt="Latino express porque nosotros" title="Latino express porque nosotros" width="100" height="100">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contador de paquetes entregados -->
        <div class="container">
            <div class="content">
                <div class="count">
                    <div class="count_content">
                        <span class="num" id="num" data-val="13742">0000</span>
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/icon/Pattern.webp">
                            <img class="image" data-img="/public/icon/Pattern.png" alt="Latino express" title="Latino express" width="100" height="100">
                        </picture>
                        <p>Paquetes entregados</p>
                    </div>

                    <div class="count_content">
                        <span class="num" id="num" data-val="13728">0000</span>
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/icon/Pattern.webp">
                            <img class="image" data-img="/public/icon/Pattern.png" alt="Latino express" title="Latino express" width="100" height="100">
                        </picture>
                        <p>Clientes satisfechos</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Seccion de rastreo de paquetes -->
        <div class="container" id="rastreo">
            <div class="content">
                <section class="tracking_title">
                    <header>
                        <h2>Verifica el transito de tu <br> paquete y punto de encuentro</h2>
                    </header>
                </section>
            </div>
        </div>
        <div class="container bg_tracking">
            <div class="content">
                <div class="tracking">

                    <div class="tracking_coding">
                        <div class="padding">
                            <div class="tracking_coding_verifed">
                                <form action="" class="tracking_coding_verifed_input">
                                    <div class="tracking_coding_verifed_input_text">
                                        <p class="p1">CODIGO</p>
                                        <p class="p2">Verificación de rastreo</p>
                                    </div>
                                    <div class="input">
                                        <input type="text" required name="coding" placeholder="Ejm: 4653030303">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="padding2">
                            <div class="tracking_conding_verifed_data">
                                <div class="tracking_conding_verifed_data_content">
                                    <div class="tracking_conding_verifed_data_content_status">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/icon/star.svg">
                                            <img class="image" data-img="/public/icon/star.svg" alt="Latino express" title="Latino express" width="100" height="100">
                                        </picture>
                                        <p>EN BODEGA</p>
                                    </div>

                                    <div class="tracking_conding_verifed_data_content_status">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/icon/star.svg">
                                            <img class="image" data-img="/public/icon/star.svg" alt="Latino express" title="Latino express" width="100" height="100">
                                        </picture>
                                        <p>EN CAMINO</p>
                                    </div>

                                    <div class="tracking_conding_verifed_data_content_status">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/icon/star.svg">
                                            <img class="image" data-img="/public/icon/star.svg" alt="Latino express" title="Latino express" width="100" height="100">
                                        </picture>
                                        <p>ENTREGADO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonios -->
        <div class="container" id="testimonios">
            <div class="content">
                <div class="testimony">
                    <section class="testimony_title">
                        <div class="testimony_p">
                            <p>Testimonios</p>
                        </div>
                        <header class="testimony_title_flex">
                            <h2>Lo que dice nuestros clientes</h2>
                            <div class="testimony_arrow">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/img/testimony-arrow-left.webp">
                                    <img class="image" data-img="/public/img/testimony-arrow-left.png" alt="Latino express flecha izquierza" title="Latino express flecha izquierda" width="100" height="100">
                                </picture>
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/img/testimony-arrow-derecha.webp">
                                    <img class="image" data-img="/public/img/testimony-arrow-derecha.webp" alt="Latino express flecha derecha" title="Latino express flecha derecha" width="100" height="100">
                                </picture>
                            </div>
                        </header>
                    </section>

                    <div class="testimony_flex">
                        <div class="testimony_content">
                            <div class="testimony_content_article">
                                <div class="testimony_content_article_title">
                                    <div class="testimony_content_article_title_flex">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/img/user.webp">
                                            <img class="image" data-img="/public/img/user.png" alt="Latino express user" title="Latino express user" width="100" height="100">
                                        </picture>
                                        <div class="testimony_content_article_title_name">
                                            <h3>Alberto Gonzalez</h3>
                                            <p>Compañia de Guardamuebles</p>
                                        </div>
                                    </div>
                                    <div class="testimony_content_article_title_icons">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/img/testimony_icon.webp">
                                            <img class="image" data-img="/public/img/testimony_icon.png" alt="Latino express icon" title="Latino express icon" width="100" height="100">
                                        </picture>
                                    </div>
                                </div>
                                <div class="testimony_content_article_description">
                                    <p>BUEN SERVICIO NO TARDO TANTO, RECOMENDADO, LA ATENCIÓN VIA WHATSAPP ES BUENA Y PERSONALIZADA.</p>
                                </div>
                                <div class="testimony_content_article_icons">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>

                        <div class="testimony_content">
                            <div class="testimony_content_article testimony_bg">
                                <div class="testimony_content_article_title">
                                    <div class="testimony_content_article_title_flex">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/img/user2.webp">
                                            <img class="image" data-img="/public/img/user2.png" alt="Latino express user" title="Latino express user" width="100" height="100">
                                        </picture>
                                        <div class="testimony_content_article_title_name">
                                            <h3>Martin Gomez</h3>
                                            <p>Compañia de Restauración</p>
                                        </div>
                                    </div>
                                    <div class="testimony_content_article_title_icons">
                                        <picture class="picture-defer">
                                            <source class="image source" type='image/webp' data-img="/public/img/testimony_icon.webp">
                                            <img class="image" data-img="/public/img/testimony_icon.png" alt="Latino express icon" title="Latino express icon" width="100" height="100">
                                        </picture>
                                    </div>
                                </div>
                                <div class="testimony_content_article_description">
                                    <!-- <p>GRACIAS MUY ATENTOS Y RAPIDOS, <br> MUCHA SEGURIDAD Y COMPROMISO</p> -->
                                    <p>EXCELENTE EL SERVICIO Y EL TRATO. MUY PROFESIONALES. HE RENOVADO MI CONTRATO Y LO RECOMIENDO 100 POR 100</p>
                                </div>
                                <div class="testimony_content_article_icons">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/star.webp">
                                        <img class="image" data-img="/public/img/star.png" alt="Latino express star" title="Latino express star" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Porque elegirnos -->
        <div class="container bg_why_choose" id="beneficios">
            <div class="content">
                <div class="why_choose">
                    <div class="why_choose_image">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' data-img="/public/img/latino-express-why-choose.webp">
                            <img class="image" data-img="/public/img/latino-express-why-choose.jpg" alt="Latino express su mejor eleccion" title="Latino express su mejor eleccion" width="100" height="100">
                        </picture>

                        <div class="why_choose_image_information">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/img/latino-express-aereo.webp">
                                <img class="image" data-img="/public/img/latino-express-aereo.png" alt="Latino express" title="Latino express" width="100" height="100">
                            </picture>
                            <p>Tus productos se mueven <br> entre ciudades.</p>
                        </div>
                    </div>

                    <div class="why_choose_content">
                        <div class="why_choose_p">
                            <p>Beneficios</p>
                        </div>
                        <section class="why_choose_title">
                            <header>
                                <h2>Creamos oportunidades <br> para alcanzar el <br> potencial.</h2>
                            </header>
                        </section>
                        <div class="why_choose_subtitle">
                            <p>Nuestros clientes nos prefieren por nuestro servicio (cumplimos <br> en tiempo y forma) y por nuestra cálida atención.</p>
                        </div>

                        <div class="why_choose_icons">
                            <div class="why_choose_icons_flex">
                                <div class="why_choose_icons_content">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-box.webp">
                                        <img class="image" data-img="/public/img/latino-express-box.png" alt="Latino express la mejor seguridad en paquetes" title="Latino express la mejor seguridad en paquetes" width="100" height="100">
                                    </picture>
                                    <p>Seguridad de paquete</p>
                                </div>
                                <div class="why_choose_icons_content">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-barco.webp">
                                        <img class="image" data-img="/public/img/latino-express-barco.png" alt="Latino express la mejor seguridad en envios" title="Latino express la mejor seguridad en envios" width="100" height="100">
                                    </picture>
                                    <p>Seguridad de envio</p>
                                </div>
                                <div class="why_choose_icons_content">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-global.webp">
                                        <img class="image" data-img="/public/img/latino-express-global.png" alt="Latino express el mejor rastreo de paquetes" title="Latino express el mejor rastreo paquetes" width="100" height="100">
                                    </picture>
                                    <p>Rastreo</p>
                                </div>
                            </div>
                            <div class="why_choose_icons_flex">
                                <div class="why_choose_icons_content">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-support.webp">
                                        <img class="image" data-img="/public/img/latino-express-support.png" alt="Latino express atencion al cliente 24/7" title="Latino express atencion al cliente 24/7" width="100" height="100">
                                    </picture>
                                    <p>Atención al cliente 24/7</p>
                                </div>
                                <div class="why_choose_icons_content">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-clock.webp">
                                        <img class="image" data-img="/public/img/latino-express-clock.png" alt="Latino express entregas en tiempo record" title="Latino express entregas en tiempo record" width="100" height="100">
                                    </picture>
                                    <p>Entregas a tiempo</p>
                                </div>
                                <div class="why_choose_icons_content">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-money.webp">
                                        <img class="image" data-img="/public/img/latino-express-money.png" alt="Latino express los mejores precios del mercado" title="Latino express los mejores precios del mercado" width="100" height="100">
                                    </picture>
                                    <p>Precios trasparentes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulario de contacto -->
        <div class="container bg_form">
            <div class="content">
                <div class="form">
                    <div class="form_content">
                        <section class="form_content">
                            <div class="form_content_p">
                                <p>Contacto</p>
                            </div>
                            <header class="form_content_title">
                                <h2>Ponte en contacto <br> con nosotros</h2>
                            </header>
                            <!-- <div class="form_content_subtitle">
                                <p>Leverage agile frameworks to provide a robust <br> synopsis for strategy foster collaborative <br> thinking to further the overall value.</p>
                            </div> -->
                        </section>

                        <div class="form_content_icons">
                            <div class="bar_top_contact_content">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/icon/email.svg">
                                    <img class="image" data-img="/public/icon/email.svg" alt="Latino express envianos un email" title="Latino express email" width="100" height="100">
                                </picture>
                                <div class="bar_top_contact_content_text">
                                    <p>Email</p>
                                    <a href="mailto:info@latinoexpress-cargo.com" onclick="gtag('event', 'email')">info@latinoexpress-cargo.com</a>
                                </div>
                            </div>

                            <div class="bar_top_contact_content">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/icon/clock.svg">
                                    <img class="image" data-img="/public/icon/clock.svg" alt="Latino express nuestros horarios" title="Latino express horario" width="100" height="100">
                                </picture>
                                <div class="bar_top_contact_content_text">
                                    <p>Lunes - Sábado 9.00 - 18.00</p>
                                    <p>Domingo cerrado.</p>
                                </div>
                            </div>

                            <div class="bar_top_contact_content">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/icon/call.svg">
                                    <img class="image" data-img="/public/icon/call.svg" alt="Latino express llamanos" title="Latino express llamada" width="100" height="100">
                                </picture>
                                <div class="bar_top_contact_content_text">
                                    <p>Llamanos</p>
                                    <a href="tel:+15597616772" onclick="gtag('event', 'telefonos')">+1 5597616772</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form_inputs">
                        <form action="" class="form_inputs_spacing">
                            <label class="form_inputs_content">
                                <input type="text" name="name" placeholder="Nombre" required>
                                <input type="email" name="email" placeholder="Email" required>
                            </label>
                            <label class="form_inputs_content">
                                <input type="tel" name="tel" placeholder="Telefono" required>
                                <input type="text" name="city" placeholder="Ciudad" required>
                            </label>
                            <label class="form_inputs_textarea">
                                <textarea name="message" placeholder="Mensaje" id="message" cols="30" rows="10"></textarea>
                            </label>
                            <div class="form_inputs_btn">
                                <button>Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="form_gallery">
                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-gallery-footer-1.webp">
                        <img class="image" data-img="/public/img/latino-express-gallery-footer-1.jpg" alt="Latino express galeria" title="Latino express galeria" width="100" height="100">
                    </picture>
                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-gallery-footer-2.webp">
                        <img class="image" data-img="/public/img/latino-express-gallery-footer-2.jpg" alt="Latino express galeria" title="Latino express galeria" width="100" height="100">
                    </picture>
                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' data-img="/public/img/latino-express-gallery-footer-3.webp">
                        <img class="image" data-img="/public/img/latino-express-gallery-footer-3.jpg" alt="Latino express galeria" title="Latino express galeria" width="100" height="100">
                    </picture>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container bg_footer_img">
            <div class="content">
                <div class="footer_img"></div>
            </div>
        </div>

        <div class="footer">
            <div class="footer_logo">
                <picture class="picture-defer">
                    <source class="image source" type='image/webp' data-img="/public/img/logo-latino-express.webp">
                    <img class="image" data-img="/public/img/logo-latino-express.png" alt="Latino express logo" title="Latino express logo" width="100" height="100">
                </picture>
            </div>
            <div class="footer_content">
                <div class="footer_content_icons">
                    <div class="footer_content_icons_contact">
                        <div class="bar_top_contact_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/email.svg">
                                <img class="image" data-img="/public/icon/email.svg" alt="Latino express envianos un email" title="Latino express email" width="100" height="100">
                            </picture>
                            <div class="bar_top_contact_content_text">
                                <p>Email</p>
                                <a href="mailto:info@latinoexpress-cargo.com" onclick="gtag('event', 'email')">info@latinoexpress-cargo.com</a>
                            </div>
                        </div>
                        <div class="bar_top_contact_content">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' data-img="/public/icon/call.svg">
                                <img class="image" data-img="/public/icon/call.svg" alt="Latino express llamanos" title="Latino express llamada" width="100" height="100">
                            </picture>
                            <div class="bar_top_contact_content_text">
                                <p>Llamanos</p>
                                <a href="tel:+15597616772" onclick="gtag('event', 'telefonos')">+1 5597616772</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_content_nav">
                    <nav class="footer_content_nav_enlaces">
                        <a href="#inicio">Inicio</a>
                        <a href="#soluciones">Soluciones</a>
                        <a href="#servicios">Servicios</a>
                        <a href="#rastreo">Rastreo</a>
                        <a href="#testimonios">Testimonios</a>
                        <a href="#beneficios">Beneficios</a>
                    </nav>
                </div>
                <div class="footer_content_email">
                    <form action="" class="footer_content_email_spacing">
                        <input type="email" name="email_footer" required placeholder="Ingrese su Email">
                        <div class="btn_icons">
                            <button type="submit">Enviar</button>
                            <a href="https://www.instagram.com/latino.expresscalifornia?igsh=MzRlODBiNWFlZA==" target="_blank">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/icon/instagram.svg">
                                    <img class="image" data-img="/public/icon/instagram.svg" alt="Latino express Instagram" title="Latino express Instagram" width="100" height="100">
                                </picture>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61556014935981&mibextid=sCpJLy" target="_blank">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/icon/facebook_white.svg">
                                    <img class="image" data-img="/public/icon/facebook_white.svg" alt="Latino express facebook" title="Latino express facebook" width="100" height="100">
                                </picture>
                            </a>
                            <a href="https://www.tiktok.com/@latinoexpress.cargo?_t=8jrEGkmhGCU&_r=1" target="_blank">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' data-img="/public/icon/tiktok.svg">
                                    <img class="image" data-img="/public/icon/tiktok.svg" alt="Latino express tiktok" title="Latino express tiktok" width="100" height="100">
                                </picture>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container bg_footer_two">
            <div class="content">
                <p>©2024 Latino Express. Todos los derechos reservados.</p>
            </div>
        </div>
        <?php
        require_once './comons/btn_top.php';
        ?>
    </main>
</body>

<script src="/public/js/carga_diferida.js"></script>
<script src="/public/js/count.js"></script>
<script src="/public/js/menu.js"></script>

</html>