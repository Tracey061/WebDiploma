<form action="nextAndPrevious.php" method="post">     
    <input type="hidden" name="start" value=<?=$start ?>>
    <input type="hidden" name="count" value=<?=$count ?>>
    <?php
    if ($start): ?>
        <input type="submit" name="prev" value="<">
    <?php endif; ?>

    <?php
    if ($count > ($start + 5)): ?>
        <input type="submit" name="next" value=">">
    <?php endif; ?>
</form>
<p>The totla number of search: <?= $count ?></p>