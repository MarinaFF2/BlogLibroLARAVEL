//$(function () {
//    if ($("#filtrarA").value() !== null) {
//        var valor = $("#filtrarA").value();
//        $("#filtrarA").click(filtro(valor));
//    }
//    if ($("#filtrarB").value() !== null) {
//        var valor = $("#filtrarB").value();
//        $("#filtrarB").click(filtro(valor));
//    }
//    if ($("#filtrarC").value() !== null) {
//        var valor = $("#filtrarC").value();
//        $("#filtrarC").click(filtro(valor));
//    }
//    if ($("#filtrarE").value() !== null) {
//        var valor = $("#filtrarE").value();
//        $("#filtrarE").click(filtro(valor));
//    }
//    if ($("#filtrarD").value() !== null) {
//        var valor = $("#filtrarD").value();
//        $("#filtrarD").click(filtro(valor));
//    }
//    if ($("#filtrarF").value() !== null) {
//        var valor = $("#filtrarF").value();
//        $("#filtrarF").click(filtro(valor));
//    }
//    if ($("#filtrarG").value() !== null) {
//        var valor = $("#filtrarG").value();
//        $("#filtrarG").click(filtro(valor));
//    }
//    if ($("#filtrarH").value() !== null) {
//        var valor = $("#filtrarH").value();
//        $("#filtrarH").click(filtro(valor));
//    }
//    if ($("#filtrarI").value() !== null) {
//        var valor = $("#filtrarI").value();
//        $("#filtrarI").click(filtro(valor));
//    }
//    if ($("#filtrarJ").value() !== null) {
//        var valor = $("#filtrarJ").value();
//        $("#filtrarJ").click(filtro(valor));
//    }
//    if ($("#filtrarK").value() !== null) {
//        var valor = $("#filtrarK").value();
//        $("#filtrarK").click(filtro(valor));
//    }
//    if ($("#filtrarL").value() !== null) {
//        var valor = $("#filtrarL").value();
//        $("#filtrarL").click(filtro(valor));
//    }
//    if ($("#filtrarM").value() !== null) {
//        var valor = $("#filtrarM").value();
//        $("#filtrarM").click(filtro(valor));
//    }
//    if ($("#filtrarN").value() !== null) {
//        var valor = $("#filtrarN").value();
//        $("#filtrarN").click(filtro(valor));
//    }
//    if ($("#filtrarÑ").value() !== null) {
//        var valor = $("#filtrarÑ").value();
//        $("#filtrarÑ").click(filtro(valor));
//    }
//    if ($("#filtrarO").value() !== null) {
//        var valor = $("#filtrarO").value();
//        $("#filtrarO").click(filtro(valor));
//    }
//    if ($("#filtrarP").value() !== null) {
//        var valor = $("#filtrarP").value();
//        $("#filtrarP").click(filtro(valor));
//    }
//    if ($("#filtrarQ").value() !== null) {
//        var valor = $("#filtrarQ").value();
//        $("#filtrarQ").click(filtro(valor));
//    }
//    if ($("#filtrarR").value() !== null) {
//        var valor = $("#filtrarR").value();
//        $("#filtrarR").click(filtro(valor));
//    }
//    if ($("#filtrarS").value() !== null) {
//        var valor = $("#filtrarS").value();
//        $("#filtrarS").click(filtro(valor));
//    }
//    if ($("#filtrarT").value() !== null) {
//        var valor = $("#filtrarT").value();
//        $("#filtrarT").click(filtro(valor));
//    }
//    if ($("#filtrarU").value() !== null) {
//        var valor = $("#filtrarU").value();
//        $("#filtrarU").click(filtro(valor));
//    }
//    if ($("#filtrarV").value() !== null) {
//        var valor = $("#filtrarV").value();
//        $("#filtrarV").click(filtro(valor));
//    }
//    if ($("#filtrarW").value() !== null) {
//        var valor = $("#filtrarW").value();
//        $("#filtrarW").click(filtro(valor));
//    }
//    if ($("#filtrarX").value() !== null) {
//        var valor = $("#filtrarX").value();
//        $("#filtrarX").click(filtro(valor));
//    }
//    if ($("#filtrarY").value() !== null) {
//        var valor = $("#filtrarY").value();
//        $("#filtrarY").click(filtro(valor));
//    }
//    if ($("#filtrarZ").value() !== null) {
//        var valor = $("#filtrarZ").value();
//        $("#filtrarZ").click(filtro(valor));
//    }
//});

//function filtro(valor) {
//    alert(valor);
//    $.ajax({
//        data: {"letra": valor}, //datos json recogidos del formulario formu
//        type: "POST", // método de envío de datos
//        url: "filtroS", //código a ejecutar en el servidor
//        success: function (res) {
//            if (res !== null) {
//                practica = JSON.parse(res);
//                dniResponsable = practica.idResponsable;
//                idEmpresa = practica.idEmpresa;
//                dniAlumno = practica.dniAlumno;
//                $("#idMod").val(practica.idPractica);
//                $("#codProyectoMod").val(practica.codProyecto);
//                $("#gastoMod").val(practica.gasto);
//                $("#aptoMod").val(practica.apto);
//                $("#fechaInicioMod").val(practica.fechaInicio);
//                $("#fechaFinMod").val(practica.fechaFin);
//                listarEmpresas(idEmpresa);
//                listarResponsables(dniResponsable, idEmpresa);
//                listarAlumnos(dniAlumno);
//            }
//        },
//        statusCode: {
//            404: function () {
//                alert('web not found');
//            }
//        },
//        error: function (x, xs, xt) {
//            window.open(JSON.stringify(x));
//            //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
//        }
//    });
//}
function modal(){
    
    $.ajax({
        data: {"letra": valor}, //datos json recogidos del formulario formu
        type: "POST", // método de envío de datos
        url: "filtroS", //código a ejecutar en el servidor
        success: function (res) {
            if (res !== null) {
                practica = JSON.parse(res);
                dniResponsable = practica.idResponsable;
                idEmpresa = practica.idEmpresa;
                dniAlumno = practica.dniAlumno;
                $("#idMod").val(practica.idPractica);
                $("#codProyectoMod").val(practica.codProyecto);
                $("#gastoMod").val(practica.gasto);
                $("#aptoMod").val(practica.apto);
                $("#fechaInicioMod").val(practica.fechaInicio);
                $("#fechaFinMod").val(practica.fechaFin);
                listarEmpresas(idEmpresa);
                listarResponsables(dniResponsable, idEmpresa);
                listarAlumnos(dniAlumno);
            }
        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },
        error: function (x, xs, xt) {
            window.open(JSON.stringify(x));
            //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
        }
    });
}