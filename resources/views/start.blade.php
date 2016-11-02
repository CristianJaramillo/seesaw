{{-- SETUP PAGE --}}
@if(isset($page))
	
	{{-- LAYOUT --}}
	@if(isset($page->layout))
		@extends($page->layout)
	@endif

	{{-- LANG --}}
	@if(isset($page->lang))
		@section('lang')
			{{ $page->lang }}
		@endsection
	@endif

	{{-- TITLE --}}
	@if(isset($page->title))
		@section('title')
			{{ $page->title }}
		@endsection
	@endif

	{{-- AUTHOR --}}
	@if(isset($page->author))
		@section('author')
			{{ $page->author }}
		@endsection
	@endif

	{{-- DESCRIPTION --}}
	@if(isset($page->description))
		@section('description')
			{{ $page->description }}
		@endsection
	@endif

	{{-- APP --}}
	@if(isset($page->content))
		@if(!is_null($page->content))
			@include($page->content)
		@endif
	@endif
	
@endif