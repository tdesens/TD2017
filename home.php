@layout('master')
<?php /* Template Name: Home */ ?>

@section('content')
	@wpposts
  	
  	<div class="row" id="home-hero" >
  		<div class="wrap" >
  			<div class="col-xs-12" >
  				<div class="main-text" >
  					{{ the_field('row_1_text') }}
				</div><!-- .main-text -->
			</div><!-- .col-xs-12 -->
			
			<div class="col-xs-12" >
				<div class="main-text" >
					{{ the_field('row_1_img') }}
				</div><!-- .main-text -->
			</div><!-- .col-xs-12 -->
		</div><!-- .wrap -->
	</div><!-- .row #home-hero -->
  	
  	<div class="row" id="services-cta" >
  		<div class="wrap" >
  			<div class="col-xs-12" >
  				<div class="main-text" >
  					{{ the_field('services_cta') }}
				</div><!-- .main-text -->
			</div><!-- .col-xs-12 -->
		</div><!-- .wrap -->
		<div class="underlay" ></div>
	</div><!-- .row #services-cta -->
  	
  	<div class="row recent-work" >
  		<div class="wrap" >
		<h1>Recent Work</h1>
			@wpquery(array('post_type' => 'post', 'orderby' => 'date', 'cat'=> '5', 'order' => 'DESC', 'showposts' => '15' ))
				<?php if(get_field('feature') ): ?>
					<div class="thumb-wrapper" >
						<a href="{{ the_permalink() }}" class="project-thumb" >
							<img class="lazy" data-original="{{ the_field('feature'); }}" src="{{ get_template_directory_uri() }}/assets/images/td_lazy.jpg" />
						</a><!-- .project-thumb -->
						<a href="{{ the_permalink() }}" class="project-link" >{{ the_title() }}</a>
					</div><!-- .thumb-wrapper -->
				<?php endif; ?>
			   <?php wp_reset_query(); ?>                                    
			@wpempty
			@wpend
		</div><!-- .wrap -->
	</div><!-- .row recent-work -->

   	
   	@if (get_field('footer_cta', 'options' ))

    	<div class="row pink" id="footer-cta" >
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