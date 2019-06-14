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
					<h1 class="text-center">¿QUÉ HACER EN TEQUES?</h1>
              <p class="text-center"> El destino ideal para disfrutar un cálido y relajado fin de semana.<br>
               Hermosa, población ubicada a 45 km al sur de Cuernavaca,  <br>
               ofrece divertidas y entretenidas actividades que se pueden disfrutar estando en la tierra, <br>
               el agua o bien desde el aire, existen opciones para todos los gustos.</p>
					</div>
				</div>
                       


						<div class="masonry-thumbs col-5 clearfix" data-big="1" data-lightbox="gallery">
							<a href="images/bici-fam.jpg" data-lightbox="gallery-item">
								<img src="images/bici-fam.jpg" alt="Gallery Image">
							</a>
                            <a href="images/shutterstock_100256978-globo1.jpg" data-lightbox="gallery-item">
								<img src="images/shutterstock_100256978-globo1.jpg" alt="Gallery Image">
							</a>
							<a href="images/shutterstock_172217198-bici-montana.jpg" data-lightbox="gallery-item">
								<img src="images/shutterstock_172217198-bici-montana.jpg" alt="Gallery Image">
							</a>
							<a href="images/shutterstock_201578168-wakeboard.jpg" data-lightbox="gallery-item">
								<img src="images/shutterstock_201578168-wakeboard.jpg" alt="Gallery Image">
							</a>
							<a href="images/moto-acuatica.jpg" data-lightbox="gallery-item">
								<img src="images/moto-acuatica.jpg" alt="Gallery Image">
							</a>
						</div>

                        

 <!-- FIN GALERIA -->  	
 
 			<div class="section nomargin">
			<div class="container clearfix">
			<h1 class="text-center">MASTER PLAN</h1>
					</div>
				</div>

 			

 

<div class="section parallax dark nomargin" style="background-image: url('images/banner_plan.jpg');  background-size:cover; padding: 150px 0;" data-stellar-background-ratio="0.4">
					<div class="heading-block center" data-lightbox="gallery">
                    <a href="images/MASTER.jpg" data-lightbox="gallery-item">
						<h3>Ver Master Plan</h3></a>
					</div></div>
             
             
<!-- aviso  ============================================= -->                       
<div class="section nomargin">
<div class="container clearfix">
© 2017 Club Náutico Teques. El diseño, superficies, decoración, imágenes y mobiliario, son solo ilustrativas y podrían tener modificaciones sin previo aviso. Por lo tanto, no constituye un compromiso, obligación y oferta comercial o legal de la empresa vendedora.
</div></div>
					 
</section>
             
<!-- Footer
		============================================= -->
		<?php include("footer.php"); ?>
        <!-- #footer end -->

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