<table>
    <tr>
        <th>Category Name</th>
        <th>Description</th>      
        <th>Delete</th>   
    </tr>
    <?php
    foreach ($categoryRows as $row):
        $CategoryName = $row["CategoryName"];
        $Description = $row["Description"];
        $CategoryID = $row["CategoryID"];
    ?>
    <tr>
        <td><?= $CategoryName ?></td>
        <td><?= $Description ?></td>
        <td><a class= "delete" href="deleteCategory.php?id= <?= $CategoryID ?>">Delete</a></td>
    </tr>
    <?php endforeach?>
</table>

<p><?= $message ?></p>
<script type="text/javascript" src="../script/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../script/deleteConfirm.js"></script>

    