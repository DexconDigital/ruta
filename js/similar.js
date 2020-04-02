setTimeout(function () {
    $.ajax({
        url: 'http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/100/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0',
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
            var nInmb = 0;
            var j = 0;

            for (var i = 0; i < data.totalInmuebles; i++) {
                if (data[i].Codigo_Inmueble != localStorage.codigo) {
                    if (data[i].Tipo_Inmueble == localStorage.gestion) {
                        res += '<li>' +
                            '<div class="img-post"> ';
                        if (data[i].foto1 != "") {
                            res += '<img width="150" height="150" src="' + data[i].foto1 + '" class="img-responsive wp-post-image"alt="" sizes="(max-width: 150px) 100vw, 150px" style="height: 59px;"/> </div>'


                        } else {
                            res += '<img width="150" height="150" src="images/no-image.png" class="img-responsive wp-post-image"alt="" sizes="(max-width: 150px) 100vw, 150px" style="height: 59px;" /> </div>';


                        }
                        res += '<div class="text-post"> <a href="index.html">' + data[i].Codigo_Inmueble + '</a> <span></span> </div>' +
                            '</li>';

                        j++;
                    } else {
                        nInmb++;
                    }
                    if (j > 2) {
                        break;
                    }
                }
            }


            if (j == 0) {

                res += '<div class="media feature-item">' +
                    '<div class="title-widget">No hay Propiedades Similares</div>' +
                    '</div>';
                $(".similarListing").append(res);
                return;
            }
            $(".similarListing").append(res);

        }

    });
});

