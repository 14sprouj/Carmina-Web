<?php
$page_name = "Carmina in Development";
include '../includes/config.php';
include '../includes/session.php';
?>

<!-- Start of head.php -->
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	var load = 0;
	</script>

	<title>
		<?php
		echo $page_name;
		?>
	</title>
	<link rel="icon" href="https://www.sprousewebsitestest.com/imperium/media/icon.png">
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="15"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
	<meta http-equiv="X-Content-Security-Policy" content="default-src 'self'; script-src 'self'"> -->

	<!-- Analytics -->
	<script src="https://www.sprousewebsitestest.com/js/analytics.js" charset="utf-8"></script>
	<script async src="//static.getclicky.com/js"></script>

	<!-- Imperium CSS -->
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/style.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/autocomplete.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/search.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/songlist.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/decks.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/rcm.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/fa.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/css/snackbar.css">
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/resources/css/size-fractions.css">
	<link rel="stylesheet/css" href="https://www.sprousewebsitestest.com/imperium/css/input-range.css">
	<link rel="stylesheet/css" href="https://www.sprousewebsitestest.com/imperium/css/countries-dropdown.css">
	<style>
	. {
		padding: 4px 6px !important;
	}
	</style>

	<!-- Sprouse Websites CSS -->
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/resources/css/index.css">

	<!-- Third Party CSS -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/xcode.min.css" />
	<link rel="stylesheet" href="https://www.sprousewebsitestest.com/imperium/includes/dist/css/bootstrap-select-country.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/e8abc56752.js" crossorigin="anonymous"></script>

	<!-- Imperium JS -->
	<script src="https://www.sprousewebsitestest.com/imperium/js/load.js" charset="utf-8"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/decks.js" charset="utf-8"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/filter.js" charset="utf-8"></script>
	<!-- <script src="https://www.sprousewebsitestest.com/imperium/js/refresh.js" charset="utf-8"></script> -->
	<script src="https://www.sprousewebsitestest.com/imperium/js/sorttable.js" charset="utf-8"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/modules.js" charset="utf-8"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/jcontrols.js" charset="utf-8"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/playlists.js" charset="utf-8"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/snackbar.js" charset="utf-8"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/notifications.js"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/decksprogress.js" charset="utf-8"></script>

	<!-- Third Party JS and JS Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" charset="utf-8"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://www.sprousewebsitestest.com/imperium/js/jsmediatags.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/album-art"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<script src="https://www.sprousewebsitestest.com/imperium/includes/dist/js/bootstrap-select-country.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

</head>

<body onload="load()" onoffline="offline()" ononline="online()">
	<div id="showbox" class="w3-bar w3-purple" style="position: sticky; top: 0pt; width: 100%; padding: 3pt; padding-left: 7pt; display:none; z-index:100;">

		<?php
		if ($_SESSION['imperium_login_user'] != NULL) {
			echo "<div class=\"w3-right w3-dropdown-hover\">";
			echo "<button class=\"w3-button\" style=\"padding: 6px 12px;\">";
			echo "<i class='fas fa-user'></i> " . $_SESSION['imperium_login_user'];
			echo "</button>";
			echo "<div class=\"w3-dropdown-content w3-bar-block w3-card-4\" style=\"position: fixed; right:7pt; top: 30pt; min-width: 118px;\">";
			echo "<a href=\"https://www.sprousewebsitestest.com/imperium/settings.php\" class=\"w3-button\" onmouseover=\"SettingsHoverStartRotate()\" onmouseout=\"SettingsHoverStopRotate()\">";
			echo "<i id=\"settingiconspin\" class=\"fas fa-cog\"></i> Settings";
			echo "</a>";
			echo "<a href=\"https://www.sprousewebsitestest.com/imperium/logout.php\" class=\"w3-button\">";
			echo "<i class=\"fas fa-sign-out-alt\"></i>";
			echo "Logout";
			echo "</a>";
			echo "</div>";
		}
		else {
			echo "button class=\"w3-button\" style=\"padding: 6px 12px;\"";
			echo "<a href='login.php'>Login</a>";
			echo "</button>";
		}
		?>

	</div>
</div>
<script type="text/javascript">
function SettingsHoverStartRotate() {
	document.getElementById("settingiconspin").classList.add("fa-spin");
}
function SettingsHoverStopRotate() {
	document.getElementById("settingiconspin").classList.remove("fa-spin");
}
</script>

<script type="text/javascript">
load++;
</script>
<!-- End of head.php -->

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

<style media="screen">
.blink-bold {
	-webkit-animation: 2s blink-bold step-end infinite;
	-moz-animation: 2s blink-bold step-end infinite;
	-ms-animation: 2s blink-bold step-end infinite;
	-o-animation: 2s blink-bold step-end infinite;
	animation: 2s blink-bold step-end infinite;
	color: white;
}

@keyframes "blink-bold" {
	from, to {
		color: white;
	}
	50% {
		color: black;
	}
}

@-moz-keyframes blink-bold {
	from, to {
		color: white;
	}
	50% {
		color: black;
	}
}

@-webkit-keyframes "blink-bold" {
	from, to {
		color: white;
	}
	50% {
		color: black;
	}
}

@-ms-keyframes "blink-bold" {
	from, to {
		color: white;
	}
	50% {
		color: black;
	}
}

@-o-keyframes "blink-bold" {
	from, to {
		color: white;
	}
	50% {
		color: black;
	}
}

/* from https://codepen.io/ArtemGordinsky/pen/GnLBq */

