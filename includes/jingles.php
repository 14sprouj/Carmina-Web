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
		$d = "https://www.sprousewebsitestest.com/imperium/jingles";
		$all_files = glob("https://www.sprousewebsitestest.com/imperium/jingles/*.*");
		for ($i=0; $i<count($all_files); $i++)
		{
			$image_name = $all_files[$i];
			$supported_format = array('mp3','jpg','jpeg','png');
			$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
			if (in_array($ext, $supported_format))
			{
				echo $image_name;
				echo '<audio src="'.$image_name .'" alt="'.$image_name.'" />'."<br /><br />";
			} else {
				continue;
			}
		}
		?>
		<div class="w3-col l1">

		</div>
	</div>
	<!-- <table id="station-jingles" style="text-align:center; width:100%;">
	<tr>
	<td>
	<audio id="jingle1"  preload="auto" onended="stopJ1()" src="<?php
	echo "https://www.sprousewebsitestest.com/imperium/jingles/".$StationAbbr."/1.mp3";
	?>" type="audio/mp3">
</audio>

<div class="jingle-box">
<button type="button" name="button" id="j1play" onclick="playJ1()" class=" play-button">
<i class="fas fa-play"></i>
</button>
<button type="button" name="button" id="j1stop" onclick="stopJ1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
LTBRL Fing Silent
</div>
</td>
</tr>
</table> -->
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
