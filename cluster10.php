<!DOCTYPE html>
<html lang="es" xml:lang="es">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WP5WS4Q');</script>
		<!-- End Google Tag Manager -->
		<!--<script src='https://www.google.com/recaptcha/api.js?render=6LfmYXkUAAAAAIcla8TDfE8Jbsyx3nZjoMD6Tf8Q'></script>
		<script>
		grecaptcha.ready(function() {
		grecaptcha.execute('6LfmYXkUAAAAAIcla8TDfE8Jbsyx3nZjoMD6Tf8Q', {action: 'action_name'})
		.then(function(token) {
		// Verify the token on the server.
		});
		});
		</script>-->
		<?php
		
		// grab recaptcha library
		//require_once "recaptchalib.php";
		
		?>
		<?php include("recursos.php"); ?>
	</head>
	<body class="stretched" data-loader="1">
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
			<!-- ============================================= -->
			<div class="section parallax nomargin" style="background-image: url('images/c10/acercamiento.jpg'); background-size:cover; background-repeat: no-repeat; height: 100vh; background-position: center top " data-stellar-background-ratio="0.8">
			</div>
			
			<!--------------- CASAS ---------------------->
			<section id="content">
				
				
				<div class="section nomargin">
					<div class="container clearfix">
						<h1 class="text-center text-uppercase">Cluster 10</h1>
						
						<p class="text-center text-lg-center">
							Conoce la nueva etapa del Residencial Club Náutico Teques, con 56 viviendas y amenidades exclusivas.<br>
						4 cómodos departamentos por edificio con roof garden o jardín privado</p>
						<p class="text-center text-lg-center">Departamentos de 3 recámaras con Jardín o Roof Garden desde 72.82 m², <br>con amenidades de lujo y <b>acceso inmejorable al Lago de Tequesquitengo</b> en Morelos.</p>
						<p class="text-center text-lg-center"><b>Desde $1,532,000</b></p>
						<div class="text-center">
							<button type="button" class="button" data-toggle="modal" data-target="#descargarBrochure" style="width: 100%;"><h3>Descargar Folleto</h3></button>
						</div>
					</div>
				</div>
				<!--INICIO: MODAL DESCARGA DE BROCHURE-->
				<div class="modal fade" id="descargarBrochure" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title" id="exampleModalLongTitle">Descarga el folleto completo</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row mb-5">
									<div class="col-lg-12 text-center">
										<p>Compártanos sus datos y descargue el brochure del Cluster 10 de Club Náutico.</p>
										<br>
									</div>
								</div>
								<form action="descargar_folleto.php" method="post" name="contactform" onsubmit="return submitUserForm();">
									<div class="form-group">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-12">
												<input type="text" placeholder="Nombre Completo*" class="form-control c-square c-theme input-lg" name="first_name" id="first_name" required>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-12">
												<input type="text" placeholder="Email*" class="form-control c-square c-theme input-lg" name="mail" id="mail" required>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-12">
												<input type="text" placeholder="Teléfono*" class="form-control c-square c-theme input-lg mt-3" name="telephone" id="telephone" required style="margin-top: 10px;">
											</div>
										</div>
										<!--<div class="col-lg-6 col-md-6 col-sm-12 col-12">
												<input type="text" placeholder="Apellido*" class="form-control c-square c-theme input-lg" name="last_name" id="last_name" required>
										</div>-->
									</div>
									
								
								
								<!--<div class="form-group">
									<p>Compártenos tu teléfono para una asesoría telefónica (opcional)</p>
									
								</div>-->
								<!--<div class="form-group">
										<label>Estado de residencia</label>
										<select id="estado" name="estado" class="input-lg form-control c-square c-theme">
												<option value="Aguascalientes">Aguascalientes</option>
												<option value="Baja California">Baja California</option>
												<option value="Baja California Sur">Baja California Sur</option>
												<option value="Campeche">Campeche</option>
												<option value="Chiapas">Chiapas</option>
												<option value="Chihuahua">Chihuahua</option>
												<option value="Cdmx">Ciudad de México</option>
												<option value="Coahuila">Coahuila</option>
												<option value="Colima">Colima</option>
												<option value="Durango">Durango</option>
												<option value="Estado de México">Estado de México</option>
												<option value="Guanajuato">Guanajuato</option>
												<option value="Guerrero">Guerrero</option>
												<option value="Hidalgo">Hidalgo</option>
												<option value="Jalisco">Jalisco</option>
												<option value="Michoacan">Michoacán</option>
												<option value="Morelos">Morelos</option>
												<option value="Nayarit">Nayarit</option>
												<option value="Nuevo_Leon">Nuevo León</option>
												<option value="Oaxaca">Oaxaca</option>
												<option value="Puebla">Puebla</option>
												<option value="Queretaro">Querétaro</option>
												<option value="Quintana Roo">Quintana Roo</option>
												<option value="San Luis Potosi">San Luis Potosí</option>
												<option value="Sinaloa">Sinaloa</option>
												<option value="Sonora">Sonora</option>
												<option value="Tabasco">Tabasco</option>
												<option value="Tamaulipas">Tamaulipas</option>
												<option value="Tlaxcala">Tlaxcala</option>
												<option value="Veracruz">Veracruz</option>
												<option value="Yucatan">Yucatán</option>
												<option value="Zacatecas">Zacatecas</option>
										</select>
								</div>-->
								<div class="row mt-5">
									<div class="col-lg-12 text-center">
										<p><small>*Campos requeridos</small></p>
										<br>
									</div>
								</div>
								
								<!--<div class="g-recaptcha" data-sitekey="6LeAmYwUAAAAAHxjByS3bni_UxmcQzuAl5zB4ZOt"></div>-->
								<input type="submit" name="submit_brochure" value="Ver Folleto" class="button btn-block">
								
							</form>
							
						</div>
						<!--<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
						</div>-->
					</div>
				</div>
			</div>
			<!--FIN: MODAL DE DESCARGA DE BROCHURE-->
			<!--INICIO: IMAGENES--->
			<div class="c-container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-12" style="background-image:url('images/c10/caption.jpg'); background-size: cover; height: 400px; background-repeat: no-repeat; ">
					</div>
					<div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12" style="height: 400px;">
						<div style="margin: auto; position: relative; top: 35%; line-height: 0;">
							<h2 class="text-uppercase text-center" style="font-size: 3em;">Tu hogar con vista <br></h2>
							<h1 class="text-uppercase text-center" style="background-color:#124889; color: white;">espectacular</h1>
							<hr style="bottom-border:5px #1abc9c solid; ">
						</div>
					</div>
				</div>
			</div>
			<!--Fin: IMAGENES-->
			<!-- DEPAS Cluster 10-->
			<div class="c-content-box">
				<div class="c-container">
					<div class="c-content-tab-3 c-opt-1">
						<div>
							<ul class="nav text-uppercase"><p><h2>- Prototipos -</h2></p>
							
							<li class="active"><div class="c-separator"></div>
							<a href="#c-tab3-3" data-toggle="tab">MODELO <span class="font-bold">Garden</span><br><span class="h4">3 Recámaras + Jardín Privado</span></br></a>
						</li>
						
						<li><div class="c-separator"></div>
						<a href="#c-tab3-4" data-toggle="tab">MODELO <span class="font-bold">Top House</span><br><span class="h4">3 Recámaras + Roof Garden Privado</span></br></a>
					</li>
					
				</ul>
			</div>
			
			<div class="c-tab-content">
				<div class="c-content">
					<div class="tab-content">
						
						<!-- TIPO GARDEN-->
						<div class="tab-pane active" id="c-tab3-3">
							<div class="clearfix">
								<h3 class="text-center">Departamento desde 72.82 m<sup>2</sup> de construcción + Jardín privado</h3>
								<div class="c-content-counter-2">
									<div class="row text-center">
										
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="c-counter c-bg-green" data-lightbox="gallery">
												<a href="images/c10/garden.png" data-lightbox="gallery-item">
													<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
												<img src="images/c10/garden.png" width="350"  alt="Planta garden"/></a>
											</div>
										</div>
										
										<div class="col_full nobottommargin">
											<h3>PLANTA</h3>
											
											
											<ul class="iconlist">
												<li>3 recámaras • Estancia-Comedor • Cocina • Jardín Privado • Jacuzzi (opcional)<br>
												Cuarto de lavado • 2 baños completos • Estacionamiento</li>
											</ul>
											<h3><strong>Desde $1,572,000 más gastos de escrituración</strong></h3>
										</div>
										<button type="button" class="button" data-toggle="modal" data-target="#descargarBrochure" style="width: 100%;"><h3>Descargar Folleto</h3></button>
									</div>
								</div>
							</div>
						</div>
						<!--FIN:TIPO GARDEN-->
						<!-- INICIO: TIPO TOP HOUSE-->
						<div class="tab-pane fade" id="c-tab3-4">
							<div class="clearfix">
								<h3 class="text-center">Departamento desde 75.45 m<sup>2</sup> de construcción</h3>
								<div class="c-content-counter-2">
									<div class="row text-center">
										<div class="col-md-6">
											<div class="c-counter c-bg-green" data-lightbox="gallery">
												<a href="images/c10/top.png" data-lightbox="gallery-item">
													<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
													<img src="images/c10/top.png" width="343" height="343" alt=""/>
												</a>
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="c-counter c-bg-green" data-lightbox="gallery">
												
												<a href="images/c10/roof.png" data-lightbox="gallery-item">
													<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
													<img src="images/c10/roof.png" width="343" height="343" alt=""/>
												</a>
											</div>
										</div>
										
										<div class="col_full nobottommargin">
											<h3>PLANTAS</h3>
											
											
											<ul class="iconlist">
												<li>3 recámaras • Estancia-Comedor • Cocina •  Balcón•  Cuarto de lavado <br> • 2 baños completos  • Roof Garden Privado •   Jacuzzi y Pérgola (opcionales)  •  Estacionamiento</li>
											</ul>
											<h3><strong>Desde $1,675,000 más gastos de escrituración</strong></h3>
										</div>
										<button type="button" class="button" data-toggle="modal" data-target="#descargarBrochure" style="width: 100%;"><h3>Descargar Folleto</h3></button>
									</div>
								</div>
							</div>
						</div>
						<!--FIN: TIPO TOP HOUSE-->
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- FIN DEPAS -->
<section>
	<iframe src="https://www.youtube.com/embed/rRFlwBXqz2k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

