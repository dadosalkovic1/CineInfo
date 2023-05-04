
<?php

$host="localhost";
$dbname="maturski";
$username="root";
$password="";

$conn=mysqli_connect(
    hostname:$host,
    username:$username,
    password:$password,
    database:$dbname
);

if(mysqli_connect_error()){
    die("con error" . mysqli_connect_error());
}

