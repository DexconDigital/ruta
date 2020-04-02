$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        var j = 0;
        for (var indice in data) {
            result += '<li class="col-md-4 col-xs-6">'+
            '<div class="b-inner">'+
            '<img width="270" height="288" src="http://rutainmobiliaria.co/ruta-noticias/admin/' + data[j].imagen + '" alt="' + data[j].descripcion + '" class="img-responsive wp-post-image" alt="" />'+
            '<div class="b-details">'+
            '<div class="bottom-sec">'+
            '<span><i class="fa fa-calendar-alt"></i> ' + data[j].fecha + '</span>'+
            '<a class="font-montserrat" href="detalle-noticia.php?codigo=' + data[j].id + '">' + data[j].titulo + '</a>'+
            '<hr>'+
            '<p>' + data[j].descripcion + '</p>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</li>';

            j++;
            if (j > 2) {
                break;
            }
        }


        $("#ulti-noticias").append(result);


    },
    error: function (data) {
    }
});
$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        for (var j in data) {
            result += '<div class=" col-md-4 col-sm-4 col-xs-12">'+
            '<div class="b-inner">'+
            '<img width="867" height="430" src="http://rutainmobiliaria.co/ruta-noticias/admin/' + data[j].imagen + '"  class="img-responsive wp-post-image" alt="" /> <div class="b-details">'+									
            '<div class="bottom-sec" style="margin-top: -28px;"> <span><i class="fa fa-calendar-alt"></i>' + data[j].fecha + '</span></div>'+
            '</div>'+
            '</div>'+
            '<h6><a class="font-montserrat" href="detalle-noticia.php?codigo=' + data[j].id + '">' + data[j].titulo + '</a></h6>'+
            '<p>' + data[j].descripcion + '</p>'+
            '</div>';


        }
        $("#notices-info").append(result);


    },
    error: function (data) {
    }
});

