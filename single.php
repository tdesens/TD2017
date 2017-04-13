@layout('master')

@section('content')
    <div id="sticky-anchor" ></div>

    <?php if (in_category('7'))  // if is category "Articles"
	{ ?>
    <div class="article" >
    </div><!-- .article -->
    
    <div class="row full-width" id="next-posts" >
    </div><!-- #next-posts -->
    
    <?php } else { ?>
    <div class="single" >
        <div class="row main" >
        	<div class="col-xs-12" >
				<?php the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>" >
					<div class="row" >
						<div class="hero" style="background-image:url( {{ the_field('feature') }} );" ></div>
					</div><!-- .row -->
					
					<div class="row" >
						<div class="wrap" >
							<div class="col-xs-12" >
								<div class="row" >
									<h1>{{ the_title() }}</h1>
								</div><!-- .row -->
								
								<div class="row" id="description" >
									<div class="col-xs-12" >
										{{ the_content() }}
									</div><!-- .col-xs-12 -->
								</div><!-- .row #description -->
								
								<div class="row" >
									<div class="col-xs-12 col-sm-4" id="challenge" >
										<h2>The Challenge</h2>
										<p>{{ the_field('challenge') }}</p>
									</div><!-- .col-xs-12 col-sm-4 #challenge -->
									
									<div class="col-xs-12 col-sm-8" id="solution" >
										<h2>The Solution</h2>
										<p>{{ the_field('solution') }}</p>
										<br />
										<a href="{{ the_field('site_link') }}" class="button">View Site</a>
									</div><!-- .col-xs-12 col-sm-8 #solution -->
								</div><!-- .row -->
								
								<div class="row" id="photos" >
									<div class="col-xs-12" >
										{{ the_field('photos') }}
									</div><!-- .col-xs-12 -->
								</div><!-- .row #photos -->
								
							</div><!-- .col-xs-12 -->
						</div><!-- .wrap -->
					</div><!-- .row -->
				</div><!-- .post #post-<?php the_ID(); ?> -->
			</div><!-- .col-xs-12 -->

        </div><!-- .row #main -->
    </div><!-- .single -->
    <?php } ?>
    
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
    
@endsection