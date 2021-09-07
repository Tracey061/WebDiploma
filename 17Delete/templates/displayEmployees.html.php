<p><?= $message ?></p>
<?php foreach($employeeRows as $row):

    $photoPath = "images/unavailable.gif";    

    if (file_exists("images/".$row["photoPath"]) && strlen($row["photoPath"]) > 0)
    {
        $photoPath = "images/".$row["photoPath"];
        $photoToDelete =  $row["photoPath"];
    }
    else
    {
        $photoToDelete = "none";
    }
 
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $employeeId = $row["employeeId"];
    ?>

    <article class="employeeDetails" id="emp<?= $employeeId ?>">
        <img class="photo" src="<?= $photoPath ?>" alt="photo of employee">
        <h3><?= $firstName ." ".$lastName?></h3>
        <p><a href="deleteEmployee.php?id=<?= $employeeId ?>&photo=<?= $photoToDelete?>">Delete Employee</a></p>
    </article>
<?php endforeach; ?>