<?php



if (isset($_POST['Year'])) 
	{
	
	$inputSearch = $_REQUEST['date'];
	
	$dsn = 'mysql:host=localhost; dbname=fp';
	$opt = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
		];
	$pdo = new PDO($dsn, 'raman', 'raman', $opt);



   
	$result = $pdo->prepare("SELECT * FROM `users` where YEAR(bdate) = '$inputSearch'  ");
	$result->execute();

	foreach($result as $rows)
		{
		echo $rows['first_name']." ";
		echo $rows['last_name']." ";
		echo $rows['bdate'],"<br/>";
		}
	}

?>
<form action="" method="POST">
	Search: <input type="text" name="date" placeholder="vvedite daty" />
<input type="submit" name="Year" />

</form>