</style>
<div id="alpha-notice" class="blink-bold" style="background-color:red; text-align:center; padding:3pt;">
	Please be aware this page is currently is very early development and is the Alpha version. As a result, there will be lots of bugs and the features seen here may be changed. Use at your own risk.
	<button type="button" name="button" style="right:2pt;" onclick="CloseAlpha()">Understood</button>
</div>
<script type="text/javascript">
	function CloseAlpha() {
		document.getElementById("alpha-notice").style.display = "none";
		document.getElementById("showbox").style.display = "block";
	}
</script>

<!-- Start of decks.php file -->
<script>
var jsmediatags = window.jsmediatags;
</script>

<script type="text/javascript">
document.getElementById("loadinfo").innerHTML = "Decks loading";
var volANew = 1;
var volBNew = 1;
var volA = 1;
var volB = 1;
var DeckADurationF = "";
var DeckACurrentF = "";
var DeckARemainingF = "";
</script>
<div id="decks">
	<div class="w3-row" style="height:fit-content;">
		<div id="DeckAAudioDiv" class="">
			<audio id="DeckAAudioEl" src="" style="width:100%;">

			</audio>
		</div>
		<div id="DeckBAudioDiv" class="">
			<audio id="DeckBAudioEl" src="" style="width:100%;">

			</audio>
		</div>
		<div id="DeckA" class="w3-col" style="width:calc(50% - 25pt)">
			<input id="DeckALengthRange" type="range" name="rng1" min="0" step="0.05" value="0" onchange="mSet1()" style="padding: 10pt 0; width: 100%;">
			<br>
			<div class="w3-quarter">
				<button id="DeckAPlay" type="button" name="button" onclick="DeckAPlay()" disabled class="play-button">
					<i class="fas fa-play"></i>
				</button>
				<button id="DeckAPause" type="button" name="button" onclick="DeckAPause()" style="display:none;" class="pause-button">
					<i class="fas fa-pause"></i>
				</button>
				<button id="DeckAEject" type="button" name="button" onclick="DeckAEject()" disabled class="eject-button">
					<i class="fas fa-eject"></i>
				</button>
				<button id="DeckAMute" type="button" name="button" onclick="DeckAMute()" style="display:none;">
					<i class="fas fa-volume-mute"></i>
				</button>
				<button id="DeckAVolLow" type="button" name="button" onclick="DeckAMute()" style="display:none;">
					<i class="fas fa-volume-down"></i>
				</button>
				<button id="DeckAVolUp" type="button" name="button" onclick="DeckAMute()">
					<i class="fas fa-volume-up"></i>
				</button>
			</div>
			<div class="w3-quarter w3-right">
				<!-- IMAGES FOR SONG STATUS -->
				<img id="DeckARedLight" src="https://www.sprousewebsitestest.com/imperium/media/red-traffic-light.png" title="Song Not Ready to Play" alt="Song Not Ready to Play" height="30pt">
				<img id="DeckAAmberLight" src="https://www.sprousewebsitestest.com/imperium/media/amber-traffic-light.png" title="Song Can Play But Not Fully Loaded" alt="Song Can Play But Not Fully Loaded" height="30pt" style="display:none;">
				<img id="DeckAGreenLight" src="https://www.sprousewebsitestest.com/imperium/media/green-traffic-light.png" title="Song Fully Loaded" alt="Song Fully Loaded" height="30pt" style="display:none;">
				<!-- END OF SONG STATUS IMAGES -->

				<img id="pictureA" src="" alt="">
			</div>
			<div class="w3-rest">
				<span>Song: <span id="DeckASongText">-----</span></span>
				<br>
				<span>Artist(s): <span id="DeckAArtistText">-----</span></span>
				<br>
				<span>Album: <span id="DeckAAlbumText">-----</span></span>
				<br>
				<div class="DeckTimes">
					<span>Current <span id="DeckACurrentText">--:--</span></span> <span>Remaining <span id="DeckARemainingText">--:--</span></span>
					<br>
					<span>Duration <span id="DeckADurationText">--:--</span></span>

				</div>
			</div>
		</div>
		<div id="mixer" class="w3-col" style="width: 50pt;text-align: center;">
			<input type="range" id="DeckAVol" name="DeckAVol" min="0" max="100" oninput="DeckAVol()" value="100" orient="vertical" class="DeckVol">
			<input type="range" id="DeckBVol" name="DeckBVol" min="0" max="100" oninput="DeckBVol()" value="100" orient="vertical" class="DeckVol">
		</div>
		<div id="DeckB" class="w3-col" style="width:calc(50% - 25pt)">
			<input id="DeckBLengthRange" type="range" name="rng2" min="0" step="0.05" value="0" onchange="mSet2()" style="padding: 10pt 0; width: 100%;">
			<br>
			<div class="w3-quarter">
				<button id="DeckBPlay" type="button" name="button" onclick="DeckBPlay()" disabled class="play-button">
					<i class="fas fa-play"></i>
				</button>
				<button id="DeckBPause" type="button" name="button" onclick="DeckBPause()" style="display:none;" class="pause-button">
					<i class="fas fa-pause"></i>
				</button>
				<button id="DeckBEject" type="button" name="button" onclick="DeckBEject()" disabled class="eject-button">
					<i class="fas fa-eject"></i>
				</button>
				<button id="DeckBMute" type="button" name="button" onclick="DeckBMute()" style="display:none;">
					<i class="fas fa-volume-mute"></i>
				</button>
				<button id="DeckBVolLow" type="button" name="button" onclick="DeckBMute()" style="display:none;">
					<i class="fas fa-volume-down"></i>
				</button>
				<button id="DeckBVolUp" type="button" name="button" onclick="DeckBMute()">
					<i class="fas fa-volume-up"></i>
				</button>
			</div>
			<div class="w3-quarter w3-right">
				<!-- IMAGES FOR SONG STATUS -->
				<img id="DeckBRedLight" src="https://www.sprousewebsitestest.com/imperium/media/red-traffic-light.png" title="Song Not Ready to Play" alt="Song Not Ready to Play" height="30pt">
				<img id="DeckBAmberLight" src="https://www.sprousewebsitestest.com/imperium/media/amber-traffic-light.png" title="Song Can Play But Not Fully Loaded" alt="Song Can Play But Not Fully Loaded" height="30pt" style="display:none;">
				<img id="DeckBGreenLight" src="https://www.sprousewebsitestest.com/imperium/media/green-traffic-light.png" title="Song Fully Loaded" alt="Song Fully Loaded" height="30pt" style="display:none;">
				<!-- END OF SONG STATUS IMAGES -->

				<img id="pictureB" src="" alt="">
			</div>
			<div class="w3-rest">
				<span>Song: <span id="DeckBSongText">-----</span></span>
				<br>
				<span>Artist(s): <span id="DeckBArtistText">-----</span></span>
				<br>
				<span>Album: <span id="DeckBAlbumText">-----</span></span>
				<br>
				<div class="DeckTimes">
					<span>Current <span id="DeckBCurrentText">--:--</span></span> <span>Remaining <span id="DeckBRemainingText">--:--</span></span>
					<br>
					<span>Duration <span id="DeckBDurationText">--:--</span></span>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) =>
