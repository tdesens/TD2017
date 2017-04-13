@layout('master')
<?php /* Template Name: About */ ?>

@section('content')
	@wpposts
	
	<div id="about" >
		<div class="row" >
			<div class="col-xs-12" >
				<h1>Hi. I'm Taylor. </h1>
			</div><!-- .col-xs-12 -->
		</div><!-- .row -->
		
		<div class="row main-text" >
			<div class="wrap" >
				<div class="col-xs-12" >
					{{ the_content() }}
				</div><!-- .col-xs-12 -->
			</div><!-- .wrap -->
		</div><!-- .row main-text -->
		
		<div class="row" id="about-photos" >
			<div class="wrap" >
				<div class="col-xs-12" >
					<div class="row" >
						<div class="col-xs-12" >
							<div class="image-wrapper one" style="background-image:url( {{ the_field('photo_one') }} );"></div>
							<p class="caption" >Caption Here</p>
						</div><!-- .col-xs-12 -->
					</div><!-- .row -->

					<div class="row" >
						<div class="col-xs-12 col-sm-6" >
							<div class="image-wrapper two" style="background-image:url( {{ the_field('photo_two') }} );"></div>
							<p class="caption" >Caption Here</p>
						</div><!-- .col-xs-12 col-sm-6 -->

						<div class="col-xs-12 col-sm-6" >
							<div class="row" >
								<div class="col-xs-12" >
									<div class="image-wrapper three" style="background-image:url( {{ the_field('photo_three') }} );"></div>
									<p class="caption" >Caption Here</p>
								</div><!-- .col-xs-12 -->
							</div><!-- .row -->

							<div class="row" >
								<div class="col-xs-12" >
									<div class="image-wrapper four" style="background-image:url( {{ the_field('photo_four') }} );"></div>
									<p class="caption" >Caption Here</p>
								</div><!-- .col-xs-12 -->
							</div><!-- .row -->
						</div><!-- .col-xs-12 col-sm-6 -->
					</div><!-- .row -->
				</div><!-- .col-xs-12 -->
			</div><!-- .wrap -->
		</div><!-- .row #about-photos -->
		
	</div><!-- #about -->
		
   	
   	@if (get_field('footer_cta', 'options' ))

    	<div class="row" id="footer-cta" >
        	<div class="wrap" >
            	<div class="col-xs-12" >
               		<div class="main-text" >
                		{{ the_field('footer_cta', 'options') }}
					</div><!-- .main-text -->
                </div><!-- .col-xs-12 -->
            </div><!-- .wrap -->
			<div class="underlay" ></div>
        </div><!-- .row #footer-cta -->
        
 	@endif       
        
        
	@wpempty
		@include('404')
	@wpend
@endsection