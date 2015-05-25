@extends('app')

@section('content')
<section class="container">
	<h2 class="page-header">Testimonios</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Autor</th>
				<th>Contenido</th>
				<th>Fecha</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		@if(!$testimonials->isEmpty())
		@foreach($testimonials as $rec)
			<tr data-id="{{ $rec->id }}" {{ $rec->estado === 'N' ? 'class=warning' : '' }}>
				<td>{{ $rec->autor }}</td>
				<td>{{ str_limit($rec->body, 80) }}</td>
				<td>{{ $rec->created_at }}</td>
				<td class="hidden">{{ $rec->body }}</td>
				<td>
					@if($rec->estado == 'A')
						<span class="label label-success">Aceptado</span>
					@endif
					<div class="btn-group dropdown">
						<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							@if($rec->estado == 'N')
							<li><a href="#modal-aceptar" class="aceptar" data-toggle="modal">Aceptar Testimonio</a></li>
							<li><a href="#modal-rechazar" class="rechazar" data-toggle="modal">Rechazar Testimonio</a></li>
							<li class="divider"></li>
							@endif
							<li><a href="#modal-show-body" data-toggle="modal" class="show">Ver Testimonio</a></li>
						</ul>
					</div>
				</td>
			</tr>
		@endforeach
		@else
			<tr>
				<td colspan="4" class="text-center">No hay registros que mostrar</td>
			</tr>
		@endif
		</tbody>
	</table>
	<div class="modal fade" id="modal-aceptar">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-warning"></i> Advertencia</h4>
				</div>
				<div class="modal-body">
					{!! Form::open(['route' => 'accept', 'method' => 'PUT']) !!}
						<input type="hidden" name="id">
						<p>Seguro de Aceptar este <strong>Testimonio</strong>?</p>
						<hr>
						<div class="form-group text-right">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary">Aceptar</button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-rechazar">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-warning"></i> Advertencia</h4>
				</div>
				<div class="modal-body">
					{!! Form::open(['route' => 'reject', 'method' => 'DELETE']) !!}
						<input type="hidden" name="id">
						<p>Seguro de Eliminar este <strong>Testimonio</strong>?</p>
						<hr>
						<div class="form-group text-right">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							<button class="btn btn-primary">Aceptar</button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-show-body">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-warning"></i> Testimonial de <span id="current-autor"></span></h4>
				</div>
				<div class="modal-body">
					<p id="current-body"></p>
					<hr>
					<div class="text-right">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('script')
<script>
	$('#modal-aceptar, #modal-rechazar').on('show.bs.modal', function(e) {
		var $this = $(e.relatedTarget),
			id = $this.closest('tr').data('id');

		$(this).find('[name=id]').val(id);
	});
	$('#modal-show-body').on('show.bs.modal', function(e) {
		var $tr = $(e.relatedTarget).closest('tr');
		$(this).find('#current-autor').html($tr.children(':eq(0)').text().trim());
		$(this).find('#current-body').html($tr.children(':eq(3)').text().trim());
	});
</script>
@stop