@layout('master')
<?php /* Template Name: Contact */ ?>

@section('content')
	@wpposts
	
	<div id="contact" >
		<div class="row" >
			<div class="col-xs-12" >
				<h1>Hello. </h1>
			</div><!-- .col-xs-12 -->
		</div><!-- .row -->
		
		<div class="row main-text" >
			<div class="wrap" >
				<div class="col-xs-12" >
					{{ the_content() }}
				</div><!-- .col-xs-12 -->
			</div><!-- .wrap -->
		</div><!-- .row main-text -->
		
		<div class="row" >
			<div class="wrap" >
				<div class="col-xs-12" >
					<div class="contact-form" id="contact-form" >
						<div class="row" >
							<div class="col-xs-12 col-sm-6" >
								<div class="input-row" >
									<input type="text" name="name" id="name" required />
									<label for="name" >Your Name*</label>
								</div><!-- .input-row -->
							</div><!-- .col-xs-12 col-sm-6 -->
							
							<div class="col-xs-12 col-sm-6" >
								<div class="input-row" >
									<input type="text" name="email" id="email" required />
									<label for="email" >Your E-Mail Address*</label>
								</div><!-- .input-row -->
							</div><!-- .col-xs-12 col-sm-6 -->
						</div><!-- .row -->
						
						<div class="row" >
							<div class="col-xs-12 col-sm-6" >
								<div class="input-row" >
									<input type="text" name="company" id="company" required />
									<label for="name" >Your Company*</label>
								</div><!-- .input-row -->
							</div><!-- .col-xs-12 col-sm-6 -->
							
							<div class="col-xs-12 col-sm-6" >
								<div class="input-row" >
									<input type="text" name="phone" id="phone" required />
									<label for="phone" >Your Phone Number</label>
								</div><!-- .input-row -->
							</div><!-- .col-xs-12 col-sm-6 -->
						</div><!-- .row -->
						
						<div class="row" >
							<div class="col-xs-12" >
								<div class="input-row" >
									<textarea name="message" id="message" required ></textarea>
                                    <label for="message" >Your Message</label>
								</div><!-- .input-row -->
							</div><!-- .col-xs-12 -->
						</div><!-- .row -->
						
						<div class="row" >
							<div class="col-xs-12" >
								<div id="required-msg" >
									<p>Please complete all required fields</p>
								</div><!-- #required-msg -->
							</div><!-- .col-xs-12 -->
						</div><!-- .row -->
						
						<div class="row" >
							<div class="col-xs-12 col-sm-offset-6 col-sm-6" >
								<div class="input-row" >
								<a href="#" id="contact-submit" class="button black" >Send Message</a>
								</div><!-- .input-row -->
							</div><!-- .col-xs-12 -->
						</div><!-- .row -->
					</div><!-- .contact-form -->
					
					
					<div class="thank-you" >
						@if (get_field('thank_you', 'options'))
							<div>{{ get_field('thank_you', 'options') }}</div>
						@endif
					</div><!-- .thank-you -->
					
					<div class="hidden-form" ><?php gravity_form(8, $display_title = false, $display_description = false, $echo = true ); ?></div><!-- .hidden-form -->
					
					
					
					
					
					
				</div><!-- .col-xs-12 -->
			</div><!-- .wrap -->
		</div><!-- .row -->
		
		
	</div><!-- #contact -->
		
   	
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