@extends('layout')

@section('title', 'Species')


@section('content')
<h1>Species</h1>

	@forelse($projects as $itemprojects)
	<p><a href=" {{ route('species.show' , $itemprojects) }} ">{{ $itemprojects['title']}}</a></p>
@empty
No hay projectos
@endforelse

<a href=" {{ route('species.create') }} "> Crear un nuevo proyecto </a>



@endsection

