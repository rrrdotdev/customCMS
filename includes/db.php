<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "cms";

foreach ($db as $key => $value){


}

$connection = mysqli_connect('localhost', 'root','root','cms');

if ($connection) {
    echo "We are connected";
}