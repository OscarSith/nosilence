@extends('master_layout')

@section('content')
<div class="container">
	<div class="row">
		@foreach($filtered as $post)
		<div class="col-md-3">
			<div>
				<img src="{{ $post['full_picture'] }}" class="img-responsive center-block">
				<p>{{ $post['message'] }}</p>
				<small>{{ $post['from']['name'] }}</small>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop