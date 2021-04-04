@extends('layout')

@section('title', 'Proycto| ')

@section('content')
	<h1> {{$project->title}} </h1>

	<a href=" {{ route('projects.edit', $project) }} "> Editar proyecto</a>


	<form  style="padding: 5px 25px; background-color: red; border-radius: 25px;"method="POST" action="{{ route('projects.destroy', $project) }}">
						@csrf @method('DELETE')
						<button>Eliminar Proyecto</button>

@endsection


