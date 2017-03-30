<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Inicio</a></li>
			<li class="active">Contacto</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contactanos!</h1>
				</header>
				
				<p>
					Nos encantaría saber de usted. ¿Interesado en trabajar juntos? Complete el siguiente formulario con información sobre su proyecto y le responderemos en breve.
				</p>
				<br>
					<form method="POST" action="../php/send.php">
						<div class="row">
							<div class="col-sm-6">
								<input class="form-control" name="nombre" type="text" placeholder="Nombre">
							</div>
							<div class="col-sm-6">
								<input class="form-control" name="empresa" type="text" placeholder="Empresa">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<input class="form-control" name="email" type="email" placeholder="Correo Electrónico">
							</div>
							<div class="col-sm-6">
								<input class="form-control" name="telefono" type="number" placeholder="Teléfono">
							</div>	
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Escribe tu mensaje aquí" name="comments" class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Enviar Mensaje">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Dirección:</h4>
					<address>
						Cd. México
					</address>
					<h4>Teléfono:</h4>
					<address>
						7039 5509 ó 55 2988 9181
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>