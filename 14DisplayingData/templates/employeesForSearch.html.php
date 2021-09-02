<?php foreach($rows as $row):
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $hireDate = new DateTime($row["hireDate"]);
    $birthDate = new DateTime($row["birthDate"]);
    ?>
    <div class="employeeDetails">
        <h3>Personal Details</h3>
        <p><?= $firstName." ".$lastName ?></p>
        <p>Date of Birth:<?= $birthDate->format("d-m-Y") ?></p>
        <p>Date hired:<?= $hireDate->format("d-m-Y") ?></p>
    </div>
<?php endforeach; ?>

    
