@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-new-slider">Nuevo slider</button>
							<button class="btn btn-sm btn-success" id="btn-change-order" data-toggle="button" aria-pressed="false" data-cancel-text="Cancelar Cambio de Orden">Cambiar orden</button>
							<button class="btn btn-sm btn-primary hidden" id="save-order-picture" data-loading-text="Guardando cambios...">Guardar Cambios</button>
						</div>
					</div>
					<hr>
					<div class="row" id="content-images">
					@if (! $sliders->isEmpty())
						@foreach ($sliders as $key)
						<div class="col-sm-4" data-id="{{ $key->id }}">
							<div class="thumbnail">
								<img src="{{ asset('images/slider/' . $key->picture) }}" alt="{{ $key->picture }}">
								<div class="caption">
									<div class="col-sm-4 col-md-3 hidden content-textfield has-success">
										<input class="form-control" type="number" name="order[]" value="{{ $key->order }}">
									</div>
									<span class="label label-success">Orden Nº {{ $key->order }}</span>
									<button class="btn btn-sm btn-danger btn-delete" data-file="{{ $key->picture }}" data-loading-text="Eliminando...">Eliminar</button>
									@if ($key->estado == 'A')
										<button class="btn btn-change-status btn-sm btn-warning" data-status="E" data-loading-text="Cargando...">Inhabilitar</button>
									@else
										<button class="btn btn-change-status btn-sm btn-success" data-status="A" data-loading-text="Cargando...">Habilitar</button>
									@endif
								</div>
							</div>
						</div>
						@endforeach
					@else
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-new-slider">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Nuevo Slider</h4>
			</div>
			{!! Form::open(['route' => 'slider', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) !!}
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label col-sm-2">Modulo</label>
						<div class="col-sm-5">
							<select class="form-control" name="modulo">
								<option value="HOME" selected>HOME</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Imagen</label>
						<div class="col-sm-10">
							<input type="file" name="picture" id="file-picture">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					<button class="btn btn-primary">Agregar</button>
				</div>
			{!! Form::close() !!}
			</div>
		</div>
	</div>
{!! Form::open(['route' => ['changePictureStatus', ':ID'], 'method' => 'put', 'class' => 'hidden', 'id' => 'frmChangePictureStatus']) !!}
{!! Form::close() !!}
{!! Form::open(['route' => ['deletePicture', ':ID'], 'method' => 'delete', 'class' => 'hidden', 'id' => 'frmDeletePicture']) !!}
{!! Form::close() !!}
{!! Form::open(['route' => 'changeOrder', 'method' => 'post', 'class' => 'hidden', 'id' => 'frChangeOrder']) !!}
{!! Form::close() !!}
@endsection
