Creaciones

<form class="px-5" method="POST" action="{{ route('categories.store') }}">
	@include('categories.categoriesForm', ['btnText'=>'Crear Categoria'])
</form>
