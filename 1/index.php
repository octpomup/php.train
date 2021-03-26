
<?php

$host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'fp';
  $link = mysqli_connect($host, $user, $pass, $db_name);

  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
  
 $sql = mysqli_query($link, 'SELECT `id`, `first_name`, `last_name` FROM `users`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['id']} {$result['first_name']} {$result['last_name']} <br>";
  }
  
?>

