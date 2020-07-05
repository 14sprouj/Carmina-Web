<style media="screen">
#loading {
	height: 100%;
	width: 100%;
	position: fixed;
	background: #9c27b0;
	z-index: 10;
	margin: 0pt;
	top: 0pt;
	left: 0pt;
	transition: linear 3s;
}

#loadingspinner {
	margin: 4pt;
	font-size: 50pt;
}

#loadingtext {
	position: relative;
	top: 35%;
}

</style>
<div id="loading" class="w3-center">
	<div id="loadingtext">
		<i id="loadingspinner" class="fas fa-spinner fa-spin"></i>
		<div>
			<b style="font-size:30pt">Loading</b>
			<br>
			<span id="loadinfo"></span>
		</div>
	</div>
</div>
<script type="text/javascript">
	load++;
</script>
