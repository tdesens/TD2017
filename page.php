@layout('master')

@section('content')
	@wpposts
    	<div class="row" >
        </div><!-- .row -->

	@wpempty
		@include('404')
	@wpend
@endsection