<!-- Start of rcm.php file -->
<div id="rcm">
	<a href="javascript:goBack()">
		<i class="fas fa-arrow-left"></i> Back
		<!-- <span>Ctrl + ?!</span> -->
	</a>
	<a href="javascript:window.print()">
		<i class="fas fa-print"></i> Print
		<span>Ctrl + P</span>
	</a>
	<hr/>
	<a href="add.php" target="_blank">
		<i class="fas fa-plus-circle"></i> Add song to Database
	</a>
	<a href="view.php" target="_blank">
		<i class="fas fa-table"></i> View Database
	</a>
	<a href="feedback.php" target="_blank">
		<i class="fas fa-comment"></i> Give Feedback
	</a>
	<a href="about.php" target="_blank">
		<i class="fas fa-question-circle"></i> About
		<!-- <span>Ctrl + ?!</span> -->
	</a>
	<a href="help.php" target="_blank">
		<i class="fas fa-info-circle"></i> Help
		<!-- <span>Ctrl + ?!</span> -->
	</a>
</div>

<script type="text/javascript">
function goBack() {
	window.history.back()
}
</script>

<script type="text/javascript">
var i = document.getElementById("rcm").style;
if (document.addEventListener) {
	document.addEventListener('contextmenu', function(e) {
		var posX = e.clientX;
		var posY = e.clientY;
		menu(posX, posY);
		e.preventDefault();
	}, false);
	document.addEventListener('click', function(e) {
		i.opacity = "0";
		setTimeout(function() {
			i.visibility = "hidden";
		}, 501);
	}, false);
} else {
	document.attachEvent('oncontextmenu', function(e) {
		var posX = e.clientX;
		var posY = e.clientY;
		menu(posX, posY);
		e.preventDefault();
	});
	document.attachEvent('onclick', function(e) {
		i.opacity = "0";
		setTimeout(function() {
			i.visibility = "hidden";
		}, 501);
	});
}

function menu(x, y) {
	i.top = y + "px";
	i.left = x + "px";
	i.visibility = "visible";
	i.opacity = "1";
}
</script>
<script type="text/javascript">
	load++;
</script>
<!-- End of rcm.php file -->
