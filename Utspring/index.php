<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Utspringet</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="countdown.php">
</head>
<body>

	<h1 id="clock">00:00:00</h1><br>


	<a href="upload_to_lista.php">UPLOAD</a><br>
	<h3><strong>Lista för utspring</strong></h3><hr><br>
	<!-- Database connection -->
<?php 
	include 'lista_server.php';
	$conn = new PDO("mysql:host=$servername;dbname=utspring", $username, "");
?>
	    

<!-- Tables as structure for the list -->
<table>
	<thead>
		<tr>
			<th>Skola</th>
			<th>Plats</th>
			<th>Tid</th>
		</tr>
	</thead>
	
	<!-- Fetch the results and put it in rows for the tables -->
	<?php
		$data = $conn->query("SELECT * FROM lista")->fetchAll();

		foreach ($data as $row) {

	//<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['skola']; ?></td>
			<td><?php echo $row['plats']; ?></td>
			<td><?php echo $row['tid']; ?></td>
		</tr>
	<?php } ?>
</table>

</body>
</html>