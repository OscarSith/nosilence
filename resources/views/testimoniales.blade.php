@extends('master_layout')

@section('content')
<div id="content">
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<h3 class="classic-title">
					<span>Testimoniales</span>
				</h3>
				<div class="row" style="margin-top:30px">
					<?php $n = 1; ?>
					@foreach($testimonials as $rec)
					<div class="col-md-6">
						<div class="classic-testimonials">
							<div class="testimonial-content">
								<p>{{ $rec->body }}</p>
							</div>
							<div class="testimonial-author"><span>{{ $rec->autor }}</span></div>
						</div>
					</div>
					@if($n % 2 == 0)
						<div class="clearfix"></div>
						<div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
					@endif
					<?php $n++; ?>
					@endforeach
				</div>
			</div>
			<hr>
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" class="">
								<i class="fa fa-angle-up control-icon"></i>
								<i class="fa fa-desktop"></i> Agregar Testimonio
							</a>
						</h4>
					</div>
					<div id="collapse-1" class="panel-collapse collapse in">
						<div class="panel-body">
							{!! Form::open(['route' => 'addTestimonial']) !!}
								<br>
								@if($errors->any())
									<div class="alert alert-warning">
										<ul class="list-unstyled">
										@foreach($errors->all() as $rec)
											<li>{{ $rec }}</li>
										@endforeach
										</ul>
									</div>
								@endif
								@if(Session::has('success'))
									<div class="alert alert-success">{{ Session::get('success') }}</div>
								@endif
								<div class="form-group">
									{!! Form::text('autor', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
								</div>
								<div class="form-group">
									{!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Escriba aquí su testimonio...', 'rows' => 6]) !!}
								</div>
								<div>
									{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
								</div>
								{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop