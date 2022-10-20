<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "cms";


foreach ($db as $key => $value){

//uppercase all keys for CONSTANT
define(strtoupper($key), $value);
}
//connect to database
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//confirm database connection
if (!$connection) {
    echo "We are not connected";
}

