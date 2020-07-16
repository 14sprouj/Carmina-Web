<!-- Start of indexbar.php file -->
	<div id="showbox" class="w3-bar w3-purple" style="position: sticky; top: 0pt; width: 100%; padding: 3pt; padding-left: 7pt; display:none; z-index:100;">
		<div class="w3-bar-item">
			Show
		</div>
		<div class="w3-bar-item">
			<select id="ShowDecksModule" name="decks" onchange="updateShowModules()">
				<option value="0">Hide Decks & Playlists</option>
				<option value="1" disabled>1 Deck & Playlists (Coming Soon)</option>
				<option value="2" selected>2 Decks & Playlists</option>
				<option value="4" disabled>4 Decks & Playlists (Coming Soon)</option>
			</select>
		</div>
		<div class="w3-bar-item">
			<input id="ShowTimeModule" type="checkbox" checked onclick="updateShowModules()" name="time" value="time"> Time
		</div>
		<div class="w3-bar-item">
			<input id="ShowWeatherModule" type="checkbox" checked onclick="updateShowModules()" name="weather" value="weather"> Weather
		</div>
		<div class="w3-bar-item">
			<input id="ShowJinglesModule" type="checkbox" checked onclick="updateShowModules()" name="jingles" value="jingles"> Jingles
		</div>
		<div class="w3-bar-item">
			<input id="ShowMidiModule" type="checkbox" disabled onclick="updateShowModules()" name="midi" value="midi"> MIDI
		</div>
		<div class="w3-right w3-dropdown-hover">
			<button class="w3-button">
				<?php
				if ($_SESSION['imperium_login_user'] != NULL) {
					echo "<i class='fas fa-user'></i> " . $_SESSION['imperium_login_user'];
				}
				else {
					echo "<a href='login.php'>Login</a>";
				}
				?>
			</button>
			<div class="w3-dropdown-content w3-bar-block w3-card-4" style="position: fixed; right:7pt; top: 30pt;">
				<a href="settings.php"  class="w3-bar-item w3-button" onmouseover="SettingsHoverStartRotate()" onmouseout="SettingsHoverStopRotate()">
					<i id="settingiconspin" class="fas fa-cog"></i> Settings
				</a>
				<a href="https://imperium.sprousewebsitestest.com/logout.php" class="w3-bar-item w3-button">
					<i class="fas fa-sign-out-alt"></i>
					Logout
				</a>
			</div>
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
	<div id="snackbar" class="snackbar">Some text some message..</div>
	<div id="ErrorSnackbar" class="error snackbar">Some text some message..</div>
	<div id="offlineSnackbar" class="snackbar w3-blue">&f6ac; <i class="fas fa-wifi-slash"></i> Offline. Please connect to the internet to continue using this app</div>
	<div id="onlineSnackbar" class="snackbar w3-green">&f6ac; <i class="fas fa-wifi"></i> We're back online</div>
	<!-- End of indexbar.php file -->
