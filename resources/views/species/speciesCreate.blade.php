Creaciones

<form class="px-5" method="POST" action="{{ route('species.store') }}">
	@csrf
	<label> titulo
		<input type="text" name="title" value="{{ old('title', $species->title) }}">
	</label><br>
	<label> Description
		<input type="text" name="description" value="{{ old('description', $species->description) }}">
	</label>
<button>Enviar</button>
</form>