v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
)(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th.playlistTableHeader').forEach(th => th.addEventListener('click', (() => {
	const table = th.closest('table');
	Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
	.sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
	.forEach(tr => table.appendChild(tr) );
})));
</script>

<script type="text/javascript">
document.getElementById("loadinfo").innerHTML = "Decks loaded";
</script>
<script type="text/javascript">
load++;
</script>
<!-- End of decks.php file -->

<style media="screen">
.weatherbox:hover {
	border: 1pt grey solid;
	border: 19px;
}
</style>
<a href="weather.php" class="hidden weatherbox hover-full-border" target="_blank">
	<!-- Start of widget.php file -->
	<?php
	echo "<script>document.getElementById('loadinfo').innerHTML = 'Fetching Weather';</script>";
	$apiKey1 = "bf06ed6c271fb0b0fa20525bfe56a1a6";
	$cityId1 = "2643743";
	$googleApiUrl1 = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId1 . "&lang=en&units=metric&APPID=" . $apiKey1;

	$ch1 = curl_init();

	curl_setopt($ch1, CURLOPT_HEADER, 0);
	curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch1, CURLOPT_URL, $googleApiUrl1);
	curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch1, CURLOPT_VERBOSE, 0);
	curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
	$response1 = curl_exec($ch1);

	curl_close($ch1);
	$data1 = json_decode($response1);
	$currentTime1 = time();

	$apiKey2 = "bf06ed6c271fb0b0fa20525bfe56a1a6";
	$cityId2 = "2643743";
	$googleApiUrl2 = "https://datapoint.metoffice.gov.uk/public/data/resource?key=" . $apiKey2;


	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api-metoffice.apiconnect.ibmcloud.com/metoffice/production/v0/forecasts/point/hourly?includeLocationName=Lewisham&latitude=51.4415&longitude=0.0117",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "accept: application/json",
	    "x-ibm-client-id: 65d0105e-aad1-41ec-ad97-fb4bc49f85b6",
	    "x-ibm-client-secret: C5oP0gU2eY1qR2bR7fU3iO6eS1nY8cL5nO6lB4lF1gK6eK7gJ7"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  // echo $response;
	}


	$ch2 = curl_init();

	curl_setopt($ch2, CURLOPT_HEADER, 0);
	curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch2, CURLOPT_URL, $googleApiUrl2);
	curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch2, CURLOPT_VERBOSE, 0);
	curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
	$response2 = curl_exec($ch2);

	curl_close($ch2);
	$data2 = json_decode($response2);
	$currentTime2 = time();
	?>
	<script type="text/javascript">
		console.log("OpenWeatherAPI Data loaded");
	</script>

	<div id="weather" style="width:100%; text-align:center;">

		<div id="datetime">

		</div>

		<div id="weather-forecast" class="weather-forecast">
			<table style="text-align: center; margin-left: auto; margin-right: auto;">
				<tr>
					<td rowspan="2">
						<?php
						echo "<img src='https://sprousewebsitestest.com/imperium/media/weather/".$data1->weather[0]->icon.".png' class='weather-icon'>";
						?>
						<br>
						<?php echo ucwords($data1->weather[0]->description); ?>
					</td>
					<td>
						Max: <?php echo $data1->main->temp_max; ?>°C
					</td>
					<td>
						Current: <?php echo $data1->main->temp; ?>°C
					</td>
					<td>
						<div>Humidity: <?php echo $data1->main->humidity; ?> %</div>
					</td>
				</tr>
				<tr>
					<td>
						<span class="min-temperature">
							Min: <?php echo $data1->main->temp_min; ?>°C
						</span>
					</td>
					<td>
						Feels Like: <?php echo $data1->main->feels_like; ?>°C
					</td>
					<td>
						<div>Wind: <?php echo $data1->wind->speed; ?> km/h</div>
					</td>
				</tr>
				<tr>
					<td>Updated: <?php echo date("h:m:s"); ?></td>
				</tr>
			</table>
		</div>
	</div>

	<script type="text/javascript">
	function getDateTime() {
		var today = new Date();
		var milliseconds = today.getMilliseconds();
		var rmilliseconds = Math.round(milliseconds / 10);
		var seconds = today.getSeconds();
		var minutes = today.getMinutes();
		var hours = today.getHours();
		var month = today.getMonth();
		var month = month + 1;
		var date = today.getDate();
		var year = today.getFullYear();

		var zd = "";
		var zmo = "";
		var zy = "";
		var zh = "";
		var zmi = "";
		var zs = "";
		var zms = "";

		if (date < 10) {
			zd = "0";
		}

		if (month < 10) {
			zmo = "0";
		}

		if (hours < 10) {
			zh = "0";
		}

		if (minutes < 10) {
			zmi = "0";
		}

		if (seconds < 10) {
			zs = "0";
		}

		if (rmilliseconds < 10) {
			zms = "0";
		}

		var dateTime = zd + date + "/" + zmo + month + "/" + year + " " + zh + hours + ":" + zmi + minutes + ":" + zs + seconds + ":" + zms + rmilliseconds;
		document.getElementById("datetime").innerHTML = dateTime;
		setTimeout(getDateTime, 50);
	};

	</script>
	<script type="text/javascript">
		document.getElementById("loadinfo").innerHTML = "Weather loaded";
	</script>
	<script type="text/javascript">
		load++;
	</script>
	<!-- End of widget.php file -->
