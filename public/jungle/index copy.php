<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

/*Check nav on last dated version to fix rocket docking in jquery*/


body{ background: #111; margin: 0px; }
div#banner{
	width: 100%;
	height: 500px;
	margin: 0px auto;
	background-color: #000;
	background-image: url(http://bradweldy.com/space/star2.png), url(http://bradweldy.com/space/star1.png);
	background-position: 0px 0px, 0px 0px;
	background-repeat: no-repeat, repeat-x, repeat-x;
	animation: animate-background linear 30s infinite;
}
@keyframes animate-background {
	from { background-position: 0px 0px, 0px 0px;  } 
	to { background-position: -500px 0px, -1000px 0px; }
}
#planet-marketing {
	/*width: 100%;
	height: 100%;*/
	margin: 0px auto;
	
	position: absolute;
	top:0px;

	top: 120px;
	/*right: -10%;*/

	animation: space-background-planet linear 30s infinite;
}
#planet-marketing img {
	position: absolute;
	/*top: 120px;*/
	width: 350px;
	/*right: -300px;*/
	/*animation-name: space-background-planet;	*/
}
@keyframes space-background-planet {
	from { right: -1%;  } 
	to { right: 120%; }
}
.space-bg {
	width: 100%;
	height: 100%;
	margin: 0px auto;
	background-color: #000;
	background-image: url(http://bradweldy.com/space/star2.png), url(http://bradweldy.com/space/star1.png);
	background-position: 0px 0px, 0px 0px;
	background-repeat: repeat, repeat;
	animation: space-background linear 30s infinite;
}
@keyframes space-background {
	from { background-position: 0px 0px, 0px 0px;  } 
	to { background-position: 0px -500px, 0px -1000px; }
}

/*#banner img {
	transform: rotate(90deg);
}*/
#rocket img {
	/*transform: rotate(90deg);*/
}
#rocket {
	position: absolute;
	top: 0px;
	margin-top: 200px;
	z-index: 10;

	transform: rotate(90deg);
}
/*Doesn't work PROPERLY*/
/****************************	Must remove animation from .dock-in-nav and add it to a class that gets removed*******/
#rocket.dock-in-nav {
	text-align: center;
	position: fixed;
	margin-top: 0px;
	transform: rotate(180deg);
}
#rocket.docking-in-nav, 
#rocket.dock-in-nav-scrolled {	
	/*margin: 0px;
	width: 100%;*/
	text-align: center;

	position: fixed;
	animation-duration: .75s;
	animation-fill-mode: forwards;
	animation-name: dock-rocket;
}
@keyframes dock-rocket {
	from { margin-top: 200px; transform: rotate(90deg);  } 
	to { margin-top: 0px; transform: rotate(180deg); }
}

/*Doesn't work PROPERLY*/
#rocket.rocket-bump-margin {
	animation-duration: 0.75s;
	animation-fill-mode: forwards;
	animation-name: rocket-nova-marg;

	/*margin-top: 0px;*/
	transform: rotate(180deg);
	/*top: 150px;*/
	/*top: 0px;*/
}
@keyframes rocket-nova-marg {
	from { top: 0px; transform: rotate(180deg); } 
	50% { top: 150px; transform: rotate(180deg); }
	to { top: 0px; transform: rotate(180deg); }
}
nav#main-nav {
	position: fixed;
    width: 100%;
    margin-top: 20px;
    top: 0px;
    z-index: 10;
}
nav .nav-orb {
	width: 100px;
	height:100px;
	background: rgba(0,0,255,0.6);
	border-radius: 50%;
	display: inline-block;
	/*z-index: 20;*/
	margin: 0 6.5%;

	text-align: center;
	vertical-align: middle;
	padding-top: 2.5em;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
}
nav .nav-orb:nth-child(2) {
	padding-top: 2em;
}
nav ul {
	padding: 0px;
	margin: 0 auto;
	text-align: center;
}


