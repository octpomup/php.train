<?php

echo "Hello!<br>";

#$host = '127.0.0.1';
#$db = 'fp';
#$user = 'root';
#$pass = '';
	
$dsn = 'mysql:host=localhost; dbname=fp';
$opt = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
    ];
$pdo = new PDO($dsn, 'raman', 'raman', $opt);
    
$result = $pdo->prepare("SELECT * FROM `users` where YEAR(bdate) = 1990  ");
$result->execute();
foreach($result as $rows){
		echo $rows['first_name']." ";
		echo $rows['last_name']." ";
		echo $rows['bdate'],"<br/>";
	}
 
 
?>
