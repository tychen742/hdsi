<?PHP
$charset = 'utf8mb4';

$host = "localhost";
$dbname = "hbdi";

$dbuser = "root";
// $dbuser = "hbdi";
// $password = "passwd@2020";
error_log("DB_conn: logging in with root", 0);
$password = "Redcar@@2020";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // throw PDOException
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $dbuser, $password, $options);
    echo "DB Connection Successful";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

//prevent SQL Injection
//https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php?rq=1
