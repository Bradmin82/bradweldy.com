function initCanvas(){
    var ctx = document.getElementById('my_canvas').getContext('2d');
    ctx.canvas.addEventListener('mousedown', function(event) {
        var mX = event.clientX - ctx.canvas.offsetLeft;
        var mY = event.clientY - ctx.canvas.offsetTop;
        for(var i = 0; i < buildings.length; i++){
            var b = buildings[i];
            if(mX >= b.x && mX < b.x+b.w && mY >= b.y && mY < b.y+b.h){
                document.getElementById('status').innerHTML = "You touched "+b.id;
            }
        }
    });
    var buildings = [ {"id":"house","x":100,"y":100,"w":50,"h":50,"bg":"magenta"},
                      {"id":"grocery","x":200,"y":100,"w":50,"h":50,"bg":"green"},
                      {"id":"post_office","x":300,"y":100,"w":50,"h":50,"bg":"orange"}
    ];
    for(var i = 0; i < buildings.length; i++){
        var b = buildings[i];
        ctx.fillStyle = b.bg;
        ctx.fillRect(b.x,b.y,b.w,b.h);
    }
}
window.addEventListener('load', function(event) {
    initCanvas();
});