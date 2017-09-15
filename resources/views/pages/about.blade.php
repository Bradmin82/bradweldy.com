@extends('main')

@section('title', '| About')

@section('content')

	<div class="row">
	    <div class="col-md-12">
	    	<h4>
	    		<a href="BradWeldyResumeR2017.pdf" target="_blank" style="color: #0f228c;background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%,rgba(255,255,255,0.96) 3%,rgba(255,255,255,0.11) 75%,rgba(255,255,255,0) 84%,rgba(255,255,255,0) 95%,rgba(255,255,255,0) 97%);">Resume</a>
	    	</h4>
	    	<div class="col-md-5">
		        <div class="greeting grafiti">
			        <h1>Eloquent.</h1>
			        <h1>Clean.</h1>
			        <h1>Effective.</h1>
		        </div>
		    </div>
		    <div class="col-md-7" style="margin-top: 75px; background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 24%,rgba(255,255,255,0) 98%,rgba(255,255,255,0) 100%); z-index: 5;">
		    	<div class="macbook-pro">
		    		<img src="/img/macbook-pro.png" />
					<div class="client-site">
			    		<img src="/img/californiapridewindowcleaners.png" />
			    	</div>	
		    	</div>
		    </div>
		    <div class="col-md-12">
		        <div class="jumbotron home-title-jumbo grafiti">
		          <h1>Brad Weldy Marketing</h1>
		          <p><a class="btn btn-primary btn-lg" href="/auth/register" role="button">Get Started</a></p>
		        </div>
		    </div>
	    </div>

	    <div class="top-right-corner-img">
	        <img src="/img/pencil.jpg" />
	        <div class="gradient"></div>
	    </div>

	</div> <!-- end of header .row -->

@endsection