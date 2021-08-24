<?php foreach($rows as $row):
    // $photoPath = "images/".$row["photoPath"];

    // echo "file_exists:".file_exists("images/".$row["photoPath"]);
    // echo "strlen".strlen($row["photoPath"]);
    

    if (file_exists("images/".$row["photoPath"]) && strlen($row["photoPath"]) > 0)
    {
        $photoPath = "images/".$row["photoPath"];
    }
    else
    {
        $photoPath = "images/unavailable.png";
    }

    // echo $photoPath;

    
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $hireDate = new DateTime($row["hireDate"]);
    $birthDate = new DateTime($row["birthDate"]);
    $notes = $row["notes"];
    ?>

    <article>
        <!-- <img class="photo" src="images/nancyDavolio.jpg" alt="photo of employee"> -->
        <img class="photo" src="<?= $photoPath ?>" alt="photo of employee">


        <div class="employeeDetails">
            <h3>Personal Details</h3>
            <p><?= $firstName." ".$lastName ?></p>
            <p>Date of Birth:<?= $birthDate->format("d-m-Y") ?></p>
            <h3>Company Details</h3>
            <p>Date hired:<?= $hireDate->format("d-m-Y") ?></p>
            <h3>Notes</h3>
            <p><?= $notes ?></p>
        </div>
    </article>
<?php endforeach; ?>

    
