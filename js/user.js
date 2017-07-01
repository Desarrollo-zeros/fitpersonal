

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

    $('#imgSalida').attr('src', '').empty();
    $('form.jsform').on('submit', function(form){
        form.preventDefault();
        if($("#id_trainer").val().length>0){
            var url = "dashboard/Editar";
            var titulo = "Editar";
        }
        else{
            var url = "dashboard/Guardar";
            var titulo = "Guardar";
            var status = "1";
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
var n = 0;
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "dashboard/datos",
        success: function(data) {
            for (var i in data) {
                if(data[i].rango != null) {
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
                else{
                    window.setInterval("datos()", 1000);
                    $('#imagen').attr("src", '/../uploads/' + data[i].img);
                    $('#imgSalida').attr("src", '/../uploads/' + data[i].img);
                    $("#file").attr("src", '/../uploads/' + data[i].img);
                    $("#nombre").val(data[i].nombre);
                    $("#Es_name").append("<span style='color: #008fb3;'>"+data[i].nombre+"</span>");
                    $("#Es_soy").append("<span style='color: #008fb3;'>"+data[i].info+"</span>");
                    $("#cedula").val(data[i].cedula);
                    $("#estado_civil").val(data[i].estado_civil);
                    $("#telefono").val(data[i].telefono);
                    $("#email").val(data[i].email);
                    $("#ciudad").val(data[i].ciudad);
                    $("#departamento").val(data[i].departamento);
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

                    $("#id_trainer").val(data[i].id_trainer);
                    if ($("#id_trainer").val().length > 0) {
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
    var n = 0;
    $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "dashboard/datos",
            success: function(data){
                for(var i in data) {
                    if(data[i].rango === null){
                        if (data[i].status === "1") {
                            $("#Es").empty();
                            $("#Es").append("<span style='color: #0eaeff;'>Sin Revisar</span>");
                            $("#estado").click(function () {
                                $("#estado").val(swal("Estado Entrenador", "Sin Revisar", "question"));
                            });
                        }
                        else if (data[i].status === "2") {
                            $("#Es").empty();
                            $("#Es").append("<span style='color: #ffc000;'>En Revision</span>");
                            $("#estado").click(function () {
                                $("#estado").val(swal("Estado Entrenador", "En Revisar", "warning"));
                            });
                        }
                        else if (data[i].status === "3") {
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
                    else{

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
    var status = "si";
    var hj = "no";
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data:{
            id: "1"
        },
        url: "dashboard/Mostrar_trainer",
        success: function(data) {
            for (var i in data) {
                    trainer = '<div class="col-md-4"> ' +
                        '<div class="card hovercard"> ' +
                        '<div class="cardheader"> </div> ' +
                        '<div class="avatar"> <img alt="" src="../uploads/' + data[i].img + '"> </div> ' +
                        '<div class="info"> <div class="title"> ' +
                        '<a target="_blank" href="" style="color: rgba(106,106,106,0.8);">' + data[i].nombre + '</a></div> ' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Celular: ' + data[i].telefono + '</div> ' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Correo: ' + data[i].email + '</div> ' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Horario Disponible: ' + data[i].horario_disponible + '</div>' +
                        '<div class="desc" style="color: rgba(106,106,106,0.8);">Dias Disponible: ' + data[i].dia_disponible + '</div></div> ' +
                        '<a href="#" id="estado_entrenador"  onclick="estado('+data[i].status+')" class="btn btn-success btn-round">Estado</a><a href="#" id="HJ" class="btn btn-info btn-round" onclick="HJ('+data[i].id+')">Ver Hoja de vida</a></div>';
                    $("#entrenador").append(trainer);
            }
        }
    });
});

function estado(id) {
       alert(id);

}

function HJ(id) {

        alert(id);

}

