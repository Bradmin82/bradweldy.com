@extends('main')

@section('title', '| About')

@section('stylesheets')

	<style>
		.BW-Services {
			position: absolute;
			top: 0px;
		}
		/*.BW-Services h2 {
			text-align: center;
			padding-right: 20px;
		}*/
		.client-info {
			margin-top: 98px;
			display: none;

			/*visibility: hidden;
			opacity: 0;
			transition: visibility 0s, opacity 5.5s linear;*/

		}
		.client-info.client-info-active {
			display: block;

			visibility: visible;
			opacity: 1;
		}
		.client-info li {
			font-size: 22px;
		}
		.about-title hr {
			margin-bottom: 0px;
		}
		.about-p {
			/*margin-top: 75px;*/
			padding-top: 30px;
			padding-bottom: 30px;
			/*background: url('/img/brad-weldy-marketing.jpg');*/
			background: url('/img/laguna_beach.jpg');
			background-size: cover;

			position: relative;
    			overflow: hidden;
			
			height: 110px;
		}
		.about-img {
			width: 100%;
			height: auto;
		}
		.about-img img {
			width: 100%;
		}		
		.about-p-blur {
			position: relative;
		    -webkit-filter: blur(5px);
		    -moz-filter: blur(5px);
		    -o-filter: blur(5px);
		    -ms-filter: blur(5px);
		    filter: blur(17px);
		    /*width: 100%;*/
		    width: 60%;
		    margin: 0 auto;
		    height: 50px;
		    background: white;
		    z-index: 1;
		}
		.about-p h4 {
			z-index: 2;
		    position: relative;
		    width: 100%;
		    margin-top: -35px;
		}
		@media (max-width: 867px) {
			.about-p-blur {
			    height: 60px;
			}
			.about-p h4 {
			    margin-top: -50px;
			}
		}
	</style>

@endsection

{{-- @section('scripts', '<script type="text/javascript">console.log("About page");</script>') --}}

@section('content')

	<div class="row">
		<div class="col-md-12 about-title">
			<h1>About Brad Weldy Marketing</h1>
            <hr />
		</div>
	</div>
	<div class="row">
    	<div class="text-center about-p">
    		<div class="about-p-blur">
			</div>
    		<h4>Brad Weldy Marketing is located in Orange County, Southern California.</h4>
    		<div class="about-img" style="position:absolute; top: 0px; left: 0px;"><img src="/img/laguna_beach.jpg"></div>

    		
    	</div>	
	    <div class="col-md-12">
	    	<div class="col-md-4 col-md-offset-1">
		        {{-- <div class="greeting about-services">
			        <div class="col-md-4"><h1><a href="/about/marketing">Marketing.</a></h1></div>
			        <div class="col-md-4"><h1><a href="/about/seo">SEO.</a></h1></div>
			        <div class="col-md-4"><h1><a href="/about/web-dev">Web-Dev.</a></h1></div>
		        </div> --}}
		        <div class="client-info client-info-active">
		        	<h2>The Lynch Group</h2>
		        	<ul>
		        		<li>Website creation</li>
		        		<li>Theme installation</li>
		        		<li>Theme customization</li>
		        		<li>Plugin installation</li>
		        		<li>Plugin customization</li>
		        	</ul>
		        </div>
		        <div class="client-info">
		        	<h2>California Pride</h2>
		        	<ul>
		        		<li>Website creation</li>
		        		<li>Theme installation</li>
		        		<li>Theme customization</li>
		        		<li>Plugin installation</li>
		        		<li>Plugin customization</li>
		        	</ul>
		        </div>
		        <div class="client-info">
		        	<h2>Fullerton Arboretum</h2>
		        	<ul>
		        		<li>Website admin</li>
		        		<li>Site customization</li>
		        		<li>Public Relations</li>
		        		<li>Digital Marketing</li>
		        	</ul>
		        </div>
		    </div>
		    <div class="col-md-7" style="margin-top: 75px; background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 24%,rgba(255,255,255,0) 98%,rgba(255,255,255,0) 100%); z-index: 5;">
		    	{{-- <div class="BW-Services col-xs-12">
		    		<h2>Our Clients</h2>
		    	</div> --}}
		    	<div class="macbook-pro">
		    		<img src="/img/macbook-pro.png" />
					<div class="client-site">
			    		<img src="/img/californiapridewindowcleaners.png" />
			    	</div>	
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-md-6 col-md-offset-2 hp-flash">
                    <h1 class="the-greet"></h1>
                </div>
		    </div>
			<div class="greeting about-services col-xs-12">
		        <hr />
		        <div class="col-xs-4 service"><h1><a href="/about/marketing">Marketing</a></h1></div>
		        <div class="col-xs-4 service"><h1><a href="/about/seo">SEO</a></h1></div>
		        <div class="col-xs-4 service"><h1><a href="/about/web-dev">Web-Dev</a></h1></div>
	        </div>

		    <div class="col-md-12 bw-cta">
		    	<hr />
		        <div class="jumbotron home-title-jumbo grafiti">
		          <h1>Brad Weldy Marketing</h1>
		          {{-- <p><a class="btn btn-primary btn-lg" href="/auth/register" role="button">Get Started</a></p> --}}
		          <p><a class="btn btn-primary btn-lg form-spacing-top" href="/contact" role="button">Get Started</a></p>
		        </div>
	    	    <div id="resume">	
	    	    	<h4>
						<a href="https://docs.google.com/document/d/1D8PKqP8oO3ifnc1J-4n78H2tf4PwK6iId3-oZaEOyX4/edit?usp=sharing" target="_blank" style="color: #0f228c;background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%,rgba(255,255,255,0.96) 3%,rgba(255,255,255,0.11) 75%,rgba(255,255,255,0) 84%,rgba(255,255,255,0) 95%,rgba(255,255,255,0) 97%); position: absolute; z-index: 5;">Resume</a>
		    		</h4>
		    	</div>
		    </div>
	    </div>

	    {{-- <div class="top-right-corner-img">
	        <img src="/img/pencil.jpg" />
	        <div class="gradient"></div>
	    </div> --}}

	</div> <!-- end of header .row -->

@endsection

@section('scripts')
    <script>
        $(function() {
            
            var macFlash = $('.macbook-pro .client-site');

            var timeout = 4800;
            var portfolioFlash = ['<img src="/img/cheryl_lynch.jpg" />', '<img src="/img/californiapridewindowcleaners.png" />', '<img src="/img/fullerton_arboretum.jpg" />'];
            var index = 0;
            var clientIndex = index + 1;
            var action = function() {
                if(macFlash.is(':hover'))
                    return;

                var clientSite = portfolioFlash[index];

                $(macFlash).fadeOut('fast', function() {
                    $(macFlash).html(clientSite);
                }).fadeIn('fast');

                if ($('.client-info-active')) {
                	$('.client-info-active').removeClass('client-info-active');
                }
                $('.client-info').eq(index).addClass('client-info-active');

                if(++index >= portfolioFlash.length)
                    index = 0;        
            };
            setInterval(action, timeout);
            action();

            function parallax() {
				var prlx_lyr_1 = $('.about-img');
				var theOffset;
				if ($(window).width() > 767) {
					theOffset = 1.5;
				} else {
					theOffset = 0.5;
				}
				var aboutImgOffset = -(window.pageYOffset * theOffset )+'px';
				prlx_lyr_1.css('top', aboutImgOffset);
			}
			window.addEventListener("scroll", parallax, false);

        });
    </script>
@endsection

