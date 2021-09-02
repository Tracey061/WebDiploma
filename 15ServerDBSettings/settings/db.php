<?php

if($_SERVER["SERVER_NAME"] == "localhost" || $_SERVER["SERVER_ADDR"] == "127.0.0.1")
{
    
    //website is running unser locahost - use local DB details
    echo "website is running on the locahost server";
    $dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
    $username = "root";
    $password = ""; 
}
else
{
    //website is running on the remote server
    echo "website is running on the remote server";
    $dsn = "mysql:host=localhost;dbname=hornsbytafetest_sage03;charset=utf8";
    $username = "hornsbytafetest_sage03";
    $password = "emotion#53$";
}

?>