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
    // echo "first name". $firstName;
    ?>

    <div class="employee">
        <img class="photo" src="<?= $photoPath ?>" alt="photo of employee" width="150px" height="150px">
        <p><?= $firstName." ".$lastName ?></p>
    </div>

<?php endforeach; ?>