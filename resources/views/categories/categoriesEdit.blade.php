<form class="px-5" method="POST" action="{{ route('categories.update', $newscategorie) }}">
	@method('PATCH')

	@include('categories.categoriesForm', ['btnText'=>'Modificar Categoria'])

</form>
