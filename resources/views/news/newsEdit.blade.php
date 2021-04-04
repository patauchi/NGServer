Ediciones

<form class="px-5" method="POST" action="{{ route('news.update', $news) }}">
	@csrf @method('PATCH')
	<label> titulo
		<input type="text" name="title" value="{{ old('title', $news->title) }}">
	</label><br>
	<label> Description
		<input type="text" name="description" value="{{ old('description', $news->description) }}">
	</label>
<button>Enviar Edici´øn</button>
</form>