</a>

<!-- Start of playlist.php file -->
<script type="text/javascript">
document.getElementById("loadinfo").innerHTML = "Playlist Loading";
</script>
<style>
th.sort {
	cursor: pointer;
}
</style>
<div id="playlistModule">


	<div class="l4 songSearch s12">
		<h3 style="display:inline;">Songs Search</h3>
		<form method="post" style="display:inline;">
			<button type="button" name="refresh" style="display:inline;">
				<i class="fas fa-sync-alt"></i>
			</button>
		</form>

		<input type="text" id="filterbox" onkeyup="filter()" placeholder="Search for songs.." title="Type in a Song Name" style="display:inline;">


		<!-- <script type="text/javascript">
		var $playlist = $("playlist.php");
		function reloadPlaylist () {
		$playlist.load("playlist.php");
	}
</script> -->
<br>
<!-- <div id="SongsLoading" style="overflow:auto; height:240pt; background-color:white; font-size:30pt; text-align:center; vertical-align:middle;">
Song List Loading
</div> -->
<button type="button" name="button" onclick="SongFull()" class="PlaylistButton">View all songs</button>
<br>
<div id="AllSongs" style="overflow:auto; height:240pt;">
	<?php
	function getSongs() {
		echo "<table id='myTable' class='banded' height='300pt'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Add to Deck</th>";
		echo "<th id='IdHeader' class='playlistHeader'>";
		echo "<button onclick='javascript:sortTableById()' class=\"playlistHeader\">";
		echo "Song Id";
		echo "</button>";
		echo "</th>";
		echo "<th id='SongHeader' class='playlistHeader'>";
		echo "<button onclick='javascript:sortTableBySong()' class=\"playlistHeader\">";
		echo "Song Name";
		echo "</button>";
		echo "</th>";
		echo "<th id='ArtistHeader' class='playlistHeader'>";
		echo "<button onclick='javascript:sortTableByArtist()' class=\"playlistHeader\">";
		echo "Artists";
		echo "</button>";
		echo "</th>";
		echo "<th id='AlbumHeader' class='playlistHeader'>";
		echo "<button onclick='javascript:sortTableByAlbum()' class=\"playlistHeader\">";
		echo "Album";
		echo "</button>";
		echo "</th>";
		echo "<th class='playlistTableHeader'>";
		echo "<button onclick='javascript:sortTableByLength()' class=\"playlistHeader\">";
		echo "Length";
		echo "</button>";
		echo "</th>";
		echo "<th id='GenreHeader' class='playlistTableHeader'>";
		echo "<button onclick='javascript:sortTableByGenre()' class=\"playlistHeader\">";
		echo "Genre";
		echo "</button>";
		echo "</th>";
		echo "<th>";
		echo "Version";
		echo "</th>";
		echo "<th id='ExplicitHeader' class='playlistTableHeader'>";
		echo "<button onclick='javascript:sortTableByExplicit()' class=\"playlistHeader\" title='E means Explicit R means unsuitable for Radio N means Not Explicit'>";
		echo "Explicit";
		echo "</button>";
		echo "</th>";
		echo "<th></th>";
		echo "</tr>";
		echo "</thead>";
		$link = mysqli_connect(servername, username, password, dbname);
		// Create connection
		// Check connection
		if(dblink === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// Attempt select query execution
		$sql = "SELECT * FROM songs ORDER BY MainArtist";

		if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<script>document.getElementById('loadinfo').innerHTML = 'Retrieving Songs from Database';</script>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td><button type='button' class='DeckButton AddToAButton' onclick='AddToA".$row['id']."()'>A</button>
					<button type='button' class='DeckButton AddToBButton' onclick='AddToB".$row['id']."()'>B</button></td>";
					$idInt = (int)$row['id'];
					echo "<td>" . $idInt . "</td>";
					echo "<td>" . $row['Song'] . "</td>";
					echo "<td>";
					if ($row['MainArtist'] != NULL) {
						echo $row['MainArtist'];
						echo "<script>var Artists".$row['id']." = '".$row['MainArtist']."';</script>";
					};
					if ($row['OtherArtist1'] != NULL) {
						echo "; " . $row['OtherArtist1'] . "; ";
						echo "<script>var Artists".$row['id']." = '".$row['MainArtist']."; ". $row['OtherArtist1']."';</script>";
					};
					if ($row['OtherArtist2'] != NULL) {
						echo $row['OtherArtist2'] . "; ";
						echo "<script>var Artists".$row['id']." = '".$row['MainArtist']."; ". $row['OtherArtist1']."; ". $row['OtherArtist2']."';</script>";
					};
					if ($row['OtherArtist3'] != NULL) {
						echo $row['OtherArtist3'] . "; ";
						echo "<script>var Artists".$row['id']." = '".$row['MainArtist']."; ". $row['OtherArtist1']."; ". $row['OtherArtist2']."';</script>";
					};
					if ($row['OtherArtist4'] != NULL) {
						echo $row['OtherArtist4'] . ";";
					};
					echo "</td>";
					// echo "<td>" . $row['MainArtist'] . " " . $row['OtherArtist1']." ".$row['OtherArtist2']." ".$row['OtherArtist3']." ".$row['OtherArtist4']."</td>";
					echo "<td>" . $row['Album'] . "</td>";
					echo "<td>";
					if ($row['Length'] != NULL) {
						$minutes = 0;
						$seconds = 0;
						$length = $row['Length'];
						while ($length > 60) {
							$minutes = $minutes + 1;
							$length = $length - 60;
						};
						$seconds = $length;
						if ($minutes < 10) {
							echo "0";
						};
						echo $minutes . ":";
						if ($seconds < 10) {
							echo "0";
						};
						echo $seconds;
					}
					else {
						echo "<red>Unknown</red>";
					}
					echo "</td>";
					if ($row['Genre'] != NULL) {
						echo "<td>" . $row['Genre'];
						if ($row['SubGenre'] != NULL) {
							echo " — " . $row['SubGenre'];
						}
						echo "</td>";
					} else {
						echo "<td><red>Unknown</red></td>";
					}
					echo "<td>" . $row['Version'] . "</td>";
					if ($row['Explicit'] == NULL) {
						echo "<td><red>Unknown</red></td>";
					}
					elseif ($row['Explicit'] == "N") {
						echo "<td><p title='Not Explicit'>" . $row['Explicit'] . "</p></td>";
					}
					elseif ($row['Explicit'] == "E") {
						echo "<td><p title='Explicit'>" . $row['Explicit'] . "</p></td>";
					}
					elseif ($row['Explicit'] == "R") {
						echo "<td><p title='Unsuitable for Radio'>" . $row['Explicit'] . "</p></td>";
					}
					elseif ($row['Explicit'] == "C") {
						echo "<td><p title='Clean Version'>" . $row['Explicit'] . "</p></td>";
					}
					else {
						echo "<td>" . $row['Explicit'] . "</td>";
					};

					$URL1 = 'https://sprousewebsitestest.com/radio/songs/'.$row['MainArtist']."/".$row['Album']."/".$row['Song'].".mp3";
					$URL2 = 'https://sprousewebsitestest.com/radio/songs/Various Artists/'.$row['Album']."/".$row['Song'].".mp3";
					$URL3 = 'https://sprousewebsitestest.com/radio/songs/'.$row['MainArtist']."/".$row['Album']."/01 ".$row['Song'].".mp3";
					$URL4 = 'https://sprousewebsitestest.com/radio/songs/Compilations/'.$row['Album']."/".$row['Song'].".mp3";
					$sourcea = '<audio id="DeckAAudioEl" oncanplay="DeckACanPlayThrough()" onended="DeckAPause()" preload="auto" onloadedmetadata="mDur1()" ontimeupdate="mPlay1()"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/mpeg"><source src="'.$URL3.'" type="audio/mpeg"><source src="'.$URL4.'" type="audio/mpeg">Your browser does not support audio elements</audio>';
					$sourceb = '<audio id="DeckBAudioEl" oncanplay="DeckBCanPlay()" oncanplaythrough="DeckBCanPlayThrough()" onended="DeckBPause()" preload="auto" onloadedmetadata="mDur2()" ontimeupdate="mPlay2()"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/m4a"><source src="'.$URL3.'" type="audio/m4a"><source src="'.$URL4.'" type="audio/m4a">Your browser does not support audio elements</audio>';
					echo "<td>";
					echo "</td>";
					echo "</tr>";
					$varname = "URL".$row['id'];
					$smarks = "'";
					echo "<script>
					function AddToA".$row['id']."() {
						try {
							DeckANotPlay();
							document.getElementById('DeckAAudioDiv').innerHTML = ".$smarks.$sourcea.$smarks.";
							document.getElementById('DeckAArtistText').innerHTML = Artists".$row['id'].";
							document.getElementById('DeckASongText').innerHTML = '".$row['Song']."';
							document.getElementById('DeckAAlbumText').innerHTML = '".$row['Album']."';
							document.getElementById('DeckAPlay').disabled = false;
							document.getElementById('DeckAEject').disabled = false;
							document.getElementById('DeckAAudioEl').volume = volANew;
							document.getElementById('DeckALengthRange').disabled = false;
							document.getElementById('pictureA').src = 'https://sprousewebsitestest.com/imperium/songs/".$row['MainArtist']."/".$row['Album']."/".$row['Album'].".jpg';
							DeckAPause()
							getDeckTimes();
							document.getElementById('DeckAAudioEl').load();
							DeckAPlay()
							DeckAPause()
						} catch (e) {
							console.error(e.name);
							console.error(e.message);
							document.getElementById('snackbar').innerHTML = e.name + e.message + 'Unable to add song to Deck A';
							snackbar();
						}
					}

					function AddToB".$row['id']."() {
						try {
							document.getElementById('DeckBAudioDiv').innerHTML = ".$smarks.$sourceb.$smarks.";
							document.getElementById('DeckBArtistText').innerHTML = '".$row['MainArtist'].$row['OtherArtist1'].$row['OtherArtist2'].$row['OtherArtist3'].$row['OtherArtist4']."';
							document.getElementById('DeckBSongText').innerHTML = '".$row['Song']."';
							document.getElementById('DeckBAlbumText').innerHTML = '".$row['Album']."';
							document.getElementById('DeckBPlay').disabled = false;
							document.getElementById('DeckBEject').disabled = false;
							document.getElementById('DeckBAudioEl').volume = volBNew;
							document.getElementById('DeckBLengthRange').disabled = false;
							document.getElementById('pictureB').src = 'https://sprousewebsitestest.com/imperium/songs/".$row['MainArtist']."/".$row['Album']."/".$row['Album'].".jpg';
							DeckBPause()
							getDeckTimes();
							document.getElementById('DeckBAudioEl').load();
							DeckBPlay()
							DeckBPause()
						} catch (e) {
							console.error(e.name);
							console.error(e.message);
							document.getElementById('ErrorSnackbar').innerHTML = e.name + ' ' + e.message + 'Unable to add song to Deck B';
							ErrorSnackbar();
						}
					}
					</script>
					";
				}
				echo "</table>";
				$SongsInt = mysqli_num_rows($result);
				echo "<span id='songsfound'>". mysqli_num_rows($result)." Songs found in the Library</span>";
				// Free result set
				mysqli_free_result($result);
			} else{
				echo "<tr>";
				echo "<td colspan='11'>No records matching your query were found.</td>";
				echo "</tr>";
				echo "<script>songsRecieved();</script>";
			}
		} else{
			echo "ERROR: Could not able to execute " . $sql . " ." . mysqli_error($link);
		}
		echo "</table>";
	}

	getSongs();

	// echo "<script type='text/javascript'>";
	// echo "var SongsInt = '".$SongsInt."';";
	?>

