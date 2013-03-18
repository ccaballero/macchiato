<?php

$hostname = 'localhost';
$database = 'macchiato';
$username = 'macchiato';
$password = 'asdf';

/* mysql connection */
$link = mysql_connect($hostname, $username, $password);
mysql_select_db($database, $link);
$result = mysql_query('SELECT ident, username, password FROM user;');

while ($row = mysql_fetch_assoc($result)) {
    print $row['ident'] . "\t";
    print $row['username'] . "\t";
    print $row['password'] . PHP_EOL;
}

mysql_close($link);

print str_repeat('-', 80) . PHP_EOL;

/* mysqli connection */
$mysqli = new mysqli($hostname, $username, $password, $database);

if ($result = $mysqli->query('SELECT ident, username, password FROM user;')) {
    while ($row = mysqli_fetch_assoc($result)) {
        print $row['ident'] . "\t";
        print $row['username'] . "\t";
        print $row['password'] . PHP_EOL;
    }
    $result->close();
}
$mysqli->close();

print str_repeat('-', 80) . PHP_EOL;

/* PDO connection */
$dsn = 'mysql:host=' . $hostname . ';dbname=' . $database;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

$dbh = new PDO($dsn, $username, $password, $options);
$sql = 'SELECT ident, username, password FROM user;';

foreach ($dbh->query($sql) as $row) {
    print $row['ident'] . "\t";
    print $row['username'] . "\t";
    print $row['password'] . "\n";
}

//$query = sprintf(
//    'SELECT ident, username, password FROM user WHERE username=\'%s\' AND lastname=\'%s\'',
//    mysql_real_escape_string($firstname),
//    mysql_real_escape_string($lastname));
