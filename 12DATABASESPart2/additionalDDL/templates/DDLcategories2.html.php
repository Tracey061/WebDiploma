<form action="productsByCategoryClassDDL2.php" method="GET">
    <select name="id" onchange="location=this.value;">
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

        <option value="productsByCategoryClassDDL2.php?id=<?= $id ?>" <?= $selected ?>><?=  $name ?></option>
        <?php endforeach; ?>
    </select>
</form>

