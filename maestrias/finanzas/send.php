<?		
$MailTo="umvirtual@um.edu.mx";
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contenido='
Nombre: '.utf8_decode($nombre).' 
E-mail: '.utf8_decode($email).'
';
mail($MailTo, "$Subject $nombre está solicitando una beca en la Maestría en administración con acentuación en finanzas", $contenido, "From: $email");
header('Location: gracias.html');
?>