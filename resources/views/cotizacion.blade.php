@extends('master_layout')

@section('content')
<section class="page-wrapper gray" style="padding-top:0">
	<div class="page-banner us">
		<div class="container">
			<div class="col-sm-12">
				<h2>Cotización</h2>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					@if($errors->any())
					<div class="alert alert-warning">
						<ul>
							@foreach ($errors->all('<li>:message</li>') as $message)
								{!! $message !!}
							@endforeach
						</ul>
					</div>
					@endif
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#form1" data-toggle="tab">FIESTA PROMOCIÓN</a>
						</li>
						<li>
							<a href="#form2" data-toggle="tab" id="tabForm2">FIESTA DE 15</a>
						</li>
					</ul>
					<div class="tab-content">
						@if (Session::has('success_message'))
						<div class="alert alert-success">
							{{ Session::get('success_message') }}
						</div>
						@endif
						<div class="tab-pane fade active in" id="form1">
							{!! Form::open(['route' => 'cotizaFiestaPromocion', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'cotizaFiestaPromocion'])!!}
								<input type="hidden" name="seccion" value="1">
								<h2 class="classic-title margin-top">INFORMACIÓN GENERAL</h2>
								<div class="form-group">
									{!! Form::label('nombre_completo', 'NOMBRES Y APELLIDOS', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-10">
										{!! Form::text('nombre_completo', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="form-group has-feedback">
									{!! Form::label('correo', 'CORREO ELECTRÓNICO', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-5">
										{!! Form::email('correo', null, ['class' => 'form-control']) !!}
										<i class="fa fa-envelope fa-lg form-control-feedback" aria-hidden="true"></i>
									</div>
									{!! Form::label('telefono', 'TELF. / CEL.', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-3">
										{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
										<i class="fa fa-phone fa-lg form-control-feedback" aria-hidden="true"></i>
									</div>
								</div>
								<h4 class="classic-title margin-top60">INFORMACIÓN DE LA FIESTA</h4>
								<div class="form-group">
									{!! Form::label('colegio', 'NOMBRE DEL COLEGIO', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-10">
										{!! Form::text('colegio', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="form-group">
									<div class="has-feedback">
										{!! Form::label('posibles_fechas', 'POSIBLES FECHAS', ['class' => 'control-label col-sm-2 small']) !!}
										<div class="col-sm-4">
											{!! Form::text('posibles_fechas', null, ['class' => 'form-control']) !!}
											<i class="fa fa-calendar fa-lg form-control-feedback" aria-hidden="true"></i>
										</div>
									</div>
									{!! Form::label('nro_participantes', 'NUMERO DE ALUMNOS PARTICIPANTES', ['class' => 'control-label col-sm-3 small']) !!}
									<div class="col-sm-3">
										{!! Form::number('nro_participantes', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3 small">PARTICIPACIÓN DE PADRES DE FAMILIA</label>
									<div class="col-sm-4">
										<div class="radio-inline">
											<label>
												{!! Form::radio('participacion_padres', 'SI') !!} SI
											</label>
										</div>
										<div class="radio-inline">
											<label>
												{!! Form::radio('participacion_padres', 'NO') !!} NO
											</label>
										</div>
									</div>
								</div>
								<h4 class="classic-title margin-top60">PRESENTACIÓN EN REUNIÓN DE PADRES</h4>
								<div class="form-group has-feedback">
									{!! Form::label('fecha', 'FECHA', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-3">
										{!! Form::text('fecha', null, ['class' => 'form-control']) !!}
										<i class="fa fa-calendar fa-lg form-control-feedback" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-group has-feedback">
									{!! Form::label('hora', 'HORA', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-3">
										{!! Form::text('hora', null, ['class' => 'form-control']) !!}
										<i class="fa fa-clock-o fa-lg form-control-feedback" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-group">
									{!! Form::label('direccion', 'DIRECCIÓN', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-10">
										{!! Form::text('direccion', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<hr>
								<div class="col-sm-offset-2">
									<button class="btn btn-large btn-system">Enviar Cotización</button>
								</div>
							{!! Form::close() !!}
						</div>
						<div class="tab-pane fade" id="form2">
							{!! Form::open(['route' => 'cotizaFiestaDe15', 'method' => 'post', 'class' => 'form-horizontal'])!!}
								<input type="hidden" name="seccion" value="2">
								<h2 class="classic-title margin-top">INFORMACIÓN GENERAL</h2>
								<div class="form-group">
									{!! Form::label('nombre_completo', 'NOMBRES Y APELLIDOS', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-10">
										{!! Form::text('nombre_completo', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="form-group has-feedback">
									{!! Form::label('correo', 'CORREO ELECTRÓNICO', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-5">
										{!! Form::email('correo', null, ['class' => 'form-control']) !!}
										<i class="fa fa-envelope fa-lg form-control-feedback" aria-hidden="true"></i>
									</div>
									{!! Form::label('telefono', 'TELF. / CEL.', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-3">
										{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
										<i class="fa fa-phone fa-lg form-control-feedback" aria-hidden="true"></i>
									</div>
								</div>
								<h4 class="classic-title margin-top60">INFORMACIÓN DE LA FIESTA:</h4>
								<div class="form-group has-feedback">
									{!! Form::label('posibles_fechas', 'POSIBLE FECHA', ['class' => 'control-label col-sm-2 small']) !!}
									<div class="col-sm-3">
										{!! Form::text('posibles_fechas', null, ['class' => 'form-control']) !!}
										<i class="fa fa-calendar fa-lg form-control-feedback" aria-hidden="true"></i>
									</div>
								</div>
								<div class="form-group">
									{!! Form::label('nro_participantes', 'NUMERO DE ADOLESCENTES PARTICIPANTES', ['class' => 'control-label col-sm-3 small']) !!}
									<div class="col-sm-2">
										{!! Form::number('nro_participantes', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="form-group">
								{!! Form::label('nro_adultos_participantes', 'NUMERO DE ADULTOS PARTICIPANTES', ['class' => 'control-label col-sm-3 small']) !!}
									<div class="col-sm-2">
										{!! Form::number('nro_adultos_participantes', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="form-group">
									{!! Form::label('posible_tematica', 'POSIBLE TEMÁTICA DE LA FIESTA', ['class' => 'control-label col-sm-3 small']) !!}
									<div class="col-sm-9">
										{!! Form::text('posible_tematica', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3 small">LOCACIÓN DEL EVENTO</label>
									<div class="col-sm-4">
										<div class="radio-inline">
											<label for="locacion_evento_si">
												{!! Form::radio('locacion_evento', 'SI') !!} SI TENGO
											</label>
										</div>
										<div class="radio-inline">
											<label for="locacion_evento_no">
												{!! Form::radio('locacion_evento', 'NO') !!} NO TENGO
											</label>
										</div>
									</div>
								</div>
								<hr class="hr5">
								<div class="col-sm-offset-2">
									<button class="btn btn-large btn-system">Enviar Cotización</button>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('other')
	<script type="text/javascript">
	@if (Session::hasOldInput('seccion') && Session::getOldInput('seccion') == 2)
		$('#cotizaFiestaPromocion :input').val('');
		$('#tabForm2').click();
	@endif
	</script>
@stop