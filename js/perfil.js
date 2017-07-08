


$(document).ready(function () {
    $("#login").click(function () {
        $("#login_modal").modal();
    });
});

$(function() {
    var msj = "";
    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#recuperar').click(function() {
        swal({
            title: 'Has olvidado tu contraseña?, ingresa tu correo electronico',
            input: 'email',
            type: 'question',
            inputPlaceholder: "Ingresa tu correo electronico",
            showCancelButton: true,
            confirmButtonText: 'Submit',
            showLoaderOnConfirm: true,
            preConfirm: function (email) {
                return new Promise(function (resolve, reject) {
                    setTimeout(function() {
                        $.ajax({
                                type: "POST",
                                url: "F/change_password",
                                data: 'email='+email,
                                success: function(data){
                                   if(data==="si"){
                                       resolve()
                                   }
                                   else{
                                       reject("por favor ingrese un correo existente")
                                   }
                                }
                            }
                        )
                    }, 2000)
                })
            },
            allowOutsideClick: false
        }).then(function (email) {
            swal({
                type: 'success',
                title: 'Recuperacion!',
                html: 'se ha enviado un codigo al siguiente correo:  ' + email
            })
        })
    });
    $('#codigo').click(function() {
        swal({
            title: 'Cambiar Contraseña',
            showCancelButton: true,
            confirmButtonText: 'Cambiar ',
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            html: '<div class="input-group">'+
            '<span class="input-group-addon" id="basic-addon3">mail@ejemplo.com</span>'+
            ' <input type="email" class="form-control" placeholder="correo eletronico" id="R_email" aria-describedby="basic-addon1"  pattern="^[a-zA-Z0-9.!#$%&\'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">'+
            '</div>'+'<br><div class="input-group">'+
            '<span class="input-group-addon" id="basic-addon1">Nueva Contraseña</span>'+
            '<input type="password" class="form-control" placeholder="Contraseña" id="R_p1"  aria-describedby="basic-addon1">'+
            '</div>'+'<br><div class="input-group">'+
            '<span class="input-group-addon" id="basic-addon1">Repita Contraseña</span>'+
            '<input type="password" class="form-control" id="R_p2"  placeholder="Contraseña" aria-describedby="basic-addon1">'+
            '</div>'+'<br><div class="input-group">'+
            '<span class="input-group-addon" id="basic-addon1">Codigo Del Correo</span>'+
            '<input type="text" class="form-control" id="R_c"  placeholder="Codigo enviado al correo" aria-describedby="basic-addon1">'+
            '</div>',
            preConfirm: function () {
                return new Promise(function (resolve, reject) {
                    var email1 = $("#R_email").val();
                    var pass1 =  $("#R_p1").val();
                    var pass2 = $("#R_p2").val();
                    var cod =  $("#R_c").val();

                    if(email1.indexOf('@', 0) == -1 ||email1.indexOf('.', 0) == -1){
                        reject("debes introducir un correo valido")
                        $('#R_email').focus()
                    }
                    else if(pass1 !== pass2 || pass1.length < 5){
                        reject("Minimo debe ser 5 digitos o ambas contraseñas debe ser iguales")
                        $('#R_p1').focus()
                    }
                    else if(cod.length<5){
                        reject("el campo codigo no puede estar vacio")
                        $('#R_c').focus()
                    }
                    else {
                        setTimeout(function () {
                            $.ajax({
                                type: "POST",
                                url: "F/buscar_email",
                                data: {
                                    "email": email1,
                                    "codigo": cod,
                                    "password": pass1
                                },
                                success: function (data) {
                                    if (data === "si") {
                                        resolve()
                                        console.log(data);
                                    }
                                    else {
                                        reject("por favor ingrese un correo o codigo valido")
                                    }

                                }
                            });
                        }, 2000)
                    }
                })
            },
            allowOutsideClick: false
        }).then(function (data) {
            swal({
                type: 'success',
                title: 'Recuperacion!',
                html: "Su contraseña ha sido restablecida"
            })
        })
    });

});


$(document).ready(function(){
    $('form.login-form').on('submit', function(form){
        form.preventDefault();
                $.post('F/login', $('form.login-form').serialize(), function(data){
                    if(data === "Su cuenta no esta activa"){
                        swal("Cuidado","Su cuenta existe pero a un no esta activa debes ir a tu correo eletronico y completar el registro","warning");
                    }
                    else if(data === "Usuario o Contraseña incorrecta"){
                        swal("Error",data,"error");
                    }
                    else{
                        if(data==="Cliente"){
                            window.location.href='dashboard';
                        }
                        else{
                            window.location.href='dashboard';
                        }

                    }
                });
    });
});



