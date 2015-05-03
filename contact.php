<?php include 'tpl/header.tpl.php' ?>
	<div id="map" data-position-latitude="-12.117815" data-position-longitude="-77.033877"></div>

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h4 class="classic-title"><span>Contáctanos</span></h4>
					<p>Escribenos y un representante se comunicará contigo</p>
					<br>
					<form role="form" class="contact-form" action="{{ url('contact') }}" id="contact-form" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_id" value="23">
						<div class="form-group" id="content-messages">
							<div id="success" class="alert alert-success hidden" role="alert"></div>
							<div id="error" class="alert alert-danger hidden" role="alert"></div>
						</div>
						<div class="form-group">
							<div class="controls">
								<input type="text" placeholder="Nombre" name="nombre">
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<input type="text" class="requiredField" placeholder="Colegio" name="colegio">
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<input type="email" class="email" placeholder="Correo" name="email">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" name="telefono" placeholder="Teléfono">
								</div>
								<div class="col-sm-6">
									<select name="tipo" id="tipo" class="form-control">
										<option value="">Tipo de evento</option>
										<option value="Quinceañero">Fiesta de quinceaños</option>
										<option value="Fiesta privada">Fiesta privada</option>
										<option value="Fiesta promo">Fiesta de promo</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<textarea rows="7" placeholder="Escribe su mensaje..." name="mensaje"></textarea>
							</div>
						</div>
						<button type="submit" id="submit" class="btn-system btn-large">Enviar</button>
					</form>
				</div>
				
				<div class="col-md-4">
					<h4 class="classic-title"><span>Información</span></h4>
					<p>Av. Dos de Mayo 516 of. 201 - Miraflores</p>
					<p>Av. Manuel Olgín 335 of. 1205 - Surco</p>
					<div class="hr1" style="margin-bottom:10px;"></div>
					<ul class="icons-list">
						<li><span><i class="fa fa-phone fa-lg"></i> Central:</span> 708 4101</li>
                        <li><span><i class="fa fa-mobile-phone fa-lg"></i> RPC:</span> 992346162</li>
                        <li><span><i class="fa fa-envelope-o"></i> Correo:</span> eventos@nosilenceperu.com</li>
					</ul>
					<div class="hr1" style="margin-bottom:15px;"></div>
				</div>
			</div>
		</div>
	</div>
<?php include 'tpl/footer.tpl.php' ?>