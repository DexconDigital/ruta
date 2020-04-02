<?php

	//variables para los campos de texto
	$name = strip_tags($_POST['nombre']);
	$apellido = strip_tags($_POST['apellido']);
    $email = strip_tags($_POST['email']);
    $celular = strip_tags($_POST['celular']);
    $pais = strip_tags($_POST['pais']);
    $ciudad = strip_tags($_POST['ciudad']);
    $departamento = strip_tags($_POST['departamento']);
    $dudas = strip_tags($_POST['dudas']);

	$correoDestino = "administrativo@rutainmobiliaria.co";
	//asunto del correo
	$asunto = "Hoja de vida Pagina Web";

 	// -> mensaje en formato Multipart MIME
	$cabecera = "MIME-VERSION: 1.0\r\n";
	$cabecera .= "Content-type: multipart/mixed;";
	//$cabecera .="boundary='=P=A=L=A=B=R=A=Q=U=E=G=U=S=T=E=N='"
	$cabecera .="boundary=\"=C=T=E=C=\"\r\n";
	$cabecera .= "From: noreply@rutainmobiliaria.co";

	//Primera parte del cuerpo del mensaje
	$cuerpo = "--=C=T=E=C=\r\n";
	$cuerpo .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$cuerpo .= "\r\n"; // línea vacía
	$cuerpo .= "Correo enviado por: " . $name . " ". $apellido."<br>";
    $cuerpo .="Email : " . $email . "<br>";
    $cuerpo .="Telefono : " . $celular. "<br>";
    $cuerpo .="Pais : " . $pais . "<br>";
    $cuerpo .="Departamento : " . $departamento . "<br>";
    $cuerpo .="Ciudad : " . $ciudad. "<br>";
    $cuerpo .="Dudas y/o inquietudes : " . $dudas. "<br>";
	$cuerpo .= "\r\n";// línea vacía

    $cuerpo .= "--=C=T=E=C=--\r\n";
    
    $ok = mail($correoDestino, $asunto, $cuerpo, $cabecera);
    
	//Enviar el correo
	if(mail($correoDestino, $asunto, $cuerpo, $cabecera)){
		echo'<script type="text/javascript">
    alert("Correo Enviado");
    window.location.href="../consignar-inmueble.html";
    </script>';
	}else{
		echo "Error de envio";
	}

?>