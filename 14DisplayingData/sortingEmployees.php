<?php
require_once "classes/DBAccess.php";

$title = "employee sorting";
$pageHeading = "employee with sorting";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

ob_start();

if(isset($_GET["sort"]))
{
    $orderByFields = ["firstName","lastName","hireDate"];
    $sort = $_GET["sort"];

    if(in_array($sort,$orderByFields))
    {
        $sql = "select firstName, lastName,hireDate from employees order by $sort";
        $stmt = $pdo->prepare($sql);
    }
    else
    {
        $sql = "select firstName, lastName,hireDate from employees";
        $stmt = $pdo->prepare($sql);
    }
}
else
{
    $sql = "select firstName, lastName,hireDate from employees";
    $stmt = $pdo->prepare($sql);
}

$rows = $db->executeSQL($stmt);
include "templates/employeeTabular.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>