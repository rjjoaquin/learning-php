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

//-> is used to call a method on the object of a class

//=> is used to assign values to the keys of an array

//E.g.:

//$ages = array("Peter"=>32, "Quagmire"=>30, "Joe"=>34, 1=>2); 
