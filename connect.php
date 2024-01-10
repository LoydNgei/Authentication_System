<?php
 
$DBHOST = 'localhost';
$DBUSER = 'loyd';
$DBPASSWORD = '123456';
$DBNAME = 'Signupforms';
 
 
$conn = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

if ($conn) {
    echo "Database connected successfully";
} else {
    die(mysqli_error($conn));
}

?>