</div>
<script type='text/javascript'>
function songsRecieved() {
	// document.getElementById("SongsLoading").style.display = "none";
	// document.getElementById("AllSongs").style.display = "block";
	// document.getElementById("snackbar").innerHTML = "Songs from Database loaded";
	// snackbar();
	// var notification = new Notification("Songs from Database loaded");
	document.getElementById("loadinfo").innerHTML = "Songs from Database Loaded";
}
</script>

<script type="text/javascript">
var getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) =>
v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
)(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th.playlistTableHeader').forEach(th => th.addEventListener('click', (() => {
	const table = th.closest('table');
	Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
	.sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
	.forEach(tr => table.appendChild(tr) );
})));
</script>

</div>

<div class="l8">
</div>
</div>

<script type="text/javascript">
document.getElementById("loadinfo").innerHTML = "Playlist loaded";
</script>
<script type="text/javascript">
load++;
</script>
<!-- End of playlist.php file -->

<?php // build.md ?>

<div id="jinglesModules" class="">
	<b>Jingles Bank:</b>
	<button type="button" onclick="stationjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Station Jingles</button>
	<button type="button" onclick="communityjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Community Jingles</button>
	<button type="button" onclick="showjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Show Jingles</button>
	<button type="button" onclick="sfx()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">SFXs</button>
	<a href="jingles" target="_blank">View all jingles</a>
	<a href="sfx" target="_blank">View all sound effects</a>
	<div class="w3-row">
		<?php
		function getJingles() {
			$link = mysqli_connect(servername, username, password, dbname);
			// Create connection
			// Check connection
			if(dblink === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Attempt select query execution
			$sql = "SELECT * FROM jingles WHERE `StationPath` = '" . $_SESSION['StationAbbr']. ' ORDER BY SortOrder";
			echo $sql;

			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						echo "<div class=\"w3-col sw-tenth jingle-box\" title=\"".$row[Description]."\">";
						echo "<audio id=\"stationjingle1\"  preload=\"auto\" onended=\"stopStationJ1()\" src=\"https://www.sprousewebsitestest.com/imperium/carmina/jingles/".$StationAbbr."/station/1.mp3\" type=\"audio/mp3\"></audio>";
						echo "<button type=\"button\" name=\"button\" id=\"stationjingle".$row[id]."play\" onclick=\"playstationjingle".$row[id]."()\" class=\"play-button\"><i class=\"fas fa-play\"></i></button>";
						echo $row[Name];
						$URL1 = "https://sprousewebsitestest.com/radio/songs/".$row[MainArtist]."/".$row[Album]."/".$row[Song].".mp3";
						$URL2 = "https://sprousewebsitestest.com/radio/songs/Various Artists/".$row[Album]."/".$row[Song].".mp3";
						$URL3 = "https://sprousewebsitestest.com/radio/songs/".$row[MainArtist]."/".$row[Album]."/01 ".$row[Song].".mp3";
						$URL4 = "https://sprousewebsitestest.com/radio/songs/Compilations/".$row[Album]."/".$row[Song].".mp3";
						$sourcea = "<audio id=\"DeckAAudioEl\" oncanplay=\"DeckACanPlayThrough()\" preload=\"auto\"><source src=\"'.$URL1.'\" type=\"audio/mpeg\"><source src=\"'.$URL2.'\" type=\"audio/mpeg\"><source src="'.$URL3.'" type=\"audio/mpeg\"><source src=\"'.$URL4.'\" type=\"audio/mpeg\">Your browser does not support audio elements</audio>";
						$sourceb = "<audio id=\"DeckBAudioEl\" oncanplay=\"DeckBCanPlay()\" oncanplaythrough=\"DeckBCanPlayThrough()\" preload=\"auto\"><source src=\"'.$URL1.'\" type=\"audio/mpeg\"><source src=\"".$URL2."\" type=\"audio/m4a\"><source src=\"".$URL3."\" type=\"audio/m4a\"><source src=\"".$URL4."\" type=\"audio/m4a\">Your browser does not support audio elements</audio>";
						echo "</div>";
						echo "</div>";
						$varname = "URL".$row[id];
						echo "<script>
						function playstationjingle".$row[id]."() {
							stationjingle".$row[id].".play();
							stationjingle".$row[id]."play.style.display = \"none\";
							stationjingle".$row[id]."stop.style.display = \"inline\";
						}

						function stopstationjingle".$row[id]."() {
							stationjingle".$row[id].".pause();
							stationjingle".$row[id].".currentTime = 0;
							stationjingle".$row[id]."play.style.display = 'inline';
							stationjingle".$row[id]."stop.style.display = 'none';
						}
						try {
							DeckANotPlay();
							document.getElementById('DeckAAudioDiv').innerHTML = "'.$sourcea.'";
							document.getElementById('DeckAArtistText').innerHTML = Artists".$row[id].";
							document.getElementById('DeckASongText').innerHTML = '".$row[Song]."';
							document.getElementById('DeckAAlbumText').innerHTML = '".$row[Album]."';
							document.getElementById('DeckAPlay').disabled = false;
							document.getElementById('DeckAEject').disabled = false;
							document.getElementById('DeckAAudioEl').volume = volANew;
							document.getElementById('DeckALengthRange').disabled = false;
							document.getElementById('pictureA').src = \"https://sprousewebsitestest.com/imperium/songs/".$row[MainArtist]."/".$row[Album]."/".$row[Album].".jpg\";
							DeckAPause()
							getDeckTimes();
							document.getElementById('DeckAAudioEl').load();
							DeckAPlay()
							DeckAPause()
						} catch (e) {
							console.error(e.name);
							console.error(e.message);
							document.getElementById('snackbar').innerHTML = e.name + e.message + 'Unable to add song to Deck A';
							snackbar();
						}
					}
					</script>
					";
				}
				$SongsInt = mysqli_num_rows($result);
				echo "<span id='songsfound'>". mysqli_num_rows($result)." Songs found in the Library</span>";
				// Free result set
				mysqli_free_result($result);
			} else{
				echo "<div style='width:100%'>No records matching your query were found.</div>";
				echo "<script>songsRecieved();</script>";
			}
		} else{
			echo "ERROR: Could not able to execute " . $sql . " ." . mysqli_error($link);
		}
	}

	getJingles();
	if(isset($_POST['refresh'])) {
		getJingles();
	}
	// echo "<script type='text/javascript'>";
	// echo "var SongsInt = '".$SongsInt."';";
	?>
	<div class="w3-col sw-tenth">
		<audio id="stationjingle1"  preload="auto" onended="stopStationJ1()" src="<?php
		echo "https://www.sprousewebsitestest.com/imperium/carmina/jingles/".$StationAbbr."/station/1.mp3";
		?>" type="audio/mp3">
	</audio>
	<div class="jingle-box">
		<button type="button" name="button" id="j1play" onclick="playJ1()" class=" play-button">
			<i class="fas fa-play"></i>
		</button>
		<button type="button" name="button" id="j1stop" onclick="stopJ1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
		LTBRL Fing Silent
	</div>
