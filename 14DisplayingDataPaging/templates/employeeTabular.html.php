<table>
    <tr>
        <th><a href="sortingEmployees.php?sort=firstName">First Name</a></th>
        <th><a href="sortingEmployees.php?sort=lastName">lastName</a></th>
        <th><a href="sortingEmployees.php?sort=hireDate">hireDate</a></th>
    </tr>
<?php foreach ($rows as $row):
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $hireDate = new DateTime($row["hireDate"]);
    ?>
    <tr>
        <td><?= $firstName ?></td>
        <td><?= $lastName ?></td>
        <td><?= $hireDate->format("d-m-Y") ?></td>
    </tr>
<?php endforeach; ?>

</table>