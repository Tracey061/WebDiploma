<table>
    <tr>
        <th>CatogaryID</th>
        <th>CompanyName</th>
        <th>Description</th>        
    </tr>
    <?php
    foreach ($rows as $row):
        $CategoryID = $row["CategoryID"];
        $CompanyName = $row["CompanyName"];
        $Description = $row["Description"];
    ?>
    <tr>
        <td><?= $CategoryID ?></td>
        <td><?= $CompanyName ?></td>
        <td><?= $Description ?></td>
    </tr>
    <?php endforeach?>
</table>


    