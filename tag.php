@layout('master')

@section('content')
	@wpposts
    	<div class="row" >
        	<p>Start each page with a row.</p>
        </div><!-- .row -->

	@wpempty
		@include('404')
	@wpend
@endsection