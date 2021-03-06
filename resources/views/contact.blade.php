@extends('master_layout')

@section('content')
<div id="map" data-position-latitude="-12.117815" data-position-longitude="-77.033877"></div>
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h4 class="classic-title"><span>Contáctanos</span></h4>
				<p>Escríbenos y resolveremos tus dudas.</p>
				<br>
				<form role="form" class="contact-form" action="{{ url('contact') }}" id="contact-form" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
								<input type="text" name="tipo" id="tipo" placeholder="Tipo de evento">
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
				<p>Av. Manuel Olguin 335 of. 1205 - Surco</p>
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
@stop

@section('contact')
	@include('vendor.script_contact')
@stop