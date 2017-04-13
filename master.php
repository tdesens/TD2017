<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@if (get_field('seo_title'))
		<title>{{ get_field('seo_title') }} | {{ get_bloginfo('name') }}</title>
		<meta property="og:title" content="{{ get_field('seo_title') }} | {{ get_bloginfo('name') }}">
	@else
		<title>{{ get_bloginfo('name') }}</title>
		<meta property="og:title" content="{{ the_title() }} | {{ get_bloginfo('name') }}">
	@endif
	<meta property="og:site_name" content="{{ get_bloginfo('name') }}">
	<meta property="og:url" content="http://{{ $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] }}">
	@if (get_field('seo_image'))
		<meta property="og:image" content="{{get_field('seo_image') }}">
	@endif
	@if (get_field('seo_description'))
		<meta name="description" content="{{ get_field('seo_description') }}">
		<meta property="og:description" content="{{ get_field('seo_description') }}" />
	@endif
	@if (get_field('seo_keywords'))
		<meta name="keywords" content="{{ get_field('seo_keywords') }}" />
	@endif

	<link href="{{ get_template_directory_uri() }}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ get_template_directory_uri() }}/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ get_template_directory_uri() }}/assets/css/main.css" rel="stylesheet">

	{{ wp_head() }}
</head>

<body class="<?php if (is_admin_bar_showing()) echo 'admin'; ?>">

	<div class="container-fluid" id="header-wrapper" >
    	<div class="row" >
			<div class="wrap full" style="position:relative;" >
               <a href="<?php bloginfo('url'); ?>" class="logo" >
					<svg class="tdLogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.24 29.73"><title>taylordesens-logo</title><g id="td"><path id="t" d="M22.68,17.1l-1.22,2.53-3.27.88L11.86,34.65,13,36.06l6.73-3.41,1,2.53-8.92,4.68L7.38,34,18.05,10.13h4.78l-3.51,7.8Z" transform="translate(-7.38 -10.13)" style="fill:#fff"/><path id="d" d="M38.38,35.24L31.6,39.87l-2.92-3.95-5.8,3.95-4.34-5.95,6.58-14.67,5.75-1.46,2.29,3,4.68-10.48h4.78L31.8,34.65l1.07,1.41L37,33.24ZM29.95,20l-0.44.15L23.07,34.6l1.07,1.46,3.17-2.19L32.19,23Z" transform="translate(-7.38 -10.13)" style="fill:#000"/></g></svg>
				</a><!-- .logo -->
               
                <div id="main-menu" class="left" >
                	<ul>
                    	<li><a href="<?php bloginfo('url'); ?>/work" >Work</a></li>
                    	<li><a href="<?php bloginfo('url'); ?>/services" >Services</a></li>
                    	<li><a href="#" >Articles</a></li>
						<li><a href="#" >About</a></li>
						<li><a href="#" >Contact</a></li>
						<li class="hidden-sm hidden-md hidden-lg hidden-xl" ><a href="#" >Start A Project</a></li>
                    </ul>
                </div><!-- #main-menu -->
				
                <div class="bg-cover" ></div>
                <div class="hidden-sm hidden-md hidden-lg hidden-xl nav-toggle" >
                    <div class="three-lines" ><hr /><hr /><hr /></div>
                </div><!-- .nav-toggle -->
            </div><!-- .wrap -->
            
        	<a class="start-btn hidden-xs" >Start A Project</a>  
        	 
        </div><!--.row -->
    </div><!-- .container-fluid #header-wrapper -->
    
    <div class="container-fluid" id="body-wrapper" >
        @yield('content')
    </div><!-- .container #body-wrapper -->
     
    <div class="container-fluid" id="footer-wrapper" >
        <div class="row" id="footer" >
        	<div class="wrap" >
           		
				<div class="col-xs-12 col-sm-6 left" >
					<a href="<?php bloginfo('url'); ?>" class="logo" >
						<svg class="tdLogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.24 29.73"><title>taylordesens-logo</title><g id="td"><path id="t" d="M22.68,17.1l-1.22,2.53-3.27.88L11.86,34.65,13,36.06l6.73-3.41,1,2.53-8.92,4.68L7.38,34,18.05,10.13h4.78l-3.51,7.8Z" transform="translate(-7.38 -10.13)" style="fill:#fff"/><path id="d" d="M38.38,35.24L31.6,39.87l-2.92-3.95-5.8,3.95-4.34-5.95,6.58-14.67,5.75-1.46,2.29,3,4.68-10.48h4.78L31.8,34.65l1.07,1.41L37,33.24ZM29.95,20l-0.44.15L23.07,34.6l1.07,1.46,3.17-2.19L32.19,23Z" transform="translate(-7.38 -10.13)" style="fill:#000"/></g></svg>
					</a>
					
					<a href="#" >{{ get_field('email', 'options') }}</a>
					<p>Copyright 2017 Taylor Desens
				</div><!-- .left -->

				<div class="col-xs-12 col-sm-6 right" >
					<ul id="social-footer" >
						@if (get_field('facebook', 'options'))
							<li><a href="{{ get_field('facebook', 'options') }}" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						@endif
						@if (get_field('twitter', 'options'))
							<li><a href="{{ get_field('twitter', 'options') }}" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						@endif
						@if (get_field('instagram', 'options'))
							<li><a href="{{ get_field('instagram', 'options') }}" ><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						@endif
						@if (get_field('pinterest', 'options'))
							<li><a href="{{ get_field('pinterest', 'options') }}" ><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						@endif
					</ul><!-- #social-footer -->
					<p>Made with <i class="fa fa-heart" ></i> + <i class="fa fa-coffee" ></i> in the Ozarks</p>
				</div><!-- .right -->
			</div><!-- .wrap -->
        </div><!-- .row #footer -->
    </div><!-- .container #body-wrapper -->

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="{{ get_template_directory_uri() }}/assets/js/bootstrap.min.js" ></script>
	<script src="{{ get_template_directory_uri() }}/assets/js/min/analytics.js" ></script>
	<script src="{{ get_template_directory_uri() }}/assets/js/jquery.lazyload.min.js" ></script>
	<script src="{{ get_template_directory_uri() }}/assets/js/min/main-min.js" ></script>
    
	{{ wp_footer() }}
</body>
</html>