</div>
</div>
</div>
<script type="text/javascript">
var j1 = document.getElementById("jingle1");
var j1play = document.getElementById("j1play");
var j1stop = document.getElementById("j1stop");
var j2 = document.getElementById("jingle2");
var j2play = document.getElementById("j2play");
var j2stop = document.getElementById("j2stop");
var j3 = document.getElementById("jingle3");
var j3play = document.getElementById("j3play");
var j3stop = document.getElementById("j3stop");
var j4 = document.getElementById("jingle4");
var j4play = document.getElementById("j4play");
var j4stop = document.getElementById("j4stop");
var j5 = document.getElementById("jingle5");
var j5play = document.getElementById("j5play");
var j5stop = document.getElementById("j5stop");
var j6 = document.getElementById("jingle6");
var j6play = document.getElementById("j6play");
var j6stop = document.getElementById("j6stop");
var j7 = document.getElementById("jingle7");
var j7play = document.getElementById("j7play");
var j7stop = document.getElementById("j7stop");
var j8 = document.getElementById("jingle8");
var j8play = document.getElementById("j8play");
var j8stop = document.getElementById("j8stop");
var j9 = document.getElementById("jingle9");
var j9play = document.getElementById("j9play");
var j9stop = document.getElementById("j9stop");
var j10 = document.getElementById("jingle10");
var j10play = document.getElementById("j10play");
var j10stop = document.getElementById("j10stop");
var j11 = document.getElementById("jingle11");
var j11play = document.getElementById("j11play");
var j11stop = document.getElementById("j11stop");
var j12 = document.getElementById("jingle12");
var j12play = document.getElementById("j12play");
var j12stop = document.getElementById("j12stop");
var j13 = document.getElementById("jingle13");
var j13play = document.getElementById("j13play");
var j13stop = document.getElementById("j13stop");
var j14 = document.getElementById("jingle14");
var j14play = document.getElementById("j14play");
var j14stop = document.getElementById("j14stop");
var j15 = document.getElementById("jingle15");
var j15play = document.getElementById("j15play");
var j15stop = document.getElementById("j15stop");
var j16 = document.getElementById("jingle16");
var j16play = document.getElementById("j16play");
var j16stop = document.getElementById("j16stop");
var j17 = document.getElementById("jingle17");
var j17play = document.getElementById("j17play");
var j17stop = document.getElementById("j17stop");


