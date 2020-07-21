<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	table, tr, td {
		border: 1pt solid black;
		border-collapse: collapse;
	}
	</style>
</head>

<body>

	<?php
	include '../includes/head.php';
	// include '../includes/header.php';
	echo "Please check all details before proceding";
	$_SESSION["song"] = $_POST["song"];
	$_SESSION["artist"] = $_POST["artist"];
	$_SESSION["artist1"] = $_POST["artist1"];
	$_SESSION["artist2"] = $_POST["artist2"];
	$_SESSION["artist3"] = $_POST["artist3"];
	$_SESSION["artist4"] = $_POST["artist4"];
	$_SESSION["album"] = $_POST["album"];
	$_SESSION["length"] = $_POST["length"];
	$_SESSION["genre"] = $_POST["genre"];
	$_SESSION["subgenre"] = $_POST["subgenre"];
	$_SESSION["version"] = $_POST["version"];
	$_SESSION["remixer"] = $_POST["remixer"];
	$_SESSION["explicit"] = $_POST["explicit"];
	$_SESSION["yreleased"] = $_POST["yreleased"];
	$_SESSION["dreleased"] = $_POST["dreleased"];
	$_SESSION["bought"] = $_POST["bought"];
	$_SESSION["comments"] = $_POST["comments"];
	?>

	<table>
		<tr>
			<td>Song name</td>
			<td><?php echo $_POST["song"]; ?></td>
		</tr>
		<tr>
			<td>Main Artist</td>
			<td><?php echo $_POST["artist"]; ?></td>
		</tr>
		<tr>
			<td>Other Artist 1</td>
			<td><?php echo $_POST["artist1"]; ?></td>
		</tr>
		<tr>
			<td>Other Artist 2</td>
			<td><?php echo $_POST["artist2"]; ?></td>
		</tr>
		<tr>
			<td>Other Artist 3</td>
			<td><?php echo $_POST["artist3"]; ?></td>
		</tr>
		<tr>
			<td>Other Artist 4</td>
			<td><?php echo $_POST["artist4"]; ?></td>
		</tr>
		<tr>
			<td>Album</td>
			<td><?php echo $_POST["album"]; ?></td>
		</tr>
		<tr>
			<td>Song Length</td>
			<td><?php echo $_POST["length"]; ?></td>
		</tr>
		<tr>
			<td>Genre</td>
			<td>
				<?php echo $_POST["genre"];
				?>
			</td>
		</tr>
		<tr>
			<td>Version</td>
			<td>
				<?php echo $_POST["version"]; ?>
			</td>
		</tr>
		<tr>
			<td>Remixer</td>
			<td>
				<?php echo $_POST["remixer"]; ?>
			</td>
		</tr>
		<tr>
			<td>Explicit?</td>
			<td><?php echo $_POST["explicit"]; ?></td>
		</tr>
		<tr>
			<td>Year Released</td>
			<td><?php echo $_POST["yreleased"]; ?></td>
		</tr>
		<tr>
			<td>Date Released</td>
			<td><?php echo $_POST["dreleased"]; ?></td>
		</tr>
		<tr>
			<td>Date Bought</td>
			<td><?php echo $_POST["bought"]; ?></td>
		</tr>
		<tr>
			<td>Comments</td>
			<td>
				<?php echo $_POST["comments"]; ?>
			</td>
		</tr>
	</table>

	<a href="db-add.php">Add song</a>

	<script>

	</script>
	<?php
	include '../includes/footer.php';
	?>
