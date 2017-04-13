@layout('master')

@section('content')
	@wpposts
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<a href="{{ the_permalink() }}">{{ the_title() }}</a><br>
		</div><!-- ./col-lg-12 -->
	@wpempty
		<p>404</p>
	@wpend
@endsection