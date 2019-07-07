var canvas = document.getElementById('canvas');
canvas.height = window.innerHeight;
canvas.width = window.innerWidth;

var c = canvas.getContext('2d');

/*
c.fillStyle = 'rgba(255, 0, 0, .4)';
c.fillRect(100, 100, 100, 100);
c.fillStyle = 'rgba(0, 0, 255, .6)';
c.fillRect(400, 100, 100, 100);
c.fillStyle = 'rgba(0, 255, 0, .6)';
c.fillRect(300, 300, 100, 100);
*/

console.log(canvas);

// Line
/*
c.beginPath();
c.moveTo(50, 300);
c.lineTo(300, 100);
c.lineTo(400, 300);
c.strokeStyle = "#fa34a3";
c.stroke();
*/

// Arc / Circle

/*
for (var i = 0; i < 3; i++) {
	var x = Math.random() * window.innerWidth;
	var y = Math.random() * window.innerHeight;	
	c.beginPath();
	c.arc(x, y, 30, 0, Math.PI * 2, false);
	c.strokeStyle = 'blue';
	c.stroke();
}
*/

function Circle(x, y, dx, dy, radius) {
	this.x = x;
	this.y = y;
	this.dx = dx;
	this.dy = dy;
	this.radius = radius;
	
	this.draw = function() {
		c.beginPath();
		c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
		c.strokeStyle = 'limegreen';
		c.stroke();
	}
	
	this.update = function() {
		if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
			this.dx = -this.dx;
		}
		if (this.y + this.radius > canvas.height || this.y - this.radius < 0) {
			this.dy = -this.dy;
		}
		this.x += this.dx;
		this.y += this.dy;
		
		this.draw();
	}
	
	this.updateFocus = function(ofx,ofy,fx,fy) {
		this.nfx = fx - ofx;
		this.nfy = ofy - fy;
		
		console.log(this.dx + ' ' + this.dy + ' HOWDY-DOO-DA');
		
		if (this.x + this.radius > this.nfx || this.x - this.radius < this.nfx) {
			//console.log(this.dx,this.nfx);
			this.dx = -this.dx + (this.nfx * .3);
		}
		if (this.y + this.radius > this.nfy || this.y - this.radius < this.nfy) {
			this.dy = -this.dy;
		}
		this.x += this.dx;
		this.y += this.dy;
		
		this.draw();
	}
}

var circleArray = [];
var numCircles = 1;

for (var i = 0; i < numCircles; i++) {
// 	var radius = (Math.random() + 1) * 20;
	var radius = 25;
	var x = Math.random() * (canvas.width - radius * 2) + radius;
	var y = Math.random() * (canvas.height - radius * 2) + radius;
	var dx = (Math.random() - 0.5) * 5;
	var dy = (Math.random() - 0.5) * 5;
	
	circleArray.push(new Circle(x, y, dx, dy, radius));
}

console.log(circleArray);


function animate() {
	requestAnimationFrame(animate);	
	c.clearRect(0, 0, canvas.width, canvas.height);
	
	for (var i = 0; i < circleArray.length; i++) {
		circleArray[i].update();
	}
	
}
animate();



var focus = [];
var oldFocus = [];

function leconsole(ofx,ofy,fx,fy) {
	//console.log("mouse LOCO:", focus[0], focus[1]);

	
// 	setTimeout(function(){
		if (ofx >= fx && ofy <= fy) {
			console.log('DOWN LEFT');
			return true;
		} else if (ofx <= fx && ofy <= fy) {
			console.log('DOWN RIGHT');
			return true;
		} else if (ofx >= fx && ofy >= fy) {
			console.log('UP LEFT');
			return true;
		} else if (ofx <= fx && ofy >= fy) {
			//console.log('UP ' + ofy + ' to ' + fy + '\nRT ' + ofx + ' to ' + fx);
			for (var i = 0; i < circleArray.length; i++) {
				//circleHit(i);
				circleArray[i].updateFocus(ofx,ofy,fx,fy);
			}
			//var circ = circleArray.filter(circ => this.circ.updateFocus(ofx,ofy,fx,fy));
			
			return false;
		} else { console.log('yo no se'); }
// 	}, 10);
	
	function circleHit(i) {
		setTimeout(function() {
			circleArray[i].updateFocus(ofx,ofy,fx,fy);
		}, 1500);
	}
	
	setTimeout(function(){
		oldFocus[0] = fx;
		oldFocus[1] = fy;
	}, 100);
	
// 	console.log(focus[0],focus[1],oldFocus[0],oldFocus[1]);
	//console.log(ofx,ofy,fx,fy);
// 	document.write(focus);
	//return false;
}
setTimeout(function(){
	onmousemove = function(e){
		//console.log("mouse location:", e.clientX, e.clientY);
		
		focus[0] = e.clientX;
		focus[1] = e.clientY;		
		
		
		var fx = focus[0];
		var fy = focus[1];
		var ofx = oldFocus[0];
		var ofy = oldFocus[1];
		
		if (ofx == null) {
			ofx = fx;
			ofx = fy;
			//console.log('starting off null');		
		}
		
		leconsole(ofx,ofy,fx,fy);
		
	};
}, 500);



window.addEventListener('resize', function(){
	canvas.height = window.innerHeight;
	canvas.width = window.innerWidth;
}, true);

