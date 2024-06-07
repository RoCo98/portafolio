<?php 
//--------------- Paso 1 leer la informacion
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$tel = $_POST["tel"];
	$comentarios = $_POST["comentarios"];


//--------------- Paso 2 definir los encabenzados del correo

//	$toaddress = "$CmbPara, mail@dominio.com";
	$toaddress = "tu mail";				
	$headers  = "MIME-Version: 1.0\r\n";
//	$headers .= "Content-Type: text/html\r\n";
	$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n";
	$headers .= "X-Mailer: Microsoft Office Outlook, Build 11.0.5510\r\n";

	$headers .= "X-MimeOLE: Produced By Microsoft MimeOLE V6.00.2800.1441\r\n";
	
	$headers .= "From: $nombre < $correo >\n";
//	$headers .= "Return-path: < info@excellence.com.mx >\n";

//--------------- Paso 3 Diseñar el correo

	$mailcontent = "
<table width=\"436\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td colspan=\"2\" bgcolor=\"#999999\"><font color=\&quot;#666666\&quot; face=\&quot;Georgia, Times New Roman, Times, serif\"><strong>Registro de usuario</strong></font></td>
  </tr>
  <tr>
    <td height=\"5\" colspan=\"2\" bgcolor=\"#0033FF\"></td>
  </tr>
  <tr>
    <td width=131>Nombre:</td>
    <td width=149>$nombre</td>
  </tr>
  <tr>
    <td>Correo:</td>
    <td>$correo</td>
  </tr>
  <tr>
    <td>Tel:</td>
    <td>$tel</td>
  </tr>
  <tr>
    <td>Comentarios:</td>
    <td>$comentarios</td>
  </tr>
  <tr>
    <td height=\"5\" colspan=\"2\" bgcolor=\"#333333\"></td>
  </tr>
</table>	
	";

//--------------- Paso 4 Defino el asunto

	$subject = "Reservación OnLine";

//--------------- Paso 5 Enviar correo

	mail ($toaddress, $subject, $mailcontent, $headers );
	
//--------------- Paso 6 Lo envio a la pagina de agradecimiento

	header("Location: index.html");
	exit;		

?>