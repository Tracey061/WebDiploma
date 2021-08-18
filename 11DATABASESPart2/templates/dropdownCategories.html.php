<form action="">
    <select>
    <?php foreach ($rows as $row):
        // $id = $row["CategoryId"];
        $name = $row["CategoryName"];
    ?>
    <option value="<?= $name ?>"><?= $name ?></option>
    <?php endforeach; ?>
    </select>
    <input type="submit" name="ViewProducts" id="ViewProducts" value="ViewProducts">
</form>
<p>the end of catetories file</p>