/*TEST********************/
@keyframes roundandround {
  to {
    transform: rotateX(360deg) rotateY(360deg);
  }
}

@keyframes show {
  to {
    opacity: 1;
  }
}

body {
  background-color: #000000;
  max-width: 100%;
  overflow-x: hidden;
}
.scene {
  width:600px;
  height:600px;
  /*margin:2% auto;*/
  margin: -250px auto 0px auto;
  perspective: 10px;
  /*perspective: 1000px;*/
  visibility: hidden;

  position: fixed;
  top: 230px;
}
.scene.show {
	visibility: visible;
}
.wrapper {
  width:100%;
  height:100%;
  transform: rotateX(45deg) rotateY(45deg);
  transform-style: preserve-3d;
}
.ball {
  position: relative;
  width: 70%;
  height: 70%;
  margin:0 auto;
  transform-style:  preserve-3d;
  animation: roundandround 3.5s 0s infinite linear;
}
.ball .ring {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border:6px;
  border-style: dashed;
  border-radius: 50%;
  opacity: 0;
  animation: show 0.25s forwards ease-in-out;
  list-style: none;
}
.ring:nth-child(1) {
  color:#8df435;
  transform: rotateY(4deg);
  animation-delay: 0s;
}
.ring:nth-child(2) {
  color:#a8e526;
  transform: rotateY(8deg);
  animation-delay: 0.01s;
}
.ring:nth-child(3) {
  color:#c2d11c;
  transform: rotateY(12deg);
  animation-delay: 0.02s;
}
.ring:nth-child(4) {
  color:#c8cb1b;
  transform: rotateY(16deg);
  animation-delay: 0.03s;
}
.ring:nth-child(5) {
  color:#deb21a;
  transform: rotateY(20deg);
  animation-delay: 0.04s;
}
.ring:nth-child(6) {
  color:#ef9621;
  transform: rotateY(24deg);
  animation-delay: 0.05s;
}
.ring:nth-child(7) {
  color:#f29122;
  transform: rotateY(28deg);
  animation-delay: 0.06s;
}
.ring:nth-child(8) {
  color:#fb7430;
  transform: rotateY(32deg);
  animation-delay: 0.07s;
}
.ring:nth-child(9) {
  color:#fe5944;
  transform: rotateY(36deg);
  animation-delay: 0.08s;
}
.ring:nth-child(10) {
  color:#fe5548;
  transform: rotateY(40deg);
  animation-delay: 0.09s;
}
.ring:nth-child(11) {
  color:#f83d61;
  transform: rotateY(44deg);
  animation-delay: 0.1s;
}
.ring:nth-child(12) {
  color:#ec2b7d;
  transform: rotateY(48deg);
  animation-delay: 0.1s;
}
.ring:nth-child(13) {
  color:#e82983;
  transform: rotateY(52deg);
  animation-delay: 0.1s;
}
.ring:nth-child(14) {
  color:#d41e9f;
  transform: rotateY(56deg);
  animation-delay: 0.09s;
}
.ring:nth-child(15) {
  color:#bd1aba;
  transform: rotateY(60deg);
  animation-delay: 0.08s;
}
.ring:nth-child(16) {
  color:#b81ac0;
  transform: rotateY(64deg);
  animation-delay: 0.07s;
}
.ring:nth-child(17) {
  color:#9c1fd7;
  transform: rotateY(68deg);
  animation-delay: 0.06s;
}
.ring:nth-child(18) {
  color:#802aea;
  transform: rotateY(72deg);
  animation-delay: 0.05s;
}
.ring:nth-child(19) {
  color:#7a2dee;
  transform: rotateY(76deg);
  animation-delay: 0.04s;
}
.ring:nth-child(20) {
  color:#5f40f9;
  transform: rotateY(80deg);
  animation-delay: 0.03s;
}
.ring:nth-child(21) {
  color:#4657fe;
  transform: rotateY(84deg);
  animation-delay: 0.02s;
}
.ring:nth-child(22) {
  color:#425cfe;
  transform: rotateY(88deg);
  animation-delay: 0.01s;
}
.ring:nth-child(23) {
  color:#2f77fb;
  transform: rotateY(92deg);
  animation-delay: 0s;
}
/*END TEST******************/
.section {
	padding-top: 10%;
}
.section h1 {
	/*vertical-align: middle;*/
}
.section .circle {
	width: 500px;
	height: 500px;
	border-radius: 100%;
	background: rgba(0,0,255,0.4);
	color: #fff;
	text-align: center;
	margin: 50px auto;

	padding-top: 50px;
    box-sizing: border-box;
}
.circle a {
	color: #fff;
	text-decoration: none;
}
@font-face {
    font-family: stranger;
    src: url(http://bradweldy.com/space/itc-benguiat-bold.otf);
    font-weight:700;
}
#brand {
	font-family: stranger;
	text-align: center;
	margin-top: 25px;
}
.brand {
	text-align: center;
}
.strokeme
{
	display: inline-block;
	font-size: 50px;
	text-transform: uppercase;

	-webkit-text-stroke: 2px #ad3232;

    color: #000;
    /*text-shadow:
    -2px -2px 0 #ad3232,
    2px -2px 0 #ad3232,
    -2px 2px 0 #ad3232,
    2px 2px 0 #ad3232;*/
}
.brand.strokeme h1 {
	font-size: 50px;
	border-top: 2px #000;
	margin-bottom: 0px;
	/*padding-left: 45px;*/

	letter-spacing: 2px;
	transform: scale(1, 1.25);
	  -webkit-transform: scale(1, 1.25); /* Safari and Chrome */
	  -moz-transform: scale(1, 1.25); /* Firefox */
	  -ms-transform: scale(1, 1.25); /* IE 9+ */
	  -o-transform: scale(1, 1.25);
}

