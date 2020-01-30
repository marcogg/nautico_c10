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
		//require_once "recaptchalib.php";
		
		?>
		<?php include("recursos.php"); ?>
	</head>
	<body class="stretched" data-loader="1">
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			<!-- Header
			============================================= -->
			<?php include("header.php"); ?>
			<!-- ============================================= -->


					<div class="section text-center">
						<h2>Gracias por tu información</h2>
						<h4>Si necesitas más información, puedes contactarnos vía WhatsApp</h4>
						<a class="btn btn-success btn-lg" href="https://wa.me/525573552395"><i class="fab fa-whatsapp" style="color:white;"></i> Enviar mensaje</a>
						<br>
						<br>
						<iframe src="https://drive.google.com/file/d/1OTFRhf7fhJCczvsK9ynIiTwUyYAgNNGK/preview" style="width: 100%; height: 650px;"></iframe>

					</div>

					<!-- FIN GALERIA -->
					<!-- aviso  ============================================= -->
					<div class="section nomargin">
						<div class="container clearfix">
							© 2017 Club Náutico Teques. El diseño, superficies, decoración, imágenes y mobiliario, son solo ilustrativas y podrían tener modificaciones sin previo aviso. Por lo tanto, no constituye un compromiso, obligación y oferta comercial o legal de la empresa vendedora.
						</div></div>
						
					</section>
					
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