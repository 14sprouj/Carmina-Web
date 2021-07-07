<div id="jinglesModules" class="">
	<b>Jingles Bank:</b>
	<button type="button" onclick="stationjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Station Jingles</button>
	<button type="button" onclick="communityjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Community Jingles</button>
	<button type="button" onclick="showjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Show Jingles</button>
	<button type="button" onclick="sfx()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">SFXs</button>
	<a href="jingles" target="_blank">View all jingles</a>
	<a href="sfx" target="_blank">View all sound effects</a>

	<?php
	echo "<span id=\"StationPath\">hi" . $StationPath . "</span>";
	$link = mysqli_connect(servername, username, password, dbname);
	// Create connection
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	// Attempt select query execution
	$sql = "SELECT * FROM jingles WHERE StationPath = '$StationPath'";


	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			echo "<script>document.getElementById('loadinfo').innerHTML = 'Retrieving Jingles from Database';</script>";
			$i = 0;
			while($row = mysqli_fetch_array($result)){
				$i++;
				echo "<div class=\"w3-col sw-tenth jingle-box\" title=\"".$row[Description]."\">";
				echo "<audio id=\"stationjingle1\"  preload=\"auto\" onended=\"stopStationJ1()\" src=\"https://www.sprousewebsitestest.com/imperium/carmina/jingles/".$StationAbbr."/station/".$i.".mp3\" type=\"audio/mp3\"></audio>";
				echo "<button type=\"button\" name=\"button\" id=\"stationjingle".$row[id]."play\" onclick=\"playstationjingle".$row[id]."()\" class=\"play-button\"><i class=\"fas fa-play\"></i></button>";
				echo $row[Name];
			}
		}
	}
	?>
