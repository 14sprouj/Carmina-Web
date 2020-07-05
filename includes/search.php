<?php
$page_name = "Search Branch | DJ";
?>
<!-- Start of header.php file -->
<!DOCTYPE html>
<html>
<head>
	<?php
	version = "Alpha 0.2 D";
	?>
	<!-- Google Analytics -->
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script data-name="BMC-Widget" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="joelsprouse" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting. You can now buy me a Book!" data-color="#5F7FFF" data-position="right" data-x_margin="18" data-y_margin="18"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145359620-1"></script>
	<script src="http://www.sprousewebsites.co.uk/js/analytics.js" charset="utf-8"></script>
	<script async src="//static.getclicky.com/js"></script>




	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content="5"> -->
	<!-- https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
	<meta http-equiv="X-Content-Security-Policy" content="default-src 'self'; script-src 'self'"> -->

	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

	<title><?php echo $page_name; ?></title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/songlist.css">
	<link rel="stylesheet" href="css/rcm.css">
	<link rel="stylesheet" href="css/fa.css">
	<link rel="stylesheet" href="css/snackbar.css">
	<!-- <link rel="stylesheet/less" type="text/css" href="css/styles.less" /> -->
	<link rel="stylesheet/less" type="text/css" href="css/decksprogress.less" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
	<!-- <link rel="stylesheet" href="css/decksprogress.scss"> -->

	<link rel="icon" href="media/icon.png">

	<script src="https://kit.fontawesome.com/e8abc56752.js" crossorigin="anonymous"></script>
	<script src="js/addtodecks.js" charset="utf-8"></script>
	<script src="js/autocomplete.js" charset="utf-8"></script>
	<script src="js/addtodecks.js" charset="utf-8"></script>
	<script src="js/decks.js" charset="utf-8"></script>
	<script src="js/filter.js" charset="utf-8"></script>
	<!-- <script src="js/refresh.js" charset="utf-8"></script> -->
	<script src="js/sorttable.js" charset="utf-8"></script>
	<script src="js/modules.js" charset="utf-8"></script>
	<script src="js/jcontrols.js" charset="utf-8"></script>
	<script src="js/playlists.js" charset="utf-8"></script>
	<script src="js/snackbar.js" charset="utf-8"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/jsmediatags.min.js"></script>
	<script src="js/decksprogress.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://unpkg.com/album-art"></script>

</head>
<body onload="load()">
	<?php include 'beta.php'; ?>
	<div id="showbox" style="position: sticky; top: 0pt; width: 100%; background-color: #888; color: #ddd; padding: 3pt; padding-left: 7pt; display:none; z-index:100;">
		Show
		<select id="ShowDecksModule" name="decks" onchange="updateShowModules()">
			<option value="0">Hide Decks</option>
			<option value="1">1 Deck</option>
			<option value="2" selected>2 Decks</option>
			<option value="4" disabled>4 Decks</option>
		</select>
		<input id="ShowTimeModule" type="checkbox" checked onclick="updateShowModules()" name="time" value="time"> Time
		<input id="ShowWeatherModule" type="checkbox" checked onclick="updateShowModules()" name="weather" value="weather"> Weather
		<input id="ShowPlaylistModule" type="checkbox" checked onclick="updateShowModules()" name="playlist" value="playlist"> Playlist
		<input id="ShowJinglesModule" type="checkbox" checked onclick="updateShowModules()" name="jingles" value="jingles"> Jingles
	</div>
	<div id="snackbar" class="snackbar">Some text some message..</div>
	<div id="offlineSnackbar" class="snackbar">&f6ac; <i class="fas fa-wifi-slash"></i> Offline. Please connect to the internet to continue using</div>
	<!-- End of header.php file -->

<?php
include 'vars.php';
include 'decks.php';
?>
<style media="screen">
.weatherbox:hover {
	border: 1pt grey solid;
	border: 19px;
}
</style>
<a href="weather.php" class="hidden weatherbox" target="_blank">
	<?php
	include 'widget.php';
	?>
</a>

<?php
// https://www.algolia.com/doc/guides/getting-started/quick-start/tutorials/quick-start-with-the-api-client/php/?language=php#install
// https://github.com/algolia/algoliasearch-client-php/
// composer autoload
require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
// require_once 'path/to/algolia/folder/autoload.php';

$client = Algolia\AlgoliaSearch\SearchClient::create(
	'FF7V7NQ3ZM',
	'c4e54ec186ae600f005ed6a12e4cabab'
);

$index = $client->initIndex('your_index_name');
?>
<?php
include 'playlist.php';
include 'jingles.php';
include 'rcm.php';
?>


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

<?php
include 'footer.php';
?>