var joel1 = document.getElementById("joeljingle1");
var joel1play = document.getElementById("joel1play");
var joel1stop = document.getElementById("joel1stop");
var joel2 = document.getElementById("joeljingle2");
var joel2play = document.getElementById("joel2play");
var joel2stop = document.getElementById("joel2stop");
var joel3 = document.getElementById("joeljingle3");
var joel3play = document.getElementById("joel3play");
var joel3stop = document.getElementById("joel3stop");
var joel4 = document.getElementById("joeljingle4");
var joel4play = document.getElementById("joel4play");
var joel4stop = document.getElementById("joel4stop");
var joel5 = document.getElementById("joeljingle5");
var joel5play = document.getElementById("joel5play");
var joel5stop = document.getElementById("joel5stop");
var ozey1 = document.getElementById("ozeyjingle1");
var ozey1play = document.getElementById("ozey1play");
var ozey1stop = document.getElementById("ozey1stop");
var ozey2 = document.getElementById("ozeyjingle2");
var ozey2play = document.getElementById("ozey2play");
var ozey2stop = document.getElementById("ozey2stop");
var ozey3 = document.getElementById("ozeyjingle3");
var ozey3play = document.getElementById("ozey3play");
var ozey3stop = document.getElementById("ozey3stop");
var loop1 = document.getElementById("loop1");
var loop1play = document.getElementById("loop1play");
var loop1stop = document.getElementById("loop1stop");
var loop2 = document.getElementById("loop2");
var loop2play = document.getElementById("loop2play");
var loop2stop = document.getElementById("loop2stop");

