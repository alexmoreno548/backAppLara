<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sidutrade</title>
    {{Html::style('css/main.css')}}
    {{Html::style('css/bootstrap.css')}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
</head>
</head>
<body>
            <!--SECTION MENU-->
        <header class="container">
            <div class="submenu">
                <img src="./img/logo.png" class="col-md-3">
                <nav class="menu col-md-9">
                    <ul>
                        <li><a href="#">NOSOTROS</a></li>
                        <li><a href="#">SERVICIOS</a></li>
                        <li><a href="#">PRODUCTOS</a></li>
                        <li><a href="#">CLIENTES</a></li>
                        <li><a href="#">NOTICIAS</a></li>
                        <li><a href="#">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--SECTION MENU-->

        <!--SECTION BANNER-->
        <section class="banner">
            <figure>
                <img src="./img/banner.jpg" style="width: 100%; height: 100%" alt="">
                <figcaption class="txt-banner">
                    <h1>Un centro de servicio completo de Aluminio</h1>
                    <p>
                        Bienvenido ¿Esta buscando algun consejo útil? No vaya mas allá;
                        Ha entrado al lugar correcto. Somos profesionales, experimentados
                        y enfocados en su satisfaccion. ¡Valoramos su confianza!
                    </p>
                </figcaption>
            </figure>
        </section>
        <!--SECTION BANNER FIN-->

        <!--SECTION ABOUT US-->
        <section class="nosotros">

            <!--ARTICULO UNO-->
            <article class="container">
                <figure class="imgs">
                    <img src="./img/rombo1.jpg" alt="" class="img1">
                    <img src="./img/rombo2.jpg" alt="" class="img2">
                </figure>
                <figcaption class="txt-nosotros">
                    <hgroup>
                        <h1><span>01</span>Nosotros</h1>
                        <h2>Proveemos a clientes industriales en todo el mundo</h2>
                    </hgroup>
                    <p>
                        SIDUTRADE NV, es una empresa comercial dedicada a la compra,
                        venta, importacion y exportacion de todo tipo de materias primas.
                        permitiendo a las empresas nacionales e internacionales esplorar
                        las diferentes oportunidades existentes en el mercado
                    </p>
                </figcaption>
            <hr style="width: 50%;border: 1px solid #ADADAD; float:left;">
            </article>
            <!--ARTICULO UNO FIN-->

            <!--ARTICULO DOS-->
            <article class="container">
                <div class="mision col-md-5">
                    <h2>Misión</h2>
                    <p>
                        El compromiso principal de SIDUTRADE NV, es atender las necesidades
                        de nuestros clientes, regidos por la exelencia y experiencia; ofreciendo
                        productos que cumplen con los estandares internacionales de calidad, permitiendonos
                        ser una empresa creciente y sostenible logrando el desarrollo de las competencias
                        profesionales de nuestro capital humano.
                    </p>
                </div>
                <div class="vision col-md-4 col-md-offset-1">
                    <h2>Visión</h2>
                    <p>
                        Ser una empresa lider, solida y confiable con presencia internacional,
                        que se distinga por proporcional calidad en sus productos y servicios,
                        con una gestion que se anticipe y se adapte al cambio, aprenda de la
                        experiencia e innove continuamente
                    </p>
                </div>
            <hr style="width: 50%;border: 1px solid #ADADAD;float: left">
            </article>
            <!--ARTICULO DOS FIN-->

        </section>
        <!--SECTION ABOUT US FIN-->

        <!--SECTION SERVICIOS-->
        <section class="servicios">
            <figure class="triangle-img-container">
                <div class="triangle-img-inner">
                    <div class="triangle-img" style="background-image: url('./img/rombo2.jpg')"></div>
                </div>
            </figure>
            <figcaption class="container">
                <hgroup>
                    <h1><span>02</span>Servicios</h1>
                    <h3>Continuar con el legado de la exelencia</h3>
                    <hr style="width: 50% ;border: 1px solid #ADADAD;">
                    <h2>Importaciones y Exportaciones</h2>
                </hgroup>
                <div class="txt-info">
                    <p>
                        Coordinamos el transporte, traslado y todas las formalidades legales
                        para la entrada de su mercancia desde su origen hasta su destino. Ofreciendole:
                    </p>
                    <ul>
                        <li>Contratacion y Coordinacion de transporte entre puertos y fabricas</li>
                        <li>Contratacion y Coordinacion de Caleta y Estiba</li>
                        <li>Servicio de Almacenamiento</li>
                        <li>Consolidacion de Cargas</li>
                        <li>Tramites Aduaneros</li>
                        <li>Tramitacion de Exoneraciones de impuesto para proyectos</li>
                        <li>Gestion de Fletes aereos y maritimos</li>
                        <li>Contratacion de Buques y vuelos Charter</li>
                    </ul>
                </div>
            </figcaption>
            <hr style="width: 42%;border: 1px solid #ADADAD;">
            <figure class="imgs">
                <img src="./img/rombo1.jpg" alt="" class="img1 col-md-4 col-md-offset-3">
                <span></span>
                <img src="./img/rombo2.jpg" alt="" class="img2 col-md-4 col-md-offset-1">
            </figure>  
        </section>

        <!--SECTION PRODUCTOS-->
        <section class="productos container">
            <header class="">
                <h1><span>03</span>Productos</h1>
                <p>
                    Sidutrade NV, es una empresa encargada en compra, venta,
                    adquisicion, importacion y exportacion de productos subderivados del acero
                </p>
            </header>
            <article class="tarjetas col-md-12">
                <figure>
                    <img src="./img/1.jpg" alt="" class="col-md-5">
                </figure>
                <figcaption class="trj-txt col-md-5">
                    <h1>Bobinas de Acero</h1>
                    <p>
                        Son tuilizadas por una variedad de consumidores tales como:
                        fabricantes de piezas automotrices, tubos, cilindros de gas,
                        construccion de edificios, puentes, ferrocarriles, entro otros.
                    </p>
                </figcaption>             
            </article>
            <article class="tarjetas col-md-12">
                <figure>
                    <img src="./img/1.jpg" alt="" class="col-md-5">
                </figure>
                <figcaption class="trj-txt col-md-5">
                    <h1>Bobinas de Acero</h1>
                    <p>
                        Son tuilizadas por una variedad de consumidores tales como:
                        fabricantes de piezas automotrices, tubos, cilindros de gas,
                        construccion de edificios, puentes, ferrocarriles, entro otros.
                    </p>
                </figcaption>             
            </article>
            <article class="tarjetas col-md-12">
                <figure>
                    <img src="./img/1.jpg" alt="" class="col-md-5">
                </figure>
                <figcaption class="trj-txt col-md-5">
                    <h1>Bobinas de Acero</h1>
                    <p>
                        Son tuilizadas por una variedad de consumidores tales como:
                        fabricantes de piezas automotrices, tubos, cilindros de gas,
                        construccion de edificios, puentes, ferrocarriles, entro otros.
                    </p>
                </figcaption>             
            </article>
            <article class="tarjetas col-md-12">
                <figure>
                    <img src="./img/1.jpg" alt="" class="col-md-5">
                </figure>
                <figcaption class="trj-txt col-md-5">
                    <h1>Bobinas de Acero</h1>
                    <p>
                        Son tuilizadas por una variedad de consumidores tales como:
                        fabricantes de piezas automotrices, tubos, cilindros de gas,
                        construccion de edificios, puentes, ferrocarriles, entro otros.
                    </p>
                </figcaption>             
            </article>
            <article class="tarjetas col-md-12">
                <figure>
                    <img src="./img/1.jpg" alt="" class="col-md-5">
                </figure>
                <figcaption class="trj-txt col-md-5">
                    <h1>Bobinas de Acero</h1>
                    <p>
                        Son tuilizadas por una variedad de consumidores tales como:
                        fabricantes de piezas automotrices, tubos, cilindros de gas,
                        construccion de edificios, puentes, ferrocarriles, entro otros.
                    </p>
                </figcaption>             
            </article>
        </section>
        <!--SECTION PRODUCTOS FIN-->

        <!--SECTION NOTICIAS-->
        <section class="noticias container">
            <header>
                <h1><span>04</span>Noticias</h1>
            </header>
            @foreach ($Posts as $post)
                <div class="col-xs-6 col-md-4">
                    <div class="thumb">
                        <figure>
                            <img src="storage/{{$post->image }}" alt=""> 
                        </figure>
                        <figcaption class="caption">
                            <h3>{{$post->title}}</h3>
                            <p> {!!$post->excerpt!!}</p>
                            <a href="" class="boton">Leer Mas</a>
                        </figcaption>
                    </div>
                </div>
            @endforeach
          <!--  <div class="col-xs-6 col-md-4">
                <div class="thumb">
                    <figure>
                        <img src="./img/1.jpg" alt=""> 
                    </figure>
                    <figcaption class="caption">
                        <h3>Motocross</h3>
                        <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                        <a href="" class="boton">Leer Mas</a>
                    </figcaption>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumb">
                    <figure>
                        <img src="./img/1.jpg" alt=""> 
                    </figure>
                    <figcaption class="caption">
                        <h3>Motocross</h3>
                        <p>Deporte Extremo, que se desarrollo a partir del invento de la Motocicleta</p>
                        <a href="" class="boton">Leer Mas</a>
                    </figcaption>
                </div>
            </div>-->
        </section>
        <!--SECTION FIN NOTICIAS-->

        <!--SECTION CONTACTO-->
        <section class="contacto">
            <header>
                <h1><span>05</span>Contacto</h1>
            </header>
        </section>
        <!--SECTION FIN CONTACTO-->
    </body>
