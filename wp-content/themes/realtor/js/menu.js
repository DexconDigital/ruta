(function ($) {
        "use strict";

        var menu = '<div class="container">' +
                '<div class="logo">' +
                '<a itemprop="url" href="index.php">' +
                '<img itemprop="logo" src="images/logo3.png">' +
                '</a>' +
                '</div>' +
                '<nav>' +
                '<ul class="ownmenu">' +
                '<li id="menu-item-279" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-279 dropdown">' +
                '<a href="index.php" data-toggle="dropdown" class="dropdown-toggle disabled" aria-haspopup="true">Inicio</a>' +
                '</li>' +
                '<li id="menu-item-325" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-325"><a href="quienes-somos.html">Quienes Somos</a></li>' +
                '<li id="menu-item-324" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-324"><a href="servicios.html">Servicios</a></li>' +
                '<li id="menu-item-312" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-312"><a href="consignar-inmueble.html">Consigna ' +
                'Tu Inmueble</a></li>' +
                '<li id="menu-item-326" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-326"><a href="inmueble.php">Inmuebles</a></li>' +
                '<li id="menu-item-313" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-313"><a href="clientes.html">Clientes</a></li>' +
                '<li id="menu-item-314" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-314 dropdown">' +
                '<a href="contactanos.html" data-toggle="dropdown" class="dropdown-toggle disabled" aria-haspopup="true">Contáctanos </a>' +
                '</li>' +
                '</ul>' +
                '<div class="sub-nav-co"> <a href="#."><i class="fa fa-search"></i></a> </div>' +
                '</nav>' +
                '</div>';

        $(".menu-ppal").html(menu);

        // Contenedor de datos de la inmobiliaria
        var header = 
                '<ul class="left-bar-side">' +
                '<li>' +
                '<a href="tel:0344484667" target="_blank"><p><i class="fa fa-phone"></i>4484667 ext. 501</p></a>' +
                '<span>|</span>' +
                '</li>' +
                '<li>' +
                '<a href="https://wa.me/573172734133" target="_blank"> <p><i class="fab fa-whatsapp"></i>317 273 41 33</p></a>' +
                '<span>|</span>' +
                '</li>' +
                '<li>' +
                '<a href="mailto:comercial@rutainmobiliaria.co" target="_blank" ><p><i class="fa fa-envelope"></i>comercial@rutainmobiliaria.co</p></a>' +
                '<span>|</span>' +
                '</li>' +
                '<li>' +
                '<a href="skype:Ruta Inmobiliaria S.A.?call" target="_blank"><p><i class="fab fa-skype"></i>Ruta Inmobiliaria S.A.</p></a>' +
                '<span>|</span>' +
                '</li>' +
                '</ul>' +
                '<ul class="right-bar-side social_icons">' +
                '<li> <a data-color="#3b5a9b" href="https://www.facebook.com/rutainmobiliariasa" title="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>' +
                '<li> <a data-color="#2baae1" href="https://www.instagram.com/ruta_inmobiliaria/" title="instagram" target="_blank"><i class="fab fa-instagram"></i> </a></li>' +
                '<li><a href="https://gateway2.tucompra.com.co/sites/rutainmobiliaria" target="_blank" style="color: #1c3d68;"><button class="boton-pse"><b>Pague Su Factura Aquí</b> <img src="wp-content/themes/realtor/images/pse.png" class="img-responsive"  /></button></a></li>' +
                '</ul>' ;

        $(".header-ppal").html(header);
        // fin de contenedor de datos de la inmobiliaria
        var footer = '<div class="container">' +
                '<div id="sh_subscribe_mail_list-2" class="footFeature widget_sh_subscribe_mail_list">' +
                '<div class="subcribe" style="background: transparent;">' +
                '</div>' +
                '</div>' +
                '<ul class="row">' +
                '<li id="text-2" class="col-md-3 col-sm-6 widget widget_text">' +
                '<h5>Quienes Somos</h5>' +
                '<div class="textwidget">' +
                '<hr>' +
                '<p>RUTA INMOBILIARIA S.A es una empresa con 4 años en el sector inmobiliario. Nos especializamos en arrendamientos, venta, avalúos y asesorías integrales en todo lo relacionado con propiedad raiz.</p>' +
                '<ul class="social_icons">' +
                '<li class="facebook"> <a href="https://www.facebook.com/rutainmobiliariasa" title="facebook" target="_blank"><i class="fab fa-facebook"></i> </a></li>' +
                '<li class="twitter"> <a href="https://twitter.com/RutaInmobiliar" title="twitter" target="_blank"><i class="fab fa-twitter"></i> </a></li>' +
                '</ul>' +
                '</div>' +
                '</li>' +
                '<li id="sh_twitter-3" class="col-md-6 col-sm-6 widget widget_sh_twitter">' +
                '<h5>Formulario de Contacto</h5>' +
                '<hr>' +

                '<div name="contact-form" action="" method="post" id="contact-form" class="validate-form" onsubmit="enviar()">' +
                '<ul class="row">' +
                '<li class="col-md-6 col-sm-4 ">' +
                '<label class="font-montserrat" style="color: #fff;">Nombre *</label> <input type="text" class="form-control" name="contact_name" id="nombre" placeholder="" >' +
                '</li>' +
                '<li class="col-md-6 col-sm-4 ">' +
                '<label class="font-montserrat" style="color: #fff;">E-mail * </label><input type="text" class="form-control" name="contact_email" id="email" placeholder=""  >' +
                '</li>' +
                '<li class="col-md-6 col-sm-4 ">' +
                '<label class="font-montserrat" style="color: #fff;">Mensaje  </label> <textarea class="form-control" name="contact_message" id="message" rows="5" placeholder="" ></textarea>' +
                '</li>' +
                '<li class="col-md-6 col-sm-4 ">' +
                '<label class="font-montserrat" style="color: #fff;">Telefono *</label> <input type="text" class="form-control form-control2 label-telefono" name="contact_company" id="telefono" placeholder="">' +
                '<button type="submit" value="submit" class="btn font-montserrat boton-footer" id="contactform" onclick="enviar()" >Enviar</button>' +
                '</li>' +
                '<li class="col-md-12">' +

                '</li>' +
                '</ul>' +
                '</div>' +

                '</li>' +
                '<li id="sh_contactinfo-2" class="col-md-3 col-sm-6 widget widget_sh_contactinfo">' +
                '<h5>Contáctanos</h5>' +
                '<hr>' +
                '<div class="loc-info">' +
                '<p><i class="fa fa-map-marker-alt"></i>Carrera 47 C # 76 D Sur 94, Local 2, Edificio 77 Towers</p>' +
                '<p style="margin-left: 26px;line-height: 0px;">Sabaneta- Antioquia</p>' +
                '<a href="tel:0344484667" target="_blank"><p><i class="fa fa-phone"></i>4484667 ext. 501</p></a>' +
                '<a href="https://wa.me/573176482160" target="_blank"> <p><i class="fab fa-whatsapp"></i>317 648 2160</p></a>' +
                '<a href="mailto:inmobiliaria@centrosur.co" target="_blank"><p><i class="fa fa-envelope"></i>inmobiliaria@centrosur.co</p></a>' +
                '</div>' +
                '</li>' +
                '</ul>' +
                '</div>';

        $(".footer-ppal").html(footer);


})
        (jQuery);




