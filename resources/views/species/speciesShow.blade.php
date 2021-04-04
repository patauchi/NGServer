@extends('layout')

@section('title', 'Proycto| ')

@section('content')
	<h1> {{$species->title}} </h1>

 	<a href=" {{ route('species.edit', $species) }} "> Editar proyecto</a>


	<form  style="padding: 5px 25px; background-color: red; border-radius: 25px;"method="POST" action="{{ route('species.destroy', $species) }}">
						@csrf @method('DELETE')
						<button>Eliminar Proyecto</button>

@endsection


