<?php
$page_name = "Add song";
include '../includes/head.php';
?>
<style media="screen">
body {
	text-align: center;
}
input, textarea {
	width: 100%;
}
form {
	width: 40%;
	margin: auto;
	vertical-align: middle;
	border: black 2pt solid;
	border-radius: 30px;
	padding: 30px;
}

i.required::before {
	font-style: normal;
	content: "*";
}
</style>
<body>

	<form class="" action="confirm.php" method="post">
		Song name <i class="required"></i>
		<br>
		<input type="text" name="song" value="" required><br>
		Main Artist <i class="required"></i>
		<br>
		<?php include 'includes/autocomplete-artists.php'; ?>
		<br>
		Other Artist 1
		<br>
		<input type="text" name="artist1"><br>
		Other Artist 2
		<br>
		<input type="text" name="artist2"><br>
		Other Artist 3
		<br>
		<input type="text" name="artist3"><br>
		Other Artist 4
		<br>
		<input type="text" name="artist4"><br>
		Album
		<br>
		<?php include 'includes/autocomplete-albums.php'; ?>
		<br>
		Song Length (in seconds)
		<br>
		<input type="text" name="length" value="" id="secout" pattern="[0-9]{3-8}">
		<br>
		<div class="w3-row">
			<div class="w3-half">

				Genre <i class="required"></i>
				<br>
				<?php include 'includes/autocomplete-genre.php'; ?>
			</div>
			<div class="w3-half">
				Sub-Genre
				<br>
				<?php include 'includes/autocomplete-subgenre.php'; ?>
			</div>
		</div>

		<br>
		Version <i class="required"></i>
		<br>
		<input type="text" name="version" required value="Original"><br>
		Remixer
		<br>
		<input type="text" name="remixer" value=""><br>
		Explicit <i class="required"></i>
		<br>
		<select class="" name="explicit" required>
			<option value="" selected disabled></option>
			<option value="N">Not Explicit</option>
			<option value="R">Unsuitable for Radio</option>
			<option value="C">Clean Version</option>
			<option value="E">Explicit</option>
		</select>
		<br>
		Year Released
		<br>
		<input type="number" name="yreleased"><br>
		Date Released <br>
		<input type="date" name="dreleased"><br>
		Date Bought <br>
		<input type="date" name="bought"><br>
		<!-- Price £<input type="text" name="currency-field" id="currency-field" pattern="^\£\d{1,3}(,\d{3})*(\.\d+)?£" value="" data-type="currency" value="0.99"><br> -->
		Other Comments
		<br>
		<textarea name="comments" maxlength="5235"></textarea><br>
		<!-- <input type="file" name="songUpload"> -->
		<input type="submit" name="submit" value="submit">
	</form>

	<script src="https://imperium.sprousewebsitestest.com/js/currency-input.js"></script>
	<script type="text/javascript">
	function convertMStoS() {
		var minin = document.getElementById("minin").value;
		var secout = document.getElementById("secout").value;
		var secin = document.getElementById("secin").value;

		var output = Number(minin) * 60 + Number(secin);
		document.getElementById("secout").value = output;
	}
	</script>
	<div class="w3-row" style="width: 21%; position: absolute; top: 375pt; right: 5%; background: darkturquoise; padding: 10pt; border-radius: 20px;">
		<div class="w3-half">
			Minutes <i class="required"></i>
			<br>
			<input type="number" id="minin" oninput="convertMStoS()" max="60" min="0">
		</div>
		<div class="w3-half">
			Seconds <i class="required"></i>
			<br>
			<input type="number" id="secin" oninput="convertMStoS()" max="60" min="0">
		</div>
	</div>
<?php
include '../includes/footer.php';
?>
