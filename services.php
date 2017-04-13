@layout('master')
<?php /* Template Name: Services */ ?>

@section('content')
	@wpposts
 	
 	<div id="services" >
 		<div class="row" >
			<div class="col-xs-12" >
				<h1>Problem Solved.</h1>
			</div><!-- .col-xs-12 -->
		</div><!-- .row -->
		
 		<div class="row main-text" >
 			<div class="wrap" >
 				<div class="col-xs-12" >
					{{ the_content() }}
				</div><!-- .col-xs-12 -->
			</div><!-- .wrap -->
		</div><!-- .row .main-text" -->
		
<div class="panel-group" id="services-accordion" role="tablist" aria-multiselectable="true">
	<div class="row" id="service-intro" >
		<div class="wrap" >
			<?php if( have_rows('services')): while( have_rows('services') ): the_row(); ?>
				<div class="col-xs-12 col-sm-4 intro" id="{{ get_sub_field('teaser_btn') }}" >
					<h2>{{ get_sub_field('teaser_header') }}</h2>
					<p>{{ get_sub_field('teaser_text') }}</p>
					<a role="button" data-toggle="collapse" data-parent="#services-accordion" href="#details-{{ get_sub_field('teaser_btn') }}" aria-expanded="false" aria-controls="details-{{ get_sub_field('teaser_btn') }}" >{{ get_sub_field('teaser_btn') }}</a>
				</div><!-- .col-xs-12 col-sm-4 -->
			<?php endwhile; endif; ?>
		</div><!-- .wrap -->
	</div><!-- .row #service-opts -->

	<div class="row" id="service-details" >
		<?php if( have_rows('services')): while( have_rows('services') ): the_row(); ?>
			<div id="details-{{ get_sub_field('teaser_btn') }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{ get_sub_field('teaser_btn') }}" >
				<div class="row service-details" >
					<div class="wrap" >
						<h3>{{ get_sub_field('service_header') }}</h3>
						<p>{{ get_sub_field('service_description') }}</p>
						<ul>
							<?php if( have_rows('service_list')): while( have_rows('service_list') ): the_row(); ?>
							<li>{{ get_sub_field('service_item') }}</li>
							<?php endwhile; endif; ?>
						</ul>
					</div><!-- .wrap -->
				</div><!-- .row .service-details --> 

				<div class="row recent-work" >
					<div class="wrap" >
						<h1>Recent Work</h1>
						<?php if(have_rows('related_projects')): ?>
						<?php while (have_rows('related_projects')): the_row(); ?>

							<div class="thumb-wrapper" >
								<?php $post_object = get_sub_field('related');  ?>
								<?php if( $post_object ):  // extract post data from the repeater subfield // ?>
									<?php $post = $post_object; setup_postdata( $post ); ?>

									<a href="{{ the_permalink() }}" class="project-thumb" >
										<img class="lazy" data-original="{{ the_field('feature'); }}" src="{{ get_template_directory_uri() }}/assets/images/td_lazy.jpg" />
									</a><!-- .project-thumb -->
									<a href="{{ the_permalink() }}" class="project-link" >{{ the_title() }}</a>

									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							</div><!-- .thumb-wrapper -->

						<?php endwhile; ?>
						<?php endif; ?>
					</div><!-- .wrap -->
				</div><!-- .row .recent-work -->

			</div><!-- .col-xs-12 col-sm-4 details -->
		<?php endwhile; endif; ?>
	</div><!-- .row #service-details -->
</div><!-- #services-accordion -->
		
	</div><!-- #services -->

   	
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