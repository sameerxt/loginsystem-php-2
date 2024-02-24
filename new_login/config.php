<?php
// this file contain database configuration

// trying connecting to database
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'college');

// check the connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$conn) {
    //    echo "Success";
    // }
    // else {
    die("Error something went wrong");
}
?>