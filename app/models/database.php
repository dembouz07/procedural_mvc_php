<?php

$host = "localhost";
$port = "5432";
$dbname = "gestion_universitaire";
$user = "postgres";
$password = "passer";

$connexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if ($connexion) {
    //echo "success";
} else {
    echo "error";
}

