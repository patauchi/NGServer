@extends('layout')

@section('title', 'Noticia| ')

@section('content')
	<h1> {{$news->title}} </h1>
	<a href=" {{route('news.edit', $news)}} ">Editar noticia</a>

		<form  style="padding: 5px 25px; background-color: red; border-radius: 25px;"method="POST" action="{{ route('news.destroy', $news) }}">
						@csrf @method('DELETE')
						<button>Eliminar Noticia</button>

@endsection

