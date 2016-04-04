<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div style="border:1px solid #ddd;background:#f2f2f2;padding:14px">
		@if ($seccion == 1)
			<h2>FIESTA PROMOCIÓN</h2>
		@else
			<h2>FIESTA DE 15</h2>
		@endif
		<ul>
			<li><strong>NOMBRES Y APELLIDOS: </strong>{{ $nombre_completo }}</li>
			<li><strong>CORREO</strong>: {{ $correo }}</li>
			<li><strong>TELF. / CEL.</strong>: {{ $telefono }}</li>
			<li><strong>POSIBLES FECHA(S)</strong>: {{ $posibles_fechas }}</li>
			@if ($seccion == 1)
				<li><strong>NOMBRE DEL COLEGIO</strong>: {{ $colegio }}</li>
				<li><strong>NUMERO DE ALUMNOS PARTICIPANTES</strong>: {{ $nro_participantes }}</li>
				<li><strong>PARTICIPACIÓN DE PADRES DE FAMILIA</strong>: {{ $participacion_padres }}</li>
				<li><strong>FECHA</strong>: {{ $fecha }}</li>
				<li><strong>HORA</strong>: {{ $hora }}</li>
				<li><strong>DIRECCIÓN</strong>: {{ $direccion }}</li>
			@else
				<li><strong>NUMERO DE ADOLESCENTES PARTICIPANTES</strong>: {{ $nro_participantes }}</li>
				<li><strong>NUMERO DE ADULTOS PARTICIPANTES</strong>: {{ $nro_adultos_participantes }}</li>
				<li><strong>POSIBLE TEMÁTICA DE LA FIESTA</strong>: {{ $posible_tematica }}</li>
				<li><strong>LOCACIÓN DEL EVENTO</strong>: {{ $locacion_evento }}</li>
			@endif
		</ul>
	</div>
</body>
</html>