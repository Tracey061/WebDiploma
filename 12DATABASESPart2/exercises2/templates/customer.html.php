<ul>
    <?php foreach ($rows as $row):
        $customerID = $row["CustomerID"];
        $companyName = $row["CompanyName"];
        $contactName = $row["ContactName"];
    ?>
    <li><a href="customerOrder.php?id=<?= $customerID ?>"><?= $customerID ?></a><?= $companyName ?> && <?= $contactName ?></li>
    <?php endforeach; ?>
</ul>