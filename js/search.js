$(document).ready(function () {
    var res = new Array(); $.ajax({ url: "http://www.simi-api.com/ApiSimiweb/response/v2/departamento/", type: "GET", beforeSend: function (xhr) { xhr.setRequestHeader("Authorization", "Basic " + btoa("Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893")); }, dataType: "html", success: function (data) { var datos = data.trim(); if (datos.localeCompare('"Sin resultados"') == 0) { res += "No hay Inmuebles destacados"; } else { var informacion = JSON.parse(data); for (var i = 0; i < informacion.length; i++) { $.ajax({ url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/" + informacion[i].id + "", type: "GET", beforeSend: function (xhr) { xhr.setRequestHeader("Authorization", "Basic " + btoa("Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893")); }, dataType: "json", success: function (data) { var resultado = ''; var informacion = (data); for (var i = 0; i < informacion.length; i++) { resultado += '<option value="' + informacion[i].id + '">' + informacion[i].nombre + "</option>"; } $(".ciudad").append(resultado); } }); } } } }); $(".ciudad").change(function () {
        var res_ciudad = $(".ciudad option:selected").val(); console.log(res_ciudad)
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/zonas/idCiudad/" + res_ciudad + "", type: "GET", beforeSend: function (xhr) { xhr.setRequestHeader("Authorization", "Basic " + btoa("Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893")); }, dataType: "json", success: function (data) {
                var resultado = '<option class="bs-title-option"  value="0">Zona</option>'; var informacion = data; console.log("http://www.simi-api.com/ApiSimiweb/response/v2/zonas/idCiudad/" + res_ciudad + "")
                for (var i = 0; i < informacion.length; i++) { resultado += '<option value="' + informacion[i].id + '">' + informacion[i].nombre + "</option>"; } $(".zona").append(""); $(".zona").html(resultado);
            }
        });
    });
    $.ajax({ url: "http://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/", type: "GET", beforeSend: function (xhr) { xhr.setRequestHeader("Authorization", "Basic " + btoa("Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893")); }, dataType: "json", success: function (data) { var resultado = '<option class="bs-title-option" value="0">Tipo de Inmueble</option>'; var informacion = (data); for (var i = 0; i < informacion.length; i++) { resultado += '<option value="' + informacion[i].idTipoInm + '">' + informacion[i].Nombre + "</option>"; } $(".inmueble").html(resultado); } }); $.ajax({ url: "http://www.simi-api.com/ApiSimiweb/response/gestion/", type: "GET", beforeSend: function (xhr) { xhr.setRequestHeader("Authorization", "Basic " + btoa("Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893")); }, dataType: "json", success: function (data) { var resultado = '<option class="bs-title-option" value="0">Operacion</option>'; for (var i = 0; i < data.length; i++) { resultado += '<option value="' + data[i].idGestion + '">' + data[i].Nombre + "</option>"; } $(".operacion").html(resultado); } });
    $(".operacion").change(function () {
        var operacion = $(".operacion option:selected").val();
        if (operacion == 1) {
            $("#price-range").noUiSlider({ range: { 'min': [500000], 'max': [90000000] }, start: [500000, 90000000] }, true);
        }
        else if (operacion == 5) {
            $("#price-range").noUiSlider({
                range: { 'min': [150000000], 'max': [9000000000] }, start: [150000000, 9000000000]
            }, true);
        } else if (operacion == 2) {
            $("#price-range").noUiSlider({ range: { 'min': [500000], 'max': [9000000000] }, start: [500000, 9000000000] }, true);
        }
    });
    var cuidad, inmueble, operacion, zona;
    $(".search-1").click(function () {
        zona = $(".zona option:selected").val();
        inmueble = $(".inmueble option:selected").val();
        ciudad = $(".ciudad option:selected").val();
        operacion = $(".operacion option:selected").val();
        var code = $(".codeInm").val();
        var precio = $('input[name=min_price]').val().replace('$', '');
        var precio1 = $('input[name=max_price]').val().replace('$', '');
        if (code !== "") {
            window.location.href = 'detalle-inmueble.php?dt=893-' + code + '';
        } else {
            window.location.href = 'inmueble.php?gs=' + operacion + '&&ti=' + inmueble + '&&ci=' + ciudad + '&&zo=' + zona + '&&pre=' + precio + '&&pre1=' + precio1 + '';
        }
    });
});