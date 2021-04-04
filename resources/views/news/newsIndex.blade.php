@extends('layout')

@section('title', 'Home')


@section('content')
<h1>News</h1>
@forelse($news as $itemnews)
	<p><a href="{{ route('news.show', $itemnews) }}">{{ $itemnews['title']}}</a></p>
@empty
No hay projectos
@endforelse

<a href=" {{ route('news.create') }} "> Crear un nuevo proyecto </a>

@endsection