.brand.strokeme h2 {
	font-size: 40px;
	/*-webkit-margin-before: 0px;*/
	margin-top: 0px;
	/*padding-left: 45px;*/

	letter-spacing: 2.5px;
	transform: scale(1, 1.5);
	  -webkit-transform: scale(1, 1.5); /* Safari and Chrome */
	  -moz-transform: scale(1, 1.5); /* Firefox */
	  -ms-transform: scale(1, 1.5); /* IE 9+ */
	  -o-transform: scale(1, 1.5);
}

.brand.strokeme h1 .brand-end {
	font-size: 70px;
	position: relative;
	top: 13px;

	/*padding-bottom: 10px;*/
    border-bottom: 2px solid #ad3232;
}
.brand.strokeme h1 .brand-end.brand-end-Y {
	margin-left: -5px;
}
.brand-inner-wrapper {
	position: relative;
	padding-top: 20px;
	/*border-top: double 2px #ad3232;*/
}
.brand-logo-top-bar {
	width: 100%;
	margin-bottom: -.8em;
    height: 2px;
    background: #000;
    border: 2px solid #ad3232;
    border-radius: 5px;
}

</style>
<script type="text/javascript">
	$(function() {

		var winHeight = $(window).height();
		var winWidth = $(window).width();
		$(window).scrollTop(0);

		$('.section').css('height', winHeight);
		
		$('#brand').css('height', (winHeight - 500));
		//Center logo within #brand element
		var brandHeight = $('#brand').height();
		var logoHeight = $('#brand .brand-inner-wrapper').height();
		var wrapPad = (brandHeight - logoHeight) / 2;
		$('#brand .brand-inner-wrapper').css('paddingTop', wrapPad);
		//
		var rocketPosition = (winWidth - 128) / 2
		$('#rocket').css('marginLeft', rocketPosition);

		console.log('jquery running! windowHeight: ' + winHeight + 'windowWidth' + winWidth);

		var rocketClicked = 0;
		var rocketClickedBool = false;

		var marketingTop = $('#marketing').offset().top;
		var webdevTop = $('#web-dev').offset().top;
		var portfolioTop = $('#portfolio').offset().top;
		var contactTop = $('#contact').offset().top;

		function scrollRockDoc() {
			//console.log('scrollRockDoc(' + $("html").pageYOffset + ') in action');
			

			// if($(this).hasClass('marketing')) {
			// 	$(window).scrollTop(marketingTop);
			// 	rocketClicked = 2;
			// 	console.log(marketingTop);
			// } else if ($(this).hasClass('web-dev')) {
			// 	$(window).scrollTop(webdevTop);
			// 	rocketClicked = 3;
			// 	console.log(webdevTop);
			// } else if ($(this).hasClass('portfolio')) {
			// 	$(window).scrollTop(portfolioTop);
			// 	rocketClicked = 4;
			// 	console.log(portfolioTop);
			// }else {
			// 	$(window).scrollTop(contactTop);
			// 	rocketClicked = 0;
			// 	console.log(contactTop);
			// }
		}

		$('#main-nav .nav-orb').on('click', function() {
			if($(this).hasClass('marketing')) {
				//$(window).scrollTop(marketingTop);
				$('html, body').animate({ scrollTop: marketingTop}, 1500).delay(1000);
				rocketClicked = 2;
				console.log(marketingTop);
			} else if ($(this).hasClass('web-dev')) {
				//$(window).scrollTop(webdevTop);
				$('html, body').animate({ scrollTop: webdevTop}, 1500).delay(1000);
				rocketClicked = 3;
			} else if ($(this).hasClass('portfolio')) {
				//$(window).scrollTop(portfolioTop);
				$('html, body').animate({ scrollTop: portfolioTop}, 1500).delay(1000);
				rocketClicked = 4;
			}else {
				//$(window).scrollTop(contactTop);
				$('html, body').animate({ scrollTop: contactTop}, 1500).delay(1000);
				rocketClicked = 0;
			}
		});
		
		function rocketBump() {
			//rocketClickedBool = true;
			$('#rocket').toggleClass('rocket-bump-margin');
			setTimeout(function(){
					$('#rocket').toggleClass('rocket-bump-margin');
				}, 750);
		}
		$('#rocket').on('click', function rocketClick() {
			$(this).addClass('dock-in-nav').addClass('docking-in-nav');
			setTimeout(function(){
					$('#rocket').removeClass('docking-in-nav');
				}, 750);
			rocketClickedBool = true;
			rocketClicked ++;

			console.log(rocketClicked + ' rocket clicks.  5th click = contact\nrocketClickedBool = ' + rocketClickedBool);

			var sceneXAxis = (winWidth - 600) / 2;
			$('.scene').css('left', sceneXAxis);
			// $('#banner').fadeOut(1000);
			// if($('#rocket').hasClass('rocket-bump-margin') && rocketClicked > 1) {
			// 	$('#rocket').removeClass('rocket-bump-margin');
			// }

			if(rocketClicked >= 1) {
				if(rocketClicked == 1) {	
					$('#banner').fadeOut();
					//$(window).scrollTop(marketingTop);

					// $(window).animate({
				 //        scrollTop: 0
				 //    }, 1500);

					$(window).scrollTop(0);
					$('#banner').fadeIn(2000);
					//rocketBump();
				} else if(rocketClicked == 2) {
					$('html, body').animate({ scrollTop: marketingTop}, 1500).delay(1000);
					rocketBump();
				} else if(rocketClicked == 3) {
					$('html, body').animate({ scrollTop: webdevTop }, 1500).delay(1000);
					rocketBump();
				} else if(rocketClicked == 4) {
					$('html, body').animate({ scrollTop: portfolioTop }, 1500).delay(1000);
					rocketBump();
					// $(window).scrollTop(portfolioTop);
				} else if(rocketClicked == 5) {
					$('html, body').animate({ scrollTop: contactTop }, 1500).delay(1000);
					rocketBump();
					//$(window).scrollTop(contactTop);
					rocketClicked = 0;
				}
			}

			$('.scene').addClass('show');
				setTimeout(function(){
					$('.scene').removeClass('show');
				}, 900);

			
		});

			function scrollDock() {

				// $('html, body').animate({
			 //        scrollTop: $( 'XXXXXXXXXXXXXX' ).offset().top
			 //    }, 750);



				if(window.pageYOffset >= 1 && rocketClickedBool == false && $('#rocket').offset().top != 0) {
					$('#rocket').addClass('dock-in-nav-scrolled');
					//var rocketClicked = rocketClicked + 1;
					scrollRockDoc();
					//Changing the var rocketClicked messes up how it actually scrolls into position.
				} else {
					$('#rocket').removeClass('dock-in-nav-scrolled');
					//rocketClicked = 0;
				}


			}
			window.addEventListener("scroll", scrollDock, false);



	});