<!--Recorrido virtual-->
<section>
	<div class="c-container">
		<div class="row">
			<div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12" style="height: 400px;">
				<div style="margin: auto; position: relative; top: 35%; line-height: 0;">
					<h2 class="text-uppercase text-center" style="font-size: 2em; line-height: 0;">Conoce el prototipo <br></h2>
					
					<hr style="bottom-border:5px #1abc9c solid; ">
					<p class="text-uppercase text-center">Haz el recorrido virtual del prototipo Garden de Club Náutico Teques.</p>
					<a href="panoramas/garden/index.html" class="button btn-block text-center">Iniciar recorrido virtual</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12" style="background-image:url('images/recorrido.jpg'); background-size: cover; height: 400px; background-repeat: no-repeat; ">
			</div>
			
		</div>
	</div>
</section>
<!--BEGIN: CALL TO ACTION-->
<section>
	<div class="container-full" style="background-size: cover; background-attachment: fixed; background-image: url('images/departamento-tequesquitengo.jpg'); padding:10%; height: 500px;">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<h3 style="color: white; border:5px solid white; padding: 5%; text-align: center;">Disfruta cada mañana de LA MEJOR VISTA del Lago de Tequesquitengo</h3>
			</div>
		</div>
	</div>
</section>
<!--END: CALL TO ACTION-->

