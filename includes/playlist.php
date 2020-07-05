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
	<table id='myTable' class='banded' height='300pt'>
		<thead>
			<tr>
				<th>Add to Deck</th>
				<th id='IdHeader' class='playlistHeader'>
					<button onclick='javascript:sortTableById()' class="playlistHeader">
						Song Id
					</button>
				</th>
				<th id='SongHeader' class='playlistHeader'>
					<button onclick='javascript:sortTableBySong()' class="playlistHeader">
						Song Name
					</button>
				</th>
				<th id='ArtistHeader' class='playlistHeader'>
					<button onclick='javascript:sortTableByArtist()' class="playlistHeader">
						Artists
					</button>
				</th>
				<th id='AlbumHeader' class='playlistHeader'>
					<button onclick='javascript:sortTableByAlbum()' class="playlistHeader">
						Album
					</button>
				</th>
				<th class='playlistTableHeader'>
					<button onclick='javascript:sortTableByLength()' class="playlistHeader">
						Length
					</button>
				</th>
				<th id='GenreHeader' class='playlistTableHeader'>
					<button onclick='javascript:sortTableByGenre()' class="playlistHeader">
						Genre
					</button>
				</th>
				<th>
					Version
				</th>
				<th id='ExplicitHeader' class='playlistTableHeader'>
					<button onclick='javascript:sortTableByExplicit()' class="playlistHeader" title='E means Explicit R means unsuitable for Radio N means Not Explicit'>
						Explicit
					</button>
				</th>
				<th></th>
			</tr>
		</thead>
		<?php
		function getSongs() {
			$link = mysqli_connect(servername, username, password, dbname);
			// Create connection
			// Check connection
			if(dblink === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Attempt select query execution
			$sql = "SELECT * FROM songs";

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
						$sourcea = '<audio id="DeckAAudioEl" oncanplay="DeckACanPlayThrough()" preload="auto"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/mpeg"><source src="'.$URL3.'" type="audio/mpeg"><source src="'.$URL4.'" type="audio/mpeg">Your browser does not support audio elements</audio>';
						$sourceb = '<audio id="DeckBAudioEl" oncanplay="DeckBCanPlay()" oncanplaythrough="DeckBCanPlayThrough()" preload="auto"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/m4a"><source src="'.$URL3.'" type="audio/m4a"><source src="'.$URL4.'" type="audio/m4a">Your browser does not support audio elements</audio>';
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
					echo "</table>";
					echo "<script>songsRecieved();</script>";
				}
			} else{
				echo "ERROR: Could not able to execute " . $sql . " ." . mysqli_error($link);
			}
		}

		getSongs();
		if(isset($_POST['refresh'])) {
			getSongs();
		}
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
