var bg = new Image();
bg.src = "stars.png";
function initCanvas(){
    var ctx = document.getElementById('my_canvas').getContext('2d');
    var cW = ctx.canvas.width, cH = ctx.canvas.height;
    var dist = 3;
    function Background(){
        this.x = 0, this.y = 0, this.w = bg.width, this.h = bg.height;
        this.render = function(){
            ctx.drawImage(bg, this.x-=1.5, 0);
            if(this.x <= -750){
                this.x = 0;
            }
        }
    }
    function Player(){
        this.x = 0, this.y = 0, this.w = 50, this.h = 50;
        ctx.fillStyle = "orange";
        this.render = function(){
            ctx.fillRect(this.x, this.y, this.w, this.h);
        }
    }
    var background = new Background();
    var player = new Player();
    player.x = 100;
    player.y = 225;
    function animate(){
        //ctx.save();
        ctx.clearRect(0, 0, cW, cH);
        // Start drawing here
        background.render();
        player.render();
        // End drawing here
        //ctx.restore();
    }
    var animateInterval = setInterval(animate, 30);
	
    document.addEventListener('keydown', function(event) {
        var key_press = String.fromCharCode(event.keyCode);
        var status = document.getElementById('status');
        status.innerHTML=(event.keyCode +' | ' + key_press);
        if(key_press == "W"){
            player.y-=dist;
        } else if(key_press == "S"){
            player.y+=dist;
        } else if(key_press == "A"){
            player.x-=dist;
        }  else if(key_press == "D"){
            player.x+=dist;
        }
    });

}
window.addEventListener('load', function(event) {
    initCanvas();
});