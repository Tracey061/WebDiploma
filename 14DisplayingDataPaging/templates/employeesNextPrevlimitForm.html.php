<form action="dispalyEmployeesPrevNext.php" method="post">     
    <input type="number" name="start" value=<?=$start ?>>
    <input type="number" name="count" value=<?=$count ?>>
    <?php
    if ($start): ?>
        <input type="submit" name="prev" value="<">
    <?php endif; ?>

    <?php
    if ($count > ($start + 3)): ?>
        <input type="submit" name="next" value=">">
    <?php endif; ?>
</form>
<p>The totla number of search: <?= $count ?></p>