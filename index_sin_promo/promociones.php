<!DOCTYPE html>
<html lang="es" xml:lang="es">
	<head>
		<?php include("recursos.php"); ?>
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
	</head>
	<body class="stretched" data-loader="1">
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			<!-- Header
			<?php include("header.php"); ?>
			<!-- #header end -->
			<!-- ============================================= -->
			<div class="section parallax nomargin" style="background-image: url('images/banner_desarrollo.png'); background-size:contain; padding: 200px 0;" data-stellar-background-ratio="0.5">
			</div>
			
			<!--------------- CASAS ---------------------->
			<section id="content">
				<div class="section nomargin">
					<div class="container clearfix">
						<h1 class="text-center">PROMOCIONES</h1>
						<p class="text-center"> </p>
					</div>
				</div>
				
				
				<div class="masonry-thumbs col-2 clearfix" data-lightbox="gallery">
					
					
					
					
					
					<a href="images/referidos.jpg" data-lightbox="gallery-item">
						<img src="images/referidos.jpg" alt="Gallery Image"  style="padding:10px">
					</a>
				

					
					
					
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