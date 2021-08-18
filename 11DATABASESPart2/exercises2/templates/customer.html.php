<ul>
    <?php foreach ($rows as $row):
        $customerID = $row["CustomerID"];
        $companyName = $row["CompanyName"];
        $contactName = $row["ContactName"];
    ?>
    <li><a href="customerOrder.php?id=<?= $customerID ?>"><?= $companyName ?> && <?= $contactName ?></a></li>
    <?php endforeach; ?>
</ul>