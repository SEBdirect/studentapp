<?php
	

	$servername = "localhost";
	$username = "root";

	$skola = "";
	$plats = "";
	$tid = "";


	// Values from the form stored in variables.
	if (isset($_POST["submit"])) {

		$skola = $_POST["skola"];
		$plats = $_POST["plats"];
		$tid = $_POST["tid"];


	try {
	    $conn = new PDO("mysql:host=$servername;dbname=utspring", $username, "");
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	     $sql = "INSERT INTO lista (skola, plats, tid)
	    VALUES ('$skola', '$plats', '$tid')";

	    // use exec() because no results are returned
	    $conn->exec($sql);

	     echo "New record created successfully";
	     header('location: index.php');
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

	$conn = null;
	}


