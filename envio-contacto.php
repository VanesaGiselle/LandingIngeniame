<?php 

$nombre_us = $_POST ['nombre'];
$mail_us = $_POST ['mail'];
$telefono_us = $_POST ['telefono'];
$mensaje_us = $_POST ['mensaje'];

if(isset($_POST ['google'])){
	$google = "Si";
}else{
	$google = "No";
};

if(isset($_POST ['facebook'])){
	$facebook = "Si";
}else{
	$facebook = "No";
};

if(isset($_POST ['publicidad'])){
	$publicidad = "Si";
}else{
	$publicidad = "No";
};

if(isset($_POST ['recomendacion'])){
	$recomendacion = "Si";
}else{
	$recomendacion = "No";
};

/*
echo "$nombre_us <br/>";
echo "$mail_us <br/>";
echo "$telefono_us <br/>";
echo "$mensaje_us <br/>";
echo "$google <br/>";
echo "$facebook <br/>";
echo "$publicidad <br/>";
echo "$recomendacion <br/>";
*/

$destino = 'vanesa-kor@hotmail.com';
$asunto = 'Contacto desde mi sitio www.ingeniame.com';
$remitente = 'From: mail_us';

$mensaje = "Nombre:".$nombre_us."\r\n";
$mensaje .= "Mail:".$mail_us."\r\n";
$mensaje .= "Teléfono:".$telefono_us."\r\n";
$mensaje .= "Mensaje:".$mensaje_us."\r\n";
$mensaje .= "Google:".$google."\r\n";
$mensaje .= "Facebook:".$facebook."\r\n";
$mensaje .= "Publicidad:".$publicidad."\r\n";
$mensaje .= "Recomendación:".$recomedacion;

mail($destino, $asunto, $mensaje, $remitente);

header("location:index.php?r=ok");

?>