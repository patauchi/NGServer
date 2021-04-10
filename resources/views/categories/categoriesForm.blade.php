
	@csrf
	<label> Nombre de la Categoriia
		<input type="text" name="name" value="{{ old('name', $newscategorie->name) }}">
	</label><br>

<button>{{$btnText}}</button>