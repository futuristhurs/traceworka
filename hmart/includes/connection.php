<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "tracemm";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn){
    echo "error connecting to the database";
}
else{

}