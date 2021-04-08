@extends('layout')

@section('title', 'Home')


@section('content')
<h1>Proyectos</h1>
	@forelse($projects as $itemprojects)
	<p><a href=" {{ route('projects.show' , $itemprojects) }} ">{{ $itemprojects['title']}}</a></p>
@empty
No hay projectos
@endforelse

<a href=" {{ route('projects.create') }} "> Crear un nuevo proyecto </a>






















@endsection

