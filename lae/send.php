<?php
//Datos
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$to = "allenzapien@um.edu.mx";
$from = "Allen Zapien <allenzapien@um.edu.mx>";
$subject = "$nombre está solicitando una beca en la Licenciatura en Administración 
de Empresas";

//Mensaje
$message = "
<html>
<head>
<title>$subject</title>
</head>
<body>
<table>
<tr>
<th>Nombre:</th>
<th>E-mail:</th>
</tr>
<tr>
<td>$nombre</td>
<td>$email</td>
</tr>
</table>
</body>
</html>
";

//Headers
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type:text/html;charset=UTF-8";
$headers[] = "From: $from";
$headers[] = "Bcc: $from";
$headers[] = "Reply-To: $nombre <$email>";


//Funciones
mail($to,$subject,$message,implode("\r\n", $headers));
echo"<script>window.location='gracias.html'</script>;"
?>