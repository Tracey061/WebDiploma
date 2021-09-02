<?php
require_once "classes/DBAccess.php";

$title = "employee search";
$pageHeading = "employees search";

ob_start();
include "templates/searchEmployeeForm.html.php";

if(isset($_GET["search"])&&isset($_GET["submitButton"]))
{
    $search = $_GET["search"];
    $dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
    $username = "root";
    $password = "";

    $db = new DBAccess($dsn, $username, $password);

    $pdo = $db->connect();

    $sql = "select firstName, lastName,birthDate,hireDate from employees where lastName like :lastName";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(":lastName","%$search%");

    $rows = $db->executeSQL($stmt);
    include "templates/employeesForSearch.html.php";

}

$output = ob_get_clean();

include "templates/layout.html.php";
?>