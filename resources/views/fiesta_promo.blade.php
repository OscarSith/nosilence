@extends('master_layout')

@section('content')
<div class="section custom-banner fiesta_promo"></div>
<section id="tline" class="page-wrapper gray" style="padding-top:0">
	<h1 class="title text-center"><img src="images/titulo_fiesta_promo.png" alt="Tu fiesta de promo" id="mypromo"></h1>
	<div class="row">
		<p class="container text-center green-custom">Celebra esos 11 años de amistad<br>con una fiesta para el recuerdo.</p>
	</div>
	<div class="row text-center">
		<div id="info_sound" class="box-info box-short" style="display:inline-block;margin-right: 20px;">
			<div class="date-icon date-icon-custom fa fa-music"></div>
			<p class="text-justify">Hemos creado servicios que reviven los momentos que pasan los alumnos en el colegio y que a su vez reafirman la amistad construida a lo largo de 11 los de convivencia.</p>
		</div>
		<div id="info_medkit" class="box-info box-short" style="display:inline-block;margin-left: 20px;">
			<div class="date-icon date-icon-custom fa fa-medkit"></div>
			<p class="text-justify">La seguridad es uno de los aspectos más importantes de nuestra producción, Tenemos a disposición un equipo profesional capaz de resolver cualquier inconveniente, entres paramédicos, agentes de seguridad y ambulancias. </p>
		</div>
	</div>
	<div class="row" id="event_line_02">
		<div class="container">
			<div class="col-sm-4 col-sm-offset-1">
				<img src="images/dj.png" alt="" id="dj">
			</div>
			<div class="col-sm-6">
				<p>Un bus te recojerá a ti y a tu prom en la puerta de tu colegio; y es aquí en donde empieza la fiesta, un Dj a bordo activará el viaje hasta nuestra residencia en donde pasarás por un túnel con cientos de fotos, desde cuando eras niño hasta tu último selfie. </p>
				<p>Podrás depositar tus recuerdos en una bóveda que abrirá sus puertas hasta en 5 años y nuestro dj oficial, dj Towa, será el responsable de la pista de baile. Y como de es costumbre,  la fiesta tendrá las mejores luces, el sonido te hará vibrar, sorprendentes efectos en la cabina del dj, además de party games para que disfrutes desde el principio, fotos y videos para Facebook.  Ahí no termina todo, la próxima reu de reencuentro la hace NOSILENCE.</p>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:3%">
		<div class="text-center">
			<br>
			<p>CATÁLOGO DE EVENTOS</p>
			<br>
			<a href="#" class="btn btn-default btn-system">DESCARGAR</a>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1" id="list-colleges">
				<h5 class="green-custom">Nuestros clientes</h5>
				<div class="col-sm-4">
					<div class="boxgrid"><img src="images/colegios/1.png" alt=""></div>
				</div>
				<div class="col-sm-4">
					<div class="boxgrid"><img src="images/colegios/2.png" alt=""></div>
				</div>
				<div class="col-sm-4">
					<div class="boxgrid"><img src="images/colegios/3.png" alt=""></div>
				</div>
				<div class="col-sm-4">
					<div class="boxgrid"><img src="images/colegios/4.png" alt=""></div>
				</div>
				<div class="col-sm-4">
					<div class="boxgrid"><img src="images/colegios/5.png" alt=""></div>
				</div>
				<div class="col-sm-4">
					<div class="boxgrid"><img src="images/colegios/7.png" alt=""></div>
				</div>
				<div class="col-sm-4">
					<div class="boxgrid"><img src="images/colegios/8.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop