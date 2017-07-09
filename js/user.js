$(document).ready(function () {
    if($("imgSalida").val() != null){
        $("#file").prop('required',true);
    }
    else{
        $("#file").prop('required',false);
    }

    $("#sexo").html('<option value="Hombre">Hombre</option><option value="Mujer">Mujer</option>');
    window.setInterval("estado_confirmacion()", 1000);
    window.setInterval("solicitud()",1000);
})


$(document).ready(function(){
$(function() {
    $('#file').change(function(e) {
        addImage(e);
    });

    function addImage(e){
        var file = e.target.files[0],
            imageType = /image.*/;

        if (!file.type.match(imageType))
            return;

        var reader = new FileReader();
        reader.onload = fileOnload;
        reader.readAsDataURL(file);
    }

    function fileOnload(e) {
        var result=e.target.result;
        var file = $("#file").val();
        $('#imgSalida').attr("src",result);
    }
});


jQuery.each(jQuery('textarea[data-autoresize]'), function() {
    var offset = this.offsetHeight - this.clientHeight;
    var resizeTextarea = function(el) {
        jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
    };
    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
});
});



$(document).ready(function(){
    var url = "";
    var tipo = "";
    $('#imgSalida').attr('src', '').empty();
    $('form.jsform').on('submit', function(form){
        form.preventDefault();
        if($("#usuario_date").val()=== "Entrenador"){
            if($("#id_trainer").val().length>0){
                var url = "dashboard/Editar_trainer";
                var titulo = "Editar";
            }
            else{
                var url = "dashboard/Guardar_trainer";
                var titulo = "Guardar";
            }
        }
        else if($("#usuario_date").val() === "Usuario") {
            if ($("#id_cliente").val().length > 0) {
                var url = "dashboard/Editar_cliente";
                var titulo = "Editar";
            } else {
                var url = "dashboard/Guardar_cliente";
                var titulo = "Guardar";
            }
        }

        var formData = new FormData($(this)[0]);
        swal({
            title: titulo,
            text: "Desea "+titulo+" sus  datos?",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#08dd79',
            cancelButtonColor: '#dd3c00',
            confirmButtonText: 'Si',
            cancelButtonText: "No"
        }).then(function () {
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if(data != ""){
                        swal("Mensaje",data,"success");
                    }else{
                        swal("Mensaje",data,"success");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    swal("Mensaje","error","success");
                }
            });
        });

    });
});



$(document).ready(function(){
    $('form.form_solicitud').on('submit', function(form){
        form.preventDefault();

        if($("#id_entrenador_s").val().length<1){
            swal("Mensaje","Seleccione un entrenador","warning");
        }
        else{
            var formData = new FormData($(this)[0]);
            swal({
                title: "Mensaje!",
                text: "Desea Solicitar este entrenador?",
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#08dd79',
                cancelButtonColor: '#dd3c00',
                confirmButtonText: 'Si',
                cancelButtonText: "No"
            }).then(function () {
                $.ajax({
                    url: "dashboard/form_solicitud",
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if(data != ""){
                            swal("Mensaje",data,"success");
                        }else{
                            swal("Mensaje",data,"success");
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        swal("Mensaje","error","success");
                    }
                });
            });

        }
    });
});



$(document).ready(function(){

    $('form.jsform_fondo').on('submit', function(form){
        form.preventDefault();
        var formData = new FormData($(this)[0]);
        swal({
            title: "Cuidado",
            text: "Si aceptas guardar los datos no podra editarlos luego",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#08dd79',
            cancelButtonColor: '#dd3c00',
            confirmButtonText: 'Guardar',
            cancelButtonText: "Cancelar"
        }).then(function () {
            $.ajax({
                url: "dashboard/inser_confirmacion_de_pago",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if(data != ""){
                        swal("Mensaje",data,"success");

                    }else{
                        swal("Mensaje",data,"success");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    swal("Mensaje","error","success");
                }
            });
        });

    });
});


