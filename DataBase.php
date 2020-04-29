<?php
//Config file where will store the DB username/password details
require_once 'pdoconfig.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

 $stmt = $conn->prepare("SELECT name,age,job_title FROM exads_test");
 $stmt->execute(); 
 $data = $stmt->fetchAll();
foreach ($data as $row) {
    echo $row['name']."<br />\n";
	echo $row['age']."<br />\n";
	echo $row['job_title']."<br />\n";
}

//example of how you would write a sanitised record to the same table.
//Say you have a form field like this:

//<input type="text" name="var1">
//you can use htmlentities and trim together like so, and create your $var1 variable:

$var1 = htmlentities(trim($_POST['var1']));
//Then you can create your transaction like this:

$stmt= $conn->prepare("insert into tablename (key1, key2) values (?,?)");
$stmt->bind_param("is",$var1, $var2);
$stmt->execute();
$stmt->close();