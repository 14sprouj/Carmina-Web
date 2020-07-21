<?php
$page_name = "View Database";
include '../includes/config.php';
include '../includes/head.php';
?>

<body>

	<style>
	table, tr, td, th {
		border: 1pt solid black;
		border-collapse: collapse;
	}
</style>

<script type="text/javascript">
function filter() {
	var f = 0;
	var input, filter, table, tr, td1, td2, i, txtValue;
	input = document.getElementById("filterbox");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td1 = tr[i].getElementsByTagName("td")[0];
		td2 = tr[i].getElementsByTagName("td")[1];
		td3 = tr[i].getElementsByTagName("td")[2];
		td4 = tr[i].getElementsByTagName("td")[3];
		td5 = tr[i].getElementsByTagName("td")[5];
		if (td1) {
			txtValue1 = td1.textContent || td1.innerText;
			txtValue2 = td2.textContent || td2.innerText;
			txtValue3 = td3.textContent || td3.innerText;
			if (txtValue2.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				f = f + 1;
			} else if (txtValue1.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				f = f + 1;
			} else if (txtValue3.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				f = f + 1;
			} else if (txtValue4.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				f = f + 1;
			} else if (txtValue5.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				f = f + 1;
			} else {
				tr[i].style.display = "none";
			}
		}
	}
	document.getElementById("songsfound").innerHTML = f + " songs found matching query \"" + document.getElementById("filterbox").value + "\"";
}

</script>

<input type="text" id="filterbox" onkeyup="filter()" placeholder="Search for songs.." title="Type in a Song Name" style="display:inline;">

<style media="screen">
	#myTable {
    margin: auto;
    /* word-break: break-word; */
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
    width: 100%;
	}
</style>

<table id='myTable' class="banded">
<thead>
	<th>ID</th>
	<th>Song</th>
	<th>Artist(s)</th>
	<th>Album</th>
	<th>Length</th>
	<th>Genre</th>
	<th>Version</th>
	<th>Remixer</th>
	<th>Explicit?</th>
	<th>Year Released</th>
	<th>Date Released</th>
	<th>Date Bought</th>
	<th>Price</th>
	<th>Comments</th>
	<th>Date Added to Database</th>
</thead>
<?php
// Create connection
$link = mysqli_connect(servername, username, password, dbname);

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM songs";

if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
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
				echo "<td>" . $row['Genre'] . "</td>";
			} else {
				echo "<td><red>Unknown</red></td>";
			}
			echo "<td>" . $row['Version'] . "</td>";
			echo "<td>" . $row['Remixer'] . "</td>";
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
			echo "<td>";
			echo $row['YearReleased'];
			echo "</td>";
			echo "<td>" . $row['DateReleased'] . "</td>";
			echo "<td>" . $row['DateBought'] . "</td>";
			echo "<td>" . $row['Price'] . "</td>";
			echo "<td>" . $row['Comments'] . "</td>";
			echo "<td>" . $row['DateAddedtoDB'] . "</td>";
			echo "</tr>";
		}
	}
}
?>
</table>
<?php
include '../includes/footer.php';
?>
