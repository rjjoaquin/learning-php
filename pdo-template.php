$host;
$user;
$password;
$dbname;

//set dsn

$dsn = "mysql:host=". $host .";dbname=" . $dbname;

//set pdo connection

$pdo = new PDO($dsn, $user, $password);
//set default
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$statement = $pdo -> query("Select * from posts");

while ($row = $statement-> fetch(PDO::FETCH_ASSOC)) {
echo $row['title'];
}

while ($row = $statement-> fetch(PDO::FETCH_OBJ)) {
echo $row-> title;
}
