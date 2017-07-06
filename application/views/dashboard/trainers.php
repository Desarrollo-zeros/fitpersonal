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
                <img src="<?=base_url("/img/FITPERSONAL.png");?>" style="width: 200px;" alt="Logo Sportlife" title="Logo Sportlife">
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="material-icons">FP</i>
                        <p>Fipersonal</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="material-icons">person</i>
                        <p>Perfil del entrenador</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class="material-icons">supervisor_account</i>
                        <p>Alumnos</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class="material-icons">credit_card</i>
                        <p>Planes Para Entrenador</p>
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
                                <i class="material-icons">person</i>Entrenador
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">Inicio</a></li>
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

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" data-background-color="fp">
                                <h4 class="title">Datos Personal del Entrenador</h4>
                                <p class="category">Complete Su perfil para ser seleccionado</p>
                            </div>
                            <div class="card-content">
                                <form id="form" class="jsform" method="post">
                                    <input name="usuario_date" id="usuario_date"  type="hidden" value="Entrenador">
                                    <input name="id_trainer" id="id_trainer"  type="hidden" value="">
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
                                                <input id="nombre" name="nombre" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">perm_identity</i>Cedula De Ciudadania</label>
                                                <br>
                                                <br>
                                                <input type="number" id="cedula" name="cedula" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">accessibility</i> Estado Civil</label>
                                                <br>
                                                <br>
                                                <input type="text" id="estado_civil" name="estado_civil" class="form-control" required >
                                            </div>
                                        </div>
                                        <div class="nput-field col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label "> <i class="material-icons prefix">phone</i>Telefono o Celular</label>
                                                <br>
                                                <br>
                                                <input type="number" id="telefono" name="telefono" class="icon_telephone form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">email</i> Correo electronico</label>
                                                <br>
                                                <br>
                                                <input type="email" id="email" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
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
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><i class="material-icons prefix">insert_invitation</i>Fecha nacimiento</label>
                                                <br>
                                                <br>
                                                <input type="date" id="fecha_nacimiento"  placeholder="" name="fecha_nacimiento" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label col-md-12" style="font-style: italic; font-size: 18px !important;">ESTUDIOS REALIZADOS</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label"><i class="material-icons prefix">book</i>Estudio</label>
                                                    <select id="estudio" name="estudio" class="col-sm-12">
                                                        <option value="Bachiller">Bachiller</option>
                                                        <option value="Tecnico">Tecnico</option>
                                                        <option value="Tecnólogo">Tecnólogo</option>
                                                        <option value="Universitario">Universitario</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">class</i>Titulos Obtenidos</label>
                                                <div class="form-group label-floating">
                                                    <textarea data-autoresize placeholder=""  id="titulo" name="titulo"  class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">class</i>Titulos Entrenador personal</label>
                                                <div class="form-group label-floating">
                                                    <textarea data-autoresize placeholder="" id="titulo_deportivo" name="titulo_deportivo"  class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label col-md-12" style="font-style: italic; font-size: 18px !important;">Disponibilidad</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group Input fields label-floating">
                                                    <label class="control-label"><i class="material-icons prefix">alarm_on</i>Horario disponible</label>
                                                    <br>
                                                    <br>
                                                    <input id="horario_disponible" name="horario_disponible" placeholder="5:00PM - 10:00PM" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><i class="material-icons prefix">insert_invitation</i>Dias Disponibles</label>
                                                    <br>
                                                    <br>
                                                    <input id="dia_disponible" name="dia_disponible" placeholder="Minimo 4 dias Lunes, marte, viernes" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label col-md-12" style="font-style: italic; font-size: 18px !important;">Experiencia Laboral</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">description</i>Experiencia Laboral</label>
                                                <div class="form-group label-floating">
                                                    Empresa: <input id="empresa1" name="empresa1" placeholder="Nombre de la empresa" type="text" class="form-control" required>
                                                    Cargo:<input id="cargo1" name="cargo1" placeholder="Cargo" type="text" class="form-control" required>
                                                    Telefono<input id="tel1" name="tel1" placeholder="Telefono" type="number" class="form-control" required>
                                                   </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">description</i>Experiencia Laboral Opcional</label>
                                                <div class="form-group label-floating">
                                                    Empresa: <input id="empresa2" name="empresa2" placeholder="Nombre de la empresa" type="text" class="form-control">
                                                    Cargo:<input id="cargo2" name="cargo2" placeholder="Cargo" type="text" class="form-control">
                                                    Telefono:<input id="tel2" name="tel2" placeholder="Telefono" type="number" class="form-control">
                                                   </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">description</i>Experiencia Laboral Opcional</label>
                                                <div class="form-group label-floating">
                                                    Empresa: <input id="empresa3" name="empresa3" placeholder="Nombre de la empresa" type="text" class="form-control">
                                                    Cargo:<input id="cargo3" name="cargo3" placeholder="Cargo" type="text" class="form-control" >
                                                    Telefono:<input id="tel3" name="tel3" placeholder="Telefono" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label col-md-12" style="font-style: italic; font-size: 18px !important;">Referencias Personales</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">description</i>Referencia Personales</label>
                                                <div class="form-group label-floating">
                                                    Empresa: <input id="empresa4" name="empresa4" placeholder="Nombre de la empresa" type="text" class="form-control" required>
                                                    Cargo:<input id="cargo4" name="cargo4" placeholder="Cargo" type="text" class="form-control" required>
                                                    Telefono:<input id="tel4" name="tel4" placeholder="Telefono" type="number" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">description</i>Referencia Personal Opcional</label>
                                                <div class="form-group label-floating">
                                                    Empresa: <input id="empresa5" name="empresa5" placeholder="Nombre de la empresa" type="text" class="form-control">
                                                    Cargo:<input id="cargo5" name="cargo5" placeholder="Cargo" type="text" class="form-control">
                                                    Telefono:<input id="tel5" name="tel5" placeholder="Telefono" type="number" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">description</i>Referencia Personal Opcional</label>
                                                <div class="form-group label-floating">
                                                    Empresa: <input id="empresa6" name="empresa6" placeholder="Nombre de la empresa" type="text" class="form-control" >
                                                    Cargo:<input id="cargo6" name="cargo6" placeholder="Cargo" type="text" class="form-control">
                                                    Telefono:<input id="tel6" name="tel6"  placeholder="Telefono" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label"><i class="material-icons prefix">fingerprint</i>Quien Soy?</label>
                                                <div class="form-group label-floating">
                                                    <textarea rows="6" id="info" name="info" data-autoresize placeholder="Soy alguien responsable, bastante dinámico, con deseos de superación y mis metas están basadas en el logro de objetivos claros; aprendo rápido y cumplo de manera adecuada con puntualidad, honestidad y responsabilidad en las distintas actividades que realizo. Dispuesto a cumplir con las distintas funciones, obligaciones y normas laborales que tengan establecidas, me presento con gran entusiasmo a su empresa para formar parte del cumplimiento de metas planteadas en su misión." class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit"  id="GE" class="btn btn-primary pull-right" value="Guardar Datos">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="" >
                                    <img class="img-responsive center-block" id="imagen" style="width: 150px; height: 150px;">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="category text-gray">Estatus: <div id="Es"></div> </h5>

                                <h4 class="card-title">Nombre: <div id="Es_name"></div> </h4>
                                <p class="card-content">
                                    Quien soy: <div id="Es_soy"></div>
                                </p>
                                <a href="#" id="estado" class="btn btn-primary btn-round">Status</a>
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