<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var count = 0;
		function yHandler() {
			var wrap = document.getElementById('wrap');
			var contentHeight = wrap.offsetHeight; // Gets page content height
			var yOffset = window.pageYOffset; // Gets the vertical scroll position
			var y = yOffset + window.innerHeight;
			if (y >= contentHeight && count < 12) {
				count++;
				wrap.innerHTML += '<div class="newData">more. . .' + count + '</div>';
				// Ajax call to get more dynamic data goes here
			}
			var status = document.getElementById('status');
			status.innerHTML = contentHeight+" | " + y;
		}
		window.onscroll = yHandler;
	</script>
	<style type="text/css">
		div#status {position:fixed; font-size24px;}
		div#wrap{width:800px; margin:0px auto; min-height:1000px;}
		div.newData{height:1000px; background:hotpink; margin:10px 0px;}
	</style>
</head>
<body>
	<div id="status">0 | 0</div>
	<div id="wrap"><img src="../images/bwmarketing.png"></div>
</body>
</html>