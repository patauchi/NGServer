

@forelse($newscategorie as $cat)

<p><a href="{{route('categories.show', $cat)}}">{{$cat->name}}</a></p>

@empty
nada
@endforelse


