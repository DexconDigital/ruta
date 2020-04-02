function paginator(actual) {

    let position = 0;
    if (position != 0) {
        position = localStorage.getItem("total");
    }
    var count = localStorage.getItem("count");

    if (actual == 'ant') {
        count--;
        localStorage.setItem("count", count);
        imprimir(count);
    }
    if (actual == 'sig') {
        count++;
        localStorage.setItem("count", count);
        imprimir(count);
    }

}

function imprimir(count) {
    localStorage.setItem("count", count);
    if (localStorage.getItem("gestion") == 0 && localStorage.getItem("ciudad") == 0 && localStorage.getItem("tipo") == 0 && localStorage.getItem("zona") == 0 && localStorage.getItem("precio") == 0 && localStorage.getItem("precio1") == 5000000000) {
        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893'));
            },
            'dataType': "json",
            success: function (data) {

                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#inmb").append(res);
                    return;

                } else {


                    localStorage.setItem("total", data.datosGrales.fin - 1);

                    var res = " ";
                    for (var pos = 0; pos < data.Inmuebles.length; pos++) {
                        res += '<li id="post-109" class="col-sm-4 post-109 sh_property type-sh_property status-publish has-post-thumbnail hentry property_category-new-properties property_city-calinfornia property_agent-anderia-jus">'+
                        '<section>'+
                        '<div class="img">';
                        if (data.Inmuebles[pos].foto1 != "") {
                            res += '<img width="370" height="230" src="' + data.Inmuebles[pos].foto1 + '"  class="img-responsive wp-post-image" alt="" sizes="(max-width: 370px) 100vw, 370px" style="height: 250px;"/>';
                        } else {
                            res += '<img width="370" height="230" src="images/no_image.png" class="img-responsive wp-post-image" alt="" sizes="(max-width: 370px) 100vw, 370px" style="height: 250px;"/>';
                        }
                        res += '<div class="over-proper"> <a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="btn font-montserrat">' + data.Inmuebles[pos].Tipo_Inmueble + ''+
                        '</a>'+
                      
                        '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="btn font-montserrat">Ver más'+
                        '</a> </div>'+
                        '</div>'+
                        '<ul class="home-in">'+
                        '<li><span><i class="fa fa-bath"></i>' + data.Inmuebles[pos].banios + '</span></li>'+
                        '<li><span><i class="fa fa-bed"></i> ' + data.Inmuebles[pos].Alcobas + '</span></li>'+
                        '<li><span><i class="fa fa-compress"></i>' + data.Inmuebles[pos].AreaConstruida + ' mts<sup>2</sup></span></li>'+
                        '</ul>'+
                        '<div class="detail-sec"> <a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat" style="width: 45%;">' + data.Inmuebles[pos].Codigo_Inmueble + '</a>';
                            if (data.Inmuebles[pos].Gestion == "Arriendo") {
                                res +=  '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$'+data.Inmuebles[pos].Canon+'</a>';
                                }else if(data.Inmuebles[pos].Gestion == "Arriendo/Venta"){
                                    
                                res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$'+data.Inmuebles[pos].Venta+'"<br>"'+data.Inmuebles[pos].Canon+'</a>';
                                }else{
                                res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$'+data.Inmuebles[pos].Venta+'</a>';
                                }
                        res+='<span class="locate"><i class="fa fa-map-marker-alt">' + data.Inmuebles[pos].Barrio + '</i> </span>'+
                        '</div>'+
                        '</section>'+
                        '</li>';
                    }

                    $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                }
                $("#inmb").html(res)

            }

        });
        validar()
    } else {

        $.ajax({
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/' + localStorage.getItem("ciudad") + '/zona/' + localStorage.getItem("zona") + '/barrio/0/tipoInm/' + localStorage.getItem("tipo") + '/tipOper/' + localStorage.getItem("gestion") + '/areamin/0/areamax/0/valmin/' + localStorage.getItem("precio") + '/valmax/' + localStorage.getItem("precio1") + '/campo/0/order/0/banios/0/alcobas/0/garajes/0',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:OsORyK5XrE9cqZAGvZi8dOMXkcSX8lyKn7Ef42Ex-893'));
            },
            'dataType': "json",
            success: function (data) {
                console.log(data);
                console.log(localStorage.getItem("precio"));
                console.log(localStorage.getItem("precio1"));
                console.log('http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + count + '/total/12/departamento/0/ciudad/' + localStorage.getItem("ciudad") + '/zona/' + localStorage.getItem("zona") + '/barrio/0/tipoInm/' + localStorage.getItem("tipo") + '/tipOper/' + localStorage.getItem("gestion") + '/areamin/0/areamax/0/valmin/' + localStorage.getItem("precio") + '/valmax/' + localStorage.getItem("precio1") + '/campo/0/order/0/banios/0/alcobas/0/garajes/0');
                var res = " ";
                if (data == "Sin resultados") {
                    res += '<div class="alert alert-danger"><h4>No hay Inmuebles </h4></div>';
                    $("#inmb").append(res);
                    $("#siguiente").css("display", "none");
                    $("#anterior").css("display", "none");
                    return;

                } else {


                    localStorage.setItem("total", data.datosGrales.fin);

                    for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
                        if (data.Inmuebles[pos].Codigo_Inmueble != undefined) {
                            res += '<li id="post-109" class="col-sm-4 post-109 sh_property type-sh_property status-publish has-post-thumbnail hentry property_category-new-properties property_city-calinfornia property_agent-anderia-jus">'+
                            '<section>'+
                            '<div class="img">';
                            if (data.Inmuebles[pos].foto1 != "") {
                                res += '<img width="370" height="230" src="' + data.Inmuebles[pos].foto1 + '"  class="img-responsive wp-post-image" alt="" sizes="(max-width: 370px) 100vw, 370px" style="height: 250px;"/>';
                            } else {
                                res += '<img width="370" height="230" src="images/no_image.png" class="img-responsive wp-post-image" alt="" sizes="(max-width: 370px) 100vw, 370px" style="height: 250px;"/>';
                            }
                            res += '<div class="over-proper"> <a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="btn font-montserrat">' + data.Inmuebles[pos].Tipo_Inmueble + ''+
                            '</a>'+
                          
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="btn font-montserrat">' + data.Inmuebles[pos].Gestion + ''+
                            '</a>'+
                            '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '" class="btn font-montserrat">Ver más'+
                            '</a> </div>'+
                            '</div>'+
                            '<ul class="home-in">'+
                            '<li><span><i class="fa fa-bath"></i>' + data.Inmuebles[pos].banios + '</span></li>'+
                            '<li><span><i class="fa fa-bed"></i> ' + data.Inmuebles[pos].Alcobas + '</span></li>'+
                            '<li><span><i class="fa fa-compress"></i>' + data.Inmuebles[pos].AreaConstruida + ' mts<sup>2</sup></span></li>'+
                            '</ul>'+
                            '<div class="detail-sec"> <a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat" style="width: 45%;">' + data.Inmuebles[pos].Codigo_Inmueble + '</a>';
                            if (data.Inmuebles[pos].Gestion == "Arriendo") {
                                res +=  '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$'+data.Inmuebles[pos].Canon+'</a>';
                                }else if(data.Inmuebles[pos].Gestion == "Arriendo/Venta"){
                                    
                                res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$'+data.Inmuebles[pos].Venta+'"<br>"'+data.Inmuebles[pos].Canon+'</a>';
                                }else{
                                res += '<a href="detalle-inmueble.php?dt=' + data.Inmuebles[pos].Codigo_Inmueble + '"  class="font-montserrat"  style="width: 45%;text-align:right">$'+data.Inmuebles[pos].Venta+'</a>';
                                }
                            res+='<span class="locate"><i class="fa fa-map-marker-alt">' + data.Inmuebles[pos].Barrio + '</i> </span>'+
                            '</div>'+
                            '</section>'+
                            '</li>';
                        }
                    }
                    if (localStorage.getItem("total") == 0) {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de 1")
                    } else {
                        $(".pagina").html("pagina " + data.datosGrales.pagina_actual + " de " + localStorage.getItem("total"))
                    }
                    validar()
                }
                $("#inmb").html(res)

            }

        });
    
    }
}

function validar() {
    if (localStorage.getItem("total") == localStorage.getItem("count")) {
        $("#siguiente").css("display", "none");
    } else {
        $("#siguiente").css("display", "inline-flex");
    }

    if (localStorage.getItem("count") == 1) {
        $("#anterior").css("display", "none");
    } else {
        $("#anterior").css("display", "inline-flex");
    }
}