</script>
</head>
<body>
	<nav id="main-nav">
		<ul>
			<li class="nav-orb marketing"><div>Marketing</div></li>
			<li class="nav-orb web-dev"><div>Web Development</div></li>
			<li class="nav-orb portfolio"><div>Portfolio</div></li>
			<li class="nav-orb contact"><div>Contact</div></li>
		</ul>
	</nav>
  <div id="banner"></div>
  <div id="planet-marketing">
  	<img src="http://bradweldy.com/space/planet1.png" />
  </div>
  <div id="rocket">
    <img src="http://bradweldy.com/space/rocket.png" alt="rocket" style="">
  </div>
  <div class="scene">
	  <div class="wrapper">
	    <ul class="ball">
	      <?php 
	      	for($i = 0; $i < 23; $i++) {
	      		echo '<li class="ring ' . $i . '"></li>';
	      	}
	      ?>
	    </ul>
	  </div>
	</div>
	<div id="brand">
		<div class="brand strokeme">
			<div class="brand-inner-wrapper">
				<div class="brand-logo-top-bar"></div>
				<h1><span class="brand-end brand-end-B">B</span>rad Weld<span class="brand-end brand-end-Y">y</span></h1>
				<h2>Marketing</h2>
			</div>
		</div>
	</div>
	<div id="sections" class="space-bg">
		<div id="marketing" class="section">
			<div class="circle">
				<h1>Marketing</h1>
				<h4>Digital marketing expertise that revolves around your business.</h4>
				<p>It is all about cost-effectively attracting qualified shoppers and buyers to your website. When your Digital Marketing solar system is aligned with your business goals, no other marketing investment offers a better ROI due to its speed, accuracy and efficiency. Digital Marketing programs (also known as Online Marketing or Internet Marketing) typically include a combination of SEO, PPC, Content creation, Video, Mobile tactics and Social Media participation. Email marketing, programmatic media and CRM automation are typically woven into these programs. The optimal combination is somewhat different for every client and will change as situations change.</p>
				<h4>Market Research</h4>
				<p>Reduce risk and gain insights with decision focused research.</p>
			</div>
		</div>
		<div id="web-dev" class="section">
			<div class="circle">
				<h1>Web Development</h1>
				<h4>Meet your High-Performance 24-7 Digital Marketing Sales Force</h4>
				<p> When you consider that your website never sleeps and it sees more prospects and customers than your entire sales force, you appreciate the significant role website marketing plays in your company's success. Each year the stakes go higher. Based on a 100 point competitive website evaluation, we carefully examine the features and tactics that attract, retain and convert visitors into paying customers. We compile this information to prepare website recommendations and determine website optimizing, social media management, and/or conversion goals to track from-the-jump.</p>
			</div>
		</div>
		<div id="portfolio" class="section">
			<div class="circle">
				<h1>portfolio</h1>
			</div>
		</div>
		<div id="contact" class="section">
			<div class="circle">
				<h1>contact</h1>
				<h4><a href="mailto:info@BradWeldy.com">info@BradWeldy.com</a></h4>
				<h4><a href="tel:9494563310">(949)456-3310</a></h4>
			</div>
		</div>
	</div>
</body>
</html>