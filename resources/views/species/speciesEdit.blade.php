Modificaicones

<form class="px-5" method="POST" action="{{ route('species.update', $species) }}">
	@csrf @method('PATCH')
	<label> titulo
		<input type="text" name="name" value="{{ old('name', $species->name) }}">
	</label><br>

<button>Enviar modificacion</button>
</form>