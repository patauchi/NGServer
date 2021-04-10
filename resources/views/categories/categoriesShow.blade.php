	<h1> {{$newscategorie->name}} </h1>

 	<a href=" {{ route('categories.edit', $newscategorie) }} "> Editar proyecto</a>


	<form  style="padding: 5px 25px; background-color: red; border-radius: 25px;"method="POST" action="{{ route('categories.destroy', $newscategorie) }}">
						@csrf @method('DELETE')
						<button>Eliminar Proyecto</button>
