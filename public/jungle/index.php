<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style><?php include 'palm-tree.css'; ?></style>
<style>

/*Check nav on last dated version to fix rocket docking in jquery*/


body{ background: #111; margin: 0px; }
div#banner{
	width: 100%;
	height: 500px;
	margin: 0px auto;
	background-color: #000;
	background-image: url(https://bradweldy.com/space/star2.png), url(https://bradweldy.com/space/star1.png);
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
	background-image: url(https://bradweldy.com/space/star2.png), url(https://bradweldy.com/space/star1.png);
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
}

@font-face {
    font-family: stranger;
    src: url(https://bradweldy.com/space/itc-benguiat-bold.otf);
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



/*******************/

#main {
	height: 100vh;	
	position: relative;
	width: 100vw;
}
.img-wrap-container {
	height: 100vh;
	overflow: hidden;
	width: 100vw;
}
.img-wrap {
	background: url(safari-clipart-wallpaper-bg.jpg);
	background-size: cover;
	height: 100vh;
	position: relative;	
	width: 100vw;	

/*
	animation-duration: .75s;
	animation-fill-mode: infinite;
*/
	animation: jungle-zoom 35s infinite;
}
@keyframes jungle-zoom {
	from {background-position: center center; transform: rotate(0deg) scale(1); }
	15% {background-position: center 20%; transform: rotate(0deg) scale(1.2); }
	40% {background-position: 10% 20%; transform: rotate(0deg) scale(1.5); }
	60% {background-position: 20% 20%; transform: rotate(0deg) scale(1.7); }
	75% {background-position: 10% 80%; transform: rotate(0deg) scale(1.2); }
	90% {background-position: center 20%; transform: rotate(0deg) scale(1); }
	to {background-position: center center; transform: rotate(0deg) scale(1); }
}
/*******************/
/*******************/

html,
body,
.container-wrapper,
.container {
  height: 100%;
  width: 100%;
  overflow: hidden;
  padding: 0;
  position: relative;
  margin: 0;
}
body {
  background: #FEEE9D;
  overflow-Y: visible;
}
.container-wrapper {
	min-height: 1000px;
}
.container-wrapper div {
  position: absolute;
}
.head {
  width: 300px;
  height: 300px;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  border-radius: 50%;
  background-color: #FBD671;
}
.face {
  width: 150px;
  height: 170px;
  left: 75px;
  top: 75px;
}
.mouth {
  width: 100%;
  height: 75px;
  bottom: 0;
  left: 0;
  background-color: #20184E;
  border-radius: 10px 10px 150px 150px;
  border: 5px solid #20184E;
}
.eye-group {
  width: 150px;
  height: 50px;
  top: 10px;
  left: 0;
}
.eye {
  background-color: #20184E;
  width: 30px;
  height: 50px;
  border-radius: 50%;
}
.eye-left {
  left: 15px;
}
.eye-right {
  right: 15px;
}
.pupil {
  width: 10px;
  height: 15px;
  top: 5px;
  background-color: #FBD671;
  border-radius: 50%;
}
/*******************/

</style>
</head>
<body>
	<div id="main">
		<div class="img-wrap-container">
			<div class="img-wrap">
				<img src="guatemala-rio-dulce-wooden-suspension.jpg" />
			</div>
		</div>
	</div>
	
	<div class="container-wrapper">
		<div class="container">
		  <div class="head">
		    <div class="face">
		      <div class="mouth">
		        <div class="tongue"></div>
		      </div>
		      <div class="eye-group">
		        <div class="eye eye-left">
		          <div class="pupil"></div>
		        </div>
		        <div class="eye eye-right">
		          <div class="pupil"></div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	
	<div id="palm-tree">
		<div style="width: 225px; height: 340px; display: inline-block;">
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>			
		</div>
		<div style="width: 225px; height: 340px; display: inline-block;">
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>			
		</div>
		<div style="width: 225px; height: 340px; display: inline-block;">
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>			
		</div>
	</div>
	
	<style><?php include 'shore.css'; ?></style>
	<div id="shore">
		<div class="sky"></div>
		<div class="sand"></div>
		<div class="wet-sand"></div>
		<div class="sea">
			<div class="seafoam"></div>
		</div>
		<div class="palm-tree">
			<div class="trunk"></div>
			<div class="leaves">
		    	<div class="leaves-1"></div>
				<div class="leaves-2"></div>
				<div class="leaves-3"></div>
			</div>
		</div>
		<div class="sand-front"></div>
	</div>
	
</body>
</html>