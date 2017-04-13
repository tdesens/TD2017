@layout('master')
<?php /* Template Name: Work */ ?>

@section('content')
	@wpposts
 	
 	<div id="work" >
 	
		<div class="row" id="featured-project" >
		
			<div class="carousel slide carousel-fade" data-ride="carouse" data-interval="3500" id="featured-slider" >
				<div class="carousel-inner" role="listbox" >
				
					<?php $post_objects = get_field('featured_projects');
					if( $post_objects ): $count = 0; foreach( $post_objects as $post): setup_postdata($post); ?>
							
							<div class="item <?php if($count==0){echo 'active';} ?>" >
								<a href="{{ the_permalink() }}">
								
									<div class="row feature-image" style="background-image:url( {{ the_field('feature') }} );"></div>
								
									<div class="row" >
										<div class="col-xs-12" >
											<h1 class="title">{{ the_title() }}</h1>
										</div>
									</div>
								</a>
							</div><!-- .item -->

					<?php $count++; wp_reset_postdata(); endforeach; ?> <?php endif; ?>				
					
				</div><!-- .carousel-inner -->
				
				<ol class="carousel-indicators" >
					<?php $post_objects = get_field('featured_projects');
						if( $post_objects ): $countIndicator = 0; foreach( $post_objects as $post): setup_postdata($post); ?>

						<li data-target="#featured-slider" data-slide-to="<?php echo $countIndicator ?>" class="dot <?php if($countIndicator==0){echo 'active';} ?>" ></li>

					<?php $countIndicator++; wp_reset_postdata(); endforeach; ?> <?php endif; ?>
				</ol><!-- .carousel-indicators -->
				
			</div><!-- .carousel #featured-slider-->
			
		</div><!-- .row #featured-projet -->


		<div class="row recent-work" >
			<div class="wrap" >
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
		</div><!-- .row .recent-work -->
 	
	</div><!-- #work -->

   	
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