</script>

<?php
include 'includes/jinglefunctions.php';
include 'includes/identfunctions.php';
?>

<script type="text/javascript">
function sfx() {
	document.getElementById("station-jingles").style.display = "none";
	document.getElementById("show-jingles").style.display = "none";
	document.getElementById("community-jingles").style.display = "none";
	document.getElementById("sfxlist").style.display = "block";
}

function showjingles() {
	document.getElementById("show-jingles").style.display = "block";
	document.getElementById("station-jingles").style.display = "none";
	document.getElementById("community-jingles").style.display = "none";
	document.getElementById("sfxlist").style.display = "none";
}

function stationjingles() {
	document.getElementById("station-jingles").style.display = "block";
	document.getElementById("show-jingles").style.display = "none";
	document.getElementById("community-jingles").style.display = "none";
	document.getElementById("sfxlist").style.display = "none";
}

function communityjingles() {
	document.getElementById("community-jingles").style.display = "block";
	document.getElementById("show-jingles").style.display = "none";
	document.getElementById("station-jingles").style.display = "none";
	document.getElementById("sfxlist").style.display = "none";
}

function showjoel() {
	document.getElementById("joel-show-jingles").style.display = "block";
	document.getElementById("ozey-show-jingles").style.display = "none";
}

function showozey() {
	document.getElementById("joel-show-jingles").style.display = "none";
	document.getElementById("ozey-show-jingles").style.display = "block";
}

function sfxFav() {
	document.getElementById("sfx-list-1").style.display = "none";
	// document.getElementById("sfx-fav").style.display = "block";
	document.getElementById("loops-list").style.display = "none";
	document.getElementById("sfx-list-2").style.display = "none";
}

function sfxLoops() {
	document.getElementById("sfx-list-1").style.display = "none";
	// document.getElementById("sfx-fav").style.display = "none";
	document.getElementById("loops-list").style.display = "block";
	document.getElementById("sfx-list-2").style.display = "none";
}

function sfxlist1() {
	document.getElementById("sfx-list-1").style.display = "block";
	// document.getElementById("sfx-fav").style.display = "none";
	document.getElementById("loops-list").style.display = "none";
	document.getElementById("sfx-list-2").style.display = "none";
}

function sfxlist2() {
	// document.getElementById("sfx-fav").style.display = "none";
	document.getElementById("loops-list").style.display = "none";
	document.getElementById("sfx-list-1").style.display = "none";
	document.getElementById("sfx-list-2").style.display = "block";
}

document.getElementById("loadinfo").innerHTML = "Jingles loaded";
</script>
<script type="text/javascript">
load++;
</script>
<!-- End of jingles.php file -->

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

<!-- Start of footer.php file -->
<?php
include 'config.php';
 ?>
<footer>
	<div class="w3-third w3-left">
		Version: <?php echo version; ?>

	</div>
	<div class="w3-third">
		Built and maintained by <a href="http://www.sprousewebsites.co.uk/">Sprouse Websites</a> &copy; 2019-<?php echo date("Y");?>
	</div>
	<div class="w3-third w3-right">
		<a href="https://www.sprousewebsitestest.com/imperium/feedback.php" target="_blank">
			<i class="fas fa-comment"></i> Give Feedback
		</a>
		<a href="https://www.sprousewebsitestest.com/imperium/about.php" target="_blank">
			<i class="fas fa-question-circle"></i> About
			<!-- <span>Ctrl + ?!</span> -->
		</a>
		<a href="https://www.sprousewebsitestest.com/imperium/help.php" target="_blank">
			<i class="fas fa-info-circle"></i> Help
			<!-- <span>Ctrl + ?!</span> -->
		</a>
	</div>
</footer>
<script type="text/javascript">
load++;

function notLoad() {
	if (load < 8) {
		console.log(load);
		setTimeout(notLoad, 500);
	}
	else {
		document.getElementById("loadinfo").innerHTML = "Software loaded";
		document.getElementById("loading").style.display = "none";
	}
}
notLoad();
</script>
</body>
</html>
<!-- End of footer.php file -->