$(document).ready(function(){

    console.log($("#usuario_date").val())
    var url = "";
    var tipo = "";
    if($("#usuario_date").val()=="Entrenador"){
        url =  "dashboard/datos_entrenador";
        tipo = "Entrenador";
    }
    if($("#usuario_date").val()== "Usuario"){
        url =  "dashboard/datos_cliente";
        tipo = "Cliente";
    }

    var n = 0;
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: url,
        success: function(data) {
            for (var i in data) {
                localStorage.setItem("nombre", data[i].nombre);
                if(data[i].rango > 0) {
                    if (data[i].rango.length > 0) {
                        $("#Es_name").append("<span style='color: #008fb3;'>" + data[i].account + "</span>");
                        $("#Es_soy").append("<span style='color: #008fb3;'>" + data[i].email + "</span>");
                        if (data[i].rango === "1") {
                            $("#estado").click(function () {
                                swal("Rango", "Moderador", "success")
                            });
                            if (n == 0) {
                                $("#Es").append("<span style='color: #008fb3;'>Moderador</span>");
                                n++;
                            }
                            else if (data[i].rango === "2") {
                                $("#estado").click(function () {
                                    swal("Rango", "Administrador", "success")
                                });
                                if (n == 0) {
                                    $("#Es").append("<span style='color: #008fb3;'>Administrador</span>");
                                }
                            }
                        }
                    }
                }
                 if(tipo == "Entrenador"){
                    window.setInterval("datos()", 1000);
                    if(data[i].img === "No"){
                        $('#imagen').attr("src", 'images/No.jpg');
                        $('#imgSalida').attr("src",  'images/No.jpg');
                        $("#file").attr("src",  'images/No.jpg');
                    }
                    else{
                        $('#imagen').attr("src", 'uploads/trainer/' + data[i].img);
                        $('#imgSalida').attr("src", 'uploads/trainer/' + data[i].img);
                        $("#file").attr("src", 'uploads/trainer/' + data[i].img);
                    }
                    $("#nombre").val(data[i].nombre);
                    $("#Es_name").append("<span style='color: #008fb3;'>"+data[i].nombre+"</span>");
                    $("#Es_soy").append("<span style='color: #008fb3;'>"+data[i].info+"</span>");
                    $("#cedula").val(data[i].cedula);
                    $("#estado_civil").val(data[i].estado_civil);
                    $("#telefono").val(data[i].telefono);
                    $("#email").val(data[i].email);
                    $("#direccion").val(data[i].direccion);
                    $("#fecha_nacimiento").val(data[i].fecha_nacimiento);
                    $("#estudio").val(data[i].estudio);
                    $("#titulo").val(data[i].titulo);
                    $("#titulo_deportivo").val(data[i].titulo_deportivo);
                    $("#horario_disponible").val(data[i].horario_disponible);
                    $("#dia_disponible").val(data[i].dia_disponible);
                    $("#empresa1").val(data[i].empresa1);
                    $("#cargo1").val(data[i].cargo1);
                    $("#tel1").val(data[i].tel1);
                    $("#empresa2").val(data[i].empresa2);
                    $("#cargo2").val(data[i].cargo2);
                    $("#tel2").val(data[i].tel2);
                    $("#empresa3").val(data[i].empresa3);
                    $("#cargo3").val(data[i].cargo3);
                    $("#tel3").val(data[i].tel3);
                    $("#empresa4").val(data[i].empresa4);
                    $("#cargo4").val(data[i].cargo4);
                    $("#tel4").val(data[i].tel4);
                    $("#empresa5").val(data[i].empresa5);
                    $("#cargo5").val(data[i].cargo5);
                    $("#tel5").val(data[i].tel5);
                    $("#empresa6").val(data[i].empresa6);
                    $("#cargo6").val(data[i].cargo6);
                    $("#tel6").val(data[i].tel6);
                    $("#info").val(data[i].info);
                    $("#ciu").append(data[i].ciudad);
                    $("#dep").append(data[i].departamento);
                    $("#id_trainer").val(data[i].id_trainer);
                     $("#id_departamento").append('<option class="active" value='+data[i].departamento+'>'+data[i].departamento+'</option>');
                     $("#id_ciudad").append('<option class="active" value='+data[i].ciudad+'>'+data[i].ciudad+'</option>');
                    if ($("#id_trainer").val().length > 0) {
                        $("#GE").val("Editar Datos");
                    }
                    else {
                        $("#GE").val("Guardar Datos");
                    }

                }
                 if(tipo == "Cliente"){

                     if(data[i].img === "No"){
                         $('#imagen').attr("src", 'images/No.jpg');
                         $('#imgSalida').attr("src",  'images/No.jpg');
                         $("#file").attr("src",  'images/No.jpg');
                     }
                     else{
                         $('#imagen').attr("src", 'uploads/cliente/' + data[i].img);
                         $('#imgSalida').attr("src", 'uploads/cliente/' + data[i].img);
                         $("#file").attr("src", 'uploads/cliente/' + data[i].img);
                     }

                    $("#nombre").val(data[i].nombre);
                    $("#telefono").val(data[i].telefono);
                    $("#sexo").val(data[i].sexo);
                    $("#direccion").val(data[i].direccion);
                    $("#edad").val(data[i].edad);
                    $("#id_departamento").append('<option class="active" value='+data[i].departamento+'>'+data[i].departamento+'</option>');
                    $("#id_ciudad").append('<option class="active" value='+data[i].ciudad+'>'+data[i].ciudad+'</option>');
                    $("#sexo").append('<option class="active" value='+data[i].sexo+'>'+data[i].sexo+'</option>');

                    $("#id_cliente").val(data[i].id_cliente);
                    if ($("#id_cliente").val().length > 0) {
                        $("#GE").val("Editar Datos");
                    }
                    else {
                        $("#GE").val("Guardar Datos");
                    }

                }

            }
        }
    });
});

