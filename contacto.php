<!DOCTYPE html>
<?php include("recursos.php");
		require('constant.php');
?>
<html lang="es" xml:lang="es">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WP5WS4Q');</script>
		<!-- End Google Tag Manager -->
		<script src="component/jquery/jquery-3.2.1.min.js"></script>
		<!--VALIDACION FORMULACIO AJAX-->
		<script>
		$(document).ready(function (e){
			$("#frmContact").on('submit',(function(e){
				e.preventDefault();
				$("#mail-status").hide();
				$('#send-message').hide();
				$('#loader-icon').show();
				$.ajax({
					url: "contact_form.php",
					type: "POST",
					dataType:'json',
					data: {
					"name":$('input[name="name"]').val(),
					"last":$('input[name="last"]').val(),
					"email":$('input[name="email"]').val(),
					"phone":$('input[name="phone"]').val(),
					"content":$('textarea[name="content"]').val(),
									"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},
					success: function(response){
					$("#mail-status").show();
					$('#loader-icon').hide();
					if(response.type == "error") {
						$('#send-message').show();
										$("#mail-status").attr("class","error");
					} else if(response.type == "message"){
						$('#send-message').hide();
													$("#mail-status").attr("class","success");
					}
						$("#mail-status").html(response.text);
					},
					error: function(){}
				});
			}));
		});
		</script>
		<!--FIN VALIDACION FORMULARIO AJAX-->
		<!--Estilos FORMULARIO-->
		<style>
		.label {margin: 0 0;}
			.field {margin-top: 20px; border-radius: 15px; border: 3px solid #e4e4e4;}
			.content {width: 960px;margin: 0 auto;}
			h1, h2 {font-weight: normal;}
			div#central {margin: 40px 0px 100px 0px;}
			@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
			@media all and (max-width: 767px) {
				body {margin: 0 auto;word-wrap:break-word}
				.content {width:auto;}
					div#central {	margin: 40px 20px 100px 20px;}
			}
				body {background:#ffffff;margin: 0 auto;-webkit-font-smoothing: antialiased;  font-size: initial;line-height: 1.7em;}
				input, textarea {width:100%;padding: 15px;font-size:1em; color: #333;	}
			button {
				padding: 12px 60px;
				background: #5BC6FF;
				border: none;
				color: rgb(40, 40, 40);
				font-size:1em;
					cursor: pointer;
			}
			#message {  padding: 0px 40px 0px 0px; }
			#mail-status {
				padding: 12px 20px;
				width: 100%;
				display:none;
				font-size: 1em;
				color: rgb(40, 40, 40);
			}
		.error{background-color: #F7902D;  margin-bottom: 40px;}
		.success{background-color: #48e0a4; }
				.g-recaptcha {margin: 0 0 25px 0;}
		</style>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!--FIN ESTILOS FORMULARIO-->
	</head>
	<body class="stretched">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP5WS4Q"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			<!-- Header
			============================================= -->
			<?php include("header.php"); ?>
			<!-- Page Title
			============================================= -->
			<div class="section parallax nomargin" style="background-image: url('images/banner_casas.png'); background-size:contain; padding: 200px 0;" data-stellar-background-ratio="0.8">
			</div>
			
			<!--------------- CASAS ---------------------->
			<section id="content">
				<div class="nomargin">
					<div class="container clearfix">
						<h1 class="text-center text-uppercase">Contacto</h1>
						
					</div>
				</div>
				<div class="section nomargin noborder nopadding bgcolor" id="datos-contacto">
					
					<div class="row" >
						<div class="col-md-6 col-padding">
							
							<p><span class="font-bold">Desarrollo Residencial Club Náutico Teques</span><br>
							Circuito circunvalación s/n, 5.a sección,<br>
							Col.  Tequesquitengo,  C. P. 62915 Mpio. de Jojutla, MOR<br>
						</p>
						<p><span class="font-bold">Oficinas en CDMX</span><br>
						Tejocotes no. 160, 1er piso. Col. Tlacoquemecatl Del Valle, Cd de México<br>
						</p>
						<p><span class="font-bold">Teléfono: <a href="tel:7774540165">77 7454 0165</a></span>
					</p>
				</div>
				
				<div class="col-md-6 col-padding" style="background-color:#FFF">
					
					<h2>Envíanos tus datos y nosotros nos pondremos en contacto contigo</h2>
					
					<form action="formulario_contacto.php" method="post" name="contactform" onsubmit="return submitUserForm();">
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<input type="text" placeholder="Nombre Completo*" class="form-control c-square c-theme input-lg" name="first_name" id="first_name" required>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<input type="text" placeholder="Email*" class="form-control c-square c-theme input-lg" name="mail" id="mail" required style="margin-top: 10px;">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<input type="text" placeholder="Teléfono*" class="form-control c-square c-theme input-lg mt-3" name="telephone" id="telephone" required style="margin-top: 10px;">
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<textarea placeholder="Mensaje:* " class="form-control c-square c-theme input-lg mt-3" style="margin-top: 10px;" name="comments" id="comments"required></textarea>
											</div>
										</div>
									</div>
								<div class="row mt-5">
									<div class="col-lg-12 text-center">
										<p style="color: #4F4F4F;"><small>*Campos requeridos</small></p>
										<br>
									</div>
								</div>
								
								<!--<div class="g-recaptcha" data-sitekey="6LeAmYwUAAAAAHxjByS3bni_UxmcQzuAl5zB4ZOt"></div>-->
								<input type="submit" name="submit_brochure" value="Enviar" class="button btn-block">
								
							</form>
					<!--<div id="message">
						<form id="frmContact" action="" method="POST" novalidate="novalidate">
							<div class="row">
								<div class="field col-lg-6 col-md-6 col-sm-12 col-12">
									<input class="required" style="padding: 1%;" type="text" id="name" name="name" placeholder="Nombre(s)" title="Ingrese un nombre" aria-required="true" required>
								</div>
								<div class="field col-lg-6 col-md-6 col-sm-12 col-12">
									<input class="required" style="padding: 1%;" type="text" id="last" name="last" placeholder="Apellido" title="Ingrese su apellido" aria-required="true">
								</div>
							</div>
							<div class="row">
								<div class="field col-lg-6 col-md-6 col-sm-12 col-12">
									<input class="required email" style="padding: 1%;" type="text" id="email" name="email" placeholder="Email" title="Ingrese un correo" aria-required="true" required>
								</div>
								<div class="field col-lg-6 col-md-6 col-sm-12 col-12">
									<input class="required phone" style="padding: 1%;" type="text" id="phone" name="phone" placeholder="Teléfono" title="Ingrese un teléfono" aria-required="true" required>
								</div>
							</div>
							<div class="row">
								<div class="field col-lg-12 col-md-12 col-sm-12 col-12">
									<textarea style="padding: 1%;" id="comment-content" name="content" placeholder="Mensaje" cols="5" rows="5"></textarea>
								</div>
							</div>
							<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
							<div id="mail-status"></div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="button" type="Submit" id="send-message" style="clear:both;">Enviar</button>
							</div>
						</form>
						<div id="loader-icon" style="display:none;"><img src="images/loader.gif" /></div>
					
				</form>
				</div>-->
				</div><!-- .postcontent end -->
				
				
			</div>
		</div>
	</div>
	<!--MAPA DE CONTACTO---------------------->
	<div class="section nomargin">
		<div class="container clearfix">
			<h1 class="text-center text-uppercase">Ubicación</h1>
			
		</div>
	</div>
	<a class="button button-blue button-full center">
		<div class="container clearfix">
			A TAN SOLO 2 HRS. DE LA CIUDAD DE MÉXICO
		</div>
	</a>
	<div class="section parallax dark nomargin" style="background-size: cover; padding: 0px 0;" data-stellar-background-ratio="0.4">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6359.710553416669!2d-99.26437448589277!3d18.596273806453897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdd4b92580a83d%3A0x3b8da1f1aea2ffd0!2sClub+N%C3%A1utico+Teques!5e0!3m2!1ses!2smx!4v1566328483956!5m2!1ses!2smx" style="width: 100%; height: 700px;" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
<!-- aviso  ============================================= -->
<div class="section nomargin">
	<div class="container clearfix">
		© 2017 Club Náutico Teques. El diseño, superficies, decoración, imágenes y mobiliario, son solo ilustrativas y podrían tener modificaciones sin previo aviso. Por lo tanto, no constituye un compromiso, obligación y oferta comercial o legal de la empresa vendedora.
	</div></div>
	<!-- Footer
	============================================= -->
	<?php include("footer.php"); ?>
	</div><!-- #wrapper end -->
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="ti-angle-up"></div>
	<!--JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>