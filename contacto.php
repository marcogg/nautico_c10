<!DOCTYPE html>
<html lang="es" xml:lang="es">
	<head>
		<script src='https://www.google.com/recaptcha/api.js?render=6LfmYXkUAAAAAIcla8TDfE8Jbsyx3nZjoMD6Tf8Q'></script>
		<script>
		grecaptcha.ready(function() {
		grecaptcha.execute('6LfmYXkUAAAAAIcla8TDfE8Jbsyx3nZjoMD6Tf8Q', {action: 'action_name'})
		.then(function(token) {
		// Verify the token on the server.
		});
		});
		</script>
		<?php
		
		// grab recaptcha library
		require_once "recaptchalib.php";
		
		?>
		<?php include("recursos.php"); ?>
	</head>
	<body class="stretched">
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
								<div class="section nomargin noborder nopadding bgcolor">
					
					<div class="row" >
						<div class="col-md-6 col-padding">
							
							<p><span class="font-bold">Desarrollo Residencial Club Náutico Teques</span><br>
							Circuito circunvalación s/n, 5.a sección,<br>
							Col.  Tequesquitengo,  C. P. 62915 Mpio. de Jojutla, MOR<br>
						Tel: 01(734) 347 1339  </p>
						<p><span class="font-bold">Oficinas en CDMX</span><br>
						Alfonso Reyes 173, Col. Condesa<br>
						C.P. 06140 México CDMX<br>
					Tel: 4630-3510</p>
					<p><span class="font-bold">Call center: 01 800 444 22-22</span>
				</p>
			</div>
			
			<div class="col-md-6 col-padding" style="background-color:#FFF">
				
				<h2>Envíanos tus datos y nosotros nos pondremos en contacto contigo</h2>
				<div class="postcontent nobottommargin">
					
					<div class="contact-form-result"></div>
					<form class="nobottommargin" id="template-contactform" name="template-contactform" action="sendContacto.php" method="post">
						<div class="form-process"></div>
						<div class="col_one_half">
							<label for="template-contactform">NOMBRE(S) <small>*</small></label>
							<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
						</div>
						<div class="col_one_half col_last">
							<label for="template-contactform">APELLIDO <small>*</small></label>
							<input type="text" id="template-contactform-name" name="template-contactform-last" value="" class="sm-form-control required" />
						</div>
						<div class="col_one_half">
							<label>EMAIL <small>*</small></label>
							<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
						</div>
						<div class="col_one_half col_last">
							<label>CELULAR</label>
							<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
						</div>
						<div class="clear"></div>
						<div class="col_two_third">
							<label for="template-contactform">CIUDAD DE RESIDENCIA <small>*</small></label>
							<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
						</div>
						<div class="clear"></div>
						<div class="col_two_third">
							<label for="template-contactform">ASUNTO <small>*</small></label>
							<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
						</div>
						<div class="clear"></div>
						<div class="col_full">
							<label for="template-contactform">MENSAJE <small>*</small></label>
							<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
						</div>
						<div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div>
						<div class="col_full">
							<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">ENVIAR</button>
						</div>
					</form>
					
					</div><!-- .postcontent end -->
					
					
				</div>
			</div>
		</div>
				<!--MAPA DE CONTACTO---------------------->
				<div class="section nomargin">
					<div class="container clearfix">
						<h1 class="text-center">Ubicación</h1>
						
					</div>
				</div>
				<a class="button button-blue button-full center">
					<div class="container clearfix">
						A TAN SOLO 2 HRS. DE LA CIUDAD DE MÉXICO
					</div>
				</a>
				<div class="section parallax dark nomargin" style="background-image: url('');  background-size: contain; padding: 0px 0;" data-stellar-background-ratio="0.4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1890.754590112397!2d-99.259352!3d18.596154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDM1JzQ3LjAiTiA5OcKwMTUnMzMuOSJX!5e0!3m2!1ses-419!2smx!4v1486666956400"
					width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
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