function datos() {
    var url = "";
    if($("#usuario_date").val()=="Entrenador"){
        url =  "dashboard/datos_entrenador";
    }
    else{
        url =  "dashboard/datos_cliente";
    }

    $.ajax({
            type: "POST",
            dataType: "JSON",
            url: url,
            success: function(data) {
                for (var i in data) {
                    if (data[i].status == 1) {
                        $("#Es").empty();
                        $("#Es").append("<span style='color: #0eaeff;'>Sin Revisar</span>");
                        $("#estado").click(function () {
                            $("#estado").val(swal("Estado Entrenador", "Sin Revisar", "question"));
                        });
                    }
                    else if (data[i].status == 2) {
                        $("#Es").empty();
                        $("#Es").append("<span style='color: #ffc000;'>En Revision</span>");
                        $("#estado").click(function () {
                            $("#estado").val(swal("Estado Entrenador", "En Revisar", "warning"));
                        });
                    }
                    else if (data[i].status == 3) {
                        $("#Es").empty();
                        $("#Es").append("<span style='color: #29ff10;'>Aceptado</span>");
                        $("#estado").click(function () {
                            $("#estado").val(swal("Estado Entrenador", "Aceptado", "success"));
                        });
                    }
                    else {
                        $("#Es").empty();
                        $("#Es").append("<span style='color: #ff0003;'>Negado</span>");
                        $("#estado").click(function () {
                            swal("Estado Entrenador", "Negado", "error")
                        });
                    }
                }
            }
        }
    );
}


function estado_confirmacion() {
    $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "dashboard/estado_confirmacion",
            success: function(data) {
                for (var i in data) {
                    if(data[i].status == 0 ||  data[i].status == null){
                        $("#status1").css("display", "none");
                        $("#status2").css("display", "none");
                        $("#form_fondo").css("display", "block");
                    }
                    if(data[i].status == 1){
                        $("#form_fondo").css("display", "none");
                        $("#status2").css("display", "none");
                        $("#status1").css("display", "block");
                    }
                    if(data[i].status == 2){
                        $("#form_fondo").css("display", "none");
                        $("#status1").css("display", "none");
                        $("#status2").css("display", "block");
                    }
                }
            }
        }
    );
}



$(document).ready(function () {

    $('.nav li a').click(function(e) {
        $('.nav li').removeClass('active');
        var $parent = $(this).parent();
        if (!$parent.hasClass('active')) {
            $parent.addClass('active');
        }
        // e.preventDefault();
    });
});


