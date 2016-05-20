<?php

//Variables
$to = "umvirtual@um.edu.mx";
$from = "Allen Zapien <allenzapien@um.edu.mx>";
$subject = "$nombre entró al recetario vegano";
$subjectUsr = "$nombre te hacemos llegar tu recetario vegano";
$toUsr = $email;
$anio = 2015;

//Mensaje para UM Virtual
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

//Mensaje para el usuario
$messageUsr ="
<html>
<head>
<title>$subjectUsr</title>
</head>
<body>
<style type='text/css'>
		*{
			margin:0;
			padding:0;
		}
		*{
			font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		}
		img{
			max-width:100%;
		}
		.collapse{
			margin:0;
			padding:0;
		}
		body{
			-webkit-font-smoothing:antialiased;
			-webkit-text-size-adjust:none;
			width:100%!important;
			height:100%;
		}
		a{
			color:#2BA6CB;
		}
		.btn{
			text-decoration:none;
			color:#FFF;
			background-color:#9abe2a;
			padding:10px 16px;
			font-weight:bold;
			margin-right:10px;
			text-align:center;
			cursor:pointer;
			display:inline-block;
		}
		.callout{
			background-color:#ECF8FF;
			margin:15px;
            display: block;
		}
		.callout a{
			font-weight:bold;
			color:#2BA6CB;
		}
		table.social{
			background-color:#ebebeb;
		}
		.social .soc-btn{
			padding:3px 7px;
			font-size:12px;
			margin-bottom:10px;
			text-decoration:none;
			color:#FFF;
			font-weight:bold;
			display:block;
			text-align:center;
		}
		a.fb{
			background-color:#3B5998!important;
		}
		a.tw{
			background-color:#1daced!important;
		}
		a.gp{
			background-color:#DB4A39!important;
		}
		a.ms{
			background-color:#000!important;
		}
		.sidebar .soc-btn{
			display:block;
			width:100%;
		}
		table.head-wrap{
			width:100%;
		}
		.header.container table td.logo{
			padding:15px;
		}
		.header.container table td.label{
			padding:15px;
			padding-left:0px;
		}
		table.body-wrap{
			width:100%;
		}
		table.footer-wrap{
			width:100%;
			clear:both!important;
		}
		.footer-wrap .container td.content p{
			border-top:1px solid rgb(215,215,215);
			padding-top:15px;
		}
		.footer-wrap .container td.content p{
			font-size:10px;
			font-weight:bold;
		}
		h1,h2,h3,h4,h5,h6{
			font-family:'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
			line-height:1.1;
			margin-bottom:15px;
			color:#000;
		}
		h1 small,h2 small,h3 small,h4 small,h5 small,h6 small{
			font-size:60%;
			color:#6f6f6f;
			line-height:0;
			text-transform:none;
		}
		h1{
			font-weight:200;
			font-size:44px;
		}
		h2{
			font-weight:200;
			font-size:37px;
		}
		h3{
			font-weight:500;
			font-size:27px;
		}
		h4{
			font-weight:500;
			font-size:23px;
		}
		h5{
			font-weight:900;
			font-size:17px;
		}
		h6{
			font-weight:900;
			font-size:14px;
			text-transform:uppercase;
			color:#444;
		}
		.collapse{
			margin:0!important;
		}
		p,ul{
			margin-bottom:10px;
			font-weight:normal;
			font-size:14px;
			line-height:1.6;
		}
		p.lead{
			font-size:17px;
		}
		p.last{
			margin-bottom:0px;
		}
		ul li{
			margin-left:5px;
			list-style-position:inside;
		}
		ul.sidebar{
			background:#ebebeb;
			display:block;
			list-style-type:none;
		}
		ul.sidebar li{
			display:block;
			margin:0;
		}
		ul.sidebar li a{
			text-decoration:none;
			color:#666;
			padding:10px 16px;
			margin-right:10px;
			cursor:pointer;
			border-bottom:1px solid #777777;
			border-top:1px solid #FFFFFF;
			display:block;
			margin:0;
		}
		ul.sidebar li a.last{
			border-bottom-width:0px;
		}
		ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p{
			margin-bottom:0!important;
		}
		.container{
			display:block!important;
			max-width:600px!important;
			margin:0 auto!important;
			clear:both!important;
		}
		.content{
			padding:15px;
			max-width:600px;
			margin:0 auto;
			display:block;
		}
		.content table{
			width:100%;
		}
		.column{
			width:300px;
			float:left;
		}
		.column.w30{
			width:30%;
		}
		.column.w10{
			width:10%;
		}
		.column.w60{
			width:60%;
		}
		.column tr td{
			padding:0 15px;
		}
		.column-wrap{
			padding:0!important;
			margin:0 auto;
			max-width:600px!important;
		}
		.column table{
			width:100%;
		}
		.social .column{
			width:270px;
			min-width:269px;
			float:left;
		}
		.clear{
			display:block;
			clear:both;
		}
	@media only screen and (max-width: 600px){
		a[class=btn]{
			display:block!important;
			margin-bottom:10px!important;
			background-image:none!important;
			margin-right:0!important;
		}

}	@media only screen and (max-width: 600px){
		img[class=experto]{
			width:140px!important;
			height:140px!important;
		}

}	@media only screen and (max-width: 600px){
		img[class=experto]{
			width:140px!important;
			height:140px!important;
		}

}	@media only screen and (max-width: 600px){
		div[class=column]{
			width:auto!important;
			float:none!important;
		}

}	@media only screen and (max-width: 600px){
		.column.w10{
			width:100%!important;
		}

}	@media only screen and (max-width: 600px){
		.column.w30{
			width:100%!important;
		}

}	@media only screen and (max-width: 600px){
		.column.w60{
			width:100%!important;
		}

}	@media only screen and (max-width: 600px){
		table.social div[class=column]{
			width:auto!important;
		}

}		*#templatePreheader{
			/*@editable*/background-color:#FAFAFA;
		}
	/*
	@tab Header
	@section preheader text
	@tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
	*/
		.preheaderContent div{
			/*@editable*/color:#505050;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:10px;
			/*@editable*/line-height:100%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section preheader link
	@tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
	*/
		.preheaderContent div a:link,.preheaderContent div a:visited{
			/*@editable*/color:#336699;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
		.preheaderContent div img{
			height:auto;
			max-width:600px;
		}
	/*
	@tab Header
	@section header style
	@tip Set the background color and border for your email's header area.
	@theme header
	*/
		#templateHeader{
			/*@editable*/background-color:#FFFFFF;
			/*@editable*/border-bottom:0;
		}
</style>
<!-- HEADER -->
<table class='head-wrap' bgcolor='#999999' style='widht:100%;' widht='100%'>
	<tr>
		<td></td>
		<td class='header container'>
			
				<div class='content'>
					<table bgcolor='#999999' style='widht:100%;' widht='100%'>
					<tr>
						<td><img src='https://gallery.mailchimp.com/458128645c72adf41ccbd28cd/images/e382a83d-f14b-4c0a-b81b-c1dceee81789.png'></td>
						<td align='right'><img src='https://gallery.mailchimp.com/458128645c72adf41ccbd28cd/images/5f8ca45f-f355-4999-b0d4-3c5669538d6a.png'></td>
					</tr>
				</table>
				</div>
				
		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class='body-wrap'>
	<tr>
		<td></td>
		<td class='container' bgcolor='#FFFFFF'>

			<div class='content'>
			<table>
				<tr>
					<td>
						<div mc:edit='header_txt'>
						<h3>Hola, $nombre</h3>
						<p class='lead'>Gracias por descargar el  recetario digital de Cocina Vegana, desde aquí puedes acceder al recetario en cualquier momento y compartirlo con quien quieras.
¿Sabias que en el tema de la alimentación no es suficiente cuidar las calorías? es necesario también cuidar la calidad de los nutrientes que consumimos. 
                       </p>
                       <a href='http://player.vimeo.com/video/143192866'><img src='http://umvirtual.org/recetario-vegano/images/video.png' alt='Video sobre la alimentación basada en plantas'></a>
                        </div>
						
                        <!-- Callout Panel -->
						<table bgcolor='#ecf8ff' style='background-color:#ecf8ff; line-height: 1.5em; margin-bottom: 2em!important;'>
                        <tr>
                        <td mc:edit='callout'>
                        
							<strong class='callout'>Al descargar el recetario obtendrás:</strong>
                           <ul class='callout'>
                               <li>Ideas prácticas y sencillas para la preparación de alimentos basados en plantas</li>
                               <li>Información sobre los beneficios al comer alimentos de origen vegetal</li>
                               <li>Información nutrimental de los ingredientes que se utilizan en la preparación de cada platillo</li>
                           </ul>
                        </td>
                        </tr>
						</table><!-- /Callout Panel -->
						
						<div mc:edit='note'>
						<a href='http://umvirtual.org/recetario-vegano/recetario.html'><img src='http://umvirtual.org/recetario-vegano/images/cta2.png' alt='Quiero mi curso gratis' width='100%' style='margin-bottom: 2em;'></a>
						<h3>Saludos cordiales,</h3>
						<p>Mtra. Lorena Neria de Girarte<br>
Dir. UM Virtual<br>
Universidad de Montemorelos</p>
                        </div>
												
						<br>
						<br>							
												
						<!-- social & contact -->
						<table class='social' width='100%' style='background-color:#ebebeb;' bgcolor='#ebebeb'>
							<tr>
								<td>
									<!--- column 1 -->
                                    <table align='left' class='column' width='50%'>
  <tr>
    <td>
    <h5 style='line-height: 1.1;margin-bottom: 15px;color: #000000;    font-weight:bold;font-size: 17px;'>Nuestras redes sociales</h5>
    </td>
    </tr>
    <tr>
    <td>
    <table gcolor='#3B5998'>
    <tr>
    <td>
    <a style='padding: 3px 7px;font-size: 12px;margin-bottom: 10px!important;text-decoration: none;color: #FFFFFF;font-weight: bold;display: block;text-align: center;background-color: #3B5998!important;' href='https://www.facebook.com/umvirtual' class='soc-btn fb'>Facebook</a>
    </td>
    </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td>
    <table gcolor='#2aadea'>
    <tr>
    <td>
    <a style='padding: 3px 7px;font-size: 12px;margin-bottom: 10px!important;text-decoration: none;color: #FFFFFF;font-weight: bold;display: block;text-align: center;background-color:#2aadea!important;' href='https://twitter.com/UMVirtual' class='soc-btn tw'>Twitter</a>
    </td>
    </tr>
    </table>
   </td>
  </tr>
  <tr>
    <td>
    <table gcolor='#d94b3e'>
    <tr>
    <td>
    <a style='padding: 3px 7px;font-size: 12px;margin-bottom: 10px!important;text-decoration: none;color: #FFFFFF;font-weight: bold;display: block;text-align: center;background-color: #d94b3e!important;' href='https://plus.google.com/+UmvirtualOrg/posts' class='soc-btn gp'>Google+</a>
    </td>
    </tr>
    </table>
   </td>
  </tr>
</table>
<!-- /column 1 -->	
									
									<!--- column 2 -->
									<table align='left' class='column' width='50%'>
										<tr>
											<td>				
																			
												<h5 style='line-height: 1.1;margin-bottom: 15px;color: #000000;    font-weight:bold;font-size: 17px;'>Contacto</h5>												
												<p style='margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6;'>Teléfono: <strong> (826) 263 2810 - (826) 263 0900 ext. 1251 y 1255</strong><br>
                Email: <strong><a>umvirtual@um.edu.mx</a></strong></p>
                <p>Dirección: <strong>Avenida Libertad No. 1300 Poniente, Zaragoza, 67530 Montemorelos, Nuevo León, México</strong></p>
                
											</td>
										</tr>
									</table><!-- /column 2 -->
									
									<span class='clear'></span>	
									
								</td>
							</tr>
						</table><!-- /social & contact -->
					
					
					</td>
				</tr>
			</table>
			</div>
									
		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class='footer-wrap'>
	<tr>
		<td></td>
		<td class='container'>
			
				<!-- content -->
				<div class='content'>
				<table>
				<tr>
					<td align='center'>
						
					</td>
				</tr>
			</table>
				</div><!-- /content -->
				
		</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->
</body>
</html>
";

//Headers UM Virtual
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type:text/html;charset=UTF-8";
$headers[] = "From: $from";
$headers[] = "Reply-To: $nombre <$email>";

//Enviar mail a UM Virtual
mail($from,$subject,$message,implode("\r\n", $headers));

//Headers Usuario
$headersUsr   = array();
$headersUsr[] = "MIME-Version: 1.0";
$headersUsr[] = "Content-type:text/html;charset=UTF-8";
$headersUsr[] = "From: $to";
$headersUsr[] = "Reply-To: UM Virtual <umvirtual@um.edu.mx>";

//Enviar mail al usuario
mail($toUsr,$subjectUsr,$messageUsr,implode("\r\n", $headersUsr));

//Redirigir a gracias.html
echo"<script>window.location='http://umvirtual.org/recetario-vegano/gracias.html'</script>;"
    
?>