Modificaicones

<form class="px-5" method="POST" action="{{ route('species.update', $species) }}">
	@csrf @method('PATCH')
	<label> titulo
		<input type="text" name="title" value="{{ old('title', $species->title) }}">
	</label><br>
	<label> Description
		<input type="text" name="description" value="{{ old('description', $species->description) }}">
	</label>
<button>Enviar modificacion</button>
</form>