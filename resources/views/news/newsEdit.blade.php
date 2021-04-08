Ediciones

<form class="px-5" method="POST" action="{{ route('news.update', $news) }}">
	@method('PATCH')
	@include('news.newsForm',['btnText'=>'Guardar Modificaciones'])
</form>