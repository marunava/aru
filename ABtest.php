<?php
//Config file where will store the DB username/password details
require_once 'pdoconfig.php';
//Connect to DB
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

 $stmt = $conn->prepare("SELECT * FROM exads_test");
 $stmt->execute(); 
 $data = $stmt->fetchAll();
foreach ($data as $row) {
    if($row['id'] == 1 && $row['split_percent'] < 50){
		//redirect to design 1 
		exit(0);
	  }	
	  elseif($row['id'] == 2 && $row['split_percent'] < 25){
		//redirect to design 2
		exit(0);
	  }
	}
	else {
	//redirect to design 3
	}
}