@extends('layout')

@section('title', 'Home')


@section('content')


@auth
<section>
	<div style="height: 100px;"></div>
</section>
<section>
	<div class="container-lg" style="background-color: #666; ">
		<div class="row p-2" >
			<a class="text-white" style="padding: 5px 25px; background-color: red; border-radius: 125px;"
			href="{{ route('news.create') }}">Crear nuevo proyecto</a>
		</div>
	</div>
</section>
@endauth




<div class="container py-4 newsPosition">
	<div class="text-left font-weight-bolder">
		<div style="height: 80px;"></div>
		<h1 class="display-4">Noticias</h1>
		<nav class="navbar navbar-expand-lg">
			<button class="btn navbar-toggler text-body border" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown2" aria-expanded="false" aria-label="Toggle navigation">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown2">
				<ul class="navbar-nav" style="font-size: 12px;">
					<li class="nav-item active py-1"><a class="nav-link text-body" href="#">Climate</a></li>
					<li class="nav-item  py-1"><a class="nav-link text-body" href="#">Science</a></li>
					<li class="nav-item  py-1"><a class="nav-link text-body" href="#">Pollution</a></li>
					<li class="nav-item  py-1"><a class="nav-link text-body" href="#">Energy</a></li>
					<li class="nav-item  py-1"><a class="nav-link text-body" href="#">Wildlife</a></li>
					<li class="nav-item  py-1"><a class="nav-link text-body" href="#">Biodiversity</a></li>
					<li class="nav-item  py-1"><a class="nav-link text-body" href="#">Conservation</a></li>
					<li class="nav-item  py-1"><a class="nav-link text-body" href="#">CheckBoard</a></li>
				</ul>
			</div>

		</nav>
		<hr>

	</div>

</div>


<div class="container">
	<div class="row align-items-center" >
		<div class="col-md-6 p-5">
			<p style="font-size: 11px;">{{ $news[0]->category}}</p>

			<p style="font-size: 42px;line-height: 2.8rem;"><a href=" {{route('news.show', $news[0])}} " class="text-body">{{ $news[0]->title }}</a></p>
			<p>{{ $news[0]->description }}</p>
			<p style="color:#a1a1a1;">by {{ $news[0]->authorNews}}</p>


		</div>
		<div class="col-md-6">
			<img src="/img/news/testnews.jpg" class="img-fluid">
		</div>

	</div>
	<hr>


</div>



<div class="container py-2">
	<div class="row">
		@forelse($news as $itemnews)
		<div class="col-md-4">
			<img src="/img/news/testnews.jpg" class="img-fluid">
			<div class="text-right"><span  style="color:#a1a1a1; font-size: 11px;" >by {{$itemnews['authorNews']}}</span></div>
			<h4><a href="#"> {{$itemnews['title']}} </a></h4>
			<p>It might be possible, physicists say, but not anytime soon. And there’s no guarantee that we humans will understand the result. 6h ago</p>
		</div>
		@empty
		No hay projectos
		@endforelse

	</div>
	<hr>
</div>
{{--
<div class="container">
	<div class="row">
		<div class="col-6 col-md-3 px-2">
			<img src="/img/news/testnews.jpg" class="img-fluid">
			<h5>We Make Our Robots Less Biased Than We</h5>
		</div>
		<div class="col-6  col-md-3 px-2" >
			<img src="/img/news/testnews.jpg" class="img-fluid">
			<h5>We Make Our Robots Less Biased Than We</h5>
		</div>
		<div class=" col-6 col-md-3 px-2" >
			<img src="/img/news/testnews.jpg" class="img-fluid">
			<h5>We Make Our Robots Less Biased Than We</h5>
		</div>
		<div class="col-6  col-md-3 px-2" >
			<img src="/img/news/testnews.jpg" class="img-fluid">
			<h5>We Make Our Robots Less Biased Than We</h5>
		</div>
	</div>
	<hr>
</div> --}}



<div class="container-lg">
	<div class="row">
		<div class="col-md-6">
			<span class="font-weight-bolder" style="font-size:18px;">CONSERVATION</span>
		</div>
		<div class="col-md-6 text-right">
			<p style="font-size: 12px; "><a class="text-dark" href="#">Leer más noticias</a></p>
		</div>

	</div>



	<div class="row pt-4">

		@forelse($news as $itemnews)
		<div class="col-md-2 px-3 py-2" >
			<div class="smallNewsImg"><img src="/img/news/testnews.jpg" class="img-fluid"></div>
			<div class="smallNewsTitle"><h6><a href="#"> {{ $itemnews['title'] }} </a></h6></div>
		</div>		@empty
		No hay projectos
		@endforelse

	</div>
	<hr>
</div>

{{-- <div class="container-xl">
	<div class="row">
		<div class="col-md-6">
			<span class="font-weight-bolder" style="font-size:18px;">WILDLIFE</span>
		</div>
		<div class="col-md-6 text-right">
			<p style="font-size: 12px; "><a class="text-dark" href="#">Leer más noticias</a></p>
		</div>

	</div>
	<div class="row pt-4">
		<div class="col-md-2 px-3 py-2" >
			<div class="smallNewsImg"><img src="/img/news/testnews.jpg" class="img-fluid"></div>
			<div class="smallNewsTitle"><h6>We Make Our Robots Less Biased Than We</h6></div>
		</div>
		<div class="col-md-2 px-3 py-2" >
			<div class="smallNewsImg"><img src="/img/news/testnews.jpg" class="img-fluid"></div>
			<div class="smallNewsTitle"><h6>We Make Our Robots Less Biased Than We</h6></div>

		</div>
		<div class="col-md-2 px-3 py-2" >
			<div class="smallNewsImg"><img src="/img/news/testnews.jpg" class="img-fluid"></div>
			<div class="smallNewsTitle"><h6>We Make Our Robots Less Biased Than We</h6></div>

		</div>
		<div class="col-md-2 px-3 py-2" >
			<div class="smallNewsImg"><img src="/img/news/testnews.jpg" class="img-fluid"></div>
			<div class="smallNewsTitle"><h6>We Make Our Robots Less Biased Than We</h6></div>

		</div>
		<div class="col-md-2 px-3 py-2" >
			<div class="smallNewsImg"><img src="/img/news/testnews.jpg" class="img-fluid"></div>
			<div class="smallNewsTitle"><h6>We Make Our Robots Less Biased Than We</h6></div>

		</div>

	</div>
	<p class="text-body"><a href="#">Leer más</a></p>
</div> --}}






@endsection