$(document).ready(function () {
    var trainer = "";
    var status = "";
    var estado = "";
    var estado1 = "";
    var clas = "";
    var negar = "";
    var clas1 = "";

        $.ajax({
            type: "POST",
            dataType: "JSON",
            data:{
                id: "1"
            },
            url: "dashboard/Mostrar_trainer",
            success: function(data) {
                for (var i in data) {
                if(data[i].borrar == 0){
                    if(data[i].status == 1){
                        status = "";
                        estado = "";
                        estado1 = "Contratar entrenador"
                        clas = "btn btn-primary btn-round";
                        clas1 = "";
                        negar = "";
                    }
                    else if(data[i].status == 2){
                        status = "";
                        estado = "";
                        estado1 = "Contratar entrenador"
                        clas = "btn btn-primary btn-round";
                        clas1 = "btn btn-danger btn-round";
                        negar = "Negar Contracto";
                    }
                    else if(data[i].status == 3){
                        status = "btn btn-success  btn-round";
                        estado = "Aceptado,  desea cancelar contracto";
                        estado1 = ""
                        clas = "";
                        clas1 = "";
                        negar = "";
                    }
                    else if(data[i].status  == 0){
                        status = "";
                        estado = "";
                        clas1 = "btn-round btn btn-deafault";
                        negar = "Estado del contracto Negado";
                        estado1 = "Contratar entrenador"
                        clas = "btn btn-primary btn-round";

                    }
                    trainer = '<div class="col-md-4"> ' +
                        '<div class="card hovercard"> ' +
                        '<div class="cardheader"> </div> ' +
                        '<div class="avatar"> <img alt="" src="uploads/trainer/' + data[i].img + '"> </div> ' +
                        '<div class="info"> <div class="title"> ' +
                        '<a target="_blank" href="" style="color: rgba(106,106,106,0.8);">' + data[i].nombre + '</a></div> ' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Celular: ' + data[i].telefono + '</div> ' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Correo: ' + data[i].email + '</div> ' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Horario Disponible: ' + data[i].horario_disponible + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Estado civil: ' + data[i].estado_civil + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Horario Disponible: ' + data[i].horario_disponible + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Dias Disponible: ' + data[i].dia_disponible + ' </div>'+
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Ciudad: ' + data[i].ciudad + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Departamento: ' + data[i].departamento + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Estudio: ' + data[i].estudio + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Titulos: ' + data[i].titulo + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Titulo Deportivo: ' + data[i].titulo_deportivo + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Empresa ' + data[i].empresa1 + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">cargo   ' + data[i].cargo1 + '</div></div> ' +
                        '<a href="#" id="estado_entrenador"  onclick="negar(' + data[i].id + ')" class="' + status + '">'+estado+'</a><a id="estado1" class="'+clas+'" onclick="contractar(' + data[i].id + ')">'+estado1+'</a><a href="#" onclick="Borrar(' + data[i].id + ')" id="Borrar" class="'+clas1+'">'+negar+'</a></div>';
                    $("#entrenador").append(trainer)
                 }
                }
            }

        });
});



function Borrar(id) {
    swal({
        title: 'Mensaje',
        text: "Esta Seguro que desea Eliminar el entrenador!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No!'
    }).then(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: {
                id: id
            },
            url: "dashboard/borrar",
            success: function (data) {
                console.log(data);
                if(data===1) {
                    window.location.href = "";
                }
            }
        })
    })

}


function contractar(id) {
    swal({
        title: 'Mensaje',
        text: "Esta Seguro que desea contratar este entrenador!?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No!'
    }).then(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: {
                id: id
            },
            url: "dashboard/contratar",
            success: function (data) {
            console.log(data);
                if(data===1) {
                    window.location.href = "";
                }
            }
        })

    })
}

function negar(id) {
    swal({
        title: 'Mensaje',
        text: "Esta Seguro que desea Negar el contracto al entrenador?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'No!'
    }).then(function () {
        $.ajax({
            type: "POST",
            dataType: "JSON",
            data: {
                id: id
            },
            url: "dashboard/negar",
            success: function (data) {
                if(data===1) {
                    window.location.href = "";
                }
            }
        })
    })

}


$(document).ready(function () {
    var form = "";
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

function format(input) {
    return input.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{3})$/, '$1.$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
}

$(document).ready(function() {
    $.get('dashboard/departamento',function(dato,status){
        $('#id_departamento').append(dato);
    });
    $("#id_departamento").on({
        change: function() {
            $.post('dashboard/ciudad',{
                idc:$('#id_departamento').val()
            },function(dato, status){
                $('#id_ciudad').html(dato);
            });
        }
    });
});


$(document).ready(function() {
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data:{
            id: "1"
        },
        url: "f/Mostrar_trainer",
        success: function(data) {
            for (var i in data) {
                if(data[i].status == 3){
                    $("#entreandores_info").append('<option value="'+data[i].id+'">'+data[i].nombre+'</option>');
                }
            }
        }
    });
});