$(document).ready(function(){
    $('form.register-form').on('submit', function(form){
        form.preventDefault();
       var user =  $("#username1").val();
        if(user.length < 5){
            swal("Cuidado","El Usuario debe tener como mínimo 5 caracteres","warning");
        }
        else if($("#password1").val()!=$("#confirm-password").val() || $("#password1").val().length<5){
            swal("Cuidado","Debe ingresar mínimo 5 caracteres o las contraseñas no son iguales","warning");
        }
        else{
            swal({
                title: 'Registrar!',
                text: "Usuario "+$("#username1").val()+" desea usted registrarse como "+ $("#CE").val()+" ? ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00d636',
                cancelButtonColor: '#dd001c',
                confirmButtonText: 'Si, Registarme ahora!',
                cancelButtonText: "No"
            }).then(function () {
                $.post('F/registrar', $('form.register-form').serialize(), function(data){
                    if(data === ",registrado"){
                        swal("Registro!",""+$("#username1").val()+" Debes entrar al correo "+$("#email1").val()+" y completar el registro");
                        console.log(data);
                    }else{
                        var element = data.split(',');
                        $('div.jsError').html(element[0]);
                        $('div.jsError1').html(element[1]);
                        console.log(data);
                    }
                });
            });
        }
    });
});


function alerta() {
    swal('Registro completo', 'El registro se ha completado con exitos, ya puedes iniciar seccion en breve seras redireccionado', 'success');
    setTimeout("window.location.href='f?id=2';", 5000);
}

function login() {
    $("#login_modal").modal();
}

function noExiste() {
    swal("Ojo!","Este usuario no existe","error");
}

function cuidado() {
    swal("Ojo!","Este usuario ya esta activo","warning");
}
jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.menu ul').toggleClass('active');

        e.preventDefault();
    });
});


$(document).ready(function(){
    var inicio=0;
    $("#P1").click(function(){
        $("#entrenadores").empty();
        $("#Precios1").modal();
    });
    $("#P2").click(function(){
        $("#entrenadores").empty();
        $("#Precios2").modal();
    });
    $("#P3").click(function(){
        $("#entrenadores").empty();
        $("#Precios3").modal();
    });

});




$(document).ready(function () {
    var plan1 = "";
    var plan2 = "";
    var plan3 = "";
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "f/planes",
        success: function(data) {
            for (var i in data) {
               if(data[i].grupo == 1){
                   plan1 = '<p class="feature-text "> ' + data[i].tiempo + ' <i class="fa fa-money" aria-hidden="true"></i> $ '+format(data[i].valor)+' COP </p><hr>';
                   $("#plan1").append(plan1);
               }
               if(data[i].grupo == 2){
                   plan2 = '<p class="feature-text "> ' + data[i].tiempo + ' <i class="fa fa-money" aria-hidden="true"></i> $ '+format(data[i].valor)+' COP</p><hr>';
                   $("#plan2").append(plan2);
               }
                if(data[i].grupo == 3){
                    plan3 = '<p class="feature-text "> ' + data[i].tiempo + ' <i class="fa fa-money" aria-hidden="true"></i> $ '+format(data[i].valor)+' COP</p><hr>';
                    $("#plan3").append(plan3);
                }
            }
        }
    });
});

function format(input)
{
    return input.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{3})$/, '$1.$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
}

$(document).ready(function () {
    var trainer = "";
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data:{
            id: "1"
        },
        url: "f/Mostrar_trainer",
        success: function(data) {
            for (var i in data) {
                if(data[i].status==="3") {
                    trainer = '<div class="col-lg-3 col-sm-6"> ' +
                        '<div class="card hovercard"> ' +
                        '<div class="cardheader"> </div> ' +
                        '<div class="avatar"> <img alt="" src="uploads/trainer/' + data[i].img + '"> </div> ' +
                        '<div class="info"> <div class="title"> ' +
                        '<a target="_blank" href="" style="color: rgb(106,106,106);">' + data[i].nombre + '</a></div> ' +
                        '<div class="desc" style="color: rgb(106,106,106);">Celular: ' + data[i].telefono + '</div> ' +
                        '<div class="desc" style="color: rgb(106,106,106);">Correo: ' + data[i].email + '</div> ' +
                        '<div class="desc" style="color: rgb(106,106,106);">Horario Disponible: ' + data[i].horario_disponible + '</div>' +
                        '<div class="desc" style="color: rgb(106,106,106);">Dias Disponible: ' + data[i].dia_disponible + '</div></div> ' +
                        ' </div>';
                    $("#entrenadores").append(trainer);
                }
                else{

                }
            }
        }
    });
});

$(document).ready(function () {
    var con = 0;
    var noticias = "";
    var url = "";
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data:{
            id: "1"
        },
        url: "f/salud",
        success: function(data) {
            for (var i in data) {
                    url = '<li class="'+data[i].ac+'" data-target="#carousel-example-generic" data-slide-to="' + data[i].id + '"></li>';
                   noticias = '<div class="item '+data[i].ac+'"><ul> <li class="monial"><h1 class="condensed white">' + data[i].titulo + '</h1> <h1 class="condensed white"><span class="colored">' + data[i].titulo + '</span>' + data[i].text + '</h1><p class="light">Posteado por ' + data[i].admin + '</p></li></ul></div>';
                    $("#url").append(url);
                    $("#carusel").append(noticias);
                    con++;

            }
        }
    });
});

