<?php



if (isset($_GET['Year'])) 
	{
	
	$inputSearch = $_REQUEST['date'];
	
	$dsn = 'mysql:host=localhost; dbname=fp';
	$opt = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
		];
	$pdo = new PDO($dsn, 'raman', 'raman', $opt);



   
	$result = $pdo->prepare("SELECT * FROM `users` where YEAR(bdate) = ?  ");
	if ($result->execute(array($_GET['date'])))

		{
		while ($row = $result->fetch()) 
			{
						
		echo $row['first_name']." ";
		echo $row['last_name']." ";
		echo $row['bdate'],"<br/>";
			}
		}
	}

?>
<form action="" method="GET">
	Search: <input type="text" name="date" placeholder="введите дату" />
<input type="submit" name="Year" />

</form>
