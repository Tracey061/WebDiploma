<form action="productsByCategoryClassDDL.php" method="GET">
    <select name="id">
        <?php foreach ($rows as $row):
            $id = $row["CategoryId"];
            $name = $row["CategoryName"];
        

            //This code will make sure the selected category
            //in the drop down list is shown as selected
            //when the page re-loads 
            if($categoryId == $id)
            {
                $selected = "selected";
            }
            else
            {
                $selected = "";
            }
            ?>

        <option value="<?= $id ?>" <?= $selected ?>><?=  $name ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" name="ViewProducts" id="ViewProducts" value="ViewProducts">
</form>

