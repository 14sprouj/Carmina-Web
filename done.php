<?php
$page_name = "Data inserted";
include 'includes/head.php';

// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<body>
	<ul>
		<li>
			<a href="add.php">Add another song</a>
		</li>
		<li>
			<a href="index.php">Go to home</a>
		</li>
	</ul>
	<script>

	</script>
</body>
</html>
