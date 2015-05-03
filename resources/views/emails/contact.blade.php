<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div style="border:1px solid #ddd;background:#f2f2f2;padding:14px">
		<ul>
			<li>Colegio: <b>{{ $colegio }}</b></li>
			<li>Teléfono: <b>{{ $telefono }}</b></li>
			<li>Tipo de evento: <b>{{ $tipo }}</b></li>
		</ul>
		<blockquote>{{ $mensaje }}</blockquote>
	</div>
</body>
</html>