<?php include 'tpl/header.tpl.php' ?>
	<!-- Start Map -->
	<div id="map" data-position-latitude="-12.117815" data-position-longitude="-77.033877"></div>
	<!-- End Map -->

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- Classic Heading -->
					<h4 class="classic-title"><span>Contáctenos</span></h4>
					<!-- Start Contact Form -->
					<form role="form" class="contact-form" id="contact-form" method="post">
						<div class="form-group">
							<div class="controls">
								<input type="text" placeholder="Nombre" name="name">
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<input type="email" class="email" placeholder="Correo" name="email">
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<input type="text" class="requiredField" placeholder="Asunto" name="subject">
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<textarea rows="7" placeholder="Escribe su mensaje..." name="message"></textarea>
							</div>
						</div>
						<button type="submit" id="submit" class="btn-system btn-large">Enviar</button><div id="success" style="color:#34495e;"></div>
					</form>
				</div>
				
				<div class="col-md-4">
					<h4 class="classic-title"><span>Information</span></h4>
					<p>Av. Dos de Mayo 516 of. 201 - Miraflores</p>
					<p>Av. Manuel Olgín 335 of. 1205 - Surco</p>
					<div class="hr1" style="margin-bottom:10px;"></div>
					<ul class="icons-list">
						<li><span><i class="fa fa-phone fa-lg"></i> Central:</span> 708 4101 anexo 101</li>
                        <li><span><i class="fa fa-mobile-phone fa-lg"></i> RPC:</span> 992346162</li>
                        <li><span><i class="fa fa-envelope-o"></i> Correo:</span> eventos@nosilenceperu.com</li>
					</ul>
					<div class="hr1" style="margin-bottom:15px;"></div>
				</div>
			</div>
		</div>
	</div>
<?php include 'tpl/footer.tpl.php' ?>