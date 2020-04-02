setTimeout(function () {
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/10/limit/1',
        type: 'GET',
        cache: true,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893'));
        },
        'dataType': "json",
        success: function (data) {
console.log(data)

            var res = "";
            if (data == "Sin resultados") {
                res += '<h1  style="color:red">Inmuebles destacados </h1>';
                $("#propiedades").append(res);
                return;

            } else {
                var j = 0;
                for (var i = 0; i < data.infoAdd.totalInmuebles; i++) {
                    res += '<li class="col-md-4 col-sm-6 ">' +
                        '<section>' +
                        '<div class="img">';
                    if (data[i].foto1 != "") {
                        res += '<img width="370" height="230" src="' + data[i].foto1 + '" class="img-responsive wp-post-image" alt="" sizes="(max-width: 370px) 100vw, 370px" style="height: 250px;"/>';

                    } else {
                        res += '<img width="370" height="230" src="images/no_image.png" class="img-responsive wp-post-image" alt="" sizes="(max-width: 370px) 100vw, 370px" style="height: 250px;" />';
                    }
                    res += '<div class="over-proper"> <a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" ' +
                        'class="btn font-montserrat">' + data[i].Gestion + '</a>' +
                        '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" ' +
                        'class="btn font-montserrat">' + data[i].Tipo_Inmueble + '</a>' +
                        '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '" ' +
                        'class="btn font-montserrat">Ver Más</a> </div>' +
                        '</div>' +
                        '<ul class="home-in">' +
                        '</ul>' +
                        '<div class="detail-sec"> <a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"  class="font-montserrat" style="width: 45%;">' + data[i].Codigo_Inmueble + '</a>';
                    if (data[i].Gestion == "Arriendo") {
                        res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$' + data[i].Canon + '</a>';
                    } else if (data[i].Gestion == "Arriendo/Venta") {

                        res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$' + data[i].Venta + '"<br>"' + data[i].Canon + '</a>';
                    } else {
                        res += '<a href="detalle-inmueble.php?dt=' + data[i].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$' + data[i].Venta + '</a>';
                    }
                    res += '<span class="locate"><i class="fa fa-map-marker-alt">' + data[i].Barrio + '</i> </span>' +
                        '<p><i class="fa fa-bed"></i>  ' + data[i].Alcobas + '</p>' +
                        '<p><i class="fa fa-bath"></i>  ' + data[i].banios + '</p>' +
                        '<p><i class="fa fa-compress"></i>  ' + data[i].AreaConstruida + ' mts<sup>2</sup></p>' +
                        '</div>' +
                        '</section>' +
                        '</li>';


                    j++;
                    if (j > 5) {
                        break;
                    }
                }
            }
            $("#propiedades").append(res);

        }

    });
}, 500);
