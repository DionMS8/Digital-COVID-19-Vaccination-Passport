// CONNECTING TO THE MYSQL DATABASE

mysqli_connect(server,user,passwd,new_link,
client_flag);

$dbhost = 'localhost';
$dbuser = 'guest';
$dbpass = 'guest123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}

echo 'Connected successfully';

mysqli_close($conn);


