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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="76x76"href="<?=base_url("assets/img/apple-icon.png");?>"/>
    <link rel="icon" type="image/png"href="<?=base_url("assets/img/favicon.png");?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?=base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet" />
    <link href="<?=base_url("assets/css/material-dashboard.css");?>" rel="stylesheet"/>
    <link href="<?=base_url("assets/css/demo.css");?>" rel="stylesheet" />
    <link href="<?=base_url("css/user.css");?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url("css/todo.css");?>">
    <script src="<?=base_url("js/user.js");?>"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url("img/apple-icon-57x57.png");?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url("img/apple-icon-60x60.png");?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url("img/apple-icon-72x72.png");?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url("img/apple-icon-76x76.png");?>">
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
    <script type="text/javascript" src="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.css">
    <title>FitPersonal</title>
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="fp" data-image="<?=base_url("assets/img/sidebar-1.jpg");?>">

        <div class="logo">
            <a href="" class="simple-text">
                <img src="<?=base_url("/img/FITPERSONAL.png");?>" style="width: 200px;" alt="Logo Fitpersonal" title="Logo Fitpersonal">
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="#inicio">
                        <i class="material-icons">FP</i>
                        <p>Fipersonal</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#datos">
                        <i class="material-icons">person</i>
                        <p>Datos personales</p>
                    </a>
                </li>
                <li class="">
                    <a id="cliente" href="#contratar_entrenador">
                        <i class="material-icons">supervisor_account</i>
                        <p>Entrenadores</p>
                    </a>
                </li>
                <li class="">
                    <a href="#fondo">
                        <i class="material-icons">credit_card</i>
                        <p>Mi fondos</p>
                    </a>
                </li>

                <li class="">
                    <a href="#fondo">
                        <i class="material-icons">credit_card</i>
                        <p>Planes</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Usuario</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">0</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <div id="notificacion"></div>
                            </ul>
                        </li>
                        <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>Usuario
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('');?>">Inicio</a></li>
                                <li><a href="<?=base_url('dashboard/logout');?>">Cerrar Seccion</a></li>
                            </ul>
                        </li>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>





        <div class="content" id="datos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="text-center card-header" data-background-color="fp">
                                <h4 class="title">Datos Personal del Entrenador</h4>
                                <p class="category">Complete Su perfil para ser seleccionado</p>
                            </div>
                            <div class="card-content">
                                <form id="form" class="jsform" method="post">
                                    <input name="usuario_date" id="usuario_date"  type="hidden" value="Usuario">
                                    <input name="id_cliente" id="id_cliente"  type="hidden" value="">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="text-center"> <img class="center-block" src="<?=base_url("/img/FITPERSONAL.png");?>" style="width: 200px;" alt="Logo Sportlife" title="Logo Sportlife"></label>
                                            <input type="text" class="form-control" disabled value="FitPersonal Tu entrenador en casa">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group center-block text-center">
                                            <div class="col-sm-12 center-block text-center">
                                                <div class="fileinput fileinput-new center-block" data-provides="fileinput">
                                                    <label class="control-label text-center"><i class="col-sm-12 material-icons prefix">add_a_photo</i> Imagen</label>
                                                    <input type="file" class="col-sm-9form-control" name="file" id="file" required>
                                                    <br>
                                                    <br>
                                                    <img class="img-responsive center-block" id="imgSalida" style="width: 150px; height: 150px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label col-md-12" style="font-style: italic; font-size: 18px !important;">DATOS PERSONALES</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">account_circle</i> Nombre Completo</label>
                                                <br>
                                                <br>
                                                <input id="nombre" placeholder="nombre completo"c name="nombre" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">insert_invitation</i>Edad</label>
                                                <br>
                                                <br>
                                                <input type="number" placeholder="19" id="edad" name="edad" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">phone</i>Telefono</label>
                                                <br>
                                                <br>
                                                <input type="number" placeholder="3043651232" id="telefono" name="telefono" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">info</i>Sexo</label>
                                                <br>
                                                <br>
                                                <input type="text" placeholder="mujer" id="sexo" name="sexo" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">location_city</i>Ciudad</label>
                                                <br>
                                                <br>
                                                <input type="text"  id="ciudad" name="ciudad" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">location_city</i>Departamento</label>
                                                <br>
                                                <br>
                                                <input type="text"  id="departamento" name="departamento" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">directions_walk</i>Direccion</label>
                                                <br>
                                                <br>
                                                <input type="text" id="direccion" name="direccion" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit"  id="GE" class="btn btn-primary pull-right"  value="Guardar Datos">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="content" id="contratar_entrenador">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center">
                        <div class="card">
                            <div class="card-header" data-background-color="fp">
                                <h4 class="title">Solicitar Entrenador personal</h4>
                                <p class="category">llenando el formulario se te dara acceso a varios entrenadores</p>
                            </div>
                            <div class="card-content">

                                <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
                                      <input type="image" border="0" alt="" src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
                                      <input name="buttonId" type="hidden" value="KTni90CbMpBMeKtwbB/2H7o1rAgHdbJXNSuBF1q71GfYuoZd/ndGKg=="/>
                                      <input name="merchantId" type="hidden" value="660776"/>
                                      <input name="accountId" type="hidden" value="663342"/>
                                      <input name="description" type="hidden" value="Plan 1 H"/>
                                      <input name="referenceCode" type="hidden" value="00001"/>
                                      <input name="amount" type="hidden" value="12000"/>
                                      <input name="tax" type="hidden" value="0"/>
                                      <input name="taxReturnBase" type="hidden" value="0"/>
                                      <input name="shipmentValue" value="0" type="hidden"/>
                                      <input name="currency" type="hidden" value="COP"/>
                                      <input name="lng" type="hidden" value="es"/>
                                      <input name="approvedResponseUrl" type="hidden" value="http://fitpersonal.ml/fitpersonal/dashboard/pago_e"/>
                                      <input name="declinedResponseUrl" type="hidden" value="http://fitpersonal.ml/fitpersonal/dashboard/pago_c"/>
                                      <input name="pendingResponseUrl" type="hidden" value="http://fitpersonal.ml/fitpersonal/dashboard/pago_p"/>
                                      <input name="displayShippingInformation" type="hidden" value="YES"/>
                                      <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
                                      <input name="buttonType" value="SIMPLE" type="hidden"/>
                                      <input name="signature" value="9c89b7a0084c0fd85fd76116072677fc65b6f587ae9cf518905fd525c455c8f7" type="hidden"/>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <br>
        <br>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Quines Somos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contactos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Redes sociales
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.Fitpersonal.co">Dev Zeros</a>, Carlos andres castilla garcia
                </p>
            </div>
        </footer>
    </div>
</div>

</body>


<script src="<?=base_url("assets/js/jquery-3.1.0.min.js");?>" type="text/javascript"></script>
<script src="<?=base_url("assets/js/bootstrap.min.js");?>" type="text/javascript"></script>
<script src="<?=base_url("assets/js/material.min.js");?>" type="text/javascript"></script>
<script src="<?=base_url("assets/js/chartist.min.js");?>"></script>
<script src="<?=base_url("assets/js/bootstrap-notify.js");?>"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="<?=base_url("assets/js/material-dashboard.js");?>"></script>
<script src="<?=base_url("assets/js/demo.js");?>"></script>
</html>

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