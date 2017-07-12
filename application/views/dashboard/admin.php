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
                    <a href="<?=base_url("");?>">
                        <i class="material-icons">FP</i>
                        <p>Fipersonal</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#entrenadores">
                        <i class="material-icons">person</i>
                        <p>Entrenadores</p>
                    </a>
                </li>
                <li class="">
                    <a id="cliente" href="#clientes">
                        <i class="material-icons">supervisor_account</i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="">
                    <a href="#fondo">
                        <i class="material-icons">credit_card</i>
                        <p>Fondos</p>
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
                    <a class="navbar-brand" href="#">Administrador</a>
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
                                <!-- <li><a href="#">Mike John responded to your email</a></li>
                                 <li><a href="#">You have 5 new tasks</a></li>
                                 <li><a href="#">You're now friend with Andrew</a></li>
                                 <li><a href="#">Another Notification</a></li>
                                 <li><a href="#">Another One</a></li> -->
                            </ul>
                        </li>
                        <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('');?>">Inicio</a></li>
                                <li><a href="<?=base_url('dashboard/logout');?>">Cerrar Seccion</a></li>
                            </ul>
                        </li>
                        </li>
                    </ul>


                    <!--  <form class="navbar-form navbar-right" role="search">
                          <div class="form-group  is-empty">
                              <input type="text" class="form-control" placeholder="Search">
                              <span class="material-input"></span>
                          </div>
                          <button type="submit" class="btn btn-white btn-round btn-just-icon">
                              <i class="material-icons">search</i><div class="ripple-container"></div>
                          </button>
                      </form> -->
                </div>
            </div>
        </nav>




 <!-- <div class="content" id="entrenadores">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="card">
                            <div class="col-md-4">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="" >
                                            <img class="img-responsive center-block" id="imagen" style="width: 150px; height: 150px;">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="category text-gray">Estatus: <div id="Es"></div> </h5>

                                        <h4 class="card-title">Usuario: <div id="Es_name"></div> </h4>
                                        <p class="card-content">
                                            Correo: <div id="Es_soy"></div>
                                        </p>
                                        <a href="#" id="estado" class="btn btn-primary btn-round">Status</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="content" id="entrenadores">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center">
                        <div class="card">
                                <div class="card-header" data-background-color="fp">
                                    <h4 class="title">Datos Personales de los Entrenadores</h4>
                                    <p class="category">Lista de Entrenadores</p>
                                </div>
                                <div class="card-content">
                                    <br>
                                    <div class="container"> <div class="row col-md-11"> <div id="entrenador"></div> </div> </div>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="content" id="clientes">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center">
                        <div class="card">
                                <div class="card-header" data-background-color="fp">
                                    <h4 class="title">Datos Personales de los Clientes</h4>
                                    <p class="category">Lista de cliente</p>
                                </div>
                                <div class="card-content">
                                    <div class="container"> <div class="row col-md-11"> <div id="cliente_"></div> </div> </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="content" id="fondo">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center">
                        <div class="card">
                            <div class="card-header" data-background-color="fp">
                                <h4 class="title">Fondo</h4>
                                <p class="category">Lista de Fondos</p>
                            </div>
                            <div class="card-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.Fitpersonal.ml">Dev Zeros</a>, Carlos andres castilla garcia
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