@extends('layout')
@section('metaTitle', $news->metaTitle)
@section('metaDescription', $news->metaDescription)

{{-- Tags OG--}}
@section('ogurl',  route('news.show', $news) )
@section('ogtype', 'Article')
@section('ogtitle', $news->title)
@section('ogdescription', $news->shortDescription)
@section('ogimage',  route('home'). '/img/news/' .$news->slugImage))


@section('content')
@auth
<section>
	<div style="height: 100px;"></div>
</section>

<section class="py-2">
	<div class="container-lg" style="background-color: #666;">
		<div class="row p-2 justify-content-end" >
			<a class="text-white " style="padding: 5px 25px; background-color: red; border-radius: 25px; margin-right: 30px;"
			 href="{{ route('news.edit', $news) }}">Editar Noticia</a>
		</div>
	</div>
</section>
<section class="py-1">
	<div class="container-lg" style="background-color: #666;">
		<div class="row p-2 justify-content-end" >
			<div class="col-3 text-center">
				<form  style="padding: 5px 10px; background-color: red; border-radius: 25px;"method="POST" action="{{ route('news.destroy', $news)}}">
						@csrf @method('DELETE')
						<button>Eliminar Noticia</button></div>
			</form>
		</div>
	</div>
</section>
@endauth




<div class="container">
	<div class="row align-items-center">
		<div class="col-md-7">
			<img src="...>" class="img-fluid">
			<div class="pl-2 pr-1">
				<span class="text-right" style="font-size: 13px;">{{$news->titleImage}}</span>
				<p class="text-uppercase font-weight-light pt-2" style="color:#a1a1a1; letter-spacing: 3px; font-size: 14px;" >Fotografía por {{$news->authorImage}}</p>
			</div>
		</div>
		<div class="col-md-5">
			<p class="font-weight-lighter pb-5 pt-3" style="font-size: 18px;">{{$news->category}}</p>
			<h1 class="font-weight-bold">{{$news->title}} </h1>
			<p  style="font-size: 18px;" class="font-weight-light">{{$news->subtitle}}</p>
		</div>
	</div>

</div>


<div class="container">
	<div class="row">
		<div class="col-md-7 offset-md-1">
			<div class="row pt-5">
				<div class="col-md-7">
					<span class="text-uppercase  font-weight-light" style="letter-spacing: 2px; font-size: 12px;" > Por:
						<span class="font-weight-bold"> {{$news->authorNews}}</span>
					</span>
				</div>
				<div class="col-md-5 text-right">
					<span>Facebook</span>
				</div>
			</div>
		</div>
		<hr class="m-1">
		<div class="text-uppercase pt-4 pb-5 font-weight-light" style="color:#a1a1a1; letter-spacing: 2px; font-size: 12px;" >Publicado: {{$news->created_at}}</div>
		<div style="font-size: 18px;">{{$news->largeDescription}}</div>
	</div>
</div>
</div>

{{--
<div class="container">
	<hr>
	<h4 class="py-4 font-weight-bold">READ THIS NEXT</h4>
	<div class="row justify-content-center align-items-center">
		<div class="col-md-5">
			<img src="/img/news/testnews.jpg" class="img-fluid">
		</div>
		<div class="col-md-5">
			<span class="pb-3 pt-2" style="color:#a1a1a1; letter-spacing: 1px;">CONSERVATION</span>
			<h2><a class="text-body" href="#">Como contribuir con la reducción de la huella ecológica</a></h2>
			<p style="font-size: 18px;">Como contribuir con la reducción de la huella ecológicaComo contribuir con la reducción de la huella ecológica</p>
		</div>
	</div>
	<div class="row t-4">
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-6">
					<img src="/img/news/testnews.jpg" class="img-fluid">
				</div>
				<div class="col-md-6">
					<span  style="color:#a1a1a1; letter-spacing: 1px; font-size: 12px;">CONSERVATION</span>
					<h5>Hola como estassd asdsadasd</h5>
				</div>

			</div>
		</div>
	</div>
</div> --}}

@endsection

