<ul>
	@foreach($items as $item)

			  @if ($item->parent_id === NULL)
			  	<li> {{ $item->title }} </li>
			  @else
			  <ul>
			  	<li> {{ $item->title }} </li>
			  </ul>
			  @endif

	@endforeach
</ul>

<?php dd($items); ?>