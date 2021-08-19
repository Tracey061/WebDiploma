<ul>
    <?php foreach ($rows as $row):
        $id = $row["CategoryId"];
        $name = $row["CategoryName"];
    ?>
    <li><a href="productsByCategoryClass.php?id=<?= $id ?>&name=<?= $name ?>"><?= $name ?></a></li>
    <?php endforeach; ?>
</ul>