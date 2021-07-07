<?php
$page_name = "Database to JSON";
include '../includes/config.php';
include '../includes/session.php';
include '../includes/head.php';
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
		$myfile = fopen("SongDatabase.txt", "w") or die("Unable to open file!");
		$txt = "This is a list of all the songs in the database\n";
		fwrite($myfile, $txt);
		$date = Date("d/M/Y h:i:s a");
		$txt = "Last Updated: ".$date." UTC\n";
		fwrite($myfile, $txt);
		$txt = "<SongDatabase xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\">\n";
		fwrite($myfile, $txt);
		$txt = "<Songs>\n";
		fwrite($myfile, $txt);
		while($row = mysqli_fetch_array($result)){
			$txt = "<Song>\n";
			fwrite($myfile, $txt);
			$txt = "<ID>".$row['id']."</ID>\n";
			fwrite($myfile, $txt);
			$txt = "<Name>".$row['Song']."</Name>\n";
			fwrite($myfile, $txt);
			$txt = "<MainArtist>".$row['MainArtist']."</MainArtist>\n";
			fwrite($myfile, $txt);
			$txt = "</Song>\n\n";
			fwrite($myfile, $txt);
		}
		$txt = "</Songs>\n";
		fwrite($myfile, $txt);
		$txt = "</SongDatabase>\n";
		fwrite($myfile, $txt);
	}
	fclose($myfile);
}
?>
