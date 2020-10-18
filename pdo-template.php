$host;
$user;
$password;
$dbname;

//set dsn

$dsn = "mysql:host=". $host .";dbname=" . $dbname;

//set pdo connection

$pdo = new PDO($dsn, $user, $password);

$statement = $pdo -> query("Select * from posts");

while ($row = $statement-> fetch(PDO::FETCH_ASSOC)) {
echo $row['title'];
}
