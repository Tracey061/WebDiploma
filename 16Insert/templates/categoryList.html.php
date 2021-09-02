<table>
    <tr>
        <th>CatogaryID</th>
        <th>CatogaryName</th>
        <th>Description</th>        
    </tr>
    <?php
    foreach ($rows as $row):
        $CategoryID = $row["CategoryID"];
        $CategoryName = $row["CategoryName"];
        $Description = $row["Description"];
    ?>
    <tr>
        <td><?= $CategoryID ?></td>
        <td><?= $CategoryName ?></td>
        <td><?= $Description ?></td>
    </tr>
    <?php endforeach?>
</table>


    