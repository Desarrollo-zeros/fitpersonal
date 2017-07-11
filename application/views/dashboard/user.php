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



    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="themes/explorer/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/plugins/sortable.js" type="text/javascript"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>
    <script src="js/locales/fr.js" type="text/javascript"></script>
    <script src="js/locales/es.js" type="text/javascript"></script>
    <script src="themes/explorer/theme.js" type="text/javascript"></script>
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
    <link rel="stylesheet" href="css/font-awesome.css" />
  
    <title>FitPersonal</title>
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="fp" data-image="<?=base_url("assets/img/sidebar-1.jpg");?>">

        <div class="logo">
            <a href="" class="simple-text">
                <img src="<?=base_url("/img/FITPERSONAL.png");?>" style="width: 200px;" alt="Logo Sportlife" title="Logo Sportlife">
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
                    <a href="#datos">
                        <i class="material-icons">person</i>
                        <p>Datos personales</p>
                    </a>
                </li>
                <li class="">
                    <a href="#contratar_entrenador">
                        <i class="material-icons">supervisor_account</i>
                        <p>Solicitar Entrenador</p>
                    </a>
                </li>
                <li class="">
                    <a href="#planes">
                        <i class="material-icons">credit_card</i>
                        <p>Planes</p>
                    </a>
                </li>

                <li class="">
                    <a href="#pago_activo">
                        <i class="material-icons">credit_card</i>
                        <p>Confirmacion de pago</p>
                    </a>
                </li>

                <li class="">
                    <a href="#pagos">
                        <i class="material-icons">credit_card</i>
                        <p>Metodos de pagos</p>
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
                    <a class="navbar-brand" href="#">Pefil Entrenador</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
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
                                <li><a href="">Inicio</a></li>
                                <li><a href="<?=base_url('dashboard/logout');?>">Cerrar Seccion</a></li>
                            </ul>
                        </li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <p class="hidden-lg hidden-md">Profile</p>
                        </a>
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
                                <h4 class="title">Datos Personal</h4>
                                <p class="category">Datos del perfil cliente</p>
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
                                                    <label class="control-label text-center"><i class="col-sm-12 material-icons prefix">add_a_photo</i>Imagen Opcional</label>
                                                    <input type="file" class="col-sm-9 form-control" name="file" id="file">
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
                                                <label class="control-label"><i class="material-icons prefix">monetization_on</i> Fondo A Favor <i class="material-icons prefix">monetization_on</i>  </label>
                                                <br>
                                                <input type="text" id="fondo_cliente" name="fondo_cliente"  disabled class="form-control" value="su fondo es: ">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">account_circle</i> Nombre Completo</label>
                                                <br>
                                                <br>
                                                <br>
                                                <input id="nombre" placeholder="nombre completo" name="nombre" type="text" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">insert_invitation</i>Edad</label>
                                                <br>
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
                                                <br>
                                                <input type="number" placeholder="3043651232" id="telefono" name="telefono" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">info</i>Sexo</label>
                                                <br>
                                                <br>
                                                <br>
                                                <select class="form-control" name="sexo" id="sexo" required></select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating" >
                                                <label class="control-label"><i class="material-icons prefix">location_city</i>Departamento</label>
                                                <br>
                                                <br>
                                                <br>
                                                <select class="form-control" name="departamento" id="id_departamento" required></select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">location_city</i>Ciudad</label>
                                                <br>
                                                <br>
                                                <br>
                                                <select class="form-control" name="ciudad" id="id_ciudad" required></select>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">directions_walk</i>Direccion</label>
                                                <br>
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

                                    <form id="form_solicitud" class="form_solicitud" method="post" style="display: none;">
                                       <input type="hidden" id="id_entrenador_s" name="id_entrenador_s" required>
                                    <div class="col-md-12">
                                        <div class="w3-card-4">
                                            <header class="w3-container w3-light-grey">
                                                <h3>Elegir entrenador</h3>
                                            </header>
                                            <div class="w3-container">
                                                <select class="form-control" id="entreandores_info">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="w3-card-4">
                                            <header class="w3-container w3-light-grey">
                                                <h2>Disponibilidad</h2>
                                            </header>
                                            <div class="w3-container">
                                                <div id="dias_disponible"><h5>Dias disponible</h5></div>
                                                <div id="mes_disponible"><h5>Mes disponibler</h5></div>
                                                <div id="horario_disponible"><h5>Horario disponibler</h5></div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w3-card-4">
                                            <header class="w3-container w3-light-grey">
                                                <h3>Entrenador</h3>
                                            </header>
                                             <img src="https://www.w3schools.com/w3css/img_avatar3.png" id="image_entrenador"  style="width: 150px; height: 150px;">
                                            <div id="name_entrenador"><h6>Nombre entrenador</h6></div>
                                            <div id="edad_entrenador"><h6>Edad entrenador</h6></div>
                                            <div id="celular_entrenador"><h6>Celular entrenador</h6></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w3-card-4">
                                            <header class="w3-container w3-light-grey">
                                                <h2>Saldo Disponible</h2>
                                            </header>
                                            <div class="w3-container">
                                                <div id="fondo_disponible"><h5>Fondo disponible</h5></div>
                                                <div id="Saldo_disponible"><h5>Saldo Pago</h5></div>
                                                <div id="Estado_disponible"><h5>Estado de cuenta</h5></div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                        <div class="w3-container">
                                                <input type="submit" class="w3-button w3-block w3-dark-grey" value="Solicitar Entrenador">
                                        </div>
                                   </form>

                                    <div id="solicitud1" style="display: none;">
                                        <div class="bg-warning">&nbsp;</div>
                                        <div class="bg-warning text-center"><label class="text-center" style="color: #000000">Su solicitud de entrenador esta ciendo procesado</label></div>
                                        <div class="bg-warning">&nbsp;</div>
                                    </div>

                                    <div id="solicitud2" style="display: none;">
                                        <div class="bg-success">&nbsp;</div>
                                        <div class="bg-success text-center"><label  class="text-center" style="color: #000000">Su entrenador pronto se comunicara con usted</label></div>
                                        <div class="bg-success">&nbsp;</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="content" id="planes">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center">
                        <div class="card">
                            <div class="card-header" data-background-color="fp">
                                <h4 class="title">Tabla de precios fitpersonal</h4>
                                <p class="category">Planes Fitpersonal</p>
                            </div>
                            <div class="card-content">



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pago_activo" style="display: block;">
        <div class="content" id="fondos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="text-center card-header" data-background-color="fp">
                                <h4 class="title">Confirmacion de pago</h4>
                                <p class="category">Complete el formulario para activar tus token</p>
                            </div>
                            <div class="card-content">

                                <form id="form_fondo" class="jsform_fondo" method="post" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="text-center"> <img class="center-block" src="<?=base_url("/img/FITPERSONAL.png");?>" style="width: 200px;" alt="Logo Sportlife" title="Logo Sportlife"></label>
                                            <br>
                                            <label class="text-center"> <img class="center-block img-responsive img-circle" src="https://i1.wp.com/www.starblueshop.com/imagenes_GA/bancolombia-efecty.png?w=640" style="position: relative; left: 300px; width: 200px;"  title="Logo Sportlife"></label>
                                            <input type="text" class="form-control" disabled value="FitPersonal Tu entrenador en casa">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label col-md-12" style="font-style: italic; font-size: 18px !important;">Informacion de pago</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <label class="control-label">Seleccione Recibo de pago</label>
                                                    <input id="file" name="file" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">account_circle</i> Nombre Completo</label>
                                                <br>
                                                <br>
                                                <input id="nombre_pago" placeholder="nombre completo con el cual consigno" name="nombre_pago" type="text" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">account_circle</i>Cedula</label>
                                                <br>
                                                <br>
                                                <input type="number" placeholder="1063969825" id="cedula_pago" name="cedula_pago" class="form-control" required >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">phone</i>Telefono</label>
                                                <br>
                                                <br>
                                                <input type="number" placeholder="3043651232" id="telefono_pago" name="telefono_pago" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit"  class="btn btn-primary pull-right"  value="Guardar Datos">
                                    <div class="clearfix"></div>
                                </form>


                                <div id="status1" style="display: none;">
                                    <div class="bg-warning">&nbsp;</div>
                                    <div class="bg-warning text-center"><label class="text-center" style="color: #000000">Su estado de pago se encuentra en espera</label></div>
                                    <div class="bg-warning">&nbsp;</div>
                                </div>

                                <div id="status2" style="display: none;">
                                    <div class="bg-success">&nbsp;</div>
                                    <div class="bg-success text-center"><label  class="text-center" style="color: #000000">Su estado de pago fue completado, cuando su plan se agote volvera a ver la opcion de completar pago</label></div>
                                    <div class="bg-success">&nbsp;</div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>

        <div class="content" id="pagos">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center">
                        <div class="card">
                            <div class="card-header" data-background-color="fp">
                                <h4 class="title">Metodos de pagos</h4>
                                <p class="category">Metodos de pagos para fitpersonal</p>
                            </div>
                            <div class="card-content">

                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="text-center"> <img class="center-block" src="http://revistacorrientes.com/wp-content/uploads/2015/04/logoBANCOLOMBIA-620x197.png" style="width: 300px;" alt="Logo Sportlife" title="Logo Sportlife"></label>
                                        <input type="text" class="form-control" disabled value="Datos de pago BANCOLOMBIA">
                                        <input type="text" class="form-control" disabled value="Nombre: CARLOS ANDRES CASTILLA GARCIA">
                                        <input type="text" class="form-control" disabled value="Numero de cuenta: 951-538355-10">
                                        <input type="text" class="form-control" disabled value="Numerero celular: 3043651232">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="text-center"> <img class="center-block" src="https://cdn.shopify.com/s/files/1/1464/8678/files/efecty.png?v=1479058788" style="width: 200px;" alt="Logo Sportlife" title="Logo Sportlife"></label>
                                        <input type="text" class="form-control" disabled value="Datos de pago EFECTY">
                                        <input type="text" class="form-control" disabled value="Nombre: CARLOS ANDRES CASTILLA GARCIA">
                                        <input type="text" class="form-control" disabled value="Cedula: 1063969856">
                                        <input type="text" class="form-control" disabled value="Numerero celular: 3043651232">

                                    </div>
                                </div>
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