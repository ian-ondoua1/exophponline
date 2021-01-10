<?php
	
	$pdo = null;
	$dsn = 'mysql: host=localhost;	dbname=minifacebook';
	$dbUser ='root';
	$pw = '';

	try {
		$pdo = new pdo($dsn, $dbUser, $pw);
		$pdo ->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRmode_EXCEPTION);
	} 
	catch (PDOException $e) {
		echo 'Connection failed: ' $e->getMessage();	}
		return $pdo;

?>