$(document).ready(function() {
    var t = "";
    $("#entreandores_info").on({
        change: function() {
            $.ajax({
                type: "POST",
                dataType: "JSON",
                data:{
                    id: "1"
                },
                url: "f/Mostrar_trainer",
                success: function(data) {
                    for (var i in data) {
                        if(data[i].id===$("#entreandores_info").val()){
                        $("#image_entrenador").attr("src", 'uploads/trainer/' + data[i].img);
                        $("#name_entrenador").empty();
                        $("#name_entrenador").append('<h5 style="color: orangered;">Nombre: '+data[i].nombre+'</h5>');
                        $("#dias_disponible").empty();
                        $("#dias_disponible").append('<h5 style="color: orangered;">Dias: '+data[i].dia_disponible+'</h5>');
                        $("#mes_disponible").empty();
                        $("#mes_disponible").append('<h5 style="color: orangered;"> Mes: '+mes_disponible()+'<h6>');
                        $("#horario_disponible").empty();
                        $("#horario_disponible").append('<h5 style="color: orangered;"> Horario: '+data[i].horario_disponible+'</h5>');
                        $("#edad_entrenador").empty();
                        $("#edad_entrenador").append('<h5 style="color: orangered;">Edad: '+calculateAge(data[i].fecha_nacimiento)+'</h5>');
                        $("#celular_entrenador").empty();
                        $("#celular_entrenador").append('<h5 style="color: orangered;">Celular: '+data[i].telefono+'</h5>');
                        $("#fondo_disponible").empty();
                        $("#fondo_disponible").append('<h5 style="color: orangered;">Fondo Disponible: $'+format(localStorage.getItem("fondo"))+' Pesos</h5>');
                        $("#Saldo_disponible").empty();
                        $("#Saldo_disponible").append('<h5 style="color: orangered;">Primer saldo: $'+format(localStorage.getItem("efectivo"))+' Pesos</h5>');
                        $("#Estado_disponible").empty();
                        $("#Estado_disponible").append('<h5 style="color: orangered;">Estado de cuenta: Disponible</h5>');
                        $("#id_entrenador_s").empty();
                        $("#id_entrenador_s").val(data[i].id);
                        }
                    }
                }
            });
        }



    });
});


$(document).ready(function() {
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "dashboard/fondos",
        success: function(data) {
            for (var i in data) {
                localStorage.setItem("id", data[i].id);
                localStorage.setItem("id_account", data[i].id_account);
                localStorage.setItem("fondo", data[i].fondo);
                localStorage.setItem("medio_pago", data[i].medio_pago);
                localStorage.setItem("efectivo", data[i].Efectivo);
            }
        }
    });
});


function solicitud() {
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "dashboard/ver_solicitud_entrenador",
        success: function(data) {
                for (var i in data) {
                    if (data[i].status == 1) {
                        $("#solicitud1").css("display", "block");
                        $("#form_solicitud").css("display", "none");
                        $("#solicitud2").css("display", "none");

                    }
                    else if (data[i].status == 2) {
                        $("#solicitud2").css("display", "block");
                        $("#form_solicitud").css("display", "none");
                        $("#solicitud1").css("display", "none");
                    }
                    else {
                        $("#form_solicitud").css("display", "block");
                        $("#solicitud2").css("display", "none");
                        $("#solicitud1").css("display", "none");
                    }
                }
        }
    });
}

function mes_disponible() {
    var month = new Array();
    month[0] = "Enero";
    month[1] = "Febrero";
    month[2] = "Marzo";
    month[3] = "Abril";
    month[4] = "Mayo";
    month[5] = "Junio";
    month[6] = "Julio";
    month[7] = "Agosto";
    month[8] = "Septiembre";
    month[9] = "Octubre";
    month[10] = "Noviembre";
    month[11] = "Diciembre";

    var d = new Date();
    var n = month[d.getMonth()];
    return n;
}


    function calculateAge(birthday) {
        var birthday_arr = birthday.split("-");
        var birthday_date = new Date(birthday_arr[0], birthday_arr[1] - 1, birthday_arr[2]);
        var ageDifMs = Date.now() - birthday_date.getTime();
        var ageDate = new Date(ageDifMs);
        return Math.abs(ageDate.getUTCFullYear() - 1970);
    }

