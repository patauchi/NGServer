






	@forelse($news as $item)
		<h1>{{$item->title}}</h1> <small>{{$item->newscategory->name}}</small>
		<br>
		@forelse($item->projects as $project)

		<h5>{{$project->title}}</h5>

		@empty
		nada

		@endforelse


	@empty
		nada
	@endforelse