<?php ob_start('comprimir_pagina'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta property="og:locale" content="es_ES" >
    <meta property="og:type" content="website" >
    <meta property="og:title" content="Fitpersonal" >
    <meta property="og:description" content="Fitpersonal entrenador en casa " >
    <meta property="og:url" content="https://FitPersonal.ml" >
    <meta property="og:site_name" content="FitPersonal" >
    <meta property="og:image" content="https://www.facebook.com/wowzeros/" >
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="460" />
    <meta property="og:image:height" content="260" />

    <title>Fitpersonal</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--Favicon -->
    <link rel="stylesheet" href="<?=base_url("css/perfil.css");?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url("img/apple-touch-icon.png");?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url("img/apple-touch-icon.png");?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url("img/apple-touch-icon.png");?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url("img/apple-touch-icon.png");?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url("img/apple-icon-114x114.png");?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url("img/apple-icon-120x120.png");?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url("img/apple-icon-144x144.png");?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url("img/apple-icon-152x152.png");?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url("img/apple-icon-180x180.png");?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url("img/android-icon-192x192.png");?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url("img/favicon-32x32.png");?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url("img/favicon-96x96.png");?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url("img/favicon-16x16.png");?>">
    <link rel="manifest" href="<?=base_url("img/manifest.json");?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=base_url("img/ms-icon-144x144.png");?>">
    <meta name="theme-color" content="#ffffff">
    <script type="text/javascript" src="js/perfil.js"></script>
    <link rel="stylesheet" href="<?=base_url("css/todo.css");?>">

    <!-- CSS Files -->

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/player/YTPlayer.css" />
    <link href="css/pro-bars.css" rel="stylesheet" />


    <!-- End CSS Files -->

</head>






<?php

if($validar=="1"){
    echo "<body onload='return alerta()'></body>";
}
else if($validar=="2"){
    echo "<body onload='return login()'></body>";
}
else if($validar=="3"){
    echo "<body onload='return cuidado()'></body>";
}
else if($validar =="4"){
    echo "<body onload='return noExiste()'></body>";
}
?>


<!-- Navigation -->
<section id="navigation" class="dark-nav">
    <!-- Navigation Inner -->
    <div class="nav-inner">
        <!-- Site Logo -->
        <div class="site-logo fancy">
            <a href="#" id="logo-text" class="scroll logo"> <img src="images/FITPERSONAL.png" width="100"  alt="Logo" />
            </a>
        </div><!-- End Site Logo -->
        <a class="mini-nav-button gray2"><i class="fa fa-bars"></i></a>
        <!-- Navigation Menu -->
        <div class="nav-menu">
            <ul class="nav uppercase">
                <li><a href="#home" class="scroll"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li><a href="#about" class="scroll"><span class="glyphicon glyphicon-info-sign"></span> Quiénes somos</a></li>
                <li><a href="#features" class="scroll"><span class="glyphicon glyphicon-shopping-cart"></span> Planes</a></li>
                <li><a href="#trainer" class="scroll"><span class="glyphicon glyphicon-eye-open"></span> Entrenadores</a></li>
                <li><a href="#salud" class="scroll"><span class="glyphicon glyphicon-shopping-cart"></span> Dietas y Nutrición</a></li>

                <?php
                if(!empty($_SESSION['email'])){
                    echo " <li><a href= ".base_url('/dashboard')." class=\"scroll\"><span class=\"glyphicon glyphicon-log-in\"></span> Panel</a></li>";
                    echo " <li><a href= ".base_url('/dashboard/logout')." class=\"scroll\"><span class=\"glyphicon glyphicon-log-in\"></span> Salir</a></li>";
                }
                else{
                    echo "<li><a id='login'  href='javascript:void(0);' class= 'active'><span class='glyphicon glyphicon-log-in'></span> Iniciar sesión o Registrar</a></li>";
                }
                ?>

            </ul>
        </div><!-- End Navigation Menu -->
    </div><!-- End Navigation Inner -->
</section><!-- End Navigation Section -->


<!-- Home Section -->
<section id="home" class="relative">
    <div id="slides">
        <div class="slides-container relative">
            <!-- Slider Images -->
            <div class="image2"></div>
            <div class="image1"></div>
            <div class="image3"></div>
            <div class="image4"></div>
            <!-- End Slider Images -->
        </div>
        <!-- Slider Controls -->
        <nav class="slides-navigation">
            <a href="#" class="next"></a>
            <a href="#" class="prev"></a>
        </nav>
    </div><!-- End Home Slides -->
    <div class="v2 absolute">
        <!-- Auto Typocraphic Texts -->
        <div class="typographic">
            <!-- Your Logo -->
            <div class="logo">
                <img src="images/FITPERSONAL.png" width="200" alt="Logo" />
            </div>
            <h2 class=" condensed uppercase no-padding no-margin bold gray1">Quieres tu cuerpo ideal</h2>
            <h2 class=" condensed uppercase no-padding no-margin bold colored">Que Esperas para tener tu entrenador en casa?</h2>
            <a href="#about" class="scroll"><i class="arrow-down fa fa-3x fa-angle-double-down"></i></a>
        </div><!--End Auto Typocraphic Texts -->
    </div><!-- End V2 area -->
</section><!-- End Home Section -->


<!-- Fun Acts -->
<section id="fun-acts" class="container">

    <div class="inner fun-acts">
        <div class="about-margin"></div>
        <a class="about-icon">
            <i class="fa fa-life-ring"></i>
        </a>
        <br />

        <!-- Header -->
        <h1 class="header light gray1 animated" data-animation="fadeInLeft" data-animation-delay="400">
            Los ganadores se entrenan,<span class="colored" data-animation="fadeInRight">los perdedores se quejan</span></h1>
        <!-- Description -->
        <p class="h-desc"><span class="colored">Quieres tener tu entrenador en casa?</span> FitPersonal Te lo lleva</p>

    </div><!-- End Fun Acts Inner -->

</section><!-- End Fun Acts Section -->

<!-- About -->
<section id="about" class="container waypoint">
    <div class="inner">

        <!-- Header -->
        <h1 class="header light gray3 fancy"><span class="colored">Fit </span>Personal</h1>

        <!-- Description -->
        <p class="h-desc gray4">Somos <span class="colored bold"> Fitpersonal</span>
            Nos esforzamos para ayudar a nuestros clientes a adoptar un estilo de vida más saludable, más fuerte y más apta, proporcionando soluciones de fitness personalizadas que conducen a los resultados. Al ofrecer programas efectivos y divertidos, hemos sido reconocidos como un recurso de primera clase en nuestra comunidad. <br /><br /></p>
        <hr>

        <!-- Boxes -->
        <div class="boxes">


            <div class="col-xs-3 col-sm-6 col-md-3 about-box animated" data-animation="fadeIn" data-animation-delay="100">
                <p class="lead">Mejoramos tu Salud</p>
                <hr><br>
                <a class="about-icon">
                    <i class="fa fa-stethoscope"></i>
                </a>
                <br><br>
                <p class="light about-text">Aveces desea tener un mejor cuerpo y ser el prototipo ideal fitpersonal te ayuda y con nosotros mejora tu salud.</p>
            </div>


            <div class="col-xs-3 col-sm-6 col-md-3 about-box animated" data-animation="fadeIn" data-animation-delay="300">
                <p class="lead">Tu servicio con cuidado</p>
                <hr><br>
                <a class="about-icon">
                    <i class="fa fa-wheelchair"></i>
                </a>
                <br><br>
                <p class="light about-text">Pocos sabes cuidarte por eso nosotros lo hacemos</p>
            </div>


            <div class="col-xs-12 col-md-6 col-sm-12 about-box animated" data-animation="fadeIn" data-animation-delay="700">
                <p class="lead lead-text">Servicios Fitpersonal</p><hr>
                <p class="left pro-bars" style="color: rgb(83, 205, 181);">Entrenamientos Personalizados invidual </p>
                <div class="pro-bar-container color-green-sea">
                    <div class="pro-bar bar-100 color-turquoise" data-pro-bar-percent="100">
                        <div class="pro-bar-candy candy-ltr"></div>
                    </div>
                </div>
                <p class="left pro-bars" style="color: #3498DB;">Entrenamientos Personalizados Grupal 3 </p>
                <div class="pro-bar-container color-belize-hole">
                    <div class="pro-bar bar-80 color-peter-river" data-pro-bar-percent="80" data-pro-bar-delay="200">
                        <div class="pro-bar-candy candy-ltr"></div>
                    </div>
                </div>
                <p class="left pro-bars" style="color: #B483C8;">Entrenamientos Personalizados Grupal 5 </p>
                <div class="pro-bar-container color-wisteria">
                    <div class="pro-bar bar-70 color-amethyst" data-pro-bar-percent="70" data-pro-bar-delay="300">
                        <div class="pro-bar-candy candy-ltr"></div>
                    </div>
                </div>
            </div>
        </div><!-- End Boxes -->
    </div><!-- End About Inner -->
</section><!-- End About Section -->

<!-- Features -->
<section id="features" class="container">

    <div class="inner">

        <!-- Header -->
        <h1 class="header light gray1">planes para ti <span class="colored fancy">FitPersonal</span></h1>

        <!-- Description -->
        <p class="h-desc white bold">Opten tu entrenador en casa <span class="colored bold"> y</span> Consigue el cuerpo de tu sueños.</p>

        <div class="features-boxes">
            <!-- Box 1 -->
            <div class="col-xs-4 f-box animated" data-animation="fadeIn" data-animation-delay="0">
                <!-- Icon -->
                <a class="f-icon">
                  <i class="fa fa-child"></i>X1
                </a>
                <!-- Header -->
                <p class="feature-head">Plan Individual</p>
                <!-- Text -->
                <div id="plan1"></div>
            </div>


            <!-- Box 2 -->
            <div class="col-xs-4 f-box animated" data-animation="fadeIn" data-animation-delay="100">
                <!-- Icon -->
                <a class="f-icon">
                    <i class="fa fa-child fa-2x"></i>X3
                </a>
                <!-- Header -->
                <p class="feature-head">Plan Grupal 3 personas</p>
                <!-- Text -->
                <div id="plan2"></div>
            </div>


            <!-- Box 3 -->
            <div class="col-xs-4 f-box animated" data-animation="fadeIn" data-animation-delay="200" style="position: relative; left: 150px;">
                <!-- Icon -->
                <a class="f-icon">
                    <i class="fa fa-child fa-2x"></i>X5
                </a>
                <!-- Header -->
                <p class="feature-head">Plan Grupal 5 personas</p>
                <!-- Text -->
                <div id="plan3"></div>

            </div>
            <div class="clear"></div>

        </div><!-- End Features Boxes -->
        <h3 style="color:whitesmoke;">para comprar los planes debes hacerlo meidiante el panel de tu cuenta </h3>
    </div> <!-- End Features Inner -->

</section><!-- End Features Section -->

<!-- trainer -->
<section  id="trainer" class="container">

    <!-- Team Inner -->
    <div class="inner team">

        <!-- Header -->
        <h1 class="header light gray3 fancy"><span class="colored">Fit </span>Personal</h1>
        <h1 class="header light gray3 fancy"><span class="colored">Pesonal Trainers </span></h1>

        <!-- Description -->
        <p class="h-desc gray4">Nuestro<span class="colored bold">  Equipo de</span> Entrenadores ven registrate y escoje el tuyo.</p>

        <!-- Members -->
        <div  class="team-members inner-details"><div style="display: block;" id="entrenadores"></div></div>
    </div>

</section><!-- End Team Section -->







<!-- salud -->
<section id="salud" class="testimonials parallax2">

    <div class="inner">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol id="url" class="carousel-indicators">

            </ol>

            <!-- Wrapper for slides -->
            <div id="carusel" class="carousel-inner">

            </div>


        </div>

    </div><!-- End Inner Div -->

</section><!-- End Testimonials Section -->

<!-- Blockquote -->
<section id="blockquote">

    <div class="inner no-padding">
        <!-- Your Text -->
        <p class="normal white blockquote fancy">¡Esta es la motivación de nuestro Cliente, trabajamos con Passion!
            <a href="#about" class="scroll"><i class="fa fa-arrow-right"></i></a></p>
    </div>

</section><!-- End Blockquote Section -->

<!-- Contact Section -->




<!-- Site Socials and Address -->
<section id="site-socials" class="no-padding white-bg">
    <div class="site-socials inner no-padding">
        <!-- Socials -->
        <div class="socials animated" data-animation="fadeInLeft" data-animation-delay="400">
            <!-- Facebook -->
            <a href="https://www.facebook.com/FitPersonal01/" target="_blank" class="social">
                <i class="fa fa-facebook"></i>
            </a>
            <!-- Twitter -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-twitter"></i>
            </a>
            <!-- Instagram -->
            <a href="#" class="social">
                <i class="fa fa-instagram"></i>
            </a>
            <!-- Linkedin -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-linkedin"></i>
            </a>
            <!-- Vimeo -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-vimeo-square"></i>
            </a>
            <!-- Youtube -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-youtube"></i>
            </a>
            <!-- Google Plus -->
            <a href="#" target="_blank" class="social">
                <i class="fa fa-google-plus"></i>
            </a>
        </div>
        <!-- Adress, Mail -->
        <div class="address socials animated" data-animation="fadeInRight" data-animation-delay="500">
            <!-- Phone Number, Mail -->
            <p>Celular: 3043651232 Email : <a href="mailto:carloscastilla31@gmail.com" class="colored">carloscastilla31@gmail.com</a> Colombia-Cesar</p>
            <!-- Top Button -->
            <a href="#home" class="scroll top-button">
                <i class="fa fa-arrow-circle-up fa-2x"></i>
            </a>
        </div><!-- End Adress, Mail -->
    </div><!-- End Inner -->
</section><!-- End Site Socials and Address -->


<div id="login_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-4">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Registrar</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" class="login-form" action="" method="post" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Usuario" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Recordar mi Contraseña</label>
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar Sección">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="register-form" class="register-form" action="" method="post" role="form" style="display: none;">
                                        <div class="form-group">
                                            <input type="text" name="username1" id="username1" tabindex="1" class="form-control" placeholder="Usuario" value="" required>
                                            <div class="jsError"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email1" id="email1" tabindex="1" class="form-control" placeholder="Correo electronico" value="" required>
                                            <div class="jsError1"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password1" id="password1" tabindex="2" class="form-control" placeholder="Contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <select id="CE" name="CE" class="col-sm-12" >
                                                <option value="Cliente">Cliente</option>
                                                <option value="Entrenador">Entrenador</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <br>
                                                    <br>
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar ahora">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" class="active text-danger" id="recuperar">Olvidaste tu contraseña?</a>
                                                    <hr>
                                                    <a href="#" class="active text-danger" id="codigo">Tengo Un codigo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
<footer id="footer" class="footer">
    <!-- Your Company Name -->
    <img src="images/FITPERSONAL.png" width="200" alt="Logo" />
    <!-- Copyright -->
    <p class="copyright normal">© 2017 <span class="colored"><a href="https://www.facebook.com/wowzeros/" target="_blank" class="social">Dev Zeros.</a></span>Todos los derechos reservados.</p>
    <br>
    <a class="active"  target="_blank" href="http://www.mareadigital.co/"><img src="img/apps.co.jpg" class="logo" width="900" alt="Logo" /></a>
</footer><!-- End Footer -->

<!-- JS Files -->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/modernizr-latest.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.superslides.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.slabtext.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.css">

<script>

    $("a.about-icon").hover(function () {
        $(this).children("i").addClass("fa-spin");
    }, function(){
        $(this).children("i").removeClass("fa-spin");
    });

</script>


    </body>

</html>

<?php
// Una vez que el bÃºfer almacena nuestro contenido utilizamos "ob_end_flush" para usarlo y deshabilitar el bÃºfer
ob_end_flush();
// FunciÃ³n para eliminar todos los espacios en blanco
function comprimir_pagina($buffer) {
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');
    $reemplaza = array('>','<','\\1');
    return preg_replace($busca, $reemplaza, $buffer);
}?>

<!-- Chatra {literal} -->
<script>
    (function(d, w, c) {
        w.ChatraID = 'wHs2WSifA3cziTQ54';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
        s.async = true;
        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
            + '//call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->