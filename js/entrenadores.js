$(document).ready(function () {
    var trainer = "";
    $.ajax({
        type: "POST",
        dataType: "JSON",
        data:{
            id: "1"
        },
        url: "http://localhost/Fitpersonal/f/Mostrar_trainer",
        success: function(data) {
            for (var i in data) {
                if(data[i].status==="3") {
                    trainer = '<div class="col-lg-3 col-sm-6"> ' +
                        '<div class="card hovercard"> ' +
                        '<div class="cardheader"> </div> ' +
                        '<div class="avatar"> <img alt="" src="../Fitpersonal/uploads/' + data[i].img + '"> </div> ' +
                        '<div class="info"> <div class="title"> ' +
                        '<a target="_blank" href="" style="color: rgb(106,106,106);">' + data[i].nombre + '</a></div> ' +
                        '<div class="desc" style="color: rgb(106,106,106);">Celular: ' + data[i].telefono + '</div> ' +
                        '<div class="desc" style="color: rgb(106,106,106);">Correo: ' + data[i].email + '</div> ' +
                        '<div class="desc" style="color: rgb(106,106,106);">Horario Disponible: ' + data[i].horario_disponible + '</div>' +
                        '<div class="desc" style="color: rgb(106,106,106);">Dias Disponible: ' + data[i].dia_disponible + '</div></div> ' +
                        ' </div>';
                    $("#entrenador").append(trainer);
                }
                else{
                    swal("Mensaje","No hay Entrenadores Disponibles","warning")
                }
            }
        }
    });
});

