Creaciones

<form class="px-5" method="PATCH" action="{{ route('news.store') }}">
	@csrf
	<label> titulo
		<input type="text" name="title" value="{{ old('title', $news->title) }}">
	</label><br>
	<label> Description
		<input type="text" name="description" value="{{ old('description', $news->description) }}">
	</label>
<button>Enviar</button>
</form>