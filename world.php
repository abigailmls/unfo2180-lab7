<!-- <?php
$host = getenv('IP');
$username = 'lab7_user';
$password = '';
$dbname = 'world';

try {

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  }
  
  
  
  catch(PDOException $e)
  
  {
  
      echo "Connection failed: " .$e->getMessage();
  
      
  
  }

  $country=$_GET['country'];



if ($country=='all=ture'){

$stmt = $conn->query("SELECT * FROM countries");



$stmt->execute();


$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>

}else{

$stmt = $conn->query("SELECT * FROM countries WHERE name='$country';");



$stmt->execute();



$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo '<ul>';

foreach ($results as $row) {

echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';

}

echo '</ul>';

} -->

<?php



$host = getenv('IP');

$username = 'lab7_user';

$password = '@bigaiL1';

$dbname = 'world';



try {

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}



catch(PDOException $e)

{

    echo "Connection failed: " .$e->getMessage();

    

}



$country=$_GET['country'];



if ($country=='all=ture'){

$stmt = $conn->query("SELECT * FROM countries");



$stmt->execute();



$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo '<ul>';

foreach ($results as $row) {

  echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';

}

echo '</ul>';



}else{

    $stmt = $conn->query("SELECT * FROM countries WHERE name='$country';");



$stmt->execute();



$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo '<ul>';

foreach ($results as $row) {

  echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';

}

echo '</ul>';

}