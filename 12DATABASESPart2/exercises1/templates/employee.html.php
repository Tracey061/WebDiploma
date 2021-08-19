<ul>
    <?php foreach ($rows as $row):
        $firstName = $row["FirstName"];
        $lastName = $row["LastName"];
        $title = $row["Title"];
    ?>
    <li><?=  $firstName?> <?=  $lastName?> <?=  $title?></li>
    <?php endforeach; ?>
</ul>