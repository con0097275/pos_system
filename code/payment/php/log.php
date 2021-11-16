<?php
    $serverName = 'localhost';
    $userName   = 'root';
    $password   = '';
    $dbName     = 'payment';
        
    try {
        $db = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
	$username = isset($_POST['username']) ? $_POST['username'] : null;
	$method = isset($_POST['method']) ? $_POST['method'] : null;
	$mount = isset($_POST['mount']) ? $_POST['mount'] : null;   
	   
    global $db;
	$stmt = $db->prepare("INSERT INTO pays (name, method, mount) VALUES (?, ?,?)");
	$stmt->execute(array($username, $method, $mount));

?>