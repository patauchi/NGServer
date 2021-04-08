@extends('layout')

@section('metaTitle', 'Home')

@section('content')


<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="/img/slider/forest-threatened.jpg" class="img-fluid">
			<div class="container">
				<div class="carousel-caption text-left">
					<h1>Example headline.</h1>
					<p>Some representative placeholder content for the first slide of the carousel.</p>
					<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/img/slider/plantas-andinas-en-peligro-extincion.jpg" class="img-fluid">

			<div class="container">
				<div class="carousel-caption">
					<h1>Another example headline.</h1>
					<p>Some representative placeholder content for the second slide of the carousel.</p>
					<p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/img/slider/ecosistemas-criticos-peru.jpg" class="img-fluid">

			<div class="container">
				<div class="carousel-caption text-right">
					<h1>One more for good measure.</h1>
					<p>Some representative placeholder content for the third slide of this carousel.</p>
					<p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="container-xl p-4">

	<div class="row py-4">
		<div class="col-lg-7 col-md-6">
			<h1 class="pb-3" style="font-size:20px; color: #91ab00;"> Instituto para la conservación de especies amenazadas - INESAM</h1>

			<span class="headerInpage py-2 pl-2 text-ligther" style="border-left: 2px solid #91ab00;">CONSERVACION</span>
			<h2 class="py-3" style="font-weight: 900;">HAZ LA DIFERENCIA</h2>
			<div class="row py-4">
				<div class="col-md-6">Monitorear y medir las respuestas de las especies amenazadas frente a los cambios del paisaje, son la unica forma de aegurar los resultados de los planes y acciones de conservación.</div>
				<div class="col-md-6">Cada uno de nosotros tiene un rol importante para asegurar el acceso a la biodiversidad para las generaciones futuras.</div>

			</div>
			{{-- <a class="btn btn-homeInst px-4" href="#">Detalles</a> --}}

		</div>
		<div class="col-lg-5 col-md-6 py-3">
			<img src="/img/complement/iguana-peru.jpg" class="img-fluid">
			<p class="text-right px-3 py-2" style="font-size:12px; color: #868686cc;">Foto por P. Tanimoto</p>
		</div>
	</div>

	<div class="row cardsHome cadTopup" >
		<div class="col-lg-3 col-md-4 col-4">
			<div class="bg-dark text-white">
				<img src="/img/complement/restauracion-habitat.jpg" class="card-img" alt="...">
				<div class="card-img-overlay">
					<h5 class="fontCardsMin">Restauración de Hábitat</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-4">
			<div class="bg-dark text-white">
				<img src="/img/complement/water-project.jpg" class="card-img" alt="...">
				<div class="card-img-overlay">
					<h5 class="fontCardsMin">Reservorio Aereos de Agua</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-4">
			<div class="bg-dark text-white">
				<img src="/img/complement/threatened-birds.jpg" class="card-img" alt="...">
				<div class="card-img-overlay">
					<h5 class="fontCardsMin">Especies en Peligro</h5>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid pt-5">
	<div class="row px-5 pt-4 justify-content-center">
		<div class="col-10">
			<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1t1vXA6sCu0pvHtE-5mYecf2SiCCQrrab7VCP9OgkqOE&font=Default&lang=en&initial_zoom=2&height=500' width='100%' height='500' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>

		</div>
	</div>

</div>


<div class="container-fluid text-center mx-auto py-4 rounded mx-auto shadow-sm">
	<div class="pb-4 text-center p-3 mb-5 bg-white ">
		<p class="py-4" style="font-size: 13px; color: #e35c20ed;">¿QUIERES AYUDAR?</p>
		<span class="py-4 h1Donation"> NECESITAMOS TU APOYO </span>
		<p class="py-2" style="color:#828282ff;">Toma Acción en la Conservación de la Biodiversidad</p>
		<a class="btn btn-donar px-4" href="#">DONAR</a>
	</div>
</div>


<div class="container-xl p-4">
	<div class="row py-4">
		<div class="col-md-8 col-sm-12 px-0 border mb-2">
			<div class="overflow"><img src="/img/news/{{ $news[0]->slugNews }}" class="img-fluid"> </div>
			<h6 class="text-right pt-2 pr-3" ><a style="color: #e29210;" href=" {{ route('news.index') }} "> Noticias </a></h6>
			<h3 class="font-weight-lighter px-3"> <a class="text-body" href=" {{ route('news.show', $news[0]) }} ">{{ $news[0]->title }}</a> </h3>
			<p class="font-weight-light px-3">{{ $news[0]->shortDescription }}</p>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="border p-3">
				<h4 class="font-weight-lighter text-center">Vulnerability to Climate Change</h4>
				<p class="font-weight-light ">Researchers at the Center for the Conservation of Threatened Species in Peru are developing species distribution models to estimate the risk that bird species face from climate change.</p>
			</div>
			<img src="/img/complement/aves-rojo-peru-libro.png" class="img-fluid">
		</div>
	</div>
</div>

<div class="container-lg p-4 bg-white">
	<div class="row border p-2">
		<div class="col-md-8 p-2">
			<h2 class="font-weight-lighter">Ayuda a las Aves Reforestando</h2>
			<h3 class="text-success font-weight-lighter">Las Plantas Nativas son parte de las Aves</h3>
		</div>
		<div class="col-md-4 col-sm-12">
			<img src="/img/complement/hummingbird-np-home.png" class="img-fluid">
		</div>
	</div>
</div>

@endsection

@section('lastcontent')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>

@endsection

