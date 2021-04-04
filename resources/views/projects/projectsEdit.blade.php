Ediciones

<form class="px-5" method="POST" action="{{ route('projects.update', $project) }}">
	@csrf @method('PATCH')
	<label> titulo
		<input type="text" name="title" value="{{ old('title', $project->title) }}">
	</label><br>
	<label> Description
		<input type="text" name="description" value="{{ old('description', $project->description) }}">
	</label>
<button>Enviar Edicion</button>
</form>