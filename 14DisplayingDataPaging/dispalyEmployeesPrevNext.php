<?php
require_once "classes/DBAccess.php";

$title = "Customers";
$pageHeading = "Employees";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

if(isset($_POST["next"]) && isset($_POST["start"]))
{
    $start = (int)$_POST["start"] + 3;
}
elseif(isset($_POST["prev"]) && isset($_POST["start"]))
{
    $start = (int)$_POST["start"] - 3;

    if ($start < 0)
    {
        $start = 0;
    }
}
else
{
    $start = 0;
}

$sql = "select firstName, lastName,photoPath,birthDate,hireDate,notes from employees limit :start,3";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":start",$start,PDO::PARAM_INT);
$rows = $db->executeSQL($stmt);

$sql = "select count(*) from employees";
$stmt = $pdo->prepare($sql);
$count = $db->executeSQLReturnOneValue($stmt);

include "templates/employeeDetails.html.php";
include "templates/employeesNextPrevlimitForm.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>