<!--fin: recorrido virtual-->



<!-- GALERIA -->


<div class="section nomargin">
	<div class="container clearfix">
		<h1 class="text-center">GALERÍA</h1>
		
	</div>
</div>
<div class="masonry-thumbs col-3 clearfix" data-big="1" data-lightbox="gallery">
	
	<a href="images/c10/fachada_rejas.jpg" data-lightbox="gallery-item">
		<img src="images/c10/fachada_rejas.jpg" alt="Departamentos">
		<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
	</a>
	<a href="images/c10/fachada_posterior.jpg" data-lightbox="gallery-item">
		<img src="images/c10/fachada_posterior.jpg" alt="Departamentos">
		<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
	</a>
	<a href="images/cluster10_2.jpg" data-lightbox="gallery-item">
		<img src="images/cluster10_2.jpg" alt="Departamentos">
		<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
	</a>
	<a href="images/c10/roof1.jpg" data-lightbox="gallery-item">
		<img src="images/c10/roof1.jpg" alt="Departamentos">
		<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
	</a>
	<a href="images/c10/roof2.jpg" data-lightbox="gallery-item">
		<img src="images/c10/roof2.jpg" alt="Departamentos">
		<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
	</a>
	<a href="images/c10/interior.jpg" data-lightbox="gallery-item">
		<img src="images/c10/interior.jpg" alt="Departamentos">
		<div class="overlay"><div class="overlay-wrap"><i><img src="images/thumbs/icon-zoom.png" alt="ver"/></i></div></div>
	</a>
	
	
</div>
<section>
	<div class="row">
		<div class="col-lg-12 text-center" style="padding-top: 4%;">
			<h3>Invierte en una casa de descanso que PUEDE PAGARSE SOLA</h3>
		</div>
	</div>
	
</section>
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
<!--<script type="text/javascript" src="js/jquery-1.12.4.js"></script>-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>