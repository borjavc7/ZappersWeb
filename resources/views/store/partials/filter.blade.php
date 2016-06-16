<div class="panel panel-default text-center">
  <div class="panel-body">
  		<a class="category" href="{{route('home')}}">Todos</a>
    	@foreach($categories as $category)
			<a class="category" href="{{route('homeFilter', $category->id)}}">
			{{ $category->name }}
			</a>
		@endforeach

  